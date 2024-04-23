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

include 'currency_config.php';

$location_url = 'https://api.ipdata.co/?api-key=' . $ipdata . '&fields=currency';
$response = file_get_contents($location_url);
$decodedData = json_decode($response, true)['currency'];
$displayCurrency = $decodedData['code'];

$orderData = [
    'receipt'         => '3456',
    'amount'          => $price * 100,
    'currency'        => $displayCurrency,
    'payment_capture' => 1
];

try {
    $razorpayOrder = $api->order->create($orderData);

    $razorpayOrderId = $razorpayOrder['id'];

    $_SESSION['razorpay_order_id'] = $razorpayOrderId;

    $displayAmount = $amount = $orderData['amount'];

    require("automatic.php");
} catch (Razorpay\Api\Errors\BadRequestError $e) {
    echo 'Razorpay Error: ' . $e->getMessage();
    // Handle the error according to your application's needs
}
