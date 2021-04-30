<?php
include('../model/database.inc.php');
session_start();
$msg="";
if(!isset($_SESSION['UID'])){
	?>
	<script>
		window.location.href='../view/index.php';
	</script>
	<?php
}

$uid=$_SESSION['UID'];
include('../model/dashboard_sql.php');	
	
if(isset($_POST['submit'])){
	$to_id=mysqli_real_escape_string($con,$_POST['to_id']);
	$message=mysqli_real_escape_string($con,$_POST['message']);
	
	adddata($uid, $to_id ,$message);		
	$msg="Message send";
}

$res_message=getdata($uid);


$unread_count=mysqli_num_rows($res_message);


$sql_user= getdatatwo();
$res_user=mysqli_query($con,$sql_user);
?>