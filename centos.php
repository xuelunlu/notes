<?php include('top.php'); ?>
<h3>清空檔案的方式:</h3>
<ul>
	<li>cat /dev/null > /var/log/[記錄檔檔名]</li>
</ul>
<h3>SELinux 的關閉或開啟:</h3>
<ul>
	<li>顯示 SELinux 狀態: getenforce</li>
	<li>暫時性關閉 SELinux: setenforce 0</li>
	<li>暫時性開啟 SELinux: setenforce 1</li>
</ul>
<h3>建立軟連結:</h3>
<ul>
	<li>ln -s 源文件 目標文件</li>
	<li>ln -s /opt/rh/rh-php70/root/usr/bin/php /usr/bin/php</li>
</ul>
<h3>解壓縮:</h3>
<ul>
	<li>壓縮:tar -zcvf xxx.tar.gz 資料夾</li>
	<li>解壓:tar -zxvf xxx.tar.gz</li>
</ul>
<h3>程序:</h3>
<ul>
	<li>查程序:ps</li>
	<li>查程序:ps -aux</li>
	<li>立刻強制刪除程序:kill -9 [pid]</li>
</ul>
<h3>排程執行指令example:</h3>
<ul>
	<li>*/30 * * * * /etc/init.d/httpd restart &gt;&gt; /var/www/html/logs</li>
	<li>*/30 * * * * free -m &gt;&gt; /var/www/html/logs</li>
</ul>
<h3>查資料:</h3>
<ul>
	<li>查核心:uname -a</li>
	<li>查記憶體:free -m</li>
	<li>查環境變數:env</li>
</ul>
1. Swap 如果被用到, 特別是用超過20%以上, 就表示記憶體不足, 正常情況下 Swap 不會被使用.<br>
2. Mem 記憶體被用光是正常的, 因為用不到的記憶體作業系統也會拿來用於 buffers 與 cached.<br>
<h3>移動檔案與目錄、更名:</h3>
<ul>
	<li>mv [-fiu] source destination</li>
	<li>-f：如果目標檔案已經存在, 不會詢問而直接覆蓋.</li>
	<li>-i：如果目標檔案已經存在, 會詢問是否覆蓋.</li>
	<li>-u：若目標檔案已經存在且 source 比較新才會更新.</li>
</ul>
<?php include('bottom.php'); ?>