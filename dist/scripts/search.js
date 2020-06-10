for(let i=0; i<2; i++)
{

    // grabbing the controls
    const srchBtn = document.querySelectorAll('.srch-btn')[i];
    const closeBtn = document.querySelector('.cancel-btn');
    
    // grabbing the search box
    const searchBox = document.querySelector('.search');
    
    // adding functionality to the controls
    srchBtn.addEventListener('click',function(){
    
        // toggle settings
        if(searchBox.style.transform == 'translateY(-300px)')
        {
            searchBox.style.transform = 'translateY(0)';
            // searchBox.style.position = 'absolute';
            this.classList.add('selected');
        }
        else
        {
            searchBox.style.transform = 'translateY(-300px)';
            this.classList.remove('selected');
        }
        // console.log('hello');
    });
    
    closeBtn.addEventListener('click',function(){
        if(srchBtn.classList == 'selected')
        {
            srchBtn.classList.remove('selected');
        }
        searchBox.style.transform = 'translateY(-300px)';
    });
}