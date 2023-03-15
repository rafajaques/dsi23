<?php
    # boasvindas.php
    require('verifica_autenticacao.php');
    require('css.php');

    echo 'Seu login funcionou :-)<br>';
?>
<p>
    <?php
    if ($_SESSION['admin']) {
        ?>
        <a href="usuarios.php">Usuários</a>
        <?php
    }
    ?>
    <a href="logout.php">Sair</a>
</p>