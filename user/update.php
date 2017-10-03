<?php
include_once("../inc/dbconn.php");
include_once("../inc/header_user.php");

$sql = 'UPDATE FROM student';

$query = mysqli_query($db, $sql);

if(!$query){
	die('SQL Error: ' . mysqli_error($db));
}

?>