<?php
include('../model/database.inc.php');
session_start();
$msg="";
if(isset($_POST['submit'])){
		$username=mysqli_real_escape_string($con,$_POST['username']);
		$password=mysqli_real_escape_string($con,$_POST['password']);
		
		
		include('../model/index_sql.php');

	$sql= getdata($username, $password);
	$res=mysqli_query($con,$sql);
	if(mysqli_num_rows($res)>0){
		$row=mysqli_fetch_assoc($res);
		$_SESSION['UID']=$row['id'];
		?>
		<script>
			window.location.href='../view/dashboard.php';
		</script>
		<?php
	}else{
		$msg="Please enter correct login details.";
	}
}

?>