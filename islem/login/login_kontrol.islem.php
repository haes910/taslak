<?php
//postları yakala
$userName=trim($_POST['userName']);
$pass	 =trim($_POST['pass']);
$result=$users->login($userName,$pass);
if ($result!=0) {
	$_SESSION['user_id']=$result['user_id'];
	header('location:index.php');
}else{
	echo "hata mesajı";
}

?>