<?php

// STEP 1 GET DATA
// POST IS USED TO DELIVERD DATA FROM ONE PLACE TO ANOTHER 

$name=$_POST['name'];
$password=$_POST['password'];

// echo($name . "<br>" . $password. "<br>" .$phone. "<br>" .$email);


// STEP 2 
//  MAKING CONNECTION WITH DB
include("db.php");

// $con=mysqli_connect('localhost','root','','newlogin');

if(mysqli_connect_error()){
    echo"something went wrong";
}
else{
    // echo"congrats";
}


// STEP 3
//  INSERTING DATA TO DB

$qry="INSERT INTO userdata(name,password)VALUES('$name','$password')";

// STEP 4
// EXECUTE THE QUERY AND CONNECTION

$result=mysqli_query($con,$qry);

if($result){
    header('location:login.php');
}
else{
   echo "data is not inserted";
}







?>