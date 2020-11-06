<?php
   error_reporting(0);//把警告訊息關掉
   //透過PHP的echo將資料輸出於網頁上 
   //採用GET的方式傳遞資料
   echo $_GET[id];
   echo "<br>";#換行
   echo $_GET[pwd]; 
?>