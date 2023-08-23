<?php 
    session_start();
?>
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

    if($_SESSION['authentication']){


    

    ?>

<a class="btn btn-warning" href="studentform.php">Add student</a>
<a class="btn btn-danger" href="logout.php">Logout</a>



<table class="table">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Password</th>
        <th>Phone no</th>
        <th>Email</th>
        <th>Edid</th>
        <th>Delete</th>
    </tr>
<?php
include("db.php");

$qry="SELECT * FROM student";
$results=mysqli_query($con,$qry);

if($results){
    // header('location:index.php');
    // echo"haris";
}
else{
    echo"Data is not inserted";
}


foreach($results as $result){
    echo "<tr><td>".$result['id']."</td>
    <td>".$result['name']."</td>
    <td>".$result['password']."</td>
    <td>".$result['phone']."</td>
    <td>".$result['email']."</td>
    <td><a class='btn btn-success' href='edit.php? id=".$result['id']."'>Edit</a></td>
    <td><a class='btn btn-danger' href='delete.php? id=".$result['id']."'>Delete</a></td>
     </tr>";
    
}

}
else{
    echo"login first";
}

?>





</table>



</body>
</html>