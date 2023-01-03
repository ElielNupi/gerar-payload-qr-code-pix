<?php 

function display_array_recursive($json_rec){
    header ("Content-Type: application/json; charset=UTF-8");
    if($json_rec){
        foreach($json_rec as $key=> $value){
            if(is_array($value)){
                display_array_recursive($value);
            }else{           
                    $chaves = "-".$value;
                    $separador = explode("-", $chaves);
                    echo $chaves[0];
                }
        }	
    }	
}

    $resposta = file_get_contents('php://input');

    $json_array=json_decode($resposta,true);
    display_array_recursive($json_array);

use \App\Pix\Payload;
require __DIR__.'/vendor/autoload.php';
$obPayload = (new Payload)->setPixKey('elielnp@outlook.com')
                          ->setDescription('Teste de geramento QR Code por Pix')
                          ->setMerchantName('Delfos')
                          ->setAmount(100.00)
                          ->setTxid('teste');

    $payloadQrCode = $obPayload->getPayload();                  
    
    echo "<pre>";
    print_r($payloadQrCode);
    echo "</prev>"; 
    
    exit; 
 
?>

