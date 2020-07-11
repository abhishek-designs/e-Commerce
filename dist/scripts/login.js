// Accessing the login btn
const loginBtn = document.querySelector('.login-btn');

// Accesing both the input fields
const mailContain = document.querySelector('.mail');
const pwdContain = document.querySelector('.pwd');

mailContain.addEventListener('keyup',onType);
pwdContain.addEventListener('keyup',onType);

function onType(event)
{

    checkFields();
    
}

function checkFields()
{
    var mail = mailContain.value;
    var pwd = pwdContain.value;

    if(mail == '' || pwd == '')
    {
        loginBtn.disabled = true;
        loginBtn.classList.remove('btn-unique');
        loginBtn.classList.add('btn-med');
    }
    else
    {
        loginBtn.disabled = false;
        loginBtn.classList.remove('btn-med');
        loginBtn.classList.add('btn-unique');
    }
}

// Adding functionality to show password btn
const showBtn = document.querySelector('.show-btn');
var eye = showBtn.querySelector('.fa-eye-slash');
const eyeCheck = showBtn.querySelector('.toggler');

eyeCheck.addEventListener('change',onChecked);

function onChecked(event)
{
    if(this.checked)
    {
        // If checked
        pwdContain.type = 'text';
        eye.className = 'fa fa-eye';
        
    }
    else
    {
        // If unchecked
        pwdContain.type = 'password';
        eye.className = 'fa fa-eye-slash';
    }
}
