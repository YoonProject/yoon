<?//coding:utf-8
/*
* Hier wird das Captacha geprüft
*/
function captacha_check($_data){
global $config;

	// Array anlegen
	$message=array();

	// Check ob Captach übergeben wurde
	if(isset($_data['g-recaptcha-response'])){
		$captcha=$_data['g-recaptcha-response'];
	}
	
	// Captcha Check
	if(empty($captcha) || $captcha==0){
		$message['error'][]='Please click the checkbox (that you are not a robot).';
		$message['error_d'][]='Bitte setze den Haken, dass du kein Roboter bist.';

	}else{
		$secretKey	= "6Lc1JE8UAAAAAEkoeuLPA3_SBxlseg7mbda3PHjB";
		$ip			= $_SERVER['REMOTE_ADDR'];
		$response		= file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);		
		$responseKeys 	= json_decode($response,true);

		if(intval($responseKeys["success"]) !== 1) {
			// Fehler in die Datenbank loggen
			require_once($config['basispfad'].'helper/errorlog.inc.php');
			// Log und Fehler-ID ausgeben
			$mi=error_log2('captcha');
			$message['error'][]='An error occurred. Please contact the support and indicate your Error-ID: "'.$mi.'".';
			$message['error_d'][]='Ein Fehler ist aufgetreten, bitte kontaktiere den Support mit der Fehler-ID: "'.$mi.'".';
		}
		/*else{
			user_log('captcha');
		}*/
	}
	return $message;
}

/*
* Hier werden userrelevante Dinge geloggt
*/
function user__log($_typ='default',$_data){
global $config;

	return false;
}

/*
* Hier werden die Registrier-Angaben überprüft
*/
function validate_login($_data){
	global $config;

	// Array anlegen
	$ret=array();

	// Check Email
	if(empty($_data['email'])){
		$ret['etyp'][]	='email';
		$ret['error'][]	='Please enter your email address.';
		$ret['error_d'][]	='Bitte gib deine Email-Adresse an.';
	}elseif(filter_var($_data['email'], FILTER_VALIDATE_EMAIL) === false){
		$ret['etyp'][]	='email';
		$ret['error'][]	='Your email adress is incorrect.';
		$ret['error_d'][]	='Deine Email-Adresse ist fehlerhaft.';
	}
	
	// Check Password
	if(empty($_data['password'])){
		$ret['etyp'][]	='password';
		$ret['error'][]	='Please enter your password.';
		$ret['error_d'][]	='Bitte gib ein Passwort ein.';
	}elseif(strlen($_data['password'])<6){
		$ret['etyp'][]	='password';
		$ret['error'][]	='Your password is incorrect.';
		$ret['error_d'][]	='Dein Passwort ist fehlerhaft.';
	}

	// Check Captcha (ReCaptcha - Google)
	$res=captacha_check($_data);
	
	// Captcha - Check failed
	if(!empty($res)){
		$ret['etyp'][]	='captcha';
		$ret['error'][]	='Please click the checkbox (that you are not a robot).';
		$ret['error_d'][]	='Bitte setze einen Haken, dass Du kein Roboter bist.';
	}
	// Rückgabe
	if(isset($ret)){
		return $ret;
	}else{
		return false;
	}
}

/*
* Hier werden die Registrier-Angaben überprüft
*/
function validate_registeruser($_data){
global $config;
	
	// Array anglegen 
	$ret=array();

	// Check Captcha
	if(empty($_data['g-recaptcha-response'])){
		$ret['etyp'][]	='captcha';
		$ret['error'][]	='Please click the checkbox (that you are not a robot).';
		$ret['error_d'][]	='Bitte setze einen Haken, dass Du kein Roboter bist.';
	}else{
		// Check Captcha (ReCaptcha - Google)
		$res=captacha_check($_data);
		
		// Captcha - Check failed
		if(!empty($res)){
			$ret['etyp'][]	='captcha';
			$ret['error'][]	='Please click the checkbox (that you are not a robot).';
			$ret['error_d'][]	='Bitte setze einen Haken, dass Du kein Roboter bist.';
		}
	}
	
	// Wenn ein Promo-Code übergegen wurde -> Check ob gültig
	if(!empty($_data['promo'])){
		$rem=user_validatepromo($_data['promo']);
	
		// Rückgabewert überprüfen
		if($rem>0){
			if($rem==2){
				// Code existiert und ist gültig
		
			}else{
				//$rem=array();
				// Code ist abgelaufen
				$ret['etyp'][]	='promo';
				$ret['error'][]	='Unfortunately the promotion code, which you entered, is not valid or expired.';
				$ret['error_d'][]	='Dein Gutscheincode ist falsch oder abgelaufen.';
			}
		}else{
			//$ret=array();
			// Falscher Code
			$ret['etyp'][]	='promo';
			$ret['error'][]	='Unfortunately the promotion code, which you entered, is not valid or expired.';
			$ret['error_d'][]	='Dein Gutscheincode ist falsch oder abgelaufen.';
		}
	}
	
	// Check Email
	if(empty($_data['email'])){
		$ret['etyp'][]	='email';
		$ret['error'][]	='Please enter your email address.';
		$ret['error_d'][]	='Bitte gib deine Email-Adresse an.';
	}elseif(filter_var($_data['email'], FILTER_VALIDATE_EMAIL) === false){
		$ret['etyp'][]	='email';
		$ret['error'][]	='Your email adress is incorrect.';
		$ret['error_d'][]	='Deine Email-Adresse ist fehlerhaft.';
	}else{
		// wird die Email-Adresse bereits benutzt?
		$res=user_validatemail(strtolower($_data['email']));
		if($res>0){
			$ret['emailinuse']=1;
			$ret['etyp'][]	='email';
			$ret['error'][]	='Your email is already registered. If you forgot your password, please click "Forgot password?".';
			$ret['error_d'][]	='Unter deiner Email-Adresse existiert bereits ein Profil. Falls du dein Passwort vergessen hast, klicke auf "Passwort vergessen?".';
		}
	}
	// Check Password
	if(empty($_data['password'])){
		$ret['etyp'][]	='password';
		$ret['error'][]	='Please enter your password.';
		$ret['error_d'][]	='Bitte gib dein Passwort ein.';
	}elseif(strlen($_data['password'])<6){
		$ret['etyp'][]	='password';
		$ret['error'][]	='Your password is too short (min: 6 digits).';
		$ret['error_d'][]	='Dein Passwort ist zu kurz (min: 6 Zeichen).';
	}elseif(strlen($_data['password'])>40){
		$ret['etyp'][]	='password';
		$ret['error'][]	='Your password ist too long (max: 40 digits).';
		$ret['error_d'][]	='Dein Passwort ist zu lange (max: 40 Zeichen).';
	}else{
		$pass['upper'] 	= preg_match('@[A-Z]@', $_data['password']);
		$pass['lower'] 	= preg_match('@[a-z]@', $_data['password']);
		$pass['number']	= preg_match('@[0-9]@', $_data['password']);

		if(!$pass['upper'] || !$pass['lower'] || !$pass['number']){
			$ret['etyp'][]	='password';
			$ret['error'][]	='Your password must contain at least one number additionally to at least one uppercase and one lowercase letter. ';
			$ret['error_d'][]	='Dein Passwort muss mindestens eine Nummer, einen Großbuchstaben und einen Kleinbuchstaben enthalten.';
		}
		unset($pass);
	}
	// Rückabe
	return $ret;
}

/*
* Password-reset Checkup
*/
function check_resetpassword($_data){
	global $config;
	// Check Password
	if(empty($_data['password'])){
		$ret['etyp'][]	='password';
		$ret['error'][]	='Please enter your password.';
		$ret['error_d'][]	='Bitte gib dein Passwort ein.';
	}elseif(strlen($_data['password'])<6){
		$ret['etyp'][]	='password';
		$ret['error'][]	='Your password is too short (min: 6 digits).';
		$ret['error_d'][]	='Dein Passwort ist zu kurz (min: 6 Zeichen).';
	}elseif(strlen($_data['password'])>40){
		$ret['etyp'][]	='password';
		$ret['error'][]	='Your password ist too long (max: 40 digits).';
		$ret['error_d'][]	='Dein Passwort ist zu lange (max: 40 Zeichen).';
	}else{
		$pass['upper'] 	= preg_match('@[A-Z]@', $_data['password']);
		$pass['lower'] 	= preg_match('@[a-z]@', $_data['password']);
		$pass['number']	= preg_match('@[0-9]@', $_data['password']);

		if(!$pass['upper'] || !$pass['lower'] || !$pass['number']){
			$ret['etyp'][]	='password';
			$ret['error'][]	='Your password must contain at least one number additionally to at least one uppercase and one lowercase letter. ';
			$ret['error_d'][]	='Dein Passwort muss mindestens eine Nummer, einen Großbuchstaben und einen Kleinbuchstaben enthalten.';
		}
		unset($pass);
	}
	// Rückabe
	return $ret;
}

/*
* Hier wird die eingegebene Email-Adresse überprüft
*/
function user_validatemail($_email){
	global $config;
	
	// trim the string
	$_email=trim($_email);

	// email check in Database
	$result=$config['Database']->fetchArray('
		/*QID:User19*/
		SELECT 
			COUNT(*) AS vor
		FROM
			User
		WHERE
			email=\''.$config['Database']->escape(strtolower($_email)).'\'
	','read');
	
	if($_email==''){
		 return 0;
	}elseif(isset($result['vor']) && $result['vor']>0){
		return 1;
	}else{
		return 0;
	}
}

/*
* Hier wird die eingegebene Promo-Code überprüft
*/
function user_validatepromo($_promo){
	global $config;
	
	// trim the string
	$_promo=trim($_promo);
	
	// Wenn der Promo-Code länger als 15 Zeichen oder kleiner als 5 Zeichen beträgt = FALSCH
	if(empty($_promo) || strlen($_promo)>15 || strlen($_promo)<5){
		return 0;
	}else{

		// email check in Database
		$result=$config['Database']->fetchArray('
			/*QID:User19*/
			SELECT 
				promo, 
				if(expire <= NOW(),1,2) AS exp 
			FROM
				user__promotions
			WHERE
				promo=\''.$config['Database']->escape(strtolower($_promo)).'\' 
			LIMIT 1
		','read');
		
		if(isset($result['exp']) && $result['exp']>0){
			return $result['exp'];
		}else{
			return 0;
		}
	}
}
/*
** User einloggen
*/
function user_loginuser($_email, $_passwort, $_check_activatione=true){
	global $config;
	
	// TEST daher Klartext
	$_no_crypt=true;

	if(!$_email && !$_passwort){
		// fehlermeldung hinzufuegen
		$message		= 'You have to enter email address and password.';
		$message_d	= 'Du musst eine Email-Adresse und ein Passwort eingeben.';
	}elseif(strlen($_email)<3){
		//$an=strlen($_email);
		$message		= 'Missing or incorrect email address.';
		$message_d	= 'Deine Email-Adresse ist fehlerhaft.';
	}elseif(strlen($_passwort)<3){
		$message		='Missing or incorrect password.';
		$message_d	= 'Dein Passwort ist fehlerhaft.';
	}else{
		// query zur abfrage des gueltigkeit des benutzers
		$userdata=$config['Database']->fetchArray('
		/*QID:User41-user.inc.php*/
		SELECT
			a.userid,
			a.email,
			a.pass,
			a.status,
			a.activation,
			a.registered,
			DATE_FORMAT((a.lastlogin),\'%d%m20%y%k%i\') AS \'lastlogin\',
			a.logindate,
			a.logincount,
			a.landid,
			a.land,
			a.plz,
			a.coins,
			a.eth,
			a.blocked,
			a.block_reason,
			if(a.blocked>now(),true,false) AS isblocked,
			kyc1,
			kyc2,
			kyc3 
		FROM
			User AS a
		WHERE
				a.email=\''.$config['Database']->escape($_email).'\'
			AND
				'.($_no_crypt==true?'a.pass=\''.$config['Database']->escape($_passwort).'\' ':'a.pass=PASSWORD(\''.$config['Database']->escape($_passwort).'\') ').'
			LIMIT 1
		','read');
		
		#setcookie('Nickname', '', null, '/');
	// kombination unbekannt?
	if($userdata<1){
		// fehlermeldung hinzufuegen
		$message		= 'Either your email address or your password is incorrect.';
		$message_d	= 'Entweder deine Email-Adresse oder dein Passwort ist falsch.';
		// cookies clearen
		#setcookie('sec', 			'', null, '/');
		#setcookie('stayNickname', 	'', null, '/');
		#setcookie('stayPasswort', 	'', null, '/');
		// ende
	}else{
		// checken ob ipadresse nicht geblocked ist
		$ipresult=$config['Database']->fetchArray('
			/*QID:User41-user.inc.php*/
			SELECT
				ip
			FROM
				system__ipblacklist
			WHERE
					ip=\''.$config['Database']->escape($_SERVER['REMOTE_ADDR']).'\'
				AND
					created>\''.date('Y-m-d H:i:s', time()-43200).'\'
		','read');
		// ipadresse geblocked?
		if($ipresult){
			$message		= 'Login is blocked. Get in touch with the support.';
			$message_d	= 'Dein Profil ist gesperrt, bitte kontaktiere den Support.';
		}
		/*elseif(strlen($userdata['activation']) && $_check_activatione){ // account nicht aktiviert?
			$message		= 'Your account is not activated. <a href="/'.$config['login'].'/activate.php" class="white">click here for activate</a>.';
			$message_d	= 'Dein Profil ist nicht aktiviert. <a href="/'.$config['login'].'/activate.php" class="white">Klicke hier, um es zu aktivieren</a>.';
		}*/
		elseif($userdata['isblocked']){
			$message		= 'Your account is blocked until '.$userdata['blocked'].' - <a href="/'.$config['formal'].'/contact.php?reason=5&userid='.$userdata['userid'].'" class="white">contact the admin</a>';
			$message_d	= 'Dein Profil ist gesperrt bis '.$userdata['blocked'].' - <a href="/'.$config['formal'].'/contact.php?reason=5&userid='.$userdata['userid'].'" class="white">Kontaktiere den Support</a>';
		}elseif($userdata['status']==9){
			$message		= 'Your account got deleted! (reason: '.$userdata['block_reason'].')';
			$message		= 'Dein Profil wurde gelöscht! (Grund: '.$userdata['block_reason'].')';
		}elseif($userdata['status']>7 && $userdata['status']<10){
			$message		= 'Your account got either blocked or deleted.';
			$message_d	= 'Dein Profil wurde gelöscht! (Grund: '.$userdata['block_reason'].')';
                /*}elseif($sperre=ramcache_getrecord('UserSperre_'.$userdata['UserID'])){
			$message='Dein Account wurde temporär - für einige Stunden - gesperrt, bitte wende Dich an den Support.';
		*/
		}else{
			$message		= 'Your login was successful.';
			$message_d	= 'Dein Login war erfolgreich.';
			$messagetyp=1;
			
			$activated=true;
			// LoginDate
			$config['Database']->update('
				/*QID:User42*/
				UPDATE
					User
				SET
					logincount=(logincount+1),
					lastlogin=NOW(),
					logindate=NOW(),
					online=1
				WHERE
					userid='.(int)$userdata['userid']
			,'write');

			// Holt Essentials (IP, Useragent) -> aus: /helper/lib.inc.php
			$essentials=user_getessentials();	

			// Login Loggen	
			$typ='login';
			$ret=user_loginlog($userdata['userid'],$userdata['status'], $essentials['ip'], $essentials['useragent'],$typ);

			//Hat der User seine Detaildaten ausgefüllt?
			$user_detail =$config['Database']->fetchArray('
				/*QID:User50-user.inc.php*/
				SELECT
					*
				FROM
					user__detail 
				WHERE
						userid='.(int)$userdata['userid'].'
				','read');

			//Hat der User seine Preactipn ausgefüllt?
			$user_preaction=$config['Database']->fetchArray('
				/*QID:User51-user.inc.php*/
				SELECT
					*
				FROM
					user__preaction 
				WHERE
						userid='.(int)$userdata['userid'].'
				','read');

			// Neue Session-ID generieren
			session_regenerate_id();
			
			// Hat der User bereits Detailangaben gemacht?
			if(!empty($user_detail['firstname'])){
				$_SESSION['user_detail']		= 1;
			}else{
				$_SESSION['no_user_detail']	= 1;
			}
			if(!empty($user_preaction['firstname'])){
				$_SESSION['user_preaction']	= 1;
			}else{
				$_SESSION['no_user_preaction']	= 1;
			}

			// Set Sessions
			$_SESSION['userid']		=$userdata['userid'];
			$_SESSION['email']		=$userdata['email'];
			$_SESSION['status']		=$userdata['status'];
			$_SESSION['lastlogin']	=$config['millisek'];
			$_SESSION['landid']		=$userdata['landid'];
			$_SESSION['coins']		=$userdata['coins'];
			$_SESSION['logincount']	=$userdata['logincount'];
			$_SESSION['kyc'][1]		=$userdata['kyc1'];
			$_SESSION['kyc'][2]		=$userdata['kyc2'];
			$_SESSION['kyc'][3]		=$userdata['kyc3'];
		
			// SICHERHEITSSTUFE - SESSIONVERLUST
			//$Gueltig=time()+5184000;
			//setcookie('sec', $userdata['Datu'], $Gueltig, '/');
			// will der user eingeloggt bleiben? setzen wir ein cookie mit benutzernamen und passwort
			//setcookie('stayNickname', $userdata['Nickname'], $Gueltig, '/');
			//setcookie('stayPasswort', $userdata['Passwort'], $Gueltig, '/');
		}
	}
	
	// nicht erfolgreicher Login
	if(empty($messagetyp)){
		$messagetyp=2;
	}
	
	// daten zurueck
	return array(
		'userid'		=>	$userdata['userid'],
		'status'		=>	$userdata['status'],
		'lastlogin'		=>	(!empty($userdata['userid'])?$config['millisek']:''),
		'landid'		=>	$userdata['landid'],
		'coins'		=>	$userdata['coins'],
		'message'		=>	$message,
		'message_d'	=>	$message_d,
		'messagetyp'	=>	$messagetyp
	);
	}
}

/*
** User logging
*/
function user_loginlog($_userid, $_status, $_ipaddress, $_device,$_type='null'){
	global $config;
	// Login Log
	$ret=$config['Database']->insert('
			/*QID:User42*/
			INSERT INTO 
				user__loginlog
			SET
				userid	='.(int)$_userid.',
				status	='.(int)$_status.',
				logindate	=NOW(),
				ip		="'.$config['Database']->escape($_ipaddress).'",
				device	="'.$config['Database']->escape($_device).'",
				typ		="'.$config['Database']->escape($_type).'"
		','write');
	return $ret;
}
/*
** Loggt User aus
 */
function user_logout(){
	global $config;

	// offline setzen(db maessig)
	$result=$config['Database']->update('
		/*QID:User14*/
		UPDATE
			User
		SET
			online=0
		WHERE
			userid=\''.$config['Database']->escape($config['user']['id']).'\'
	','write');
	
	#ramcache_deleterecord('SESSIO_'.$config['user']['Nickname'].'_'.$config['user']['id']);
	#ramcache_deleterecord('userlogindata_'.$config['user']['id']);
	
	$config['user']=false;
	// logout session handling
	
	session_unset();

	// Remove PHPSESSID from browser
	if(isset($_COOKIE[session_name()])){
		setcookie( session_name(), "", time() - 3600, "/" );
	}

	// Clear session from globals
	$_SESSION = array();

	// Clear session from disk
	session_destroy();

	$params = session_get_cookie_params();
	setcookie(session_name(), '', 0, $params['path'], $params['domain'], $params['secure'], isset($params['httponly']));
	/*$_SESSION='';
	unset($_SESSION);
	
	//session_regenerate_id(true);
	if(isset($_SESSION)){
		session_destroy();
		session_unset();
		session_destroy();
		session_write_close();
	}
	// user object und session unsetten
	$config['user']=$_SESSION=array();
	// cookies zum eingeloggt bleiben löschen
	#setcookie(session_name(),'',0,'/');
	session_regenerate_id(true);
	//$_SESSION='';*/
}

/*
** New User Signup
*	$_data 	= alle relevanten Daten
*	$_typ	= Welcher Signup-Typ? -> 0 = normaler signup, 2 = pre-register, ..
 */
function user_signup($_data,$_typ=0){
	global $config;
	
	// Security-Maßnahme
	settype($_typ,'integer');
	
	// Holt Essentials (IP, Useragent) -> aus: /helper/lib.inc.php
	$essentials=user_getessentials();	
	
	// nochmal gucken ob die Email bereits vorhanden?
	$ret=user_validatemail($_data['email']);
	
	// wemm "leer" => dann los, email ist noch nicht in datenbank
	if(empty($ret) || $ret==0){
		
		// Handelt es sich um eine Pre-Registrierung?
		if($_typ>0){
			if($_typ==2){
				$_data['preregister']=2;
			}
		}else{
			$_data['preregister']=false;
		}

		// Wurde ein Promo-Code angegeben? - Sicherheitscheck
		if(!empty($_data['promo'])){
			// PROMOCODE = 5< PROMO <15
			if(strlen($_data['promo'])>15 || strlen($_data['promo'])<5){
				$_data['promo']='';
				unset($_data['promo']);
			}
		}else{
			// Promocode in SESSION?
			if(!empty($_SESSION['p'])){
				$_data['promo']=$_SESSION['p'];
			}
		}

		// Wurde ein Referer-Code angegeben? - Sicherheitscheck
		if(!empty($_data['referer'])){
			// Referer = 15 Zeichen
			if(strlen($_data['referer'])>15 || strlen($_data['referer'])<15){
				$_data['referer']='';
				unset($_data['referer']);
			}
		}else{
			// Promocode in SESSION?
			if(!empty($_SESSION['ref'])){
				$_data['referer']=$_SESSION['ref'];
			}
		}

		// Kam der User über eine Kampagne ("G")?
		if(!empty($_SESSION['G']) && strlen($_SESSION['G'])<6){
			$_SESSION['G']=striptags(trim($_SESSION['G']));
		}

		// Aktivierungs-Hash erzeugen
		$activation=substr(systemSecureHash(),0,10);
	
		// für die Bestätigungsmail
		$data=array();
		$data['activation']=$activation;
		$data['email']=trim(strtolower($_data['email']));
		
		// Kreiert ein SHA-aus der Email (zwecks Identifikation bei Stellar)
		$_data['email']=strtolower(trim($_data['email']));
		$_data['email_sha']=hash('sha1', strtolower($_data['email']));
		
		// neues Profil anlegen // Evtl. Pre-Register und Promo-Code mit eintragen
		$result=$config['Database']->insert('
			/*QID:User42*/
			INSERT INTO 
				User
			SET
				email	="'.$config['Database']->escape($_data['email']).'",
				friendly_id	="'.$config['Database']->escape($_data['email_sha']).'",
				pass		="'.$config['Database']->escape($_data['password']).'",
				activation	="'.$config['Database']->escape($activation).'",
				status	="0",
				'.(isset($_data['preregister']) && $_data['preregister']!=false?'atyp='.(int)$_data['preregister'].', ':'').'
				'.(isset($_data['promo']) && $_data['promo']!=false?'promo='.(int)$_data['promo'].', ':'').'
				'.(isset($_SESSION['G'])?'campaign='.(int)$_SESSION['G'].', ':'').'
				'.(isset($_data['referer'])?'refer="'.$config['Database']->escape($_data['referer']).'", ':'').'
				registered	=NOW()
			','write');

		// TEMPORÄR - PRE REG
		$_SESSION['email']=$_data['email'];
		
		// wenn erfolgreich = "1"
		if(!empty($result) && $result>0){
			
			// holt die userid
			$result=$config['Database']->fetchArray('
				/*QID:User42*/
				SELECT 
					userid
				FROM
					User
				ORDER BY userid DESC LIMIT 1'
			,'read');
			
			// TEMPORÄR - Pre-REG
			$_SESSION['userid']=$result['userid'];
			
			// User-Detaildaten anlegen
			$config['Database']->insert('
				/*QID:User42*/
				INSERT INTO 
					user__detail
				SET
					userid	= '.(int)$result['userid'].',
					created	= NOW()
			','write');

			// User-Detaildaten2 anlegen
			$config['Database']->insert('
				/*QID:User43*/
				INSERT INTO 
					user__preaction
				SET
					userid	= '.(int)$result['userid'].',
					created	= NOW()
			','write');
			
			// Kam der User über eine Promo-Kampagne?
			if(!empty($_data['promo'])){
				// User-Detaildaten2 anlegen
				$config['Database']->insert('
					/*QID:User44*/
					INSERT INTO 
						user__promotion_signups 
					SET
						userid	= '.(int)$result['userid'].',
						email	= "'.$config['Database']->escape($_data['email']).'",
						campain	= "",
						promo	= "'.$config['Database']->escape($_data['promo']).'",
						created	= NOW()
				','write');
			}
			
			// Kam der User über eine Ref-Kampagne?
			if(!empty($_data['refer'])){
				// User-Detaildaten2 anlegen
				$config['Database']->insert('
					/*QID:User45*/
					INSERT INTO 
						user__refer_signups 
					SET
						userid	= '.(int)$result['userid'].',
						refer	= "'.$config['Database']->escape($_data['refer']).'",
						created	= NOW()
				','write');
			}
			
			// 9 = Anmeldung über Facebook
			if($_typ!=9){
				// Bestätigungslink zuschicken (mit Aktivierungscode)
				require_once($config['basispfad'].'helper/yoonmail.inc.php');
				$tplmail='signup';
				$mail=sendnotyfication($data,array($data['email']),'Your signup at YOON.online',$tplmail,$data['email'],'');
			}
			
			// Es handelt sich um eine Pre-Register Anmeldung?
			if($_typ>0){
				// user kommt von einer Kampagne oder ist Preregister -> loggen 
				$config['Database']->insert('
					/*QID:User42*/
					INSERT INTO 
						user__preregister
					SET
						userid	= '.(int)$result['userid'].',
						email	= "'.$config['Database']->escape(strtolower($_data['email'])).'",
						campain	= '.(int)$_typ.',
						created	= NOW()
				','write');
			}
			
			// Es wurde ein Promo-Code übergeben?
			if(!empty($_data['promo'])){
				// user kommt von einer Kampagne oder ist Preregister -> loggen 
				$config['Database']->insert('
					/*QID:User42*/
					INSERT INTO 
						user__promotion_signups
					SET
						userid	= '.(int)$result['userid'].',
						email	= "'.$config['Database']->escape(strtolower($_data['email'])).'",
						campain	= '.(int)$_typ.',
						promo	= "'.$config['Database']->escape($_data['promo']).'",
						created	= NOW()
				','write');
			}
			
		}else{
			//$result['userid']=0;
		}
		
		// die Aktion loggen
		$typ='signup';
		$ret=user_loginlog($result['userid'],0, $essentials['ip'], $essentials['useragent']);
		
	}else{
		
		// den User gibt es bereits (Emailadresse vorhanden)
		$typ='double';
		$ret=user_loginlog($result['userid'],0, $essentials['ip'], $essentials['useragent'],$typ);
		
	}
	// Rückgabe der userid
	return $result['userid'];
}

/*
** New User Signup
 */
function activate_user($_activation){
	global $config;

	// zur Sicherheit
	$activation=trim(strip_tags($_activation));

	// check ob der Code stimmt
	if(strlen($_activation)!=10){	
		// Code passt nicht 
		return 3;
	}else{

		// Guckt ob der richtige Code übergeben wurde
		$result=$config['Database']->fetchArray('
			/*QUID:GETACCO*/
			SELECT
				userid
			FROM
				User
			WHERE 
				activation	="'.$config['Database']->strip($_activation).'" 
			LIMIT 1
		','read');
		
		// Wenn der User noch nicht aktiviert ist
		if(isset($result) && $result['userid']>0){
			// User aktivieren
			$aktiviert=$config['Database']->update('
				/*QID:User14*/
				UPDATE
					User
				SET
					activation	="",
					status	=2
				WHERE 
					activation	="'.$config['Database']->strip($_activation).'" 
				LIMIT 1
			','write');	
		}

		// Tracker holen und tracken
		require_once($config['basispfad'].'helper/tracker.inc.php');
		$track=email_tracker();

		// aktiviert == 1 .. dann erfolgre
		if(isset($aktiviert) && $aktiviert==1){
			$callback=1;
		}else{
			// ist der User vielleicht schon aktiviert?
			$aktiviert=$config['Database']->fetchArray('
				/*QID:User14*/
				SELECT
					COUNT(*) AS anz
				FROM
					user__activationlog
				WHERE 
					activation	="'.$config['Database']->strip($_activation).'" 
			','read');			
		
		// userid='.(int)$result['userid'].' AND 
			// Der User will sich offenbar ein zweites mal aktivieren
			if($aktiviert['anz']>0){
				$callback=2;
			}else{
				// Fehler - Code passt nicht
				$callback=4;
			}
		}
		
		// Activation Log
		$config['Database']->insert('
		/*QID:ACLOG*/
		INSERT INTO
			user__activationlog
		SET 
			'.(isset($result['userid']) && $result['userid']>0?'userid='.(int)$result['userid'].',':'').'
			typ='.(int)$callback.', 
			activation	="'.$config['Database']->escape($activation).'",
			userid	='.(int)$result['userid'].',
			created	=NOW(),
			ip		="'.$config['Database']->escape($track['PublicIP']).'",
			countrycode="'.$config['Database']->escape($track['country']).'",
			city		="'.$config['Database']->escape($track['city']).'",
			device	="'.$config['Database']->escape($track['device']).'",
			browser	="'.$config['Database']->escape($track['browser']).'",
			useragent	="'.$config['Database']->escape($track['useragent']).'"
		','write');

		// Code Passt = 1, wenn nicht = 2
		return $callback;
	}
}

/*
** New User Signup
 */
function forgotpassword_user($_email){
	global $config;


	$activation=substr(systemSecureHash(),0,15);

	// zur Sicherheit
	$_email=trim($_email);
	
	// Check ob bereits auf status=1 gesetzt .. den alten Code verwenden
	$result=$config['Database']->fetchArray('
		/*QID:User19*/
		SELECT 
			activation
		FROM
			User
		WHERE
			status=1 
				AND
			email=\''.$config['Database']->escape(strtolower($_email)).'\' 
		LIMIT 1
	','read');	
	
	// Wenn bereits versendet -> gleichen Code nutzen
	if(isset($result) && !empty($result['activation'])){
		$activation=$result['activation'];
	}

	// Status auf "1" setzen, aktivierungscode setzen
	$result=$config['Database']->update('
		/*QID:User14*/
		UPDATE
			User
		SET
			activation	="'.$config['Database']->strip($activation).'",
			status	=1,
			updated	=NOW() 
		WHERE 
			email		="'.$config['Database']->strip($_email).'" 
		LIMIT 1
	','write');
	
	// Wenn Email existiert ..
	if($result==1){
		$data=array();
		
		$data['email']		= $_email;
		$data['activation']	= $activation;
	
		// Bestätigungslink zuschicken (mit Aktivierungscode)
		require_once($config['basispfad'].'helper/yoonmail.inc.php');
		$tplmail='forgotpassword';
		$mail=sendnotyfication($data,array($data['email']),'Reset your YOON Password',$tplmail,$data['email'],'');
	}else{
	
	}
	// Code Passt = 1, wenn nicht = 0
	return $result;
}

/*
** Reset Password
 */
function reset_password($_data){
	global $config;
	
	// Data-Array anlegen
	$data=array();

	// Hashtag ist falsch
	if(strlen($_data['r'])!=15){
		$ret['error'][]	='An error occured, please contact the admin team.';	
		$ret['error_d'][]	='Ein Fehler ist aufgetreten, bitte kontaktiere den Support.';	
	}else{
		// Tracker holen und tracken
		require_once($config['basispfad'].'helper/tracker.inc.php');
		$data['track']=email_tracker();

		$data['uid']=(!empty($config['user']['id'])?$config['user']['id']:'0');

		// Holt userid, altes PW, status und activation-hashcode
		$result=$config['Database']->fetchArray('
			/*QID:GETPARE*/
			SELECT 
				userid, email, pass, status, activation 
			FROM
				User
			WHERE
				email="'.$config['Database']->escape(strtolower($_data['email'])).'"
					AND
				activation="'.$config['Database']->escape($_data['r']).'"
			LIMIT 1
		','read');	
		
		// hat der User überhaupt bezügl. eines PW-Resets angefragt
		if($result['status']==1){
		
			// Passwort-Reset loggen
			$config['Database']->insert('
			/*QID:PWLOG*/
			INSERT INTO
				user__passwordlog
			SET 
				hash		="'.$config['Database']->escape($result['activation']).'",
				userid	='.(int)$result['userid'].',
				password	="'.$config['Database']->escape($result['pass']).'",
				created	=NOW(),
				ip		="'.$config['Database']->escape($data['track']['PublicIP']).'",
				country	="'.$config['Database']->escape($data['track']['country']).'",
				region	="'.$config['Database']->escape($data['track']['region']).'",
				city		="'.$config['Database']->escape($data['track']['city']).'",
				device	="'.$config['Database']->escape($data['track']['device']).'",
				browser	="'.$config['Database']->escape($data['track']['browser']).'",
				useragent	="'.$config['Database']->escape($data['track']['useragent']).'"
			','write');
			
			// Neues Passwort in DB schreiben (updaten)
			$res=$config['Database']->update('
				/*QID:UPPA*/
				UPDATE 
					User 
				SET
					pass		= "'.$config['Database']->escape($_data['password']).'",
					status	= 2,
					activation	="",
					updated	= NOW()
				WHERE 
					userid	='.(int)$result['userid'].' 
				LIMIT 1
			','write');
			
			// Ausgabemeldung
			if(isset($res) && $res==1){
				
				// Bestätigungslink zuschicken (mit Frage ob PW wirklich geändert werden sollte)
				$data['email']=$result['email'];
				require_once($config['basispfad'].'helper/yoonmail.inc.php');
				$tplmail	='passwordchange';
				$mai		=sendnotyfication($data,array($result['email']),'Your password has been changed at YOON.online',$tplmail,$result['email'],'');

				$ret['success'][]		='Your password has been successfully changed.';
				$ret['success_d'][]	='Dein Passwort wurde erfolgreich geändert.';
			}else{
				$ret['error'][]	='An error occured, please contact the admin team.';			}
				$ret['error_d'][]	='Es ist ein Fehler aufgetreten, bitte kontaktiere den Support.';
			
		}else{
			
			$ret['error'][]	='The Password request expired, for your own security.';
			$ret['error'][]	='Please request a new password in clicking at "Forgot password" first.';
			$ret['error_d'][]	='Dein Passwort-Änderungslink ist abgelaufen, zu deiner eigenen Sicherheit.';
			$ret['error_d'][]	='Bitte klicke nochmal auf "Passwort vergessen" und führe den Prozess durch.';
			
		}
	}
	return $ret;
}

/*
* Basis Email-Validierung
*/
function validate_emailbasic($_email){
global $config;

	// Check Email
	if(empty($_email)){
		$ret['etyp'][]	='email';
		$ret['error'][]	='Please enter your email address.';
		$ret['error_d'][]	='Bitte gib eine Email-Adresse ein.';
	}elseif(filter_var($_email, FILTER_VALIDATE_EMAIL) === false){
		$ret['etyp'][]	='email';
		$ret['error'][]	='Your email adress is incorrect.';
		$ret['error_d'][]	='Deine Email-Adresse ist fehlerhaft.';
	}else{
		$ret=null;
	}
	return $ret;
}
?>