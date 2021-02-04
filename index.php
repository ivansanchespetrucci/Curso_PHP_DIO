<?php
$categorias = [];
$categorias[] = 'INfantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';

//print_r($categorias);

$nome = "Eduardo";
$idade = 18;

var_dump($nome);
var_dump($idade);

if($idade >= 6 && $idade <= 12)
{

  echo "Infantil";
}
else if($idade >= 18 && $idade <= 18)
{

    echo "Adolescente";
}
else{
    echo "Adulto";
}
?>
