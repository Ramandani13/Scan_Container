<?php
// include database connection file
include "koneksi.php";
 
// Get id from URL to delete that user

 
// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM tb_va_input_exim WHERE dok = '2' ");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>