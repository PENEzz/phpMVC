<?php

include_once __DIR__ . "../../vendor/autoload.php";

Use App\model\Usuario;


$u = new Usuario("huguinho");

$attr = $_GET["atributo"];
var_dump($attr);    

if($attr == "nome"){
    return $u->getNome();
}


elseif($attr == "idade"){
    return $u->getIdade();
}

echo $_GET['user'];
$permissoes = $_GET['permissoes'];
echo $permissoes;