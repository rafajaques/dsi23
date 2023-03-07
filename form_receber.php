<?php
    # form_receber.php

    // Exemplo de prática não tão boa
    // if (!isset($_POST['usuario']) || 
    // !isset($_POST['senha'])) {
    //     echo 'Envie o form';
    //     die;
    // }

    // Nullish coalescing operator
    $usuario = $_POST['usuario'] ?? false;
    $senha = $_POST['senha'] ?? false;

    if ($usuario == 'rafael' && $senha == '123') {
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