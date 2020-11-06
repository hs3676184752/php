<?php
   error_reporting(0);#把警告訊息關掉
   #如果帳號和密碼跟設定的一樣，回傳"welcome"
   #不一樣則回傳"login failure"
   if(($_GET["id"]=="john") && ($_GET["pwd"]=="john1234"))
       echo "welcome";
   else
       echo "login failure";
?>