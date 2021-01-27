<?php  
	include ('connect.php');
	if (isset($_GET['page_layout'])) {
		switch ($_GET['page_layout']) {
			case 'danhsach':
				include ('danhsach.php');
				break;
			case 'them':
				include ('them.php');
			    break;
			case 'sua':
				include ('sua.php');
				break;
			case 'xoa':
				include ('xoa.php');
			break;
			default:
				include ('danhsach.php');
				break;
		}
	}
	else {
		include ('danhsach.php');
	}
?>