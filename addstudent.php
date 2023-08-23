<?php

// STEP 1 GET DATA
// POST IS USED TO DELIVERD DATA FROM ONE PLACE TO ANOTHER 
include("db.php");

$name=$_POST['name'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$email=$_POST['email'];

// echo($name . "<br>" . $password. "<br>" .$phone. "<br>" .$email);


// STEP 2 
//  MAKING CONNECTION WITH DB

// $con=mysqli_connect('localhost','root','','newlogin');

if(mysqli_connect_error()){
    echo"something went wrong";
}
else{
    // echo"congrats";
}


// STEP 3
//  INSERTING DATA TO DB

$qry="INSERT INTO student(name,password,phone,email)VALUES('$name','$password','$phone','$email')";

// STEP 4
// EXECUTE THE QUERY AND CONNECTION

$result=mysqli_query($con,$qry);

if($result){
    header('location:studentdata.php');
}
else{
   echo "data is not inserted";
}







?>