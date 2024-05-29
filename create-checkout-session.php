<?php

require 'vendor/autoload.php';

$stripe = new \Stripe\StripeClient([
  "api_key" => 'sk_test_51HyJOeJG9a16oR13Zm6R2M6OUsVEJD3ElycO5Mhbom71CHFxC7aZFUO5bRI8R7JvezZPCc5O9rnD1DjT7wFTlfZ3005l4XAYal'
]);

$checkout_session = $stripe->checkout->sessions->create([
  'line_items' => [[
    'price_data' => [
      'currency' => 'usd',
      'product_data' => [
        'name' => 'T-shirt',
      ],
      'unit_amount' => 2000,
    ],
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'ui_mode' => 'embedded',
  'return_url' => 'https://localhost/checkout/return?session_id={CHECKOUT_SESSION_ID}',
]);

  echo json_encode(array('clientSecret' => $checkout_session->client_secret)); 