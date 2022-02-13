<?php
  $content = "이 내용은 앞의 내용의 뒤에 붙어 저장됩니다.";
  $fileName = "helloWorld.txt";

  $fp = fopen('./myFiles/'.$fileName,'a+');
  $fw = fwrite($fp, $content);

  if($fw == false) {
      echo '파일 쓰기에 실패했습니다.';
  }else{
      echo '파일 쓰기 완료';
  }
  fclose($fp);
?>