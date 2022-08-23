var button = document.getElementById('submit_button');	              	                  	               
var rolename = document.getElementById('rolename');
var email = document.getElementById('email');
var password= document.getElementById('password');	               
var cpassword=document.getElementById('confirmPassword');	          
    

rolename.addEventListener('input',() => {	        
     validations(4,rolename.value);	        
})	        
email.addEventListener('input',() => {	        
    validations(1,email.value);	        
})	  
password.addEventListener('input',()=>{	        
    validations(2,password.value);	        
})	        
cpassword.addEventListener('input',()=>{	        
     validations(3,cpassword.value);	        
})	 

function validations(index,value){           
      
    if (index ===4 ) {	        
        const regExpName =/^[a-zA-Z]+$/;	      
        if (value ==="") {	        
            document.getElementById('nameerr').textContent= "* Please fill out the field" ;	        
        }	        
        else if (value.length<= 3) {	        
            document.getElementById('nameerr').textContent= "* Username must be atleast 5 Characters";    	        
        }	        
        else if (value.length> 14) {	        
            document.getElementById('nameerr').textContent= "* Username should not exceeds 14 Characters";	        
        }	        
        else if (!(regExpName.test(value))){	        
            document.getElementById('nameerr').textContent= "* special characters and numbers are not allowed ";	        
        }	        
        else{	        
            document.getElementById('nameerr').textContent= ""	        
            return value;	        
        }	    
    }    

    //email validation                
    else if(index===1){
        const regExp = /^([a-zA-Z0-9])+@([a-zA-Z]{3,5})+\.([a-zA-Z\.]{3,10})$/;
        if (value ==="") {
            document.getElementById('emailerr').textContent= "* Please fill out the field";
        }
        else if (!(regExp.test(value))){
            document.getElementById('emailerr').textContent= "* Invalid Email";
        }
            else {document.getElementById('emailerr').textContent= "";
        }
    }
    //password validation                
    else if(index===2){
        const regExp=/^[a-zA-Z0-9]{6,10}$/;
        if(value===""){
            document.getElementById('passworderr').textContent= "* Please fill out the field";
        }
        else if(!(regExp.test(value))){
            document.getElementById('passworderr').textContent="* Password should contain atleast 6 character";
        }
        else {
            document.getElementById('passworderr').textContent= "";
            return value;
        }
    }
    //confirm passord        
    else if(index==3){	        
        if(value ===""){	        
            document.getElementById('cpassworderr').textContent= "* Please fill out the field";	        
        }	        
        else if(value=== password.value){	        
            document.getElementById('cpassworderr').textContent= "";	        
            return value;	        
        }	        
        else {	        
            document.getElementById('cpassworderr').textContent= "* Passwords don't match";  	        
        }	        
    }
}
function submitForm(event){	            
    event.preventDefault();	            
    var email1 =validations(1,email.value);	           
    var password1 = validations(2,password.value);	           
    var cpassword1 = validations(3,cpassword.value);	                
    var name1 = validations(4,rolename.value);	                 
    if(email1 && password1 && cpassword1 && name1) {	          
        return 1;	           
    }               
}
