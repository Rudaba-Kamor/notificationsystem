<?php
session_start();
unset($_SESSION['UID']);
header('location:../view/index.php');
die();

?>