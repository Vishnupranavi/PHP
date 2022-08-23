function validations(input,showError,pattern,errorMessage)
{
    if(!pattern.test(input))
    {
        showError.innerHTML = errorMessage;
    }
    else
    {
        showError.style.display = "none";
        return input;
    }
}

function nameValid()
{
    return validations(document.getElementById('name').value,document.getElementById('nameerr'),/^([A-Za-z\s]){5,}$/,"Invalid Name");
}
function emailValid()
{
    return validations(document.getElementById('email').value,document.getElementById('emailerr'),/^([a-zA-Z0-9]){5,}@([a-z]){5}.(com)$/,"Invalid Email");
}
function passValid()
{
    return validations(document.getElementById('password').value,document.getElementById('passworderr'),/^([a-z0-9]){6,}$/,"Invalid Password");
}
function check(event)
{
    event.preventDefault();
    if(nameValid() && emailValid() && passValid)
    {
        return 1;
    }
}
function button()
{
    nameValid();
    emailValid();
    passValid();
}