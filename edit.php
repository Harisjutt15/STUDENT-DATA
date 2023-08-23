<?php

$id=$_GET['id'];

// echo $id;
include("db.php");

// $con=mysqli_connect('localhost','root','','newlogin');
$qry="SELECT * FROM student where id='$id'";
$result=mysqli_query($con,$qry);

foreach($result as $row){
    $name=$row['name'];
    $password=$row['password'];
    $phone=$row['phone'];
    $email=$row['email'];


    // echo $name  .$password.$phone.$email;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        #MAIN{
            /* height: 500PX; */
            width: 100%;
            /* border: 1PX solid black; */
            align-items: center;
            text-align: center;
        }
        #M{margin: 30px;}
    </style>
</head>
<body>

    <div id="MAIN" >
        <div><h1>UPDATE FORM</h1></div>
        <form action="update.php" method="post" onSubmit="return validation()">

        <div id="M"> 
           <label>ID: </label>
            <input name="id" value="<?php echo $id ?>" >      
        </div>
        <div id="M"> 
           <label>NAME : </label>
            <input type="text" name="name" value="<?php echo $name ?>"  >   
                
        </div>

        <div id="M"> 
            <label>PASSWORD : </label>
            <input value="<?php  echo $password ?>"  name="password" >
            
         </div>
       <div id="M"> 
            <label>PHONE NO : </label>
            <input value="<?php echo $phone ?> "  name="phone">
          
            </div>
         <div id="M"> 
            <label>EMAIL : </label>
            <input value="<?php echo $email ?>"  name="email">
         </div> 

<button value="submit" type="submit">UPDATE DATA</button>
        </form>

    </div>
    
</body>
</html>

