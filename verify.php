<?php
session_start();
$user=0;
$name=$_POST['name'];
$password=$_POST['password'];

// echo($name . "<br>" . $password);

include("db.php");


// $con=mysqli_connect('localhost','root','','newlogin');

// if(mysqli_connect_error()){
//     echo"something went wrong";
// }
// else{
//     echo"congrats";
// }




$qry="SELECT * FROM userdata WHERE name='$name' AND password='$password'";
$result=mysqli_query($con,$qry);

foreach($result as $row){
    if($row['name']==$name && $row['password']==$password){
        $user=1;
     
    }
    
}
if($user==1){
    // echo"welcomen bro";  

    $_SESSION['authentication']=$name;
    header('location:studentdata.php');
}
else{
    // echo"kithy bro";
    header('location:login.php');
    echo"The User Name or Password is Incorrect";
}







?>