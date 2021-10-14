const stripe = Stripe('pk_test_51JhYE9EsSA3dVfnSOQeS26tCRHT8D7U00cIi9LolSbdX9KV7ejQUz7TyPdpVWHjPK5i7G5EhCYZXzbFJpdRYs3kS00r8HgIT9O');
const donacion = document.querySelector('#btn')
const bronze = document.querySelector('#bronze')


donacion.addEventListener('click', () => {
    alert('boton funciona')
    fetch('/stripe/donacion', {
        method: 'POST',
    })
        .then(function (response) {
            return response.json();
        })
        .then(function (session) {
            return stripe.redirectToCheckout({sessionId: session.id});
        })
        .then(function (result) {
            if (result.error) {
                alert(result.error.message);
            }
        });
})

bronze.addEventListener('click', () => {
    alert('boton funciona')
    fetch('/stripe/stripe-check-out', {
        method: 'POST',
    })
        .then(function (response) {
            return response.json();
        })
        .then(function (session) {
            return stripe.redirectToCheckout({sessionId: session.id});
        })
        .then(function (result) {
            if (result.error) {
                alert(result.error.message);
            }
        });
})