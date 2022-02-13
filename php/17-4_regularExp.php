<?php
    $pattern = '/^[a-zA-Z0-9_\-\.]+@[a-zA-Z\_]+\.[\.a-zA-Z]+$/';
    $myEmail = 'everdevel@icloud.com';

    if(preg_match($pattern, $myEmail, $matches)) {
        echo "입력한 이메일 주소 {$myEmail}는 사용가능한 이메일 주소 입니다.";
        echo "<pre>";
        var_dump($matches);
    }else{
        echo "사용 불가한 이메일 주소입니다.";
    }
?>