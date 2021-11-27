const stripe = Stripe('pk_test_51JhYE9EsSA3dVfnSOQeS26tCRHT8D7U00cIi9LolSbdX9KV7ejQUz7TyPdpVWHjPK5i7G5EhCYZXzbFJpdRYs3kS00r8HgIT9O');
const donacion = document.querySelector('#donacion')
const bronze = document.querySelector('#bronze')
const silver = document.querySelector('#silver')
const gold = document.querySelector('#gold')


bronze.addEventListener('click', () => {
    fetch('/stripe/checkout?subscription=1', {
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

silver.addEventListener('click', () => {
    fetch('/stripe/checkout?subscription=2', {
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


gold.addEventListener('click', () => {
    fetch('/stripe/checkout?subscription=3', {
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