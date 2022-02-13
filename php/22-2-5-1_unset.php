<?php
    session_start();

    $_SESSION['mySession5'] = 'everdevel';

    echo "세션 생성후 존재 여부 확인 <br/>";

    if(isset($_SESSION['mySession5'])) {
        echo "mySessoin5 세션이 존재합니다. <br/>";
    }else{
        echo "mySession5 세션이 존재하지 않습니다. <br/>";
    }

    unset($_SESSION['mySession5']);

    echo "<hr/> 세션 삭제 후 존재 여부 확인 <br/>";

    if(isset($_SESSION['mySession5'])){
        echo "mySession5 세션이 존재합니다.";
    }else{
        echo "세션이 존재하지 않습니다.";
    }
?>