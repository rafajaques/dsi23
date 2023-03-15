<?php
    # form_receber.php
    require('pdo.inc.php');
    
    // Exemplo de prática não tão boa
    // if (!isset($_POST['usuario']) || 
    // !isset($_POST['senha'])) {
    //     echo 'Envie o form';
    //     die;
    // }

    // Nullish coalescing operator
    $usuario = $_POST['usuario'] ?? false;
    $senha = $_POST['senha'] ?? false;

    // Prepara a consulta
    $sql = $pdo->prepare('SELECT * FROM usuarios WHERE username = ? AND active = 1');

    // Anexa a variável $usuario no parâmetro 1
    $sql->bindParam(1, $usuario, PDO::PARAM_STR);

    // Roda a consulta no banco
    $sql->execute();

    // Busca os dados no banco
    $dados = $sql->fetch(PDO::FETCH_ASSOC);

    if ($sql->rowCount() == 1
        &&
        password_verify($senha, $dados['password'])) {
        // Autenticação OK
        session_start();
        $_SESSION['usuario'] = $usuario;
        $_SESSION['admin'] = $dados['admin'];

        header('location:boasvindas.php');
        die;
    } else {
        // Autenticação falhou
        header('location:form.php?erro=1');
        die;
    }