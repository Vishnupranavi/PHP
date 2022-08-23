const form = document.querySelector('#form_validation');
const usernameInput = document.querySelector('#rolename');
const emailInput = document.querySelector('#email');
const passwordInput = document.querySelector('#password');
const confirmpasswordInput = document.querySelector('#confirmpassword');
 
form.addEventListener('submit',(event)=>{
    validateForm();
    if(isFormValid()==true)
    {
        form.submit();
    }
    else
    {
        event.preventDefault();
        return false;
    }
});

function isFormValid()
{
    const inputContainers = form.querySelectorAll('.form-group')
    let result = true;
    inputContainers.forEach((container)=>{
        if(container.classList.contains('error'))
        {
            result = false;
        }
    })
    return result;
}
function validateForm(){

    if(usernameInput.value.trim()=='')
    {
        setError(usernameInput,'Name cannnot be blank');
    }
    else if(!isUserName(usernameInput.value))
    {
        setError(usernameInput,"Name should contain only characters,numbers,underscore,dot and hypen");
    }
    else if(usernameInput.value.trim().length<5||usernameInput.value.trim().length>15)
    {
        setError(usernameInput,"Name should must be 5 to 15 characters long");
    }
    else{
        setSuccess(usernameInput,"valid Name");
    }
    if(emailInput.value.trim()=='')
    {
        setError(emailInput,"Email cannot be blank");
    }
    else if(!isEmail(emailInput.value))
    {
        setError(emailInput,"Not a valid Email ID");
    }
    else
    {
        setSuccess(emailInput,"Valid Email");
    }
    if(passwordInput.value.trim()=='')
    {
        setError(passwordInput,"Password cannot be blank");
    }
    else if(!isPassword(passwordInput.value))
    {
        setError(passwordInput,"Not a valid password");
    }
    else{
        setSuccess(passwordInput,"Valid Password");
    }
    if(confirmpasswordInput.value.trim()=='')
    {
        setError(confirmpasswordInput,"Password cannot be empty");
    }
    else if((confirmpasswordInput.value )!=(passwordInput.value))
    {
        setError(confirmpasswordInput,"Password does not match");
    }
    else 
    {
        setSuccess(confirmpasswordInput,"password matched");
    }
}
function setError(element,errorMessage)
{
    const parent = element.parentElement;
    parent.classList.add('error');
    if(parent.classList.contains('success'))
    {
          parent.classList.remove('success');
    }
    const message = parent.querySelector('p');
    message.textContent = errorMessage;
}
function setSuccess(element,successMessage)
{
    const parent = element.parentElement;
    parent.classList.add('success');
    if(parent.classList.contains('error'))
    {
        parent.classList.remove('error');
    }
    const message = parent.querySelector('p');
    message.textContent=successMessage;
}
function isUserName(rolename)
{
    const rolenamePattern = /^[a-zA-Z\._-]+$/;
    return rolenamePattern.test(rolename);
}
function isEmail(email)
{
    const emailPattern = /^([a-zA-Z0-9]{5,20})+@([a-zA-Z]{3,5})+\.([a-zA-Z\.]{3,10})+$/;
    return emailPattern.test(email);
}
function isPassword(password)
{
    const passwordPattern = /^[a-zA-Z0-9!@#$%^&*]{6,16}$/;
    return passwordPattern.test(password);
}
function isConfirmPassword(confirmpassword)
{
    const confirmpasswordPattern = /^[a-zA-Z0-9!@#$%^&*]{6,16}$/;
    return confirmpasswordPattern.test(confirmpassword);
}