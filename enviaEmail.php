<?php

// $resposta = $_POST["http://localhost:9090/api/listaDeEspera"];
// var_dump($_POST["http://localhost:9090/api/listaDeEspera"]);

// if($resposta) {
//     echo "teste";
//     // header("Location: {$arrayConfig['variaveis']['pathSite']}sistema/cidade");

// }

$url  = 'http://localhost:9090/api/listaDeEspera';
$data = $_REQUEST['email'];
$ch   = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

if(curl_exec($ch)){
    header("location:index.html") ;
    curl_close($ch);
}
?>