<?php
include('db_connect.php');
$nid=$_GET['id'];

$pq=mysqli_query($conn,"select uname from users where id='$nid'");
$q=mysqli_query($conn,"delete from users where id='$nid'");

header('location:index.php?page=manage_users');

?>
