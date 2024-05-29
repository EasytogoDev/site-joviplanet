// Initialize Stripe.js
const stripe = Stripe('pk_test_51HyJOeJG9a16oR13iIqKc5Z3PPEjKOe7vMy0UuDswYn1pk3hX5FzIoXqHrbeOQpR3PpJuV7R6EcmiZkKAcz94Swc00zZQ1XJL6');
AOS.init();

initialize();

// Fetch Checkout Session and retrieve the client secret
async function initialize() {
  const fetchClientSecret = async () => {
    const response = await fetch("/create-checkout-session", {
      method: "POST",
    });
    const { clientSecret } = await response.json();
    return clientSecret;
  };

  // Initialize Checkout
  const checkout = await stripe.initEmbeddedCheckout({
    fetchClientSecret,
  });

  // Mount Checkout
  checkout.mount('#checkout');
}