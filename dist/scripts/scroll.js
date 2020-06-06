const navbar = document.querySelector('#navbar');
const searchBox = document.querySelector('.search');

let scrolled = false;

window.onscroll = function()
{
    if(window.pageYOffset > 100)
    {
        navbar.style.background = 'rgba(255,255,255,0.95)';
    }
    else
    {
        navbar.style.background = '#fff';
    }
    // console.log('scrolled');

}