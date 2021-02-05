<?php
$categorias = [];
$categorias[] = 'INfantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';

//print_r($categorias);

$nome  = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
    echo "nome nao pode ser vazio";
    return;
}

echo "Tamanho do nome.. ", strlen($nome), "<br>";

if( (strlen($nome) < 3) or (strlen($nome) > 40))
{
    echo "Nome tem que ser > 3 e menor < 40";
    return;
}




// var_dump($nome);
// var_dump($idade);

return 0

// if($idade >= 6 && $idade <= 12)
//{

//  echo "Infantil";
//}
//else if($idade >= 18 && $idade <= 18)
//{

//    echo "Adolescente";
//}
//else{
//    echo "Adulto";
//}
//

?>
