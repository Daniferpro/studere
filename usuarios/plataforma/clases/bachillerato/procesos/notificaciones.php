<?php
//EN ESTE CODIGO RECIBIREMOS Y GESTIONAREMOS LAS NOTIFICACIONES RECIVIDAS DE MERCADO PAGO
//SEGUN EL RESULTADO DEL ESTADO DE LA COMPRA EFECTUAREMOS LA HABILITACION O NO DE LA CLASE O CURSO

require __DIR__  . '../../../../../../vendor/autoload.php';


if(isset($_GET['topic'])){
    http_response_code(200);
  
	
	MercadoPago\SDK::setAccessToken("APP_USR-6168214163550142-061000-8fdabbe8a7c255dcb03cd24cfabeb2b7-190894637");

    $merchant_order = null;

    switch($_GET["topic"]) {
        case "payment":
            $payment = MercadoPago\Payment::find_by_id($_GET["id"]);
            // Get the payment and the corresponding merchant_order reported by the IPN.
            $merchant_order = MercadoPago\MerchantOrder::find_by_id($payment->order->id);
            break;
        case "merchant_order":
            $merchant_order = MercadoPago\MerchantOrder::find_by_id($_GET["id"]);
            break;
    }

    $paid_amount = 0;
    foreach ($merchant_order->payments as $payment) {
       
        if ($payment->status == 'approved'){
            $paid_amount += $payment->transaction_amount;
        }
    }

    // If the payment's transaction amount is equal (or bigger) than the merchant_order's amount you can release your items
    if($paid_amount >= $merchant_order->total_amount){
         // The merchant_order don't has any shipments
            print_r("Totally paid. Release your item.");
        } else {
        print_r("Not paid yet. Do not release your item.");
    }

}

?>