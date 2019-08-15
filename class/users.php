<?php
/**
 * 
 */
class Users extends Dbh
{
	
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