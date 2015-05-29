<?php
require_once $_SERVER["DOCUMENT_ROOT"]."\includes\View.php";
require_once $_SERVER["DOCUMENT_ROOT"]."\includes\AppleManager.php";

require_once $_SERVER["DOCUMENT_ROOT"]."\includes\DescriptionManager.php";
use ArcherSys\Viewer\Contrib\View;
use ArcherSys\Config\AppleManager;
use ArcherSys\Config\MobileManager;
use ArcherSys\Config\DescriptionManager;
use ArcherSys\Config\HTTPDescriptionManager;
$oi = new View("Oi: Realtime Web Notification App",function(){
  DescriptionManager::addCharset();
DescriptionManager::addViewport("width=device-width, initial-scale=1.0");
HTTPDescriptionManager::addCompatibilityConfig("IE=edge,chrome=1");
           DescriptionManager::addDescription("OI Realtime Web Notifications for ArcherSys OS");
           DescriptionManager::addAuthor("Weldon Henson @ACOKing");
           AppleManager::enableIPhoneWebAppMode();
           MobileManager::enablePhoneWebAppMode();
         ?>
	

	<link rel="stylesheet" href="css/style.css">
<?php
},function(){
?>

	<header class="navbar">
		<h1>Oi! &bull; Realtime Web Notification Demo</h1>
		<a href="http://github.com/pubnub/oi-web-notifications/" target="_blank"><span class="icon-github"></span></a>
	</header>

	<section class="main" role="main">
		<header class="greetibngs">
			<h2>Oi!</h2>
			<input type="text" placeholder="Type your name to start" maxlength="30" autofocus> 
			<p class="intro"></p>
		</header>

		<ul class="list">
		</ul>
	</section>

	<footer>
	Currently supported on: 
		<span class="icon-opera"></span> 
		<span class="icon-chrome"></span> 
		<span class="icon-safari"></span>
		<span class="icon-firefox"></span>
	</footer>

	<script src="http://cdn.pubnub.com/pubnub.min.js"></script>
	<script src="js/app.js"></script>
<?php
});
?>