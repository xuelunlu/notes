<?php include('top.php'); ?>
1. 使用 which php 找出 php 執行檔的位置, 假設是 /usr/bin/php<br>
2. 執行 crontab -e 輸入: */10 * * * * /usr/bin/php -q /var/www/html/index.php &gt;&gt; /var/www/html/logs<br>
3. &gt; 代表取代, &gt;&gt; 代表累加.<br>
4. -q Quiet-mode. Suppress HTTP Header output.<br>
5. php 程式請不要使用相對路徑, dirname(__FILE__) 可以取得目前 php 檔的絕對路徑.<br>
<?php include('bottom.php'); ?>