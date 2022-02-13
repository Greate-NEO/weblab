<?php
    ob_start();
    if(ini_get('session.cookie_lifetime') == 0) {
        ini_set('session.cookie_lifetime',10);
    }
    session_start();
    $_SESSION['mySession'] = 'everdevel';

    if(isset($_SESSION['mySession'])){
        echo "세션 생성 완료 세션 값: {$_SESSION['mySession']}";
    }else{
        echo "세션 생성 실패";
    }
?>