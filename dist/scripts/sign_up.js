// Accessing the form cards
const card = document.querySelectorAll('.card');

// Buttons
const nextBtn = document.querySelector('.next');
const prevBtn = document.querySelector('.prev');

nextBtn.addEventListener('click',function(){
    for(let i=0; i<2; i++)
    {
        card[i].classList.remove('active');
    }
    card[1].classList.add('active');
})

prevBtn.addEventListener('click',function(){
    for(let i=0; i<2; i++)
    {
        card[i].classList.remove('active');
    }
    card[0].classList.add('active');
})