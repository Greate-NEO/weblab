<?php
    session start();
    $_SESSION['userId'] = 'everdevel';

    if(isset($_SESSION['userId'])){
        echo "세션생성 완료 세션 userId의 값: {$_SESSION['userId']}"
    }
?>