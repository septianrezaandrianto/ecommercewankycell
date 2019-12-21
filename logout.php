<?php 
session_start();
session_destroy();
echo "<script>alert('Log Out Berhasil');</script>";
echo "<script>location='index.php';</script>";
?>