<?php
    # usuario_adicionar.php

    $username = $_POST['username'] ?? false;
    $password = $_POST['password'] ?? false;
    $admin = isset($_POST['admin']);

    if (!$username || !$password) {
        header('location:usuarios.php?erro=1');
        die;
    }

    $password = password_hash($password, PASSWORD_BCRYPT);

    require('pdo.inc.php');

    $gravar = $pdo->prepare('INSERT INTO usuarios
    (username, password, active, admin)
    VALUES
    (:usr, :pass, "1", :adm)');

    $gravar->bindParam(':usr', $username);
    $gravar->bindParam(':pass', $password);
    $gravar->bindParam(':adm', $admin);

    $gravar->execute();

    header('location:usuarios.php');
    die;