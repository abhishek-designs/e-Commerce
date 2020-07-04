const btn = document.querySelector('.submit');
const nameContain = document.querySelector('.name');
const mailContain = document.querySelector('.mail');
const commentContain = document.querySelector('.comment');

var nameMsg = document.querySelector('.name-msg');
var mailMsg = document.querySelector('.mail-msg');
var commentMsg = document.querySelector('.comment-msg');

nameContain.addEventListener('focusout',blankField);
mailContain.addEventListener('focusout',blankField);
commentContain.addEventListener('focusout',blankField);
mailContain.addEventListener('keyup',onInput);

function blankField(event)
{
    var value = event.target.value;
    if(value == '' || value == null)
    {
        this.classList.add('error');
    }
    else
    {
        this.classList.remove('error');
    }
}

function onInput(event)
{
    var value = event.target.value;
    var pattern = /@./;
    var atIndex = value.indexOf('@');
    var dotIndex = value.indexOf('.');
    var totalLen = value.length;
    this.style.outline = 0;
    

    if(pattern.test(value))
    {
        console.log(atIndex);
        if(atIndex < 1 || totalLen - dotIndex < 2 || dotIndex - atIndex < 3)
        {
            console.log('invalid');
            this.borderColor = 'red';
        }
        else
        {
            console.log('Fine');
            this.style.borderColor = 'green';
        }

    }
    else
    {
        console.log('invalid');
        this.style.borderColor = 'red';
    }

    

    // if(value == '' || value == null)
    // {
    //     this.classList.add('error');
    //     this.style.outline = 0;
    // }
    // else
    // {
    //     this.classList.remove('error');
    //     this.style.outline = '1px';
    // }
}

btn.addEventListener('click',onClick);
function onClick(event){

    const name= nameContain.value;
    const mail= mailContain.value;
    const comment= commentContain.value;

    nameMsg.innerHTML = '';
    mailMsg.innerHTML = '';
    commentMsg.innerHTML = '';

    nameContain.classList.remove('error');
    mailContain.classList.remove('error');
    commentContain.classList.remove('error');

    var req = new XMLHttpRequest();
    req.open('POST','test2.php',true);
    req.setRequestHeader('content-type','application/x-www-form-urlencoded');
    req.send('name='+name+'&& mail='+mail+'&& comment='+comment);

    req.onreadystatechange = function(){
        var text = this.responseText;

        if(this.readyState == 4 && this.status == 200)
        {
            var msg = document.querySelector('.server');
            if(text == '0')
            {
                nameContain.classList.add('error');
            
            }
            if(text == '1')
            {
                mailContain.classList.add('error');

            }
            if(text == '2')
            {
                commentContain.classList.add('error');

            }
            if(text == '01')
            {
                nameContain.classList.add('error');
                mailContain.classList.add('error');
            }
            if(text == '02')
            {
                nameContain.classList.add('error');
                commentContain.classList.add('error');
            }
            if(text == '12')
            {
                mailContain.classList.add('error');
                commentContain.classList.add('error');
            }
            if(text == '012')
            {
                nameContain.classList.add('error');
                mailContain.classList.add('error');
                commentContain.classList.add('error');
            }
            // else 
            // {
            //     msg.innerHTML = '<h2>'+this.responseText+'</h2>';
            // }
        }
    }
}