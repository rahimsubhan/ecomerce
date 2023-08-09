<?php

$Id = $_GET['Id'];
$con = mysqli_connect('localhost', 'root','','ecommerce');
mysqli_query($con, "DELETE FROM `tbl_user` WHERE Id = $Id");
header("location:user.php");



?>