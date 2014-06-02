<?php
// Master
error_reporting(E_ALL);
$slaves="slaves";
if (!file_exists($slaves)) {
	mkdir($slaves);
}
$slaves.="/";
if (isset($_REQUEST['id'])) {
	// checking if ID exist
	if (!file_exists($slaves.$_REQUEST['id'].".txt")) {
		// It doesn't request Full data and network position
		file_put_contents($slaves.$_REQUEST['id'].".txt", "sn\t".$_REQUEST['id']);
		echo "documentation";
	} else {
		if (isset($_REQUEST['order'])) {
			$mastersorder=$_REQUEST['order'];
			if ($mastersorder=="documentation") {
				$local_ip="\r\nlocal_ip\t".$_REQUEST['local_ip']."\r\n";
				$public_ip="public_ip\t".$_REQUEST['public_ip']."\r\n";
				$localnetwork="localnetwork\t".$_REQUEST['localnetwork']."\r\n";
				file_put_contents($slaves.$_REQUEST['id'].".txt", $local_ip.$public_ip.$localnetwork, FILE_APPEND | LOCK_EX);
			}
		}
	}
} else {
	// Redirect to interface
	header("Location: ui.php");
}
?>