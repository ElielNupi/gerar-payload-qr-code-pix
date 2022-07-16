<?php 

/*$body = new stdClass();

header ("Content-Type: application/json; charset=UTF-8");

                                                                            $body = json_encode($_POST)."1";

//$body-> name= "Teste";
//$body-> type = "teste2";

$data = json_encode($body);

echo $data;
*/


/*$resultado = (object) json_decode(file_get_contents('php://input'), true);

$mostrar = json_encode($resultado);
echo $mostrar;
Precisa de : 
Nome do comprador (primeiro-nome, sobrenome)
Descrição do pagamento.
Valor da compra.
(Padrão: Chave pix do estabelecimento, nome da loja do estabelecimento)
 */

require __DIR__.'/vendor/autoload.php';

use \App\Pix\Payload;

$conteudo = json_decode(file_get_contents('php://input'), true);

$mostrar = json_encode($conteudo);
//$teste1 = $conteudo["teste1"];
//$teste2 = $conteudo["teste1"];

echo '<prev>' .print_r($mostrar,true). '</prev>';

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

