
<?php
session_start();
include "init.php";
include "header.php";

if (isset($_SESSION['user_id'])) {
		$users=new Users;

	include "view.php";
}else{
	include "login.php";
}

include "footer.php";

?>