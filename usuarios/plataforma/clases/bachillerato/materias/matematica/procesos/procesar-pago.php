<?php

require_once '../../../../../vendor/autoload.php';
MercadoPago\SDK::setClientId("6168214163550142");
MercadoPago\SDK::setClientSecret("q23K4fKeC7wE8poxp1B05aUuiqTsbhJJ");

    
    $token = $_REQUEST["token"];
    $payment_method_id = $_REQUEST["payment_method_id"];
    $installments = $_REQUEST["installments"];
    $issuer_id = $_REQUEST["issuer_id"];

    MercadoPago\SDK::setAccessToken("TEST-6168214163550142-061000-ee6579ca989e2e437b1a52c64bba054a-190894637
    ");
    //...
    $payment = new MercadoPago\Payment();
    $payment->transaction_amount = 800.00;
    $payment->token = $token;
    $payment->description = "clase de guerra mundial";
    $payment->installments = $installments;
    $payment->payment_method_id = $payment_method_id;
    $payment->issuer_id = $issuer_id;
    $payment->payer = array(
    "email" => "gia@yahoo.com"
    );
    // Guarda y postea el pago
    $payment->save();
    //...
    // Imprime el estado del pago
    echo $payment->status;
    //...


?>