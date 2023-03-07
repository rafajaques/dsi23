<?php
    $erro = $_GET['erro'] ?? false;
    
    switch ($erro) {
        case 1:
            echo 'Usuário ou senha inválidos';
            break;
        case 2:
            echo 'Você não está autenticado';
            break;
    }

    require('css.php');
?>
<form action="form_receber.php" method="post">
    <div>
        <input type="text" name="usuario" placeholder="Usuário">
    </div>
    <div>
        <input type="password" name="senha" placeholder="Senha">
    </div>
    <div>
        <input type="submit" value="Acessar">
    </div>
</form>