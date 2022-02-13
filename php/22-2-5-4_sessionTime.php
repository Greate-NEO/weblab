<?php
    session_start();

    $_SESSION['mySession10'] = array();

    $_SESSION['mySession10']['value'] = 'everdevel';

    $_SESSION['mySession10']['generation'] = time();

    $_SESSION['mySession10']['duration'] = 10;

    echo "<pre>";
    var_dump($_SESSION['mySession10']);
?>