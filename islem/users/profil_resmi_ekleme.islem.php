<?php
if (isset($_POST['submit'])) {
	$file=$_FILES['inpFile'];

	$fileName=$_FILES['inpFile']['name'];
	$fileTmpName=$_FILES['inpFile']['tmp_name'];
	$fileSize=$_FILES['inpFile']['size'];
	$fileError=$_FILES['inpFile']['error'];
	$fileType=$_FILES['inpFile']['type'];

	// dosya ismi ve uzuntasını işlemek için diziye çevir
	$fileExt=explode('.',$fileName);
	//fileExt Dizininin son elemanını yanı dosya uzantısını alalım
    $format=strtolower(end($fileExt));
	// izin verilen uzantıları belirleyelim
	$formatlar=array('jpg','jpeg','png');

	if (in_array($format, $formatlar)) {
		if ($fileError===0) {
			if ($fileSize < 500000) {
				$yeni_isim=uniqid('',true).".".$format;
				$fileDestination='img/profil/'.$yeni_isim;
				move_uploaded_file($fileTmpName, $fileDestination);
				echo 'resim Yüklendi';
			} else {
				echo 'Resim Boyutu Çok Büyük';
			}
			
		} else {
			echo 'bir hata oluştu';
		}
		
	} else {
		echo 'dosya formatı uygun değil';
	}
	
}


//$user_row=$users->user('user_id',$_SESSION['user_id']);

?>