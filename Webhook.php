<?php
/* CLASSE PARA RECEBERMOS INFORMAÇÕES DE UM WEBHOOK 
    VAI SALVAR TUDO

    //namespace App\Webhook;

    class Webhook{
        public function __construct()
        {
            //Recebe o corpo do Json enviado pela instância
            $json = file_get_contents('php://input');
            $decoded = json_decode($json, true);

            //Grava o JSON-body no arquivo de debug
            ob_start();
            var_dump($decoded);
            $input = ob_get_contents();
            ob_end_clean();
            
            file_put_contents('inputs.log',$input . PHP_EDL, FILE_APPEND);

            if(isset($decoded['Type'])){
                if($decoded['Type'] == 'receveid_message') {
                    $messagem = $decoded['Body']['Text'];
                    $numero = $decoded['Body']['Info']['RemoteJid'];
                    file_put_contents('recebidas.log', $numero . '->' . $mensagem . PP_EDL, FILE_APPEND);
                }
            }
        }
    }*/