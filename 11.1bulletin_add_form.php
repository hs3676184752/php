<?php
//method=表單傳送的方式
//action=表單傳送過去的目的地
//textarea=用來填寫段落文字，cols=寬，rows=高
//type=radio是單選按紐，checked=指示此單選按鈕是組中默認選中的按鈕
//type=date是規定日期選擇器
//type=submit是一個提交按鈕，提交的所有表單值的表單處理程序
echo "
<h1>新增佈告</h1>
<form method=post action=bulletin_add.php>
佈告標題：<input type=text name=title size=200><p>
佈告內容：<p><textarea cols=100 rows=20 name=content></textarea><p>
佈告類型：<input type=radio name=type value=1 checked>系上公告
<input type=radio name=type value=2>招生訊息
<input type=radio name=type value=3>企業徵才
<p>
發佈時間：<input type=date name=time><p>
<input type=submit value=發佈公告>
</form>
";
?>