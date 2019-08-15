<?php
session_start();
include "init.php";


if (isset($_POST['klasor']) and isset($_POST['islem'])) {
	
	$users=new Users;
	 $klasor=$_POST['klasor'];
	 $islem=$_POST['islem'];
	include 'islem/'.$klasor.'/'.$islem.'.islem.php';
}
?>