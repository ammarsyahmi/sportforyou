<?php
require"config.php";
$id=$_GET['delete_id'];
$res=mysqli_query($conn,"DELETE FROM peralatan WHERE id=$id");
 echo "<script> alert('Data Sudah Dihapuskan');
 window.location='papar.php'</script>";
?>