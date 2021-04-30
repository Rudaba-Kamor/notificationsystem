<?php

function adddata($uid, $to_id ,$message) {
	  $con=mysqli_connect("localhost","root","","user");
	  mysqli_query($con,"insert into messages(from_id,to_id,message) values('$uid','$to_id','$message')");
	  
	}
	function getdata($uid) {
	  $con=mysqli_connect("localhost","root","","user");
	 $sql= mysqli_query($con,"select user.name,messages.message from messages,user where messages.status=0 and messages.to_id='$uid' and user.id=messages.from_id");
	  return $sql;
	}

	function getdatatwo() {
	  
	 $sql= "select id,name from user order by name asc";
	   return $sql;
	}



?>