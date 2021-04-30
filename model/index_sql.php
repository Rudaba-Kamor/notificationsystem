<?php
	function getdata($username, $password) {
	  
	   $sql="select * from user where username='$username' and password='$password'";
	   return $sql;
	}

?>