<?php
error_reporting(0);//把警告訊息關掉
$conn=mysqli_connect("localhost","root","","mydb");//函數打開與MySQL服務器的新連接
$sql="select * from bulletin where bid={$_GET[bid]}";//mysqli_query從表格user找出資料
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);//mysqli_fetch_array從$result擷取每筆資料
//method=表單傳送的方式
//action=表單傳送過去的目的地
//textarea=用來填寫段落文字，cols=寬，rows=高
//type=date是規定日期選擇器
//type=submit是一個提交按鈕，提交的所有表單值的表單處理程序
echo "
<h1>修改佈告</h1>
<form method=post action=bulletin_edit.php>
   <input type=hidden name=bid value={$row[bid]}>
   佈告標題：<input type=text name=title size=200 value={$row[title]}><p>
   佈告內容：<p><textarea cols=100 rows=20 name=content>{$row[content]}</textarea><p>
   佈告類型：
   <input type=radio name=type value=1"; 
if ($row[type]=="1") echo " checked";//checked=指示此單選按鈕是組中默認選中的按鈕
echo ">系上公告
    <input type=radio name=type value=2";
if ($row[type]=="2") echo " checked";
echo ">招生訊息
    <input type=radio name=type value=3";
if ($row[type]=="3") echo " checked";
echo ">企業徵才
   <p>
   發佈時間：<input type=date name=time value={$row[time]}><p>
   <input type=submit value=發佈公告>
</form>
";
?>