<?php 
	require_once "Controller/ControllerGameK.php";
	session_start();

	$ControllerGameKs = new ControllerGameK();

	$task = isset($_GET['task'])?$_GET['task']:null;
	
	switch ($task) {
		case 'pagehome':
			$ControllerGameKs->getPageHome();
			break;
			default:
			$ControllerGameKs->getPageHome();
			break;
	}
 ?>