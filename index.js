
// alert('hello')





function validation(){
	
let name=document.getElementById('NAME').value;
let pass=document.getElementById('PASS').value;
let phon=document.getElementById('PHON').value ;
let mail=document.getElementById('MAIL').value;
let pattern=/^[^ ]+@[^ ]+\.[a-z]{2,3}$/; 



document.getElementById('NAMEERROR').innerHTML="";
document.getElementById('PASSERROR').innerHTML="";
document.getElementById('PHONERROR').innerHTML="";
document.getElementById('MAILERROR').innerHTML="";

if(name==""){
    document.getElementById('NAMEERROR').innerHTML="ENTER YOUR NAME"
    return false
}


if(pass==""){
    document.getElementById('PASSERROR').innerHTML="ENTER YOUR PASSWORD"
    return false
}
else if(pass.length<8 || pass.length>15){
    document.getElementById('PASSERROR').innerHTML="Password must be between 8 to 15 characters";
    return false
}


if(phon==""){
    document.getElementById('PHONERROR').innerHTML="Enter your Phone Number"
    return false
}
else if(isNaN(phon)){
    document.getElementById('PHONERROR').innerHTML="PHONE ONLY CONTAIN NUMERIC"   ;
    return false; 

}
if(mail==""){
    document.getElementById('MAILERROR').innerHTML="Enert your Email"
    return false
}
 if(mail.match(pattern)){

}
else{
    document.getElementById('MAILERROR').innerHTML = 'Enter a Valid Email';
    return false
}


}
