<?php
// produtos.php
require('models/Model.php');
require('models/Produto.php');

require('twig.inc.php');

$prod = new Produto();
$resultado = $prod->getAll();

echo $twig->render('produtos.html', [
    'produtos' => $resultado,
]);