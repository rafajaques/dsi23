<?php
    # logout.php
    session_start();
    session_destroy();

    header('location:form.php?erro=3');