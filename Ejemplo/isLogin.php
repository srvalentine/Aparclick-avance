<?php
    session_start();

    $estado = FALSE;

    if(isset($_SESSION['dev'])){
        $estado = TRUE;
    }
