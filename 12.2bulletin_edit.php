<?php
    error_reporting(0);//把警告訊息關掉
    session_start();//啟用一個新的或開啟正在使用中的session
    if(!isset($_SESSION[id])){
        echo "請輸入帳號密碼";
        echo "<meta http-equiv='refresh' content='3;url=login.html''>";
    }else{
        $conn=mysqli_connect("localhost","root","","mydb");//函數打開與MySQL服務器的新連接
        //update用於修改表中的現有記錄，WHERE子句指定應更新的記錄。如果省略WHERE子句，表中的所有記錄將被更新
        $sql="update bulletin set title='{$_POST[title]}', content='{$_POST[content]}', type={$_POST[type]}, time='{$_POST[time]}' where bid={$_POST[bid]}";        
        //echo $sql;
        if(!mysqli_query($conn, $sql))
           echo "修改佈告錯誤";
        else
           echo "修改佈告成功";
        echo "<meta http-equiv='refresh' content='3;url=bulletin.php''>";//修改成功3秒後自動換頁跳回到bulletin.php
    }
?>