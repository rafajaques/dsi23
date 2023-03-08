<?php
    # form_receber.php

    $senha_cripto = '$2y$12$7lnP9th9keIp7bTRp8b8FOqe0XeTwu12ROIs/lj.wQZS1XReC1KSm';
    
    // Exemplo de prática não tão boa
    // if (!isset($_POST['usuario']) || 
    // !isset($_POST['senha'])) {
    //     echo 'Envie o form';
    //     die;
    // }

    // Nullish coalescing operator
    $usuario = $_POST['usuario'] ?? false;
    $senha = $_POST['senha'] ?? false;

    if ($usuario == 'rafael'
        &&
        password_verify($senha, $senha_cripto)) {
        // Autenticação OK
        session_start();
        $_SESSION['usuario'] = $usuario;

        header('location:boasvindas.php');
        die;
    } else {
        // Autenticação falhou
        header('location:form.php?erro=1');
        die;
    }