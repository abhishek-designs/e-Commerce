// Operating the function when the page gets loaded
if(document.readyState == 'loading')
{
    console.log('still loading');
    document.addEventListener('DOMContentLoaded',ready);
}
else
{
    ready();
}

// This function runs after the page gets loaded
function ready()
{
    // Accessing the remove btns
    var removeBtn = document.querySelectorAll('.remove-btn');
    for(let i=0; i<removeBtn.length; i++)
    {
        var btn = removeBtn[i];
        btn.addEventListener('click',removeItem);
    }

    // Update the bill when quantity is changed
    var quantityBox = document.querySelectorAll('.quantity');
    for(let i=0; i<quantityBox.length; i++)
    {
        var quantity = quantityBox[i];
        quantity.addEventListener('change',quantityChanged);
    }

    // Accessing the add to cart buttons
    var addBtn = document.querySelectorAll('.cart');
    for(let i=0; i<addBtn.length; i++)
    {
        var btn = addBtn[i];
        btn.addEventListener('click',addItem);
    }

    updateCart();
    // grandTotal();
}

// Function to remove items
function removeItem(event)
{
    var btn = event.target;
    var item = btn.parentElement.parentElement;
    item.remove();

    updateCart();
}

// Function to add items in cart
function addItem(event)
{
    var addPrice = this.parentElement.parentElement;
    var itemContent = addPrice.parentElement;

    var price = parseFloat(addPrice.querySelector('.lead-1').innerText.replace('₹',''));
    var img = itemContent.querySelector('.img-contain').children[0].src;
    var title = itemContent.querySelector('.head-3').innerText;

    var cartContain = document.querySelector('.carts-items');
    var prevCart = cartContain.querySelector('.cart-row');
    var cartRow = document.createElement('div');
    cartRow.classList.add('cart-row');
    
    var cartContent = '<div class="img-tab">\
                        <img src="'+img+'" alt="">\
                    </div>\
                    <div class="item-details">\
                        <h3 class="head-3">'+title+'</h3>\
                        <a class="remove-btn red lead-4">Remove</a>\
                        <div class="quantity-field">\
                            <label for="quantity" class="lead-4">Quantity</label>\
                            <input type="number" name="quantity" id="quantity" class="quantity" value="1">\
                        </div>\
                    </div>\
                    <div class="item-price">\
                        <h3 class="head-3">₹'+price+'</h3>\
                    </div>';
    
                    
    cartRow.innerHTML = cartContent;
    cartContain.append(cartRow);

    // Remove items from newly added items to cart
    var removeBtn = cartRow.querySelectorAll('.remove-btn');
    for(let i=0; i<removeBtn.length; i++)
    {
        var btn = removeBtn[i];
        btn.addEventListener('click',removeItem);
    }
    
    // Update quantity of newly added items
    var quantityBox = cartRow.querySelectorAll('.quantity');
    for(let i=0; i<quantityBox.length; i++)
    {
        var quantity = quantityBox[i];
        quantity.addEventListener('change',quantityChanged);
    }
    
    // Update items with newly added items to cart
    updateCart();
    // grandTotal();



    // var itemBox = document.querySelectorAll('.product');
    // for(let i=0; i<itemBox.length; i++)
    // {
    //     var items = itemBox[i];
    //     var item = items.querySelectorAll('.box');
    //     for(let i=0; i<item.length; i++)
    //     {
    //         var mainItem = item[i];
    //         console.log(mainItem);
    //     }
    // }
}

// Function runs when quantity is changed
function quantityChanged(event)
{
    var qty = event.target;
    if(isNaN(qty.value) || qty.value <= 0)
    {
        qty.value = 1;
    }
    updateCart();
}

// Function to update the total price
function updateCart()
{
    var cartContain = document.querySelector('.carts');
    var cartItem = document.querySelector('.carts-items');
    var cartHead = cartItem.querySelector('.head-2');
    var noItem = cartContain.querySelector('.no-items');
    var cartRow = cartItem.querySelectorAll('.cart-row');
    var cartBill = cartItem.nextElementSibling;
    var itemTotal = cartBill.querySelector('.total');

    // Selecting Navbar
    var nav = document.querySelector('.navbar');
    var cartIndicate = nav.querySelector('.cart-indicate');
    
    var total = 0;
    var itemNum = cartRow.length;

    // updating the item number on heading according to the item added
    cartHead.innerText = 'MY CART('+itemNum+')';
    cartIndicate.innerText = itemNum;

    // When there is no items in the cart this UI will be enabled;
    if(cartRow.length == 0)
    {
        noItem.style.display = 'flex';
        cartItem.style.display = 'none';
    }
    else
    {
        noItem.style.display = 'none';
        cartItem.style.display = 'block';
    }


    for(let i=0; i<cartRow.length; i++)
    {
        var row = cartRow[i];
        var itemQuantity = row.querySelector('.quantity');
        var itemPrice = row.querySelector('.item-price');
        var quantity = itemQuantity.value;
        var price = itemPrice.innerText;

        price = parseFloat(price.replace('₹',''));
        total = total + (quantity*price);
        
    }
        
    itemTotal.innerText = '+ '+total;
    grandTotal(total);
}

// Function to calculate the total price of an item
function grandTotal(total)
{
    var cartBill = document.querySelector('.carts-billing');
    var totalPrice = cartBill.querySelector('.grand');
    var discountTab = cartBill.querySelector('.discount');
    var shipping = parseFloat(cartBill.querySelector('.shipping').innerText.replace('+ ',''));
    var discount = parseFloat(cartBill.querySelector('.discount').innerText.replace('%',''));
    // var grandTotal = parseFloat(cartBill.querySelector('.grand').innerText.replace('₹',''));

    // discount = 10; // Discount 10% off it depends upon the coupons applied by user
    var grandTotal = 0;
    discount = discount/100;

    var discounted = total*discount;
    // discounted = Math.round(discounted*100)/100;
    // discountTab.innerText = '- '+discounted;

    grandTotal = total - discounted + shipping;
    grandTotal = Math.round(grandTotal*100)/100;
    totalPrice.innerText = '₹'+grandTotal;
}