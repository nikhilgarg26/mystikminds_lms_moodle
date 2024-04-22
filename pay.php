<?php
require('config.php');
require('razorpay-php/Razorpay.php');
session_start();

// Create the Razorpay Order

use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);

$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$email = $_POST['email'];
$phno = $_POST['phno'];
$price = $_GET['price'];
$title = $_GET['course'];
$courseid = $_GET['courseid'];

$orderData = [
    'receipt'         => '3456',
    'amount'          => $price * 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];

$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR') {
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

if ($displayCurrency !== 'INR') {
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

// $json = json_encode($data);

require("automatic.php");
