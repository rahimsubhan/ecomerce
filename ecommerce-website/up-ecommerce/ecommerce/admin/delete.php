<?php

$Id = $_GET['Id'];
include 'config.php';
mysqli_query($con, "DELETE FROM `tblproduct` WHERE Id = $Id ");
header ("location: index.php");



?>