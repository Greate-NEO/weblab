<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>회원이름 변경하기</title>
</head>
<body>
    <form name="update" method="post" action="15-5-2_update.php">
        <label for="memberId">회원번호</label>
        <input type="number" name="memberID" id="memberID">
        <label for="cn">변경할 이름</label>
        <input type="text" name="cn" id="cn" placeholder="이름 변경">
        <input type="submit" value="변경하기">
    </form>
</body>
</html>