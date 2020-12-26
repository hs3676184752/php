<?php
    error_reporting(0);//把警告訊息關掉
    
    //php要怎麼跟mysql資料庫進行連結，有三個步驟
    //1.mysqli_connect，必須要設定ip(本地端為localhost)
    //帳號、密碼，以及連結的資料庫(mydb)
    $conn=mysqli_connect("localhost","root","","mydb");
    if(mysqli_connect_error($conn))
       die("資料庫連線錯誤");

    //2.mysqli_query從表格user找出資料
    $result=mysqli_query($conn,"select * from user");
    $login=False;
    //3.mysqli_fetch_array從$result擷取每筆資料
    while ($row=mysqli_fetch_array($result)){
        if($_POST["id"]==$row[id] && $_POST["pwd"]==$row[pwd])
           $login=True;
    }
    if($login==True){
        echo "歡迎登入";
        session_start();//啟用一個新的或開啟正在使用中的session
        $_SESSION["id"] = $_POST["id"];
        echo "<meta http-equiv='refresh' content='0; url=bulletin.php'>";//登入成功後直接自動換頁到bulletin.php
    }
    else{
        echo "帳號或密碼錯誤";
        echo "<meta http-equiv='refresh' content='5; url=login.html'>";//登入失敗5秒後自動換頁跳回到login.html
    }
?>
