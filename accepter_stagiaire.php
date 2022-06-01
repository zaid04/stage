<?php 
include "conn.php";
$cin=$_GET['cin2'];
$sql="update stagiaire set status='en cours' where cin='$cin'";
$conn->query($sql);
header("location: compte.php");

?>
