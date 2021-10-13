const stripe = Stripe('pk_test_51JhYE9EsSA3dVfnSOQeS26tCRHT8D7U00cIi9LolSbdX9KV7ejQUz7TyPdpVWHjPK5i7G5EhCYZXzbFJpdRYs3kS00r8HgIT9O');
const btn = document.querySelector('#btn')

btn.addEventListener('click', () => {

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