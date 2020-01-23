<?php
//EN ESTE CODIGO RECIBIREMOS Y GESTIONAREMOS LAS NOTIFICACIONES RECIVIDAS DE MERCADO PAGO
//SEGUN EL RESULTADO DEL ESTADO DE LA COMPRA EFECTUAREMOS LA HABILITACION O NO DE LA CLASE O CURSO

require __DIR__  . '../../../../../../vendor/autoload.php';


if(isset($_GET['topic'])){
    http_response_code(200);
    require_once "../../../../../includes/sms/aviso.php";
	
	
	
	
	MercadoPago\SDK::setAccessToken("APP_USR-6168214163550142-061000-8fdabbe8a7c255dcb03cd24cfabeb2b7-190894637");

    $merchant_order = null;

    switch($_GET["topic"]) {
        case "payment":
            $payment = MercadoPago\Payment::find_by_id($_GET["id"]);
            // Get the payment and the corresponding merchant_order reported by the IPN.
            $merchant_order = MercadoPago\MerchantOrder::find_by_id($payment->order_id);
        case "merchant_order":
            $merchant_order = MercadoPago\MerchantOrder::find_by_id($_GET["id"]);
    }

    $paid_amount = 1500;
    foreach ($merchant_order->payments as $payment) {
        if ($payment['status'] == 'approved'){
            $paid_amount += $payment['transaction_amount'];
        }
    }

    // If the payment's transaction amount is equal (or bigger) than the merchant_order's amount you can release your items
    if($paid_amount >= $merchant_order->total_amount){
        if (count($merchant_order->shipments)>0) { // The merchant_order has shipments
            if($merchant_order->shipments[0]->status == "ready_to_ship") {
                print_r("Totally paid. Print the label and release your item.");

                //probamos la actualizacion aqui primero
                require __DIR__ . '../conn/conn.php'; //coneccion a la bd
                //seleccionamos la factura correspondiente al idenificador de compra recivido por MP
                $consulta_fac="SELECT * FROM fatura WHERE identificador_compra='$_GET[id]'";
                $consulta=consultarSQL($consulta_fac);
                //realizamos asociacion a esa factura en en la variable $resultado_fac para extrer el numero de refencia
                $resultado_fac=mysqli_fetch_assoc($consulta_fac);
                $ref=$resultado_fac['ref'];
    
                //actualizamos el estado de la clase asocida con el nnumero de referencia de la consulta anterior
                $query="UPDATE clases SET estado='activo' WHERE ref='$ref'";
                consultarSQL($query);
            }
        } else { // The merchant_order don't has any shipments
            print_r("Totally paid. Release your item.");
            //si el pago ha sido realizado brindamos acceso al curso
            require __DIR__ . '../conn/conn.php'; //coneccion a la bd
            //seleccionamos la factura correspondiente al idenificador de compra recivido por MP
            $consulta_fac="SELECT * FROM fatura WHERE identificador_compra='$_GET[id]'";
            $consulta=consultarSQL($consulta_fac);
            //realizamos asociacion a esa factura en en la variable $resultado_fac para extrer el numero de refencia
            $resultado_fac=mysqli_fetch_assoc($consulta_fac);
            $ref=$resultado_fac['ref'];

            //actualizamos el estado de la clase asocida con el nnumero de referencia de la consulta
            $query="UPDATE clases SET estado='activo' WHERE ref='$ref'";
            consultarSQL($query);
            
        }
    } else {
        print_r("Not paid yet. Do not release your item.");
    }
}



?>