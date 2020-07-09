// Accessing the submit btn
const submit = document.querySelector('.submit');

// Accessing the inputted data
const nameContain = document.querySelector('.name');
const mailContain = document.querySelector('.mail');
const pwdContain = document.querySelector('.pwd-field');
const cpwdContain = document.querySelector('.cpwd-field');
const addContain = document.querySelector('.add-field');
const phoneContain = document.querySelectorAll('.phone-field');
const stateContain = document.querySelector('.state-field');
const cityContain = document.querySelector('.city-field');

// Error pop up
var errPop = document.querySelectorAll('.err-msg');

// Adding functionality to all the fields when value is null
nameContain.addEventListener('focusout',blankField);
mailContain.addEventListener('focusout',blankField);
pwdContain.addEventListener('focusout',blankField);
cpwdContain.addEventListener('focusout',blankField);
addContain.addEventListener('focusout',blankField);
stateContain.addEventListener('focusout',blankMenu);
cityContain.addEventListener('focusout',blankMenu);

for(let i=0; i<phoneContain.length; i++)
{
    var phoneNo = phoneContain[i];
    phoneNo.addEventListener('focusout',blankField);
}

function blankField(event)
{
    var parent = event.target.parentElement;
    var value = event.target.value;
    var err = parent.querySelector('.err-msg');

    if(value == '' || value == null)
    {
        this.classList.add('error');
        err.style.display = 'flex';
    }
    else
    {
        this.classList.remove('error');
        err.style.display = 'none';
        console.log('Value Filled');
    }
}

function blankMenu(event)
{
    value = event.target.value;
    console.log(value);

    if(value == 'select')
    {
        this.classList.add('error');
    }
    else
    {
        this.classList.remove('error');
    }
}

// Adding functionality to the fields when value is typed
nameContain.addEventListener('keyup',onType);
mailContain.addEventListener('keyup',onType);
pwdContain.addEventListener('keyup',onType);
cpwdContain.addEventListener('keyup',onType);
addContain.addEventListener('keyup',onType);

for(let i=0; i<phoneContain.length; i++)
{
    var phoneNo = phoneContain[i];
    phoneNo.addEventListener('Keyup',onType);
}

function onType(event)
{
    var parent = event.target.parentElement;
    var value = event.target.value;
    var err = parent.querySelector('.err-msg');

    if(!(value == '') || !(value == null))
    {
        err.style.display = 'none';
    }
}

// Focusing on Email Validation
mailContain.addEventListener('keyup',mailValidate);

function mailValidate(event)
{
    var parent = event.target.parentElement;
    var value = event.target.value;
    var error = parent.querySelector('.error-ball');
    var correct = parent.querySelector('.correct-ball');

    

    var pattern = /@./;

    // Getting positions of @ and .(dot)
    var atIndex = value.indexOf('@');
    var dotIndex = value.indexOf('.');
    var totalLen = value.length;

    if(!(value == '') || !(value == null))
    {
        correct.style.display = 'none';
        error.style.display = 'flex';
        
        if(pattern.test(value))
        {
            if(atIndex < 1 || totalLen - dotIndex < 2 || dotIndex - atIndex < 3)
            {
                error.style.display = 'flex';
            }
            else
            {
                error.style.display = 'none';
                correct.style.display = 'flex';
            }

        }
    }
}

// Focusing on Password Validation
pwdContain.addEventListener('keyup',pwdValidate);

function pwdValidate(event)
{
    var parent = event.target.parentElement;
    var value = event.target.value;
    var error = parent.querySelector('.error-ball');
    var correct = parent.querySelector('.correct-ball');

    var pattern = /[*@!&$#]/;

    error.style.display = 'flex';
    correct.style.display = 'none';

    if(pattern.test(value) && value.length >= 8)
    {
        console.log('good password');
        error.style.display = 'none';
        correct.style.display = 'flex';
    }
    else
    {
        console.log('bad password');
        error.style.display = 'flex';
        correct.style.display = 'none';
    }
}

cpwdContain.addEventListener('keyup',confirmPwd);

function confirmPwd(event)
{
    var parent = event.target.parentElement;
    var pwd = pwdContain.value;
    var cpwd = event.target.value;
    var correct = parent.querySelector('.correct-ball');

    if(cpwd == pwd)
    {
        correct.style.display = 'flex';
    }
    else
    {
        correct.style.display = 'none';
    }



}
