<?php
/**
 * 
 */
class Users extends Dbh
{
	//user bilgileri bş 
	public function user ($p1,$p2){

		$sql='SELECT * FROM users 
			  where '.$p1.'=?';
		$deyim=parent::db()->prepare($sql);
		$deyim->execute([$p2]);	
		$row=$deyim->fetch(PDO::FETCH_ASSOC);
		  	return $row;
	}
	//user bilgileri bt
	
	public function login ($p1,$p2){

		$sql='SELECT * FROM users 
			  where userName=? and pass=?';
		$deyim=parent::db()->prepare($sql);
		$deyim->execute([$p1,$p2]);	
		$adet=$deyim->rowCount();
		if ($adet==1) {
			$row=$deyim->fetch(PDO::FETCH_ASSOC);
		  	return $row;
		  }else{
		  	return 0;
		  }  

	}
}