<?php

$id=$_GET['id'];
include("db.php");

// $con=mysqli_connect('localhost','root','','newlogin');
$qry="DELETE FROM student WHERE id='$id'";
$result=mysqli_query($con,$qry);

if($result){

    header('location:studentdata.php');
}
else{
    echo"Failed to delete data";
}



?>