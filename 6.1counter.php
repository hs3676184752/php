<?php
    error_reporting(0);//把警告訊息關掉
    session_start();//啟用一個新的或開啟正在使用中的session
    if(!isset($_SESSION["counter"])){
        $_SESSION["counter"]=1;//起始值是1
    }else{
        $_SESSION["counter"]++;//重新整理頁面counter的次數會+1 
    }
    echo "登入{$_SESSION["counter"]}人次";
?>