<?php
error_reporting(0);//把警告訊息關掉
session_start();//啟用一個新的或開啟正在使用中的session
if(!isset($_SESSION[id])){
    echo "請輸入帳號密碼";
    echo "<meta http-equiv='refresh' content='3;url=login.html''>";
}else{
    $conn=mysqli_connect("localhost","root","","mydb");//函數打開與MySQL服務器的新連接
    //insert into=用來新增資料至某資料表(table)
    $sql="insert into bulletin(title, content, type, time) values('{$_POST[title]}','{$_POST[content]}',{$_POST[type]},'{$_POST[time]}')";
    //echo $sql;
    if(!mysqli_query($conn, $sql))
       echo "新增佈告錯誤";
    else
       echo "新增佈告成功";
    echo "<meta http-equiv='refresh' content='3;url=bulletin.php''>";//新增成功3秒後自動換頁跳回到bulletin.php
}
?>