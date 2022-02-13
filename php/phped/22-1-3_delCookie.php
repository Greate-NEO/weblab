<?php
  setcookie('myCookie', null, time() - 3600, "/");
  if(isset($_Cookie['myCookie'])) {
      echo "쿠키가 존재 합니다.";
  }else{
      echo "쿠키가 삭제되었습니다.";
  }
?>