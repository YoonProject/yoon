<?// coding: utf-8
// ACHTUNG!!!
// DIE CONFIG LEITET ZUR TEST-DATENBANK

// Report simple running errors
/*if((isset($_GET['ko']) && $_GET['ko']==1) || (isset($PageConfig['errorshow']) && $PageConfig['errorshow']==true)){
	error_reporting(E_ALL);
	#error_reporting(E_ERROR | E_WARNING | E_PARSE);
}else{
	error_reporting(0);
}*/
//error_reporting(0);

// wenn von Google, keine Ads
if(isset($_SERVER['HTTP_REFERER'])){
	$PageConfig['ads1'] = $_SERVER['HTTP_REFERER'];
	if(strpos($PageConfig['ads1'], 'google') !== FALSE) {
		//
	}
}

//INI_SET
ini_set('upload_max_filesize','18M');
ini_set('memory_limit','128M');
ini_set( 'session.use_only_cookies', TRUE );				
ini_set( 'session.use_trans_sid', FALSE );

// defintion von konfigurationswerten
global $config;
$config=array();

// wir haben für die MySQL-DB einen separaten Read/Write-Zugang (mit entsprechenden Rechten)
/* ---TESTSERVER---
* MASTER Zugang für Navicat,Phpmyadmin, etc.
* Login: yoonpy_1
* PW: fnEqZ8QxuZm1wgWN
*
* READ: yoondaba_r / Afd3b0@7!xa
* WRITE: yoondaba_w / G4msw@26!om
* ffz648?Ex!
*
*/
$config['database']=array(
    'read'=>array(
        1=>array(
            'code'=>'sql1',
            'host'=>'localhost',
            'daba'=>'db2',
            'user'=>'yoondaba_test',
            'pass'=>'AK7#jj123'
        )
    ),
    'write'=>array(
        1=>array(
            'code'=>'sql1',
            'host'=>'localhost',
            'daba'=>'db2',
            'user'=>'yoondaba_test',
            'pass'=>'AK7#jj123'
        )
    )
);

//Hier werden die wichtigen Pfade konfiguriert
$config['basepath']=$_SERVER['DOCUMENT_ROOT'].'/';

// Cronjob?
if(isset($PageConfig['cronbasis']) && $PageConfig['cronbasis']!=false){
	$config['basispfad']=$PageConfig['cronbasis'];
}else{
	$config['basispfad']=$_SERVER['DOCUMENT_ROOT'].'/';
}
// Pfade
$config['basepath']	=$_SERVER['DOCUMENT_ROOT'].'/';
$config['absolutpfad']	='https://www.yoon.online/';
$config['nfs']		='https://www.yoon.online/nfs/';
$config['baseurl']	='/';
$config['fotodir']	=$config['basepath'].'img/';
$config['userfotodir']	=$config['fotodir'].'user/';


// css-files
$config['css_url']='https://www.yoon.online/nfs/css/';

// javascript-files
$config['js_url']='https://www.yoon.online/nfs/js/';

// SESSION starten
session_start();

// regenerate session
if(isset($PageConfig['regeneratesession']) && $PageConfig['regeneratesession']==true){
	// if authenticated, generate a new random session ID
	session_regenerate_id();
	// set session to authenticated
	$_SESSION['auth'] = TRUE;
	// redirect to make the new session ID live
	header( 'Location: ' . $_SERVER['SCRIPT_NAME'] );
}					
// take some action
    
// soll die Session individuell verfallen?
if(isset($PageConfig['session_expire']) && $PageConfig['session_expire']>0){
	session_cache_expire($PageConfig['session_expire']);
}

$config['millisek']=substr(microtime(),-10);
$config['bread']='<a href="https://www.yoon.online">YOON Home</a> &#187; ';

###$config PATH
$config['dashboard']	='dashboard';
$config['contact']	='contact';
$config['design']	='design';
$config['login']		='login';
$config['profile']		='profile';
$config['formal']	='formal';
$config['img']		='img';
$config['img_mob']	='img_mob';
$config['css']		='css';
$config['sql']		='sql';
$config['helper']		='helper';
$config['press']		='press';
$config['download']	='download';

//Wenn eine Mitteilung zwischen Header und Content ausgegeben werden soll!
if(isset($_REQUEST['success']) && $_REQUEST['success']!=false){
	$messages['success'][]=strip_tags($_REQUEST['success']);
}elseif(isset($_REQUEST['error']) && $_REQUEST['error']!=false){
	header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
	$messages['error'][]=strip_tags($_REQUEST['error']);
}elseif(isset($_REQUEST['confirm']) && $_REQUEST['confirm']!=false){
	$messages['confirm'][]=strip_tags($_REQUEST['confirm']);
}elseif(isset($_REQUEST['systemmessage']) && $_REQUEST['systemmessage']!=false){
	$messages['systemmessage'][]=strip_tags($_REQUEST['systemmessage']);
}

// Datenbank handling
include($config['basispfad'].'helper/database_neu.inc.php');
$config['Database']=new Database();

// Cachefunktionen laden
if(empty($PageConfig['nocache']) || $PageConfig['nocache']==false){
	include($config['basispfad'].'helper/cache.inc.php');
}

// Hilfsfunktionen
include_once($config['basispfad'].'helper/lib.inc.php');

// Soll der User-Agent gelogged werden?
if(isset($PageConfig['check_ua']) && $PageConfig['check_ua']==true){
	check_ua();
}

// Testen ob der User eingeloggt ist (anhand der Session)
if(isset($_SESSION['userid']) && is_numeric($_SESSION['userid']) && $_SESSION['userid']>0){

	// Sessions auslesen und in Variablen packen
	$config['user']				= array();
	if(isset($_SESSION['userid'])){
		$config['user']['id']			= $_SESSION['userid'];
	}
	if(isset($_SESSION['email'])){
		$config['user']['email']		=$_SESSION['email'];
	}
	if(isset($_SESSION['coins'])){
		$config['user']['coins']		=$_SESSION['coins'];
	}
	if(isset($_SESSION['landid'])){
		$config['user']['landid']		=$_SESSION['landid'];
	}
	//$config['user']=user_getlogindata($_SESSION['UserID']);

// User ausloggen
}elseif(isset($_REQUEST['logout'])){
	user_logout();
	#headerredirect($config['login'].'/logout.php?msg='.($_REQUEST['rmsg']?$_REQUEST['rmsg']:'logout'));
	exit;
}


// ausloggen
if(isset($PageConfig['forcelogout']) && $PageConfig['forcelogout']==true){
	include_once $config['basispfad'].'sql/user.inc.php';
	user_logout();
}
/*
// User gesperrt?
if(isset($config['user']['id'])){
    if($retas=ramcache_getrecord('xUserSperre_'.$config['user']['id'])){
        if($PageConfig['head_title']!='Spielregeln'AND$PageConfig['title']!='Usersperre'){
            header('Location: /'.$config['formal1'].'/usersperre.php');
            echo"Du wurdest temporär gesperrt, da Du gegen die Spielregeln verstossen hast.";
            exit;
        }
    }
}
*/
/*
// Code-Schnipsel + Prozedur für Kontaktanfragen
if(empty($PageConfig['nocontact'])){
	include_once($config['basispfad'].'helper/contact_admin.inc.php');
}*/

// TRACK IF PROMO CODE
if(isset($_REQUEST['ref']) && empty($_SESSION['ref'])){
	if(strlen($_REQUEST['ref'])<15){
		$_SESSION['ref']=$_REQUEST['ref'];
	}
}
?>