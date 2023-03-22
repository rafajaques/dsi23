<?php
    # usuarios.php
    require('css.php');
    require('pdo.inc.php');

    $sql = $pdo->query('SELECT * FROM usuarios');

    // Listagem usando fetch
    while ($usuario = $sql->fetch(PDO::FETCH_ASSOC)) {
        echo "<p>{$usuario['username']}</p>";
    }

    // Listagem com fetchAll
    // $tudo = $sql->fetchAll(PDO::FETCH_ASSOC);
    // foreach ($tudo as $usuario) {
    //     echo "<p>{$usuario['username']}</p>";
    // }
?>
<form action="usuario_adicionar.php" method="post">
    <p><input type="text" name="username"></p>
    <p><input type="password" name="password"></p>
    <p><label>
        <input type="checkbox" name="admin"> Admin
    </label></p>
    <p><input type="submit" value="Gravar"></p>
</form>