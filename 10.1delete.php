<?php
    error_reporting(0);//把警告訊息關掉
    $conn=mysqli_connect("localhost","root","","mydb");//函數打開與MySQL服務器的新連接
    //delete from bulletin where bid=???
    $sql="delete from bulletin where bid={$_GET[bid]}";//delete from=用來刪除資料表中的資料
    //echo $sql
    if(!mysqli_query($conn, $sql))
        echo "刪除錯誤";
    else{ 
        echo "刪除成功，回前頁中......";
        echo "<meta http-equiv='refresh' content='3;url=bulletin.php'>";//刪除成功後3秒會自動換頁跳回到bulletin.php
    }
?>