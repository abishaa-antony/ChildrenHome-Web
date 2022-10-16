<?php

require_once('database.php');
$id = isset($_GET['id']) ? $_GET['id'] : '';

$del = mysqli_query($conn,"delete from donation where id = '$id'"); 

if($del)
{
    mysqli_close($conn);
    echo "<script>alert('Record has been Deleted')</script>";
      header("location:viewdonation.php");
}
else
{
    echo "Error Deleting Record"; 
}
?>