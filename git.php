<?php include('top.php'); ?>
<h3 style="color: #0000FF;">將資料夾移出版本控管:</h3>
git rm -r -n --cached dir<br>
git rm -r --cached dir<br>
添加 dir 至 .gitignore 文件.<br>
git commit -m "update"<br>
git push origin master<br>
<h3 style="color: #0000FF;">將遠端分支同步:</h3>
git fetch -p origin<br>
-p:Before fetching, remove any remote-tracking references that no longer exist on the remote.<br>
<h3 style="color: #0000FF;">git的設定:</h3>
git config --list(列出現在的所有設定值)<br>
git config --global user.name "Sean Lu"<br>
git config --global user.email sean@example.com<br>
git config --global color.ui true(為git指令的輸出結果加上顏色)<br>
<h3 style="color: #0000FF;">其他:</h3>
git log -2 --stat<br>
刪除遠端分支:git push origin :遠端分支名<br>
<?php include('bottom.php'); ?>