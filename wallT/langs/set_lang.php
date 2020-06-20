<?php
switch ($_SESSION['language']) {
case 'English':
	include_once $path."langs/english.php";
	break;
case 'العربية':
	include_once $path."langs/arabic.php";
	break;
case 'vietnam':
	include_once $path."langs/vietnam.php";
	break;
default:
	$_SESSION['language'] = "vietnam";
	include_once $path."langs/vietnam.php";
	break;
}
?>