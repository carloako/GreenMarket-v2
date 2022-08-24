<?php
ob_start(); 
$conn->close();
ob_end_clean();
ob_end_flush();
header("Location: index.php");
echo "<script>window.location.href='./index.php';</script>";
die;
exit;
?>