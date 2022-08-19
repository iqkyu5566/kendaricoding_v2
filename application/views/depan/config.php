<?php
	session_start();

	if (!isset($_SESSION['bhs']))
		$_SESSION['bhs'] = "en";
	else if (isset($_GET['bhs']) && $_SESSION['bhs'] != $_GET['bhs'] && !empty($_GET['bhs'])) {
		if ($_GET['bhs'] == "en")
			$_SESSION['bhs'] = "en";
		else if ($_GET['bhs'] == "bs")
			$_SESSION['bhs'] = "bs";
	}

	require_once "bahasa/" . $_SESSION['bhs'] . ".php";
?>