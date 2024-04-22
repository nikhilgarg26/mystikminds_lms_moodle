<?php
include "config.php";
include 'db_connection.php';
session_start();
// Include the Razorpay SDK
require('razorpay-php/Razorpay.php');

use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";



if (empty($_POST['razorpay_payment_id']) === false) {

    $api = new Api($keyId, $keySecret);
    try {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_POST['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    } catch (SignatureVerificationError $e) {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}else{
    echo json_encode($error);
}

if ($success === true) {
    $sql = "INSERT INTO orders (first_name,last_name,email,order_id,course_id,payment_id,signature,amount,user_id,status, phno) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['razorpay_order_id'], $_POST['courseid'], $_POST['razorpay_payment_id'],$_POST['razorpay_signature'],$_POST['amount'],$_POST['user_id'],'DONE',$_POST['phno']]);

    $sql = "INSERT INTO mycourses (course_id, user_id) VALUES (?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['courseid'], $_POST['user_id']]);

    $_SESSION['courses_enrolled'][] = $_POST['courseid'];
    echo json_encode(['verified' => true]);
} else {
    echo json_encode(['verified' => false]);
}
