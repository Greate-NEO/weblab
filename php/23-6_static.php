<?php
  class hello{
      static function output($word){
          echo "메세지를 출력하는 메소드<br/>";
          echo $word;
      }
  }
  hello::output("Hello World");
?>