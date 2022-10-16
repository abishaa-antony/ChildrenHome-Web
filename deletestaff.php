<?php

require_once('database.php');
$id = isset($_GET['id']) ? $_GET['id'] : '';

$del = mysqli_query($conn,"delete from staff where id = '$id'"); 

if($del)
{
    mysqli_close($conn);
    echo "<script>alert('Record has been Deleted')</script>";
      header("location:viewstaff.php");
}
else
{
    echo "Error Deleting Record"; 
}
?>