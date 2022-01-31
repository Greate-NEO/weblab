<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for문을 이용한 select 태그</title>
</head>
<body>
    <select name="birthMonth" name="birthMonth">
        <?php
            for($i = 1; $i <=12; $i++) { ?>
            <option value="<?=$i?>>"><?=$i?></option>    
        <?php } ?>
    </select>
    <label for="birthMonth">월</label>
</body>
</html>