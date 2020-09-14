// Creating the Stripe instance first
var stripe = Stripe('pk_test_51HKiBYLCI7SLTY8PXmZkc4yzVhKVELDY6v5jaDdeZYcbzjGLQDdvd3crNonswpSr67v3JLUIdFpWoYmGgNSRLcWN00K3JsjTWK');
var elements = stripe.elements();

// Create an instance of the card UI component
var card = elements.create('card', {
    'style': {
      'base': {
        'fontFamily': 'Cairo, sans-serif',
        'fontSize': '15px',
        'color': '#333333',//#C1C7CD
        '::placeholder': {
            color: '#cecece'
        }
      },
      'invalid': {
        'color': '#fa755a',
      }
    }
  });

// Mount the UI card component into the `card-element` <div>
card.mount('#card-element');

// // Accessing the card element
// const cardElement = document.getElementById('card-element');

// Handling events and errors
card.on('change', function(event) {
    var displayError = document.getElementById('card-errors');
    if (event.error) {
      displayError.textContent = event.error.message;
    } else {
      displayError.textContent = '';
    }
  });

//  Securely collect card details through token
function stripeTokenHandler(token) {
    // Insert the token ID into the form so it gets submitted to the server
    var form = document.getElementById('payment-form');
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token.id);
    form.appendChild(hiddenInput);
  
    // Submit the form
    form.submit();
}

function createToken() {
    stripe.createToken(card).then(function(result) {
        if (result.error) {
        // Inform the user if there was an error
        var errorElement = document.getElementById('card-errors');
        errorElement.textContent = result.error.message;
        } else {
        // Send the token to your server
        stripeTokenHandler(result.token);
        }
    });
};

// Create a token when the form is submitted.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(e) {
e.preventDefault();
createToken();
});