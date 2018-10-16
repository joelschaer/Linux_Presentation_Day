<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/about.php":
			$CURRENT_PAGE = "About"; 
			$PAGE_TITLE = "About Us";
			break;
		case "/distrib.php":
			$CURRENT_PAGE = "Distrib"; 
			$PAGE_TITLE = "Distributions Linux";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Bienvenue à la Linux Presentation Day!";
	}
?>