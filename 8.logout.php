<?php
    error_reporting(0);//把警告訊息關掉
    session_start();//啟用一個新的或開啟正在使用中的session
    //將session清空
    //session_destroy(); 
    //伺服器上的所有session variable清空，要注意
    unset($_SESSION["id"]);//unset=要移除的變數
    echo "登出中......";
    echo "<meta http-equiv=REFRESH CONTENT='2;url=login.html'>";//按登出後2秒會自動換頁跳回到login.html
?>