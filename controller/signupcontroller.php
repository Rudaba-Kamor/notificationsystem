<?php
include('../model/database.inc.php');
session_start();
$msg="";
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	
		include('../model/signup_sql.php');
		$sql=getdata($username);
		
		
		$res=mysqli_query($con,$sql);
		if(mysqli_num_rows($res)>0){
			$row=mysqli_fetch_assoc($res);
			
			$msg="Username is already taken";
		}else{
			adddata($name,$username,$password);
	
			$msg="Succesfully Created a account";
		}
	

}

?>