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

