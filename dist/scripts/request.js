// Accessing the submit btn
const submit = document.querySelector('.submit');

// Accessing the inputted data
const nameContain = document.querySelector('.name');
const mailContain = document.querySelector('.mail');
const pwdContain = document.querySelector('.pwd-field');
const cpwdContain = document.querySelector('.cpwd-field');

// Error pop up
var errPop = document.querySelectorAll('.err-msg');

// Adding functionality to all the fields when value is null
nameContain.addEventListener('focusout',blankField);
mailContain.addEventListener('focusout',blankField);
pwdContain.addEventListener('focusout',blankField);
cpwdContain.addEventListener('focusout',blankField);


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

// Adding functionality to the fields when value is typed
nameContain.addEventListener('keyup',onType);
mailContain.addEventListener('keyup',onType);
pwdContain.addEventListener('keyup',onType);
cpwdContain.addEventListener('keyup',onType);

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

        confirmPwd(value);
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
    if(pwd == '' || pwd == null)
    {
        correct.style.display = 'none';
    }



}

// Adding functionality to btn
submit.addEventListener('click',onSubmit);

function onSubmit(event)
{
    // Accessing data of each fields
    const name = nameContain.value;
    const mail = mailContain.value;
    const pwd = pwdContain.value;
    const cpwd = cpwdContain.value;

    // Creating an XHR object
    var xhr = new XMLHttpRequest();

    // Specifying location to the server
    xhr.open('POST','server.php',true);

    // Sending data through POST method
    xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
    xhr.send('name='+name+'& mail='+mail+'& pwd='+pwd+'& cpwd='+cpwd);

    // Executing the onreadystatechange() function
    xhr.onreadystatechange = function()
    {
        nameContain.classList.remove('error');
        mailContain.classList.remove('error');
        pwdContain.classList.remove('error');
        cpwdContain.classList.remove('error');

        for(let i=0; i<errPop.length; i++)
        {
            errPop[i].style.display = 'none';
        }

        var txt = this.responseText;

        if(this.readyState == 4 && this.status == 200)
        {
            if(txt == '0')
            {
                nameContain.classList.add('error');
                errPop[0].style.display = 'flex';
            }
            if(txt == '1')
            {
                mailContain.classList.add('error');
                errPop[1].style.display = 'flex';
            }
            if(txt == '2')
            {
                pwdContain.classList.add('error');
                cpwdContain.classList.add('error');

                errPop[2].style.display = 'flex';
                errPop[3].style.display = 'flex';
            }
            if(txt == '01')
            {
                nameContain.classList.add('error');
                errPop[0].style.display = 'flex';

                mailContain.classList.add('error');
                errPop[1].style.display = 'flex';                
            }
            if(txt == '02')
            {
                nameContain.classList.add('error');
                errPop[0].style.display = 'flex';

                pwdContain.classList.add('error');
                errPop[2].style.display = 'flex';   

                cpwdContain.classList.add('error');
                errPop[3].style.display = 'flex';                
            }
            if(txt == '12')
            {
                mailContain.classList.add('error');
                errPop[1].style.display = 'flex';     

                pwdContain.classList.add('error');
                errPop[2].style.display = 'flex';   

                cpwdContain.classList.add('error');
                errPop[3].style.display = 'flex';       
            }
            if(txt == '012')
            {
                nameContain.classList.add('error');
                errPop[0].style.display = 'flex';
                
                mailContain.classList.add('error');
                errPop[1].style.display = 'flex';     

                pwdContain.classList.add('error');
                errPop[2].style.display = 'flex';   

                cpwdContain.classList.add('error');
                errPop[3].style.display = 'flex';   
            }
            console.log(txt);
        }
    }
}