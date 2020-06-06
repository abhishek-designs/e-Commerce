for(let j=0; j<2; j++)
{
    const slider = document.querySelectorAll('.slider-box')[j].children;
    const slider1 = document.querySelectorAll('.slider-box')[0].children;

    // var slider = slide.children;

    // controllers
    const prev = document.querySelector('.prev');
    const next = document.querySelector('.next');

    // by default index number
    let index = 0;

    // initial things when page gets loaded
    // initial slide when page gets loaded
    slider[index].classList.add('active');
    
    if(j==0)
    {
        // indicator container
        const indicator = document.querySelector('.indicator');
    
        // creating the indicators function
        function createIndicator()
        {
            for(let i=0; i<slider1.length; i++)
            {
                const div = document.createElement('div');
                div.setAttribute("onclick","indicateSlide(this)");
                div.id = i;
                if(i == 0)
                {
                    div.classList.add('current');
                }
    
                indicator.appendChild(div);
                    
                
            }
            
        }

        createIndicator();
        // console.log(indicator.children);
        // adding functionality to the indicators
        function indicateSlide(element)
        {
            for(let i=0; i<indicator.children.length; i++)
            {
                indicator.children[i].classList.remove('current');
            }
            element.classList.add('current');
        
            // calling changeSlide function
            changeSlide(element.id);
        }
    
        // updating indicators
        function updateIndicator(index)
        {
            for(let i=0; i<indicator.children.length; i++)
            {
                indicator.children[i].classList.remove('current');
            }
            
            indicator.children[index].classList.add('current');
        }
    }
    //    console.log(indicator.children);
    // creating the indicators

    // the slider container which select the slides according to index number
    // adding functionality to the controllers 
    // prev btn
    prev.addEventListener('click',prevSlide);

    function prevSlide()
    {
        if(index == 0)
        {
            index = slider.length-1;
        }
        else
        {
            index--;
        }
        
        // calling changeSlide function
        changeSlide(index);
        // calling updateIndicator function
        if(j==0)
        {
            updateIndicator(index);
        }
    }

    // next btn
    next.addEventListener('click',nextSlide);

    function nextSlide()
    {
        if(index == slider.length-1)
        {
            index = 0;
        }
        else
        {
            index++;
        }

        // calling changeSlide function
        changeSlide(index);
        // calling updateIndicator function
        if(j==0)
        {
            updateIndicator(index);

        }
        
    }
    

    // now specifying the function to change the slides
    function changeSlide(index)
    {
        for(let i=0; i<slider.length; i++)
        {
            slider[i].classList.remove('active');
        }
        slider[index].classList.add('active');
    }

    // now to make the slides automatic
    function autoSlide()
    {
        nextSlide();
    }
    let timer = setInterval(autoSlide,5000);
}













