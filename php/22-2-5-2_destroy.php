<?php
    session_start();
    $_SESSION['mySession6'] = 'everdevel';
    $_SESSION['mySession7'] = 'beanscent';

    echo "<pre>";
    var_dump($_SESSION);

    if(session_destroy()){
        echo "세션 파괴 완료";
    }
?>