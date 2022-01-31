<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>for문을 이용한 select 태그</title>
</head>
<body>
    <select name="birthMonth" id="birthMonth">
<?php
    //4월에 기본 선택되도록 변수 선언
    $selectdMonth = 4;

    for($i =1; $i <= 12; $i++) {
        $selected = '';
        if($i == $selectdMonth){
            $selected = "selected";
        }
?>
    <option value="<?=$i?>" <?=$selected?>><?=$i?></option>
<?php    } ?>
    </select>
</body>
</html>
