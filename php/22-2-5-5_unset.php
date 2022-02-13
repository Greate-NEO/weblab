<?php
    session_start();

    $time = time() - (int) $_SESSION['mySession10']['generation'];

    echo "세션이 생성된 후 {$time}초가 지났습니다. <br/>";
    if($time > $_SESSION['mySession10']['duration']){
        unset($_SESSION['mySession10']);
    }

    if(isset($_SESSION['mySession10'])){
        echo "세션이 존재합니다. 값: {$_SESSION['mySession10']['value']}";
    }else{
        echo "세션이 존재하지 않습니다.";
    }
?>