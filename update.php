
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    






<?php


// STEP 1 GET DATA
// POST IS USED TO DELIVERD DATA FROM ONE PLACE TO ANOTHER 
$id=$_POST['id'];
$name=$_POST['name'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$email=$_POST['email'];

// echo($id."<br>".$name . "<br>" . $password. "<br>" .$phone. "<br>" .$email);


// STEP 2 
//  MAKING CONNECTION WITH DB

// $con=mysqli_connect('localhost','root','','newlogin');

// if(mysqli_connect_error()){
//     echo"something went wrong";
// }
// else{
//     // echo"congrats";
// }


// STEP 3
//  INSERTING DATA TO DB

$qry="UPDATE student SET name='$name', password='$password',phone='$phone',email='$email' where id='$id'";

// STEP 4
// EXECUTE THE QUERY AND CONNECTION
include("db.php");
$result=mysqli_query($con,$qry);

if($result){
    // echo"data updated";
    // header("Location: https://accounts-by-haris.000webhostapp.com/studentdata.php");
    echo"Data up dated Successfully";
    ?>
    <br>
   <a class="btn btn-warning" href="studentdata.php">View Updates</a>
   <?php
}
else{
   echo "data is not updated";
}
?>

</body>
</html>