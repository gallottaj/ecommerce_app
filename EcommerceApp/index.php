<?php 
header("Location: home.php");
include 'Database.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);

?>