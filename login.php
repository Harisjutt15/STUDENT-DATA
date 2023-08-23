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
        <div><h1>Login</h1></div>
        <form action="verify.php" method="post" onSubmit="return validation()">

        <div id="M"> 
           <label>NAME : </label>
            <input type="text" name="name" placeholder="Enter your Name" id="NAME2" >   
            <span  id="NAMEERROR" style="color: red;"></span>     
        </div>

        <div id="M"> 
            <label>PASSWORD : </label>
            <input type="text" name="password" placeholder="Enter your Password" id="PASS2" >
            <span  id="PASSERROR" style="color: red;"></span>
         </div>

<button value="submit" type="submit">submit</button>
<div>Don't have an account <a href="signup.php">Sign up</a></div>
        </form>

    </div>
    <script src="2.js"></script>
    
</body>
</html>

