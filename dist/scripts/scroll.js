// const navbar = document.querySelector('#navbar');
// const searchBox = document.querySelector('.search');

// let scrolled = false;

// window.onscroll = function()
// {
//     if(window.pageYOffset > 100)
//     {
//         navbar.style.background = 'rgba(255,255,255,0.95)';
//     }
//     else
//     {
//         navbar.style.background = '#fff';
//     }
//     // console.log('scrolled');

// }

const toggle = document.querySelector('.toggler');
toggle.addEventListener('click',onChecked);


var checked = false;

function onChecked()
{
    if(checked == false)
    {
        checked = true;
    }
    else
    {
        checked = false;
    }

    this.checked = checked;

    if(this.checked)
    {
        console.log('checked');
        disableScroll();
    }
    else
    {
        console.log('unchecked');
        enableScroll();
    }
}

// const screen = document.body.style.overflow;



// Control scrolling
window.addEventListener('scroll',disableScroll);
window.addEventListener('scroll',enableScroll);

function disableScroll()
{
    document.body.style.overflow = "hidden";
}

function enableScroll()
{
    document.body.style.overflow = "auto";
}