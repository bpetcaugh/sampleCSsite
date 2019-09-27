<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "":
			$CURRENT_PAGE = "About"; 
			$PAGE_TITLE = "About Us";
			break;
		case "calendar.html":
			$CURRENT_PAGE = "Calendar"; 
			$PAGE_TITLE = "242 Calendar";
			break;
		case "/team.php":
			$CURRENT_PAGE = "Homepage";
			$PAGE_TITLE = "242 Robotics Homepage";
	}
?>