<?php
    include_once "./15-1_connectDB.php";

    $myMemberID = 1;
    $sql = "SELECT * FROM myMember WHERE myMemberID = {$myMemberID}";
    $result = $dbConnect->query($sql);

    $memberInfo = $result->fetch_array(MYSQLI_ASSOC);

    echo "<pre>";
    var_dump($memberInfo);

    echo "회원 번호가 {$myMemberID}번인 회원의 이름은 ".$memberInfo['name'];
?>