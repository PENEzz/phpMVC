<?php

include_once __DIR__ . "../../vendor/autoload.php";

Use App\model\Usuario;


$u = new Usuario("huguinho");
echo $u->getNome();