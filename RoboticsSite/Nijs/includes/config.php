<?php
	switch ($_SERVER["SCRIPT NAME"]) {
		case "../calendar.php":
			$CURRENT_PAGE = "calendar";
			$PAGE_TITLE = "242 Firebirds | Calendar";
			break;
		case "../index.php":
			$CURRENT_PAGE = "index";
			$PAGE_TITLE = "242 Firebirds | Home";
		case "../teams.php":
			$CURRENT_PAGE = "teams";
			$PAGE_TITLE = "242 Firebirds | Team";
		default:
			$CURRENT_PAGE = "oh no";
			$PAGE_TITLE = "242 Firebirds";
	}
?>