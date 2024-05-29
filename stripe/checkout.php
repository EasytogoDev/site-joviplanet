<?php

require_once('../vendor/autoload.php');
require_once('../secrets.php');

$stripe = new \Stripe\StripeClient($stripeSecretKey);

session_start();

$checkout_session = $stripe->checkout->sessions->create([
  'line_items' => [[
    'price_data' => [
      'currency' => 'EUR',
      'product_data' => [
        'name' => '[Profissionais] Plano mensal (25 imóveis)',
      ],
      'unit_amount' => 4900,
    ],
    'quantity' => 1,
  ]],
  'mode' => 'subscriptions',
  'success_url' => 'http://localhost:4242/success',
  'cancel_url' => 'http://localhost:4242/cancel',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url); 