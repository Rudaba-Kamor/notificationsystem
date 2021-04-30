<?php
	
	function getdata($username) {
	  
	  $sql="select * from user where username='$username'";
	   return $sql;
	}
	function adddata($name,$username,$password) {
	  $con=mysqli_connect("localhost","root","","user");
	mysqli_query($con,"insert into user (name,username,password) values('$name','$username','$password')");
	  
	}

?>