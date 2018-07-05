<?//coding:utf-8
// Konfiguration
$PageConfig = array();
$PageConfig['head_title']	= 'Home';
$PageConfig['tracker']	= 'home';
$PageConfig['mainnavi']	= 1;

// inkludieren der allgemeinen Konfigurationsdatei
include ('config/config_neu.inc.php');

/*$config['absolutpfad']	= 'https://www.yoon.online/';
$config['basispfad']	= $_SERVER['DOCUMENT_ROOT'].'/';
$config['design']	= 'design';
$config['img']		= 'img';
$config['helper']		= 'helper';
$config['login']		= 'login';*/

// fürs tracken
include_once($config['basispfad'].'helper/ref_track.inc.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>YOON - The power of Evidence</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<link rel="stylesheet" href="<?=$config['absolutpfad'];?>css/yoon.css?t=<?=(isset($_GET['x'])?microtime(true):'');?>">
<link rel="stylesheet" href="<?=$config['absolutpfad'];?>css/kacheln.css?t=<?=(isset($_GET['x'])?microtime(true):'');?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<link href="https://fonts.googleapis.com/css?family=Dosis|Quicksand|Rajdhani" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="icon" href="https://www.mamiweb.de/yoon/img/yoonico.ico" type="image/x-icon" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://www.jqueryscript.net/demo/Scroll-triggered-Reveal-Animations-With-jQuery-Animate-css-Scrolla/dist/scrolla.jquery.min.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115388804-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-115388804-1');
</script>
<script src="js/frogaloop.js"></script>

</head>
<body>
<div id="corr">
<center>
<div id="promocode">
<a href="#signupform" id="promocode2">
<?=(isset($_SESSION['ref'])?'<b>'.$_SESSION['ref'].'</b> &#187; c':'C');?>lick here for 5% extra Token-Bonus</a> </div>
<!--
<div id="yoonlogo"><img src="/img/yoon_logo.png" alt="YOON" title="YOON"></div>
<div style="font-size:0.8em;color:#666;">Coming very soon!</div>
-->
<div class="xs imdiv">
	<img src="/img/yoon_back_mob5.gif?i=1" alt="YOON - Evidence protection" title="YOON Evidence Protection" class="xs im" width="100%">
	<div style="position:absolute;z-index:4;top:0;left:0;width:100%;">
		<img src="/img/transp.gif" alt="YOON " title="YOON" class="xs" style="width:100%;" height="400px">
	</div>
</div>
<div class="s imdiv">
	<img src="/img/yoon_back_ipad.jpg?i=2" alt="YOON - Evidence protection" title="YOON Evidence Protection" class="s im" width="100%";>
</div>
<div class="m imdiv" style="margin-top:-60px;">
	<img src="/img/yoon_back_neu10.jpg" alt="YOON - Evidence protection" title="YOON Evidence Protection" class="m" style="margin-left:-15px;">
	<div style="position:absolute;z-index:4;top:300px;left:calc(50% - 336px);">
		<img src="/img/anieyes38.gif" alt="YOON - Evidence protection" title="YOON Evidence Protection" class="m">
	</div>
	<div style="position:absolute;z-index:5;top:0;left:0;width:100%;">
		<img src="/img/transp.gif" alt="YOON" title="YOON" class="l" width="100%" height="100%">
	</div>
</div>
<div class="l" style="margin-top:-60px;">
	<img src="/img/yoon_back_neu10.jpg" alt="YOON - Evidence protection" title="YOON Evidence Protection" class="l">
	<div style="position:absolute;z-index:4;top:300px;left:calc(50% - 346px);">
		<img src="/img/anieyes38.gif" alt="YOON - Evidence protection" title="YOON Evidence Protection" class="l">
	</div>
	<div style="position:absolute;z-index:5;top:0;left:0;width:100%;">
		<img src="/img/transp.gif" alt="YOON" title="YOON" class="l" width="100%" height="100%">
	</div>
</div>

<div class="ghigh"></div>
<!--<div id="coming"><img src="/img/coming-soon.png" width="300" height="60" alt="YOON is coming soon" title="YOON is coming soon - be surprised!"></div>-->

<div id="all">
<div class="clear" style="padding:0 0 0 0;margin-bottom:20px;"> 
	<div id="firstwrap">
		<div style="margin:-20px 0 5px 0;">THE</div>
		<picture>
			<source srcset="/img/evidence-protection-protocol-2.png" media="(min-width: 800px)">
			<source srcset="/img/evidence-protection-protocol-2.png" media="(min-width: 500px)">
			<img srcset="/img/evidence-protection-protocol-small2.png" width="70%" alt="EEP">
		</picture>
		<!--
		<div class="pc">
			<img src="/img/evidence-protection-protocol-2.png" alt="Evidence Protection Protocol">
		</div>
		-->
		<h3 id="ueb2">"YOON will reduce fraud and corruption on a global scale, by enabling access to low-cost evidencing services."</h3>
	</div>
</div>

<div class="clear" style="margin:0;"><img src="https://www.yoon.online/img/space_mobile3.png"></div>

<div class="clear" id="bgreto">

	<h3 class="keyele">Key Elements of YOON</h3>
	<div class="clear wrapper">
		<div class="items group" id="itam" style="padding:0 5px;">

			<div class="item key">
				<div class="block nopa animate" data-animate="bounceIn" data-duration="1.0s" data-delay="0.1s" style="background-color:#f4f4f4;border-radius:6px;">
					<img class="mor keygr" src="https://www.yoon.online/img/box_yoon_protocol.gif" alt="YOON Evidence Protocol">
				</div>
			</div>
			<div class="item key">
				<div class="block nopa animate" data-animate="bounceIn" data-duration="1.0s" data-delay="0.2s" style="background-color:#f4f4f4;border-radius:6px;">
					<img class="mor keygr" src="https://www.yoon.online/img/box_yoon_scalable.gif" alt="Scaling Business">
				</div>
			</div>
			<div class="item key">
				<div class="block nopa animate" data-animate="bounceIn" data-duration="1.0s" data-delay="0.3s" style="background-color:#f4f4f4;border-radius:6px;">
					<img class="mor keygr" src="https://www.yoon.online/img/box_yoon_social_impact.gif" alt="Social Impact">
				</div>
			</div>
			<div class="item key">
				<div class="block nopa animate" data-animate="bounceIn" data-duration="1.0s" data-delay="0.4s" style="background-color:#f4f4f4;border-radius:6px;">
					<img class="mor keygr" src="https://www.yoon.online/img/box_yoon_yoonbox.gif" alt="YOONBox">
				</div>
			</div>
			
		</div>
	</div>
</div>

<div class="clear" style="margin-top:30px;margin-bottom:30px;"><img src="https://www.yoon.online/img/space_mobile3.png"></div>
	
<div id="videowatch">	
	<picture id="yoon_preview" class="pulse-button more">
		<source srcset="/img/video_m.png" media="(min-width: 800px)">
		<source srcset="/img/video_m.png" media="(min-width: 500px)">
		<img srcset="/img/video_s.png" id="eep" alt="EEP">
	</picture>
</div>		
		
	<!--<img id="yoon_preview" srcset="img/video_s.png 320w,img/video_s.png 480w,img/video_m.png 800w,img/video_l.png 1200w" sizes="(max-width: 320px) 280px,(max-width: 480px) 440px,800px,1200px" src="img/video_l.png" alt="YOON Video" title="Watch the YOON Video">
	<img src="img/yoon_video.jpg" id="yoon_preview">-->
	<!--<div class="clear"><img src="https://www.yoon.online/img/space_mobile3.png"></div>-->
<div class="pad10">
<div class="clear left usecaselong" style="margin-top:45px;max-width:600px;background:#F5F5F5;" id="faq">
<center><h3 style="margin:5px 0 0 0;">Frequently asked questions</h3><div class="small" style="margin:10px 0 20px 0;">Just click on the questions to read more.</div></center>
<ul class="faq">
<li class="faq2"><span class="more faque">What is the message of YOON and its product?</span>
	<div class="show-more small tobo20">YOON uses the core of the blockchain (its immutability) for something that has to be immutable as well, otherwise it is not sustainable -> Evidence.
		This is actually a perfect combination and puts evidence-protection on the next level.
		<p>
		The result: Fraud, lies and corruption will become more difficult, as evidence protection will become a very easy, cheap and fast process.
		</p>
		YOON cannot turn our world into a paradise, but at least it will make it a bit better.
	</div>
</li>
<li class="faq2"><span class="more faque">Is the market big enough?</span>
	<div class="show-more small tobo20">
		The market is not big, it´s gigantic.<p> 
		Only within the “contractual disputes” and the “copyright infringement” segment we see annual damages, caused by fraud and corruption, worth more than 4 trillion USD globally. </p>
		Evidence can be helpful in many cases. In our toolbox (the YOONbox) we are developing a number of tools customized to major usecases like Evidence protection for:
		<ul style="margin-left:20px;" class="uli tobo10">
		<li>Intellectual property (IP)</li>
		<li>for Contracts (especially verbal contracts</li>
		<li>for the "Last will" and Testaments</li>
		<li>Online-Reviews</li>
		<li>Elections and Polls</li>
		</ul>
		The YOON Protocol will give external developers and companies the possibility to connect an indefinite number of Tools and Applications that are evidence-related and use our evidencing mechanism via our Open API.
	</div>
<li class="faq2"><span class="more faque">Is YOON solving a real problem?</span>
	<div class="show-more small tobo20">
		Fraud only works out if the victim cannot prove the opposite (at court). In a “he says, she says” situation the judge usually decides in favor of the accused. 
		This means, the fraudster gets easily away with his crime, due to a “Lack of Evidence”.
		<p>YOONs mission is to change this!</p>Protected evidence is very often a gamechanger (demonstrated in the following illustration).
		
		<img src="/img/scale_evidence_scale.png?i=2" alt="YOON - Evidence protection" title="YOON - Evidence protection" style="max-width:380px;margin:15px 0;border-radius:6px;">
		<br class="clear">
		It is too risky to commit fraud, because the victim can prove the opposite. The judge has a solid basis for deciding against the fraudster. 
		<p><b>The result: When evidence is protected, legal conflicts don´t even arise.</b></p>
		Evidence protection in the past and today is a complicated and seldom immutable process. 
		In addition to that, often the help of notaries or other persons is needed.<p>That makes it a complex, cost intensive and time-consuming process, with the result that many people don´t commit to doing it, instead they simply trust that nothing bad will happen. Often a fatal decision and a fruitful soil for fraud and corruption.
		</p>
		YOON solves this problem. In conjunction with the blockchain we can bring the whole evidence-protection system on a new level.
	</div>
</li>
<li class="faq2"><span class="more faque">Does YOON really need the blockchain for its product?</span>
	<div class="show-more small tobo10">Immutability is YOONs core feature. Any blockchain with enough nodes offers exact this, there could not be a better "partner" for our core than a popular blockchain.
		<p><b>Why is the blockchains immutability so important for YOON?</b></p>
		<ol class="uli tobo10">
			<li>Evidence has to be immutable for being sustainable (at court).</li>
			<li>The blockchain´s core and probably biggest advantage is its "immutability".</li>
			<li>There is actually no better technology for our product, it´s the perfect match.</li>
		</ol>
	</div>
</li>
<li class="faq2"><span class="more faque">Is there an existing "central" solution to your problem?</span>
	<div class="show-more small tobo20">
		Evidence protection is nothing new, but a very antiquated process, often expensive with the need of middlemen.
		<p>This process hasn´t changed for decades.</p>It´s time for a change, the blockchain gives us (YOON) the chance to do so.</p>
	</div>
</li>
<li class="faq2"><span class="more faque">Does the YOON team have experience in tech/entrepreneurship/law?</span>
	<div class="show-more small tobo20">
		Gerhard, our foudner, is a serial entrepreneur in the tech-industry since 2003. He developed a successful social network for mothers (mamiweb.de) and several other internet-startups. 
		Before he worked for several years in the law-industry.<p>Johannes is also entrepreneur in the media-industry for almost 10 years, Philip has many years of experience in programming and April many years of design-experience.
		</p>Just, have a closer look at our team-section <a href="#team">below</a>.
	</div>
</li>
<li class="faq2"><span class="more faque">Which role does the YOON Token play?</span>
	<div class="show-more small tobo20">
		The YOON Token is a classic utility token, based on the Stellar Network.<p>
		For every evidencing process, and service within the YOON ecosystem, a small amount of YOON Tokens is required. This will be the same for the Open API-Applications, the cloud storage service, products that become their own legal entities (through spin offs) and 
		finally our own blockchain and decentral filestorage system, where YOON Tokens can be earned.</p>
		Directly after our ICO YOON Tokens can be bought on different decentral "stellar-exchanges", and later on at other exchanges where YOON Tokens will be listed. Furthermore it can be bought within our Ecosystem as well, at the market value.
		<p>Have a closer look at our Token Model <a href="#tokenmodel">here</a>.</p>
	</div>
</li>
<li class="faq2"><span class="more faque">When is your ICO planned?</span>
	<div class="show-more small tobo20">
		In may/june 2018 we want to do the private pre-sale, short after that we will start our public pre-sale.
		In both pre-sales we will give a significant bonus. In the private pre-sale it will be up to 75% depending on the ticket-size.
		<p>
		Our ICO is scheduled after the month of june 2018. Please have a look at our website regularly, we will the publish the exact dates and all information around it soon.
	</div>
</li>
<li class="faq2"><span class="more faque">Why did you choose the Stellar plarform for the YOON Token?</span>
	<div class="show-more small tobo20">
		Stellar has a number of advantages for us, the most evident ones:
		<p><ol class="male20 uli">
			<li>Stellar has much lower transaction fees (than other platforms like Ethereum).</li>
			<li>Stellar hs much faster settlement times (than other platforms like Ethereum)</li>
			<li>Stellar has a built-in decentralized exchange, which means that YOON Tokens will be tradable from day zero (after the ICO)</li>
		</ol></p>
		Beside those facts, we will be able to use the Stellar Network for our evidencing-service, which will be fast, secure and cheap. We are able to deploy pretty complex smart contracts for affordable fractions of cents per operation.
		<p>Last but not least, behind Stellar stands a strong team, people with many years of experience in tech business.</p>
	</div>
</li>
</ul>
</div>
</div>

<div class="clear"><img src="https://www.yoon.online/img/space_mobile3.png" class="sep"></div>

<div id="immut">
	Evidence needs to be immutable, for having power of proof.
	<p>The core of the Blockchain is it´s "immutability".</p>
</div>
<div class="pc">
	<div class="item">
		<div class="block animate sprit1 isho" id="sp1" data-animate="bounceIn" data-duration="1.0s" data-delay="0.1s"></div>
	</div>
	<div class="item">
		<div class="block animate sprit1 isho" id="sp2" data-animate="bounceIn" data-duration="1.0s" data-delay="0.2s"></div>
	</div>
	<div class="item">
		<div class="block animate sprit1 isho" id="sp3" data-animate="bounceIn" data-duration="1.0s" data-delay="0.3s"></div>
	</div>
	<div class="item">
		<div class="block animate sprit1 isho" id="sp4" data-animate="bounceIn" data-duration="1.0s" data-delay="0.4s"></div>
	</div>
	<div class="item">
		<div class="block animate sprit1 isho" id="sp5" data-animate="bounceIn" data-duration="1.0s" data-delay="0.1s"></div>
	</div>
	<div class="item">
		<div class="block animate sprit1 isho" id="sp6" data-animate="bounceIn" data-duration="1.0s" data-delay="0.2s"></div>
	</div>
	<div class="item">
		<div class="block animate sprit1 isho" id="sp7" data-animate="bounceIn" data-duration="1.0s" data-delay="0.3s"></div>
	</div>
	<div class="item">
		<div class="block animate sprit1 isho" id="sp8" data-animate="bounceIn" data-duration="1.0s" data-delay="0.4s"></div>
	</div>
</div>

<div class="mob" style="margin-left:-10px;margin-right:-10px;">
	<img src="https://www.yoon.online/img/yoon-people.jpg" width="100%">
</div>
		
		
<br class="clear">
<h3 id="realva">"Bringing the real value of the Blockchain to the people!"</h3><div style="margin:-10px 0 10px 0;color:#009999;">- the blockchain´s evolution -</div>
		
<div class="clear"><img src="https://www.yoon.online/img/space_mobile3.png"></div>

<h3 style="margin:0 0 40px 0;">The YOON Protocol</h3>
<div class="animate usecaselong left" data-animate="bounceIn" data-duration="1.0s" data-delay="0.2s" style="padding:15px;max-width:700px;">
<div class="mob bot20">The YOON Protocol will be the key part of all our systems defining our business actions as messages, commands and events.<p>The following illustration demonstrates the usage of messages with a message bus system, implemented in our protocol.</p></div>
<div class="mob">
<img src="/img/messagebus.png" alt="YOON Protocol" title="The YOON Protocol - Message Bus" id="messagebus" class="mob">
</div>
<div class="pc">
<div class="tobo10 small">The YOON Protocol will be the key part of all our systems defining our business actions as messages, commands and events. The event and command are both time relevant whereas a message is not.</div>
<br>
<center><img src="/img/messagebus_protocol.png" alt="YOON Protocol" title="The YOON Protocol - Message Bus" id="messagebus_pc" width="580" class="pc tobo10 opac85"></center>
<br>
</div>
<div class="pc small">
<p>When implementing CQRS, commands and events play a significant role over the whole subsystems as they decouple the what from the how anything is handled in our systems.
</p>The diagram above illustrates the usage of messages with a message bus system. Our message bus systems will span across many layers whereas one message bus is a global service like bus while subsequent internal message bus systems also exists depending on implementation on the specific modules.
</div>
<center><div class="more morbut">read more</div>
<div class="show-more small left clear top10">
	<div class="mob top10">
		The event and command are both time relevant whereas a message is not.<p>When implementing CQRS, commands and events play a significant role over the whole subsystems as they decouple the what from the how anything is handled in our systems.</p>
		Our message bus systems will span across many layers whereas one message bus is a global service like bus while subsequent internal message bus systems also exists depending on implementation on the specific modules.
	</div>
	<center><h3 class="h3sm">Commands</h3></center>
	This will be our generic command structure with the command action, metadata, parameters and a stream WebSocket endpoint for uploading files (WebSocket is a HTTP based protocol on top of the TCP stack allowing persistent http connections).
	<table width="100%" class="tabe tobo10">
	<tr class="taueb"><td>Command</td><td>Metadata</td><td>Parameter</td><td>Stream</td></tr>
	<tr class="taunge"><td>Verify</td><td>User information</td><td>Restricted/Public</td><td>-</td></tr>
	<tr><td>Upload</td><td>User Info, File Info</td><td>Restricted/Public</td><td>URI</td></tr>
	<tr class="taunge"><td>Flag</td><td>User Information</td><td>Restricted/Public</td><td>-</td></tr>
	<tr><td>Delete (restricted)</td><td>User Info, File Info</td><td>Restricted/Public</td><td>-</td></tr>
	<tr class="taunge"><td>Stream</td><td>User Info, File Info</td><td>Receiving URI</td><td>-</td></tr>
	</table>
	<center><h3 class="h3sm">Events</h3></center>
	Analogous to our commands the events are describing if any of the above called actions happened and succeeded. Events occur mostly if a command has been executed or an external action has executed within the context of our business cases signaling readiness.
	<table width="100%" class="tabe tobo10">
	<tr class="taueb"><td>Event</td><td>Metadata</td><td>Parameter</td><td>Success</td></tr>
	<tr class="taunge"><td>Verified</td><td>User Info, Timestamp</td><td>Restricted/Public</td><td>True, false </td></tr>
	<tr><td>Uploaded</td><td>User Info, File Info, Timestamp</td><td>Restricted/Public</td><td>True, false</td></tr>
	<tr class="taunge"><td>Flagged</td><td>User Info, Timestamp</td><td>Restricted/Public</td><td>True, false</td></tr>
	<tr><td>Deleted</td><td>User Info, File Info, Timestamp</td><td>Restricted/Public</td><td>True, false</td></tr>
	<tr class="taunge"><td>AccountCharged</td><td>Payment Info e.g. Ethereum or Altcoins, Timestamp</td><td>Payment address</td><td>True, false</td></tr>
	</table>
</div></center>
</div>
<br class="clear">
<div class="clear"><img src="https://www.yoon.online/img/space_mobile3.png"></div>
<style>
.opa{	opacity: 0.85;
    filter: alpha(opacity=85;}
</style>
<h3 style="margin:0 0 40px 0;">The YOON Ecosystem</h3>
<!--<div id="ecosystem" class="pc" style="margin:-20px 0 -25px 0;">
<div class="animate" data-animate="bounceIn" data-duration="1.0s" data-delay="0.1s"><img src="https://www.yoon.online/img/yoon-ecosystem-768-1.gif" width="768" height="768" alt="YOON Ecosystem"></div>
</div>-->
<div id="ecosystem" class="pc" style="margin:-20px 0 -25px 0;">
	<div class="opa">
		<div class="animate sprit2" id="sp2-1" data-animate="bounceIn" data-duration="1.0s" data-delay="0.1s"></div>
	</div>
	<div class="opa">
		<div class="animate sprit2" id="sp2-2" data-animate="bounceIn" data-duration="1.0s" data-delay="0.0s"></div>
	</div>
	<div class="opa">
		<div class="animate sprit2" id="sp2-3" data-animate="bounceIn" data-duration="1.0s" data-delay="0.1s"></div>
	</div>
	<div class="opa">
		<div class="animate sprit2" id="sp2-4" data-animate="bounceIn" data-duration="1.0s" data-delay="0.2s"></div>
	</div>
	<div class="opa">
		<div class="animate sprit2" id="sp2-5" data-animate="bounceIn" data-duration="1.0s" data-delay="0.3s"></div>
	</div>
	<div class="opa">
		<div class="animate sprit2" id="sp2-6" data-animate="bounceIn" data-duration="1.0s" data-delay="0.4s"></div>
	</div>
	<div class="opa">
		<div class="animate sprit2" id="sp2-7" data-animate="bounceIn" data-duration="1.0s" data-delay="0.3s"></div>
	</div>
	<div class="opa">
		<div class="animate sprit2" id="sp2-8" data-animate="bounceIn" data-duration="1.0s" data-delay="0.2s"></div>
	</div>
	<div class="opa">
		<div class="animate sprit2" id="sp2-9" data-animate="bounceIn" data-duration="1.0s" data-delay="0.3s"></div>
	</div>
	<div class="opa">
		<div class="animate sprit2" id="sp2-10" data-animate="bounceIn" data-duration="1.0s" data-delay="0.4s"></div>
	</div>
	<div class="opa">
		<div class="animate sprit2" id="sp2-11" data-animate="bounceIn" data-duration="1.0s" data-delay="0.3s"></div>
	</div>
	<div class="opa">
		<div class="animate sprit2" id="sp2-12" data-animate="bounceIn" data-duration="1.0s" data-delay="0.2s"></div>
	</div>	
	<div class="opa">
		<div class="animate sprit2" id="sp2-13" data-animate="bounceIn" data-duration="1.0s" data-delay="0.3s"></div>
	</div>
	<div class="opa">
		<div class="animate sprit2" id="sp2-14" data-animate="bounceIn" data-duration="1.0s" data-delay="0.4s"></div>
	</div>
	<div class="opa">
		<div class="animate sprit2" id="sp2-15" data-animate="bounceIn" data-duration="1.0s" data-delay="0.3s"></div>
	</div>
	<div class="opa">
		<div class="animate sprit2" id="sp2-16" data-animate="bounceIn" data-duration="1.0s" data-delay="0.2s"></div>
	</div>
	<br class="clear">
</div>
<div class="mob">
	<div class="xa">
		<div class="animate"	data-animate="bounceIn" data-duration="1.0s" data-delay="0.2s">
		<img src="/img/yoon_ecosystem_mob1.png" class="mobmod">
		</div>
	</div>
	<div class="xa" style="margin-top:-6px;">
		<div class="animate" data-animate="bounceIn" data-duration="1.0s" data-delay="0.2s">
			<img src="/img/yoon_ecosystem_mob2.png" class="mobmod">
		</div>
	</div>
	
	<div class="modmore morbut" id="The YOON Ecosystem">read more</div>
	<div class="none" id="ecosystem_mob">
		<img src="/img/yoon-token3.png" alt="YOON Token" width="110" style="float:left;margin-right:10px;">
		The YOON Ecosystem is quite extensive. The illustrations shows that it is divided into 3 time related phases (P1, P2, P3).
		<p>					
		In the first phase (P1) we will launch the System, which contains the YOON Protocol, the Engine (along with the Bus, the Smart Contracts, etc.) and the API. In addition to that we are developing the YOONBox which bundles the first
		tools that will be at the same time the first usecases for our protocol and the whole system.
		</p>
		In phase 2 (P2) we will scale our system and open our API. An infinite number of decentralized applications can then be connected to YOON Engine through our protocol. The Engine is the core of the whole system and manages all the evidencing.
		<p>
		In phase 3 (P3) we will scale the Ecosystem further in offering upselling services (like Cloudstorage), develop our own blockchain including a decentral filestorage system and last but not least do spin offs from our YOONBox. Those spin offs become own companies and do their won ICOs.
	</div>
</div>

<div class="clear space"><img src="https://www.yoon.online/img/space_mobile3.png"></div>

<h3 style="margin:-20px 0 30px 0;">Usecases for the YOON Protocol</h3><div class="small bot10">from our whitepaper (YOONBox)</div>

<div class="clear advi" id="usecases">
	<div class="item">
		<div class="block animate imobx" data-animate="bounceIn" data-duration="1.0s" data-delay="0.3s">
			<b>IP Rights (Copyright)</b>
			<br>Music, Pictures, Poems, etc.<br>
			<img src="/img/copyright-tool-small.png" style="width:100%;max-width:205px;">
		</div>
	</div>
	<div class="item">
		<div class="block animate imobx" data-animate="bounceIn" data-duration="1.0s" data-delay="0.3s">
			<b>Contracs</b>
			<br>Especially verbal contracts.<br>
			<img src="/img/contract-tool-small.png" style="width:100%;max-width:205px;">
		</div>
	</div>
	<div class="item">
		<div class="block animate imobx" data-animate="bounceIn" data-duration="1.0s" data-delay="0.3s">
			<b>Online Reviews</b><br>
			<img src="/img/review-tool-small1.png" style="width:100%;max-width:205px;">
		</div>
	</div>
	<div class="item">
		<div class="block animate imobx" data-animate="bounceIn" data-duration="1.0s" data-delay="0.3s">
			<b>Elections & Polls</b><br>100% immutable<br>
			<img src="/img/voting-tool-small.png" style="width:100%;max-width:205px;">
		</div>
	</div>
	<br class="clear">
	<div class="item">
		<div class="block animate imobx" data-animate="bounceIn" data-duration="1.0s" data-delay="0.3s">
			<b>Testaments</b><br>
			<img src="/img/testament-tool_small.png" style="width:100%;max-width:220px;">
		</div>
	</div>	
	<div class="pc left xix">	
		<div class="animate small usecaselong" data-animate="bounceIn" data-duration="1.0s" data-delay="0.3s">
			<img src="/img/pyramide-yoon.png" alt="3 Interfaces" style="float:right;max-height:220px;"><b>This is only a sample of possible usecases.</b><p>
			With the YOONBox we are creating the first usecases for the YOON Protocol.<p>The YOONBox offers 3 different types of Interfaces, outlined in the graphic on the right.</p>Read more about the YOONBox in our YOONBox-information sheet.
		</div>
	</div>
</div>		

<br class="clear">
<div class="clear space"><img src="https://www.yoon.online/img/space_mobile3.png"></div>

<h3 style="margin:-20px 0 40px 0;">YOON Token Model</h3><p>The YOON Token will be used quite extensivly, scaling up in 3 different phases.</p><br>

<div class="mob">
	<div class="xa">
		<div class="animate"	data-animate="bounceIn" data-duration="1.0s" data-delay="0.2s">
		<img src="/img/tokenmodel_mob1.png" class="mobmod">
		</div>
	</div>
	<div class="xa" style="margin-top:-6px;">
		<div class="animate" data-animate="bounceIn" data-duration="1.0s" data-delay="0.2s">
			<img src="/img/tokenmodel_mob2.png" class="mobmod">
		</div>
	</div>
	<div class="modmore morbut" id="The YOON Token Model">read more</div>
	
	<div class="none" id="tokenmodel_mob">
		<img src="/img/yoon-token3.png" alt="YOON Token" width="110" style="float:left;margin-right:10px;">
		The YOON Token Model is divided into 3 Phases (P1, P2, P3),
		<p>					
		In the first step (P1) we will launch our own products using the YOON protocol. The Tokens marked in green color are symbolizing phase no.1.
		For every usage of the YOONBox (including the access-interface and the complain-interface, a specific amount of YOON Tokens is needed.
		</p>
		In phase 2 we are scaling the whole Token Model (tokens marked in magenta). Through our Open API an infinite number of decentralized applications are connected to YOON, they all will require a specific amount of YOON Tokens to use our services, which will not limit themselves to evidencing services, but also offer 
		upselling features like cloud storage and in the end an own blockchain combined with an own storage system (P3).<p>In addition to that we will do spin offs from our YOONBox, which also will require YOON Tokens (also P3).</p>
	</div>
</div>
<div class="pc">
<div id="tokenmodell" class="small" style="display:flex;">
	<div class="xa fleft" style="float:left;">
		<div class="animate"	data-animate="bounceIn" data-duration="1.0s" data-delay="0.2s">
		<img src="/img/tokenmodell_big.png" class="mobmod">
		</div>
	</div>
	<div class=" left" style="float:left;flex-grow: 1;">
		<div class="animate usecaselong" data-animate="bounceIn" data-duration="1.0s" data-delay="0.2s" style="padding:15px;margin-left:20px;">
			<ul class="uli" style="list-style-type:none;margin-left:0px;">
				<li>
					<b>Phase 1 (P1)</b><p>This phase marks our basic token model (tokens colored in green).</p>
					All our services accessible through our API via interfaces like the tools within the YOONBox, 
					the "YOON Access Interface" or the "YOON Complaints Interface" require a specific amount of YOON Tokens (except some basic services which are free of charge).
				</li>
				<li>
					<b>Phase 2 (P2)</b><p>Tokens, colored in purple, are YOON Tokens that are earned through external applications that connect to our Open API (P2).</p>
					Our API can handle an indefinite number of applications. A fraction of our services will be free of charge (freemium model), most of it though will require YOON Tokens.
					In Phase 2 we will also start upselling additional features, p.e. cloud storage services, which also will require YOON Tokens.
				</li>
				<li>
					<b>Phase 3 (P3)</b>
					<p>The next phase (P3) is characterized by the development of our own blockchain which goes hand in hand with a connected open decentralized file storage system that 
					removes intermediaries and is open for participation. Participants who provide their hardware for the YOON filestorage network will earn YOON Tokens in return.
					</p>Furthermore in P3 we will start doing spin offs from our YOONBox, which means that we are building addioninal services around each tool, 
					and they become independent businesses, being able to do their own ICO in the next step.
				</li>
			</ul>
		</div>
	</div>
</div>
</div>




<!--
YOON will be listed on Stellar´s decentralized exchange.
<p>
The intrinsic value of the YOON Tokens (YOONs) derives from their functionality within the YOON ecosystem, 
which provide users with future access to the service within. 
YOONs can be used to purchase all our evidence protection services within the YOON ecosystem.
</p>
The YOON Tokens provide access to all services within the YOON Ecosystem, means they are tied to the usage of the YOONbox and are giving exclusive access 
to its major features including the Access Interface and the Complaints Protocol.
-->


<br class="clear">
<div class="clear space"><img src="https://www.yoon.online/img/space_mobile3.png"></div>

<h3 style="margin:-20px 0 30px 0;">Team</h3>

<div id="team">
	<div class="item clear" style="">
		<div class="team animate imobx" data-animate="bounceIn" data-duration="1.0s" data-delay="0.1s">
			<img src="img/team/gerhard.jpg?i=3" class="img-circle tib"><br><b>Dr. Gerhard Oellinger</b><br>Founder & CEO<br>
			<button style="border:10px solid #FFF;" class="pulse-button more temore" id="Gerhard Oellinger"></button>	
		</div>
	</div>	
	<div class="left pc xix">			
		<div class="animate sma modmore2" data-animate="bounceIn" data-duration="1.0s" data-delay="0.3s" style="">
			<div class="mob"><center><img src="img/team/gerhard.jpg" class="img-circle tib floale mare10"></center></div>
			Gerhard is the originator of YOON and our CEO. He has more than 14 years of experience as entrepreneur, entered the internet market with an online-dating startup in 2004, since then he founded and co-founded several other ventures in the new media/internet field, like the social network for mothers "Mamiweb.de" in Germany, Austria and Switzerland. 
			Gerhard studied law at the universities Vienna, Salzburg and Rome, he made his PhD in law.
			<p>Before Gerhard turned his passion of entrepreneurship and software development into reality, Gerhard worked several years for PricewaterhouseCoopers in financial services, until 2004.</p>
			Serial Entrepreneur since 2004, PhD in Law, Vienna University
			<div class="linkedin" style="float:right;margin:0 10px 10px 0;">
				<a href="https://www.xing.com/profile/Florian_Spathelf/cv" target="_blank"><img src="img/team/xing.png" title="Open Xing profile" class="img-circle" width="30"></a>
				<a href="https://www.linkedin.com/in/florianspathelf/" target="_blank"><img src="img/team/linkedin.gif" title="Open Linkedin profile" class="img-circle" width="30"></a>
			</div>
		</div>
	</div>
	
	<div class="item clear" style="">
		<div class="team animate imobx" data-animate="bounceIn" data-duration="1.0s" data-delay="0.1s">
			<img src="img/team/philip.jpg?i=3" class="img-circle tib"><br><b>Philip Meeske</b><br>Head of Development<br>
			<button style="border:10px solid #FFF;" class="pulse-button more temore" id="Philip Meeske"></button>
		</div>
	</div>	

	<div class="left pc xix">			
		<div class="animate sma modmore2" data-animate="bounceIn" data-duration="1.0s" data-delay="0.3s">
		<div class="mob"><center><img src="img/team/philip.jpg" class="img-circle tib floale mare10"></center></div>
		Philip is a technic enthusiast and former IT consultant who developed a passion for blockchain technologies. His focus lies on software architecture and design as well as developing on REST based Backend Services and state of the art front end technologies.<p>Philip studied computer science at the Mannheim University in Germany.</p>Software Engineer & Smart Contract Developer, Mannheim University
		<div class="linkedin">
			<a href="https://www.xing.com/profile/Florian_Spathelf/cv" target="_blank"><img src="img/team/xing.png" title="Open Xing profile" class="img-circle" width="30"></a>
			<a href="https://www.linkedin.com/in/florianspathelf/" target="_blank"><img src="img/team/linkedin.gif" title="Open Linkedin profile" class="img-circle" width="30"></a>
		</div>
		</div>
	</div>		
	
	<div class="item clear">
		<div class="animate imobx team" data-animate="bounceIn" data-duration="1.0s" data-delay="0.1s">
			<img src="img/team/johannes.jpg?i=3" class="img-circle tib"><br><b>Johannes Oellinger (DI)</b><br>CCO<br>
			<button style="border:10px solid #FFF;" class="pulse-button more temore" id="Johannes Oellinger"></button>
		</div>
	</div>	
	<div class="left pc xix">			
		<div class="animate sma modmore2" data-animate="bounceIn" data-duration="1.0s" data-delay="0.3s">
			<div class="mob"><center><img src="img/team/johannes.jpg?i=3" class="img-circle tib floale mare10"></center></div>
			Johannes is a Vienna based filmmaker, media-engineer and creative mind.<p> Producing TV-commercials, Social Media Clips, Crowdfunding campaigns, documentaries and many more for over ten years. Providing his expertise now for YOON.</p>Johannes studied "Digital Media" at the St. Poelten University of applied sciences (Austria).
			<div class="linkedin">
				<a href="https://www.xing.com/profile/Florian_Spathelf/cv" target="_blank"><img src="img/team/xing.png" title="Open Xing profile" class="img-circle" width="30"></a>
				<a href="https://www.linkedin.com/in/florianspathelf/" target="_blank"><img src="img/team/linkedin.gif" title="Open Linkedin profile" class="img-circle" width="30"></a>
			</div>			
		</div>
	</div>

	<div class="item clear">
		<div class="team animate imobx" data-animate="bounceIn" data-duration="1.0s" data-delay="0.1s">
			<img src="img/team/tom.jpg?i=3" class="img-circle tib"><br><b>Tom Steusloff</b><br>Press<br>
			<button style="border:10px solid #FFF;" class="pulse-button more temore" id="Tom Steusloff"></button>
		</div>
	</div>	
	<div class="left pc xix">			
		<div class="animate sma modmore2" data-animate="bounceIn" data-duration="1.0s" data-delay="0.3s" style="">
			<div class="mob"><center><img src="img/team/tom.jpg" class="img-circle tib floale mare10"></center></div>
			Tom is our head of press and the one coordinating our public strategy, especially related to our ICO. He is a team member from the first hour and is very passionate about YOON and developing our products. 
			<p>Tom is currently studying electrical engineering and has a strong background in online marketing.</p>
			<div class="linkedin">
				<a href="https://www.xing.com/profile/Florian_Spathelf/cv" target="_blank"><img src="img/team/xing.png" title="Open Xing profile" class="img-circle" width="30"></a>
				<a href="https://www.linkedin.com/in/florianspathelf/" target="_blank"><img src="img/team/linkedin.gif" title="Open Linkedin profile" class="img-circle" width="30"></a>
			</div>	
		</div>
	</div>		

	<div class="item clear">
		<div class="team animate imobx" data-animate="bounceIn" data-duration="1.0s" data-delay="0.1s">
			<img src="img/team/april.jpg?i=3" class="img-circle tib"><br><b>April-Joy Merkel</b><br>Design<br>
			<button style="border:10px solid #FFF;" class="pulse-button more temore" id="April-Joy Merkel"></button>
		</div>
	</div>	
	<div class="left pc xix">			
		<div class="animate sma modmore2" data-animate="bounceIn" data-duration="1.0s" data-delay="0.3s" style="padding-bottom:2px;">
			<div class="mob"><center><img src="img/team/april.jpg" class="img-circle tib floale mare10"></center></div>
			April is our head of design. She has many years of experience in web and graphic design. She has gathered solid experience as a project leader with an educational provider. April is trained in mentoring and counseling. Further, she is volunteering at a non-government organization supporting projects for children rights. 
			<p>April holds a double master degree in design and social sciences. She has studied humanities and social science in Frankfurt am Main at the University of Applied Sciences and in Sweden at the Växjö Universitet. She is a certified graphic designer.</p>
			<div class="linkedin">
				<a href="https://www.xing.com/profile/Florian_Spathelf/cv" target="_blank"><img src="img/team/xing.png" title="Open Xing profile" class="img-circle" width="30"></a>
				<a href="https://www.linkedin.com/in/florianspathelf/" target="_blank"><img src="img/team/linkedin.gif" title="Open Linkedin profile" class="img-circle" width="30"></a>
			</div>			
		</div>
	</div>
	
	<div class="clear w100">
		<div class="sosa animate imobx teaser100 bgmag" data-animate="bounceIn" data-duration="1.0s" data-delay="0.3s" style="background:#009999;line-height:2.8em;">
			Become part of something meaningful?<h2 class="h2-at">We are hiring!</h2>
			<div class="em-at"><span style="color:#ccc">mail us:</span><br>&#106;&#111;&#98;&#115;&#64;&#121;&#111;&#111;&#110;&#46;&#111;&#110;&#108;&#105;&#110;&#101;</div>
		</div>
	</div>
</div>

<br class="clear">
<div class="clear space"><img src="https://www.yoon.online/img/space_mobile3.png"></div>

<h3 style="margin:-20px 0 40px 0;">Advisors</h3>
	
<div class="clear advi" id="advi">
	<div class="item">
		<div class="block animate imobx" data-animate="bounceIn" data-duration="1.0s" data-delay="0.3s">
		<img src="img/team/ilja.jpg?i=3" class="img-circle tib"><br><b>Ilja Reiner</b><br>CEO Schober Ventures<br>Investmentbanker<br>Berlin Business School<br>
		<div class="linkedin">
			<a href="https://www.xing.com/profile/Ilja_Reiner/cv" target="_blank"><img src="img/team/xing.png" title="Open Xing profile" class="img-circle" width="30"></a>
			<a href="https://www.linkedin.com/in/ilja-reiner-b4005a90/" target="_blank"><img src="img/team/linkedin.gif" title="Open Linkedin profile" class="img-circle" width="30"></a>
		</div>			
		</div>
	</div>
	<!--<div class="item">
		<div class="block animate imobx" data-animate="bounceIn" data-duration="1.0s" data-delay="0.2s">
		<img src="img/team/christoph.jpg?i=3" class="img-circle tib"><br><b>Christoph Gum</b><br>Private Alpha Switzerland AG<br>Investmentbanker & Blockchain Expert<br>
		<div class="linkedin">
			<a href="https://www.xing.com/profile/Christoph_Gum/cv" target="_blank"><img src="img/team/xing.png" title="Open Linkedin profile" class="img-circle" width="30"></a>
			<a href="https://www.linkedin.com/in/christoph-gum-46406846/" target="_blank"><img src="img/team/linkedin.gif" title="Open Linkedin profile" class="img-circle" width="30"></a>
		</div>			
		</div>
	</div>-->
	<div class="item">
		<div class="block animate imobx" data-animate="bounceIn" data-duration="1.0s" data-delay="0.3s">
		<img src="img/team/albert.jpg?i=3" class="img-circle tib"><br><b>Albert Schwarzmeier</b><br>Serial entrepreneur<br>vaola.de, ad2games, nevaly.com<br>HHL - Leipzig Graduate School<br>
		<div class="linkedin">
			<a href="https://www.xing.com/profile/AlbertChristian_Schwarzmeier" target="_blank"><img src="img/team/xing.png" title="Open Linkedin profile" class="img-circle" width="30"></a>
			<a href="https://www.linkedin.com/in/albertchristianschwarzmeier/" target="_blank"><img src="img/team/linkedin.gif" title="Open Linkedin profile" class="img-circle" width="30"></a>
		</div>			
		</div>
	</div>
	<div class="item">
		<div class="block animate imobx" data-animate="bounceIn" data-duration="1.0s" data-delay="0.2s">
		<img src="img/team/umberto.jpg?i=3" class="img-circle tib"><br><b>Umberto Bailoni</b><br>Serial Entrepreneur<br>Founder of Adpublisher.com, Digitalhunter.biz<br>
		<div class="linkedin">
			<a href="https://www.xing.com/profile/Umberto_Bailoni/cv" target="_blank"><img src="img/team/xing.png" title="Open Linkedin profile" class="img-circle" width="30"></a>
			<a href="https://www.linkedin.com/in/umberto-bailoni-1b6881/" target="_blank"><img src="img/team/linkedin.gif" title="Open Linkedin profile" class="img-circle" width="30"></a>
		</div>			
		</div>
	</div>
	<div class="item">
		<div class="block animate imobx" data-animate="bounceIn" data-duration="1.0s" data-delay="0.1s">
		<img src="img/team/florian.jpg?i=3" class="img-circle tib"><br><b>Florian Spathelf</b><br>CEO & Founder Meine-Spielzeugkiste<br>Alanus University<br>
		<div class="linkedin">
			<a href="https://www.xing.com/profile/Florian_Spathelf/cv" target="_blank"><img src="img/team/xing.png" title="Open Xing profile" class="img-circle" width="30"></a>
			<a href="https://www.linkedin.com/in/florianspathelf/" target="_blank"><img src="img/team/linkedin.gif" title="Open Linkedin profile" class="img-circle" width="30"></a>
		</div>			
		</div>
	</div>
	<div class="item">
		<div class="block animate imobx" data-animate="bounceIn" data-duration="1.0s" data-delay="0.0s">
		<img src="img/team/thomas.jpg?i=3" class="img-circle tib"><br><b>Thomas Wiesinger</b><br>CEO and Founder of play-asia.com.<br>Serial Entrepreneur<br>Software developer<br>
		<div class="linkedin">
			<a href="https://www.xing.com/profile/ThomasM_Wiesinger/cv" target="_blank"><img src="img/team/xing.png" title="Open Linkedin profile" class="img-circle" width="30"></a>
			<a href="https://www.linkedin.com/in/thomas-wiesinger-92300594/" target="_blank"><img src="img/team/linkedin.gif" title="Open Linkedin profile" class="img-circle" width="30"></a>
		</div>			
		</div>
	</div>
	<div class="item">
		<div class="block animate imobx" data-animate="bounceIn" data-duration="1.0s" data-delay="0.1s">
		<img src="img/team/colin.jpg?i=3" class="img-circle tib"><br><b>Colin Lovrinovic</b><br>Managing Director at Gould.Finch<br>Owner of "humming records"<br>Mannheim Business School<br>
		<div class="linkedin">
			<a href="https://www.xing.com/profile/Colin_Lovrinovic%E6%9F%AF%E6%9E%97" target="_blank"><img src="img/team/xing.png" title="Open Xing profile" class="img-circle" width="30"></a>
			<a href="https://www.linkedin.com/in/colinlovrinovic/" target="_blank"><img src="img/team/linkedin.gif" title="Open Linkedin profile" class="img-circle" width="30"></a>
		</div>			
		</div>
	</div>
	<div class="item">
		<div class="block animate imobx" data-animate="bounceIn" data-duration="1.0s" data-delay="0.2s">
		<img src="img/team/feliks.jpg?i=3" class="img-circle tib"><br><b>Feliks Eyser</b><br>CEO and founder<br>of regiohelden.com<br>Karlsruhe Institute of Technology<br>
		<div class="linkedin">
			<a href="https://www.xing.com/profile/Feliks_Eyser/cv" target="_blank"><img src="img/team/xing.png" title="Open Xing profile" class="img-circle" width="30"></a>
			<a href="https://www.linkedin.com/in/eyser/" target="_blank"><img src="img/team/linkedin.gif" title="Open Linkedin profile" class="img-circle" width="30"></a>
		</div>			
		</div>
	</div>
	<div class="item">
		<div class="block animate nopa imobx" data-animate="bounceIn" data-duration="1.0s" data-delay="0.1s">
		<img src="img/team/simon.jpg?i=3" class="img-circle tib"><br><b>Simon Fabich</b><br>Founder & Owner of Monoqi<br>University of St. Gallen<br><br>
		<div class="linkedin">
			<a href="https://www.xing.com/profile/Simon_Fabich/cv" target="_blank"><img src="img/team/xing.png" title="Open Xing profile" class="img-circle" width="30"></a>
			<a href="https://www.linkedin.com/in/simonfabich/" target="_blank"><img src="img/team/linkedin.gif" title="Open Linkedin profile" class="img-circle" width="30"></a>
		</div>
		</div>
	</div>
	<div class="item">
		<div class="block animate nopa imobx" data-animate="bounceIn" data-duration="1.0s" data-delay="0.2s">
		<img src="img/team/alexander.jpg?i=3" class="img-circle tib"><br><b>Prof. Dr. Alexander Alscher</b><br>Founder & CEO at samedi<br>BSP Business School Berlin
		<div class="linkedin">
			<a href="https://www.xing.com/profile/Alexander_Alscher/cv" target="_blank"><img src="img/team/xing.png" title="Open Xing profile" class="img-circle" width="30"></a>
			<a href="https://www.linkedin.com/in/aalscher/" target="_blank"><img src="img/team/linkedin.gif" title="Open Linkedin profile" class="img-circle" width="30"></a>
		</div>
		</div>
	</div>
	<div class="item">
		<div class="block animate nopa imobx" data-animate="bounceIn" data-duration="1.0s" data-delay="0.3s">
		<img src="img/team/torsten.jpg" class="img-circle tib"><br><b>Torsten Pinkert</b><br>Entrepreneur & Editorial Manager<br>Zittau/Görlitz University
		<div class="linkedin">
			<a href="https://www.xing.com/profile/Torsten_Pinkert/cv" target="_blank"><img src="img/team/xing.png" title="Open Xing profile" class="img-circle" width="30"></a>
		</div>
		</div>
	</div>
	<div class="item">
		<div class="block animate nopa imobx" data-animate="bounceIn" data-duration="1.0s" data-delay="0.2s">
		<img src="img/team/stephan.jpg?i=3" class="img-circle tib"><br><b>Stephan Bayer</b><br>Founder & CEO sofatutor.com<br>Humboldt University of Berlin
		<div class="linkedin">
			<a href="https://www.xing.com/profile/Stephan_Bayer9/cv" target="_blank"><img src="img/team/xing.png" title="Open Xing profile" class="img-circle" width="30"></a>
			<a href="https://www.linkedin.com/in/bayerstephan/" target="_blank"><img src="img/team/linkedin.gif" title="Open Linkedin profile" class="img-circle" width="30"></a>
		</div>
		</div>
	</div>
	<div class="item">
		<div class="block animate nopa imobx" data-animate="bounceIn" data-duration="1.0s" data-delay="0.2s">
		<img src="img/team/marcel.jpg?i=3" class="img-circle tib"><br><b>Marcel Knopf</b><br>CEO & Founder<br>Fastlane Marketing GmbH<br>Heidelberg University
		<div class="linkedin">
			<a href="https://www.xing.com/profile/Marcel_Knopf3/cv" target="_blank"><img src="img/team/xing.png" title="Open Xing profile" class="img-circle" width="30"></a>
			<a href="https://www.linkedin.com/in/marcel-knopf/" target="_blank"><img src="img/team/linkedin.gif" title="Open Linkedin profile" class="img-circle" width="30"></a>
		</div>
		</div>
	</div>
	<div class="item">
		<div class="block animate nopa imobx" data-animate="bounceIn" data-duration="1.0s" data-delay="0.3s">
		<img src="img/team/marvin.jpg" class="img-circle tib"><br><b>Marvin Rettenmaier</b><br>Professional Poker-Player<br>Winner of the World Poker Tour<br>No. 1 - Golbal Poker Index (2013)
		<div class="linkedin">
			<a href="https://en.wikipedia.org/wiki/Marvin_Rettenmaier" target="_blank"><img src="img/team/wikipedia.png" title="Open Wikipedia article English" class="img-circle" width="30" style="border:1px solid #666;"></a>
			<a href="https://de.wikipedia.org/wiki/Marvin_Rettenmaier" target="_blank"><img src="img/team/wikipedia.png" title="Open Wikipedia article German" class="img-circle" width="30" style="border:1px solid #666;"></a>
		</div>
		</div>
	</div>
	<div class="item">
		<div class="block animate nopa imobx" data-animate="bounceIn" data-duration="1.0s" data-delay="0.2s">
		<img src="img/team/niklas.jpg?i=3" class="img-circle tib"><br><b>Niklas Bolle</b><br>Serial Entrepreneur<br>Founder of Modomoto.com<br>Humboldt University of Berlin
		<div class="linkedin">
			<a href="https://www.xing.com/profile/Niklas_Bolle" target="_blank"><img src="img/team/xing.png" title="Open Xing profile" class="img-circle" width="30"></a>
			<a href="https://www.linkedin.com/in/niklas-bolle-9b203a32/" target="_blank"><img src="img/team/linkedin.gif" title="Open Linkedin profile" class="img-circle" width="30"></a>
		</div>
		</div>
	</div>
	<div class="item">
		<div class="block animate nopa imobx" data-animate="bounceIn" data-duration="1.0s" data-delay="0.2s">
		<img src="img/team/yannis.jpg?i=3" class="img-circle tib"><br><b>Yannis Niebelschütz</b><br>Founder: Testhub, vjsual<br>Former Sales Lead Germany @ LinkedIn
		<div class="linkedin">
			<a href="https://www.xing.com/profile/Yannis_Niebelschuetz/cv" target="_blank"><img src="img/team/xing.png" title="Open Xing profile" class="img-circle" width="30"></a>
			<a href="https://www.linkedin.com/in/yniebelschuetz/" target="_blank"><img src="img/team/linkedin.gif" title="Open Linkedin profile" class="img-circle" width="30"></a>
		</div>
		</div>
	</div>
	<div class="item pc">
		<div class="block animate nopa imobx" data-animate="bounceIn" data-duration="1.0s" data-delay="0.2s">
		
		</div>
	</div>	
</div>
	<div class="clear w100 top10">
		<div class="sosa animate imobx teaser100 bgmag" data-animate="bounceIn" data-duration="1.0s" data-delay="0.3s" style="background:#009999;line-height:2.8em;margin-top:10px;">
			<span style="background:#009999;margin-top:10px;color:#FFF;font-size:1.5em;line-height:1.8em;">YOON = less fraud, less corruption</span>
			<h2 class="h2-at">Become a supporter!</h2>
			<div class="em-at"><span style="color:#ccc">mail us:</span><br>&#101;&#118;&#111;&#108;&#117;&#116;&#105;&#111;&#110;&#64;&#121;&#111;&#111;&#110;&#46;&#111;&#110;&#108;&#105;&#110;&#101;</div>
		</div>
	</div>
<div>
<br class="clear">
<div class="clear space"><img src="https://www.yoon.online/img/space_mobile3.png"></div>

<h3 style="margin:-20px 0 40px 0;">Roadmap</h3>

<div id="roadmap">
	<center>
		<h2 class="rmap2">2017</h2>
		<div class="small">Forming the idea, teambuilding, writing down structures and the whitepaper.</div>
		<h2 style="margin-top:50px;" class="rmap2">2018</h2>
	</center>
	
	<div id="rs-performance" class="rs-performance animate" data-animate="bounceIn" data-duration="0s" data-delay="0.2s">
		<div class="container">
			<div class="item">
				<div class="animate quart" data-animate="bounceIn" data-duration="1.0s" data-delay="0.1s">
					<b>Q1</b>
					<div class="small top10">
						Preparation
						<div class="wow fadeInUp" data-wow-duration=".3s" data-wow-delay="300ms">
							<div class="items ite rite modmore" id="Q1 - 2018">
								<div class="glyph-icon" class="bold" id="q2">read more</div>
							</div>
							<div class="none" id="Preparation">The first quarter is mainly characterized by organizational work around YOON, the foundation of the legal entities and optimizing the product.
							<ul><li>Teambuilding</li><li>reshaping the product</li><li>sparring with lawyers</li><li>developers and blockchain experts</li></ul>Finishing the whitepaper and our roadmap.</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="item">
				<div class="animate quart" data-animate="bounceIn" data-duration="1.0s" data-delay="0.2s">
					<b>Q2</b>
					<div class="small top10">
						Preparation
						<div class="wow fadeInUp" data-wow-duration=".3s" data-wow-delay="300ms">
							<div class="items ite rite modmore" id="Q2 - 2018">
								<div class="glyph-icon" style="font-weight:bold;" id="q2">read more</div>
							</div>
							<div class="none" id="Pre-Sale">Team expansion & creation of the YOON system.
							<p>The 2nd quarter is characterized by creating the architecture of the YOON system, which goes in hand with community building and spreading the word about YOON and our idea.</p>
							​The website yoon.online and the website for the YOON ICO is being created.
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="item">
				<div class="animate quart" data-animate="bounceIn" data-duration="1.0s" data-delay="0.3s">
					<b>Q3</b>
					<div class="small top10">
						Preparation for the ICO / start of the pre-sale
						<div class="wow fadeInUp" data-wow-duration=".3s" data-wow-delay="300ms">
							<div class="items ite rite modmore" id="Q3 - 2018">
								<div class="glyph-icon" style="font-weight:bold;" id="q2">read more</div>
							</div>
							<div class="none" id="Main-Sale">This quarter is characterized by preparing for the pre- and the main-sale. During this period our private pre-sale will be accomplished, and our public pre-sale initiated.
							In parallel to the private pre-sale our MVP and prototype is being built. In the end of Q3 we will present a first working example of the YOONBox.</p></div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="item">
				<div class="animate quart" data-animate="bounceIn" data-duration="1.0s" data-delay="0.4s">
					<b>Q4</b>
					<div class="small top10">
						ICO
						<div class="wow fadeInUp" data-wow-duration=".3s" data-wow-delay="300ms">
							<div class="items ite rite modmore" id="Q4 - 2018">
								<div class="glyph-icon" style="font-weight:bold;" id="q2">read more</div>
							</div>
							<div class="none" id="Development">
								In Q4 we will do the ICO for YOON. Im parallel we will continue developing the YOON Protocol, the YOON API, the YOON Engine (start of Phase 1).<p>Those 3 elements are the core elements of the YOON Ecosystem.
								Furthermore our APP the YOONBox, which is the initial starting point and usecase for the protocol, will be developed.<p>In the end of the 4th quarter we expect to launch our Ecosystem in a beta-version and shortly after that the YOONBox, as well as beta-version.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<br class="clear">	

	<h2 style="margin-top:50px;" class="rmap2">2019</h2>

	<div id="rs-performance" class="rs-performance animate" data-animate="bounceIn" data-duration="0s" data-delay="0.2s">
		<div class="container">
		
			<div class="item">
				<div class="animate quart" data-animate="bounceIn" data-duration="1.0s" data-delay="0.1s">
					<b>Q1</b>
					<div class="small top10">
						Launch Beta
						<div class="wow fadeInUp" data-wow-duration=".3s" data-wow-delay="300ms">
							<div class="items ite rite modmore" id="Q1 - 2019">
								<div class="glyph-icon" style="font-weight:bold;" id="q2">read more</div>
							</div>
							<div class="none" id="Beta Phase">The first Quarter of 2019 will be characterized by the beta phase of our software.<p>Further development, and optimization plays an imporant role in the following months.</p>
							Together with our community we will finetune the YOON Ecosystem. In parallel we will be marketing our Open API which will is scheduled to launch in the end of this quarter. 
							<p>The Open API will play a big role in decentralizing evidence protection and an imporant step for our token model.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="item">
				<div class="animate quart" data-animate="bounceIn" data-duration="1.0s" data-delay="0.2s">
					<b>Q2</b>
					<div class="small top10">
						Open API & Expansion
						<div class="wow fadeInUp" data-wow-duration=".3s" data-wow-delay="300ms">
							<div class="items ite rite modmore" id="Q2 - 2019">
								<div class="glyph-icon" style="font-weight:bold;" id="q2">read more</div>
							</div>
							<div class="none" id="Open API">
								The Open API is the first scaling-step within the YOON Ecosystem. Our protocol is designed to be deployed to an infinite number of participants and connecting them (and their services) to the YOON Ecosystem. 
								<p>This first scaling step (Open API) is at the same time an imporant milestone for the YOON Token-Model.</p>
								Marketing and PR-actions for the YOON Ecosystem (Protocol) and our Apps (IOS, Android, web) will play an imporant role in this quarter, as well.
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="item">
				<div class="animate quart" data-animate="bounceIn" data-duration="1.0s" data-delay="0.3s">
					<b>Q3</b>
					<div class="small top10">
						Expansion
						<div class="wow fadeInUp" data-wow-duration=".3s" data-wow-delay="300ms">
							<div class="items ite rite modmore" id="Q3 - 2019">
								<div class="glyph-icon" style="font-weight:bold;" id="q2">read more</div>
							</div>
							<div class="none" id="Expansion">
								Making YOON popular. Based on our funding we fokus on marketing and PR for YOON.Depending on their popularity, possible spin offs from our Tool Box (Phase 3).<p>YOON Tokenholders receive unique opportunity to participate.
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="item">
				<div class="animate quart" data-animate="bounceIn" data-duration="1.0s" data-delay="0.4s">
					<b>Q4</b>
					<div class="small top10">
						Spin Off
						<div class="wow fadeInUp" data-wow-duration=".3s" data-wow-delay="300ms">
							<div class="items ite rite modmore" id="Q4 - 2019">
								<div class="glyph-icon" style="font-weight:bold;" id="q2">read more</div>
							</div>
							<div class="none" id="Spin off">
								Our most popular products will get their own structure with own marketing, PR and develop-team, to become even more powerful.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<br class="clear">
<div class="clear space"><img src="https://www.yoon.online/img/space_mobile3.png"></div>

<div class="pc">
	<h3 style="margin:-20px 0 40px 0;">Scaling</h3><div style="margin:0;" class="center small">visualized: Q2 &#187; Q4 / 2019</div>

	<div class="">
		<div class="block animate sma" data-animate="bounceIn" data-duration="1.0s" data-delay="0.4s" style="">
			<center> 
				<img src="/img/3-phases-yoon.png" alt="3 Phases - YOON" id="phaseimg">
			</center>
			<br class="clear">
		</div>
	</div>
	<br class="clear">
	<div class="clear space"><img src="https://www.yoon.online/img/space_mobile3.png"></div>
</div>
	
<h3>YOON Token Crowdsale</h3>

<div id="crowdsale">
<p>More information is coming soon!</p>

	<div class="item">
		<div class="animate quart" data-animate="bounceIn" data-duration="1.0s" data-delay="0.3s">
			<b>The YOON Token</b>
			<div class="small top10">
				Crowdsale key data
				<div class="modmore" id="The YOON Token" style="border:1px solid #ccc;border-radius:6px;padding:6px;width:100px;margin:15px 0;">read more</div>

				<div class="none" id="privatsale">
					<img src="/img/yoon-token3.png" alt="YOON Token" width="110" style="float:left;margin-right:10px;">The YOON Token is based on the Stellar Network, and will be tradeable fron day zero, after the ICO is over.
					<p>For understanding the role of the YOON Token, have a look at our Token Model .</p>
					<b>Important facts</b>
					<ul>
						<li>We will not sell more than 73,034,500,000 YOON Tokens in the crowdsale, this is our hard-cap.</li>
						<li>1000 YOON Tokens will be sold at 1 Euro.</li>
						<li>There will be a timebased bonus scaling during the crowdsale.</li>
						<li>No more Tokens can and will be issued either after the hardcap is reached or the ICO is timed out.</li>
						<li>Tokens that are not sold during the crowdsale will be burned.</li>
						<li>The binding terms and provision of the YOON Token sale will be outlined in the Terms & Conditions, published on our website.</li>
					</ul>
					<center><b>Token allocation</b></center><br>
					<img src="/img/token-allocation.png" id="toalo">
				</div>
			

				<img src="/img/yoon-token3.png" alt="YOON Token" width="110">
			</div>
		</div>
	</div>
	<div class="item">
		<div class="animate quart" data-animate="bounceIn" data-duration="1.0s" data-delay="0.3s" style="">
			<b>Private Pre-Sale</b>
			<div class="small top10">
				May 2018
				<div class="items ite rite modmore" id="Pivate Pre-Sale" style="background:#804db5;color:#FFFFFF;cursor:pointer;border:1px solid #ccc;border-radius:6px;padding:6px;width:100px;margin:15px 0;">
					read more
				</div>
				<div class="none" id="privatsale">
					Our private pre-sale will start in may 2018.<p>The contingent of the private pre-sale is limited to 5% of the issued YOON Tokens, and will be distributed on a "first come, first serve"-basis.</p>
					Depending on the ticket-size we will give you a bonus up to 75%, starting from 20k USD.
					<p>
					You will receive the YOON Tokens on a separate Stellar-Wallet which is "frozen" until the end of the ICO. Directly after that your Tokens will be trade- and transferable.
					<div style="background:#f5f5f5;padding:5px;margin-top:15px;font-size:1.1em;">If you are interested in participating in our private pre-sale, send us an email to: <a href="<?
					$PageConfig['presale-email'] = preg_replace_callback('/./', function($m) {
					   return '&#'.ord($m[0]).';';
				       },
				       'mailto:presale@yoon.online');
					echo$PageConfig['presale-email'] ;
					?>?subject=Private%20Presale">&#112;&#114;&#101;&#115;&#097;&#108;&#101;&#064;&#121;&#111;&#111;&#110;&#046;&#111;&#110;&#108;&#105;&#110;&#101;</a>								
					</div>
				</div>
				<img src="/img/pre-sale-private.png" alt="Private Pre-Sale" width="140" class="pulsate-css">				
			</div>
		</div>
	</div>
	<div class="item">
		<div class="animate quart" data-animate="bounceIn" data-duration="1.0s" data-delay="0.3s">
			<b>Public Pre-Sale</b>
					
			<div class="small top10">
				May/June 2018
				<div style="border:1px solid #ccc;border-radius:6px;padding:6px;width:140px;margin:15px 0;">info coming soon</div>
				<img src="/img/pre-sale-public.png" alt="Public Pre-Sale" width="110" style="opacity: 0.5;filter: alpha(opacity=50);">
			</div>
		</div>
	</div>
	<div class="item">
		<div class="animate quart" data-animate="bounceIn" data-duration="1.0s" data-delay="0.3s">
			<b>ICO</b>
			<div class="small top10">
				from June 2018 (tba)
				<div style="border:1px solid #ccc;border-radius:6px;padding:6px;width:140px;margin:15px 0;">info coming soon</div>
				<img src="/img/ico1.png" alt="YOON ICO" width="110" style="opacity: 0.5;filter: alpha(opacity=50);">
			</div>
		</div>
	</div>
	
</div>
<!--
The YOON ITS will be structured in two parts. We will be starting with a Pre-Sale which is followed by a Main Sale.
<p>The sale price for the YOON Tokens during the ITS are fixed at 1 EUR = 1000 YOON, whereas special Pre-Sale discounts will apply as outlined below.</p>
-->
<br class="clear">
<div class="clear space"><img src="https://www.yoon.online/img/space_mobile3.png"></div>

<h3>Pre-ICO Bonus</h3>

<div id="bacac" class="shad"></div>

<div class="animate" data-animate="bounceIn" data-duration="1.0s" data-delay="0.2s" id="bacac2">
	<form class="modal-content shad" action="<?=$config['absolutpfad'].$config['login'];?>/pre-signup.php" method="post" autocomplete="nope"onsubmit="return checkForm4(this);">
		<div class="container" id="signupform">
			<h3 style="margin:20px 0 10px 0;">Secure your 5% Extra-Bonus here</h3>
			<?=(isset($_SESSION['ref'])?'Promo-Code: <b>'.$_SESSION['ref'].'</b>':'');?>
					
			<div class="small modmore tobo10" id="YOON Tokensale Info">
				[read more]
			</div>
			<div class="none" id="Bonusstages" style="width:300px;">
				<div class="center" style="margin-top:-20px;">
					<img src="/img/yoon-token2.png" alt="YOON Token" width="110" height="110"><br>
					<img src="/img/ico-on-stellar.png">

					<p>Save an <b>5% Extra-Bonus</b> on top, in registering now!</p>
					<p>Our bonus structure (for the YOON Tokensale):</p>
				</div>
				<table width="100%" class="tabe tobo10">
					<tr class="taueb"><td>Stage</td><td>Time</td><td>Bonus</td></tr>
					<tr><td>Private Pre-Sale</td><td>May</td><td>45% to 75%</td></tr>
					<tr class="taunge"><td>Public Pre-Sale</td><td>May/June</td><td>35%</td></tr>
					<tr><td>ICO</td><td>week 1 and 2</td><td>25%</td></tr>
					<tr class="taunge"><td>ICO</td><td>week 3 and 4</td><td>20%</td></tr>
					<tr><td>ICO</td><td>week 5 and 6</td><td>15%</td></tr>
					<tr class="taunge"><td>ICO</td><td>week 7 and 8</td><td>10%</td></tr>
				</table>
			
			Interested in participating our Private Pre-Sale?
			<br>(minimum Invest: 20k USD)<p>Mail us to: <a href="<?
					$PageConfig['presale-email'] = preg_replace_callback('/./', function($m) {
					   return '&#'.ord($m[0]).';';
				       },
				       'mailto:presale@yoon.online');
					echo$PageConfig['presale-email'] ;
					?>?subject=Private%20Presale">&#112;&#114;&#101;&#115;&#097;&#108;&#101;&#064;&#121;&#111;&#111;&#110;&#046;&#111;&#110;&#108;&#105;&#110;&#101;</a>
			</div>	
			<!--<h3 style="margin:20px 0 10px 0;">Secure your Earlybird-Bonus here!</h3>-->
			
			<p><b style="color:#0eb8e8">upcoming</b></p>
			<img src="/img/ico-on-stellar.png">
			<!--<p id="expdate2" class="exclu"></p>-->
			<div class="none"><input class="hide" type="password" tabindex="-1"/></div>
			<div style="padding:12px 0;">
				<input id="email" type="email" placeholder="Your Email Address"<?=(!empty($_POST['email'])?' value="'.$_POST['email'].'"':'');?> size="40" class="em<?=(isset($error['email'])?' error':'');?>"<?=(isset($error['email'])?' style="border:1px solid red;background:#ff8273 !important;"':'');?> name="email" required>
				<div id="emerr"></div>
				<input type="password" placeholder="Select Password" class="pw<?=(isset($error['password'])?' error':'');?>" name="password" autocomplete="off" autocomplete="new-password" required>
				<div id="pwerr"></div>
				<?
				
				/*<input type="password" placeholder="Confirm Password" class="pw<?=(isset($error['password2'])?' error':'');?>" name="password2" autocomplete="off" autocomplete="new-password" required readonly onfocus="this.removeAttribute('readonly');" >*/
				
				?>
				<div class="small left tobo10"><img src="<?=$config['absolutpfad'].$config['img'];?>/secure.png" width="15" height="18" style="float:left;margin-right:10px;" alt="Secure" title="Secure Password"><span class="more">[Password policy: read more]</span><p class="show-more"><b>For your own safety:</b> Choose at least one uppercase, one lowercase and one number within your password.</p></div>
				<div style="width:100%">
				<div class="clear g-recaptcha" data-sitekey="6Lc1JE8UAAAAAKtGDPheixNvWeBI3SIazefCKI4P"<?=(isset($error['captcha'])?'':'');?>></div>
				</div>
				<div class="small" style="margin:30px 0 10px 2px;text-align:left;">
					<input type="checkbox"<?=(isset($_POST['terms'])?' checked="checked"':'');?> name="terms" required> Agree to our <a href="<?=$config['absolutpfad'].$config['formal'];?>/terms.php" target="_blank" class="normsmall">Terms & Conditions</a>
				</div>
				<input type="hidden" name="register" value="1">
				<input type="submit" name="submit" value="Signup">
				<!--<div class="small" style="margin:0;margin:-5px 0 0 0;">or</div>
				<div class="button fblue fbl">Login with Facebook</div>-->
			</div>
		</div>

		<div class="right pad15 small">
			If you want to participate in the private pre-sale for the<br>YOON ICO, send us an email to: <a href="<?=$PageConfig['presale-email'];?>?subject=Private%20Presale">&#112;&#114;&#101;&#115;&#097;&#108;&#101;&#064;&#121;&#111;&#111;&#110;&#046;&#111;&#110;&#108;&#105;&#110;&#101;</a>								
			<br class="clear">
		</div>
	</form>
</div>
	<!--<br class="clear"><div class="col-2" style="padding:0;margin:0;">
		<div	id="reco">
		<h2>Limited Pre-Sale Bonus (35%)</h2>
			<div class="small" style="margin-top:-8px;">The offer is valid only as long as the supply lasts!
				<br>Deadline will be reached latest in:
			</div><center>
			<p id="expdate2" class="exclu"></p>
			</center>
			<img src="<?=$config['absolutpfad'].$config['img'];?>/yoon_evidence_1.jpg?t=<?=time();?>" alt="YOON - The power of evidence" title="YOON - The power of evidence" id="imgpow">		
			<!--<h3>Want to contribute?</h3>
			<button id="contribute" class="cta">Buy YOON now!</button>
			
		</div>
	-->
<br class="clear">
<div class="clear space" style="margin-top:0px;"><img src="https://www.yoon.online/img/space_mobile3.png"></div>

<h3>Become part of something meaningful!</h3>

	<h1>YOON</h1>
	<h2 class="h12">"The power of evidence"</h2>
	
	<h3>Evidence protection, by leveraging blockchain technology.</h3>
	<!--<h2>What is special about YOON?</h2>
	<div class="box" style="text-align:center;font-size:1.2em;line-height:1.7em;">YOON will reduce fraud and corruption, by leveraging blockchain technology.<br>This will have a positive social impact on a global scale and save a lot of money.</div>
</div>
	<!--
	<img
	src="/img/yoon-evidence-protection.png" alt="YOON - Evidence protection" title="YOON - Evidence protection" 
	srcset="/img/yoon-evidence-protection_m.png 400w,
	/img/yoon-evidence-protection.png 800w"
	sizes="(min-width: 300px) 100vw,
	(min-width: 800px) 800px, 800px">
	<br>
	-->
	<div class="pc">
		<img src="/img/scale_evidence_scale.png?i=2" alt="YOON - Evidence protection" title="YOON - Evidence protection" id="">
		<!--<img src="/img/yoon_evidence_protection.png?i=2" alt="YOON - Evidence protection" title="YOON - Evidence protection" id="dreibi_d">-->
	</div>
	<div class="mobi" style="margin-bottom:30px;">
		<img src="/img/yoon-evidence-protection_m_n.png" alt="YOON - Evidence protection" title="YOON - Evidence protection" id="dreibi_m">
	</div>
<br class="clear">
<div class="clear space"><img src="https://www.yoon.online/img/space_mobile3.png"></div>
<h3>Follow us on Facebook and Twitter</h3>
<div class="animate">
	<a href="https://www.facebook.com/yoonvision/" target="_blank"><img src="/img/facebook.png" width="80" height="80" alt="Become Fan in the YOON-Facebook group" style="margin-right:20px;"></a>
	<a href="https://twitter.com/YOONvision" target="_blank"><img src="/img/twitter.png" width="80" height="80" alt="Follow YOON on Twitter"></a>
</div>

<br class="clear">
<div class="clear space"><img src="https://www.yoon.online/img/space_mobile3.png"></div>
			<h3>Legal Notice</h3>
		<div class="small" style="margin-top:30px;"><p>YOON Limited</p>Flat B-F, 16/F Phase 2, Vigor Industrial Building<br>49-53 Ta Chuen Ping Street, Kwai Chung<p>Hong Kong</p></div>
</div>
</div>

</center>
</div>
<style>
.responsive-video iframe {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
}
.responsive-video {
position: relative;
padding-bottom: 56.25%; /* Default for 1600x900 videos 16:9 ratio*/
padding-top: 0px;
height: 0;
overflow: hidden;
}

</style>

<div id="videopause">
	<img src="img/backbutton.gif" id="backbutton" alt="Back" title="Back to the website!">
</div>

<div id="over" class="responsive-video">
	<iframe id="video" src="https://player.vimeo.com/video/256229412?title=0&byline=0&portrait=0" width="900" height="506" style="margin:auto;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
</div>

<div id="scrolltop">top</div>
<?
// Basismodal einbinden
include_once($config['basispfad'].$config['design'].'/modal_simple2.inc.php');


?>
<!--
<script type="text/javascript">
function click (e) {
  if (!e)
    e = window.event;
  if ((e.type && e.type == "contextmenu") || (e.button && e.button == 2) || (e.which && e.which == 3)) {
    if (window.opera)
      window.alert("");
    return false;
  }
}
if (document.layers)
  document.captureEvents(Event.MOUSEDOWN);
document.onmousedown = click;
document.oncontextmenu = click;
</script>-->
<script>
$(document).ready(function(){

$(document).bind("contextmenu",function(e){
   return false;
 });

$(".modmore").click(function(){
	var elem = $(this);
	var ele = elem.attr('id');
	var text = $(this).next().html();
	
	$("#modal9tit").text(ele);
	$("#modal9in").html(text);
	$("#modal9").show();
	
	$("#modal9").css("display","block");
	//alert(text);
});

$(".temore").click(function(){
	var elem = $(this);
	var ele = elem.attr('id');
	var text = $(this).parent().parent().next().children(".modmore2").first().html();

	$("#modal9tit").text(ele);
	$("#modal9in").html(text);
	$("#modal9").show();
	
	$("#modal9").css("display","block");
	//alert(text);
});

$('.animate').scrolla({
mobile: true
});

$(document).on("click", ".more", function(event){
	$(this).next('.show-more').slideToggle( "slow" );
});

$(document).click(function(e) { 
	if ($(e.target).hasClass('modal2') || $(e.target).hasClass('modcot')) {
		$(".modal2").hide();
		return false;
	}
});

$(".modclose").click(function(){
	$(".modal2").hide();
});



$("#scrolltop").click(function(){
$("html, body").animate({ scrollTop: 0 }, "fast");
});

//$( "#hodl" ).delay(1000).fadeOut( "slow", function() {
});

		<?if(isset($_GET['s']) && $_GET['s']==1){?>
		alert("SERWERL 121");
		<?}
		?>
var iframe = document.getElementById('video');
	var player = $f(iframe);

	$("#videowatch").click(function(){
		<?if(isset($_GET['s']) && $_GET['s']==1){?>
		alert("SERWERL");
		<?}
		?>
	
		$(".responsive-video").show();
		player.api("play");
		$("#videopause").show();
	});
	$("#videopause").click(function(){
		$(this).hide();
		$("html, body").animate({ scrollTop: 0 }, "fast");
		player.api("pause");
		$(".responsive-video").hide();
	});


$(".fbl").on("click",function(){
	$("#molo").show();
	console.log("kcd");
	//$("#molo").css("display","block");
	var coo = 0;
	var url      = window.location.href;
	if("logout" == url.substr(30, 6)){
		var url	= "<?=$config['absolutpfad'];?>";	
	}else if("login" == url.substr(30, 5)){
		var url = url.replace("/login/login.php?uri=", "/");
	}
	
	alert(url);
	FB.init({
		appId      : '177131886273505',
		cookie     : true,
		xfbml      : true,
		version    : 'v2.10'
	});
	//var G = GetURLParameter('G');
	console.log("kcd2");	
	
	FB.getLoginStatus(function(response){
			
		if (response.status === 'connected'){
			console.log("oh ok");
			var coo = response.authResponse.accessToken;
			if(readCookie('fbtok2') === null){
				console.log("1st");
				createCookie2("fbtok2",coo,0.1);
			}
		}
		var hei = $(window).height();
		var wi = $(window).width();
		
		$.ajax({
		type: 	"POST",
		url:		"<?=$config['absolutpfad'].$config['helper'];?>/fbconnect.inc.php",
		data: 	{coo : coo,uri:url,width:wi,height: hei},
		success: 	function(result){
		//alert(JSON.stringify(result));
		//alert(result);
			if(result.fb_typ == 1){
			console.dir(result);
				console.log("1l"+url+" -- "+result.fb_statu+" !!");				
				if(result.fb_statu == 2){
					console.log("SIGMA");
					location.href=url;
				}else if(result.fb_statu == 1 && result.auth != ''){
					console.log("FOMO");
					location.href=result.auth;
				}else{
					console.log("LAKRITZ");
				}
			}else if(result.fb_typ == 2){
				console.log("2");
				location.href=url;
			}else if(result.fb_typ ==3){
				console.log("3");
				location.href=result.auth;
			}else if(result.fb_typ ==4){
				console.log("4");
				location.href="<?=$config['absolutpfad'].$config['login'];?>/signup.php?G=989";
			}else{
				console.log("5");
			}
		},
		error: function (error){
			console.log(error);
		}
		});	
	}); 
});
// Load the SDK asynchronously
(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/sdk.js";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

function readCookie(name){
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}

function createCookie2(name,value,days){
	if(days){
		var date = new Date();
		date.setTime(date.getTime()+(20*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}

function createCookie(name,value,days){
	if(days){
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}

var $win = $(window);

function checkScroll() {
    if ($win.scrollTop() > 700) {
	$('#promocode').fadeOut(1000);
	$('#scrolltop').fadeIn(1000);
    }else{
	$('#promocode').fadeIn(1000);
	$('#scrolltop').fadeOut(1000);
    }
}
$win.scroll(checkScroll);
</script>
<script src="<?=$PageConfig['absolutpfad'];?>js/js_o.js?i=1"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="js/frogaloop.js"></script>
</body>
</html>