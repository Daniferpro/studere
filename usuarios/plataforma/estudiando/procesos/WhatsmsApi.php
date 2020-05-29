<?php 
class WhatsmsApi 
{
    var $apikey;
    
    public function setApiKey($apikey){
        $this->apikey = $apikey;
    }

    public function sendSms($phone, $message){
        if(empty($phone)){
            return array("status" => false, "message" => "example -> api->sendSms('+5555555555','message'); ");
        }

        if(empty($message)){
            return array("status" => false, "message" => "example -> api->sendSms('+5555555555','message'); ");
        }

        if(!is_string($phone) || !is_string($message)){
            return array("status" => false, "message" => "example -> api->sendSms('string','string'); ");
        }

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://whatsmsapi.com/api/send_sms',
            CURLOPT_USERAGENT => 'WhatsmsApi',
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => array(
                "phone" => $phone,
                "text" => $message
            ),
            CURLOPT_HTTPHEADER => array(
                "x-api-key: $this->apikey"
            )
        ));
        $resp = curl_exec($curl);
        if(!$resp){
            $response = array(
                "phones" => array(
                    $phone
                ), 
                "text" => $message,
                "sms" => array(
                    ((object) array(
                        "idsms" => -1,
                        "success" => false,
                        "message" => "Error al ejecutar la operación"
                    ))
                )
            );
            return $response;
        }else{
            curl_close($curl);
            return json_decode($resp);
        }
    }

}