<?php
    error_reporting(0);//把警告訊息關掉

    //mysqli_connect，必須要設定ip(本地端為localhost)
    //帳號、密碼，以及連結的資料庫(mydb)
    $conn = mysqli_connect("localhost","root","", "mydb");

    //函數返回上次連接錯誤（如果有）的錯誤描述
    if (mysqli_connect_error($conn))
        die("資料庫連線錯誤");  

    //函數指定在與數據庫服務器之間發送數據時要使用的默認字符集
    mysqli_set_charset($conn, "utf8");

    //mysqli_query從表格user找出資料
    $result=mysqli_query($conn, "select * from user");

    //數從結果集中取得一行作為關聯數組，或數字數組，或二者都有
    //該函數返回的字段名是區分大小寫的
    while ($row=mysqli_fetch_array($result)) {
        echo $row[id];
        echo " ";
        echo $row[pwd];
        echo "<br>";
    }
?>