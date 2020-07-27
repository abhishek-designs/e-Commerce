// Accessing the cart quantity showing component
const nav = document.querySelector('.navbar');
const cartNum = nav.querySelector('.cart-indicate');

// Accessing the parent element of the btn first
const parent = document.querySelector('.products-showcase');
const cartBtn = parent.querySelectorAll('.cart-tab');

// Fetching each cart btn
for(let i=0; i<cartBtn.length; i++)
{
    var btn = cartBtn[i];
    
    // Making the btn functional
    btn.addEventListener('click',updateCart);
}

function updateCart(event)
{
    var xhr = new XMLHttpRequest();
    xhr.open("GET","partials/_updateCart.php?product_id=401&user_id=1",true);
    xhr.send();

    xhr.onreadystatechange = function()
    {
        if(this.readyState == 4 && this.status == 200)
        {
            console.log(this.responseText);
        }
    }

    var xhr2 = new XMLHttpRequest();
    xhr2.open("GET","partials/_cartItemNo.php",true);
    xhr2.send();
    
    xhr2.onreadystatechange = function()
    {
        if(this.readyState == 4 && this.status == 200)
        {
            cartNum.innerText = this.responseText;
        }
    }

}
