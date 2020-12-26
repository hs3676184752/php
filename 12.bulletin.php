<?php
    error_reporting(0);
    session_start();
    if(!isset($_SESSION["id"])){
        echo "請登入系統";
        echo "<meta http-equiv='refresh' content='3; url=login.html'>";
    }
    else{
        echo "歡迎 {$_SESSION["id"]} 登入 [<a href=logout.php>登出</a>]<p>[<a href=bulletin_add_form.php>新增佈告</a>]<p>";
        $conn=mysqli_connect("localhost","root","","mydb");//函數打開與MySQL服務器的新連接  
        $result=mysqli_query($conn,"select * from bulletin");//mysqli_query從表格user找出資料
        echo "<table border=2><tr><td>佈告操作</td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";//<tr><td>=表格
        //mysqli_fetch_array從$result擷取每筆資料
        while ($row=mysqli_fetch_array($result)){
           echo "<tr><td>";           
           echo "<a href=bulletin_edit_form.php?bid={$row[bid]}>修改</a><br>";//點修改連結到bulletin_edit_form.php
           echo "<a href=delete.php?bid={$row[bid]}>刪除</a>";//點刪除連結到delete.php
           echo "</td><td>";
           echo $row[bid];
           echo "</td><td>";
           echo $row[type];
           echo "</td><td>";
           echo $row[title];
           echo "</td><td>";
           echo $row[content];
           echo "</td><td>";
           echo $row[time];
           echo "</td></tr>";
    }
    echo "</table>";
    }
?>