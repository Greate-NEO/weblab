<?php
    $host = "localhost";
    $user = "root";
    $pw = "root";
    $dbName = "myFirstDB";
    $dbConnect = new mysqli($host, $user, $pw, $dbName);
    $dbConnect->set_charset("utf-8");

    if(mysqli_connect_errno()){
        echo '데이터 베이스 접속 실패';
        echo mysqli_connect_error();
    }

?>