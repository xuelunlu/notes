<?php include('top.php'); ?>
<h3 style="color: #0000FF;">command-line 備份 MySQL 資料庫</h3>
<ul>
	<li>某個資料庫的匯出與匯入.
		<dl>
			<dt>匯出:</dt><dd>mysqldump -u root -p 要備份的資料庫名稱 &gt; 檔名.sql</dd>
			<dt>匯入:</dt><dd>mysql -u root -p 資料庫名稱 &lt; 檔名.sql(要先建立資料庫再執行)</dd>
		</dl>
	</li>
	<li>某個資料表的匯出與匯入.
		<dl>
			<dt>匯出:</dt><dd>mysqldump -u root -p 資料庫名稱 資料表名稱 &gt; 檔名.sql</dd>
			<dt>匯入:</dt><dd>mysql -u root -p 資料庫名稱 &lt; 檔名.sql</dd>
		</dl>
	</li>
	<li>全部資料庫的匯出與匯入.
		<dl>
			<dt>匯出:</dt><dd>mysqldump -u root -p --all-databases &gt; 檔名.sql</dd>
			<dt>匯入:</dt><dd>mysql -u root -p &lt; 檔名.sql(不用先建立資料庫)</dd>
		</dl>
	</li>
</ul>
<h3 style="color: #0000FF;">mytop - MySQL 效能監測工具的安裝與使用</h3>
<ul>
	<li>安裝:
		<ul>
			<li>yum install epel-release</li>
			<li>yum install mytop</li>
		</ul>
	</li>
	<li>使用:
		<ul>
			<li>假如要監控 wordpress 這個資料庫, 輸入 mytop --prompt -d wordpress, 然後再輸入 root 密碼, 就可以看到監控畫面了.</li>
			<li>常用的指令就是k, 可以砍掉卡住的 query.</li>
		</ul>
	</li>
</ul>
<?php include('bottom.php'); ?>