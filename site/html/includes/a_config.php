<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/distrib.php":
			$CURRENT_PAGE = "Distrib"; 
			$PAGE_TITLE = "Distributions Linux";
			break;	
      case "/app.php":
			$CURRENT_PAGE = "App"; 
			$PAGE_TITLE = "Applications";
			break;
		case "/ecole.php":
			$CURRENT_PAGE = "Ecole"; 
			$PAGE_TITLE = "Heig-VD";
			break;
        case "/msg.php":
            $CURRENT_PAGE = "Commentaires";
            $PAGE_TITLE = "Laissez nous un Commentaire !!";
            break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Linux Presentation Day";
	}
?>