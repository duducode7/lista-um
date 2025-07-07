<?php

$mensagem = 'Olá mundo';

echo $mensagem;

echo '<h2> Olá, mundo! </h2>';

$primeiro_nome = 'icaro';
$idade = 23;
$gosta_de_bolo = true;

$resultado = 2025 - $idade;

echo $resultado;

echo '<br>';

$num = (int) 37.4;

echo $num;

echo '<br>';

$num = 37.4;

echo $num;


$nota = 10;


if($nota >= 7){
    echo '<p>Passou na prova</p>';
} else {
    echo '<p>Não passou na prova</p>';
}

$frutas = array('banana','melancia','laranja','manga','tomate');

for($i=0; $i <= 4; $i++){
echo '<br>';
echo $frutas[$i];
}

/*comentario*/

function saudacao($nome){
    return 'olá'.($nome);
}

echo '<br>';
echo '<br>';

echo saudacao(' dudu');
?>