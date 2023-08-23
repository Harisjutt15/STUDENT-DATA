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
        <div><h1>STUDENT FORM</h1></div>
        <form action="addstudent.php" method="post" onSubmit="return validation()">

        <div id="M"> 
           <label>NAME : </label>
            <input type="text" name="name" placeholder="Enter your Name" id="NAME" >   
            <span  id="NAMEERROR" style="color: red;"></span>     
        </div>

        <div id="M"> 
            <label>PASSWORD : </label>
            <input type="text" name="password" placeholder="Enter your Password" id="PASS" >
            <span  id="PASSERROR" style="color: red;"></span>
         </div>
       <div id="M"> 
            <label>PHONE NO : </label>
            <input name="phone"  placeholder="Enter your Number" id="PHON" >
            <span style="color: red;" id="PHONERROR"></span>
            </div>
         <div id="M"> 
            <label>EMAIL : </label>
            <input type="" name="email"  placeholder="Enter your Email" id="MAIL" >
            <span style="color: red;" id="MAILERROR"></span>
         </div> 

<button value="submit" type="submit">SUBMIT</button>
        </form>

    </div>
    <script src="index.js"></script>
    
</body>
</html>

