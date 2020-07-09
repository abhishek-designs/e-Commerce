// Accessing the Handling Tabs
const remBtn = document.querySelector('.close-btn');

remBtn.addEventListener('click',removeTab);

function removeTab(event)
{
    this.parentElement.parentElement.remove();
}