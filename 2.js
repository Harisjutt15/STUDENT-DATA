
// alert('hello')





function validation(){
	
    let name=document.getElementById('NAME2').value;
    let pass=document.getElementById('PASS2').value;
  
    
    
    
    document.getElementById('NAMEERROR').innerHTML="";
    document.getElementById('PASSERROR').innerHTML="";
    
    if(name==""){
        document.getElementById('NAMEERROR').innerHTML="ENTER YOUR NAME";
        return false;
    }
    
    
    if(pass==""){
        document.getElementById('PASSERROR').innerHTML="ENTER YOUR PASSWORD";
        return false;
    }
    else if(pass.length<8 || pass.length>15){
        document.getElementById('PASSERROR').innerHTML="Password must be between 8 to 15 characters";
        return false;
    }
    

    
    
    }
    