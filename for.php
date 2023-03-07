<?php
    // for.php
    // for ($i = 1; $i <= 10; $i++) {
    //     echo $i;
    // }

    for ($i = 1; $i <= 10; $i++) {
        #echo '<p>' . $i . '</p>';
        #echo "<p>{$i}</p>";
    }

    for ($i = 1; $i <= 10; $i++) {
        ?>
        <p><?= $i; ?></p>
        <?php
    }