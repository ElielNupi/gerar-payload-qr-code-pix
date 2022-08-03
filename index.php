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
 
----------- METODO 2

$result = $post->read();
$num = $resultado->rowCount();

if($num > 0){
    $post_arr = array();
    $post_arr['data'] = array();

    while($row = $resultado->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $post_item = array(
            'teste' => $recebendoteste,
            'teste2' => $recebendoteste2
        );
        array_push($post_arr['data'], $post_item);
    }
    //converter JSON para uma saida
    echo json_encode($post_arr);
}
else{
    echo json_encode(array('message' => 'Erro, nenhum post achado'));
}
//echo '<prev>' .print_r($mostrar,true). '</prev>';
*/


/*function display_array_recursive($json_rec){
    if($json_rec){
        foreach($json_rec as $key=> $value){
            if(is_array($value)){
                display_array_recursive($value);
            }else{
                echo "life is like a mf dream";
            }
        }
    }
}*/

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

