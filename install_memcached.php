<?php include('top.php'); ?>
<h3>安裝步驟:</h3>
<ul>
	<li>setenforce 0</li>
	<li>yum install memcached</li>
</ul>
<h3>啟動指令:</h3>
<ul>
	<li>service memcached start</li>
</ul>
<h3>設定檔位置:</h3>
<ul>
	<li>/etc/sysconfig/memcached</li>
	<li>
		<pre>
PORT="11211"
USER="memcached"
MAXCONN="1024"
CACHESIZE="4096"
OPTIONS="-l 127.0.0.1"
-l 127.0.0.1的目的是限制只有127.0.0.1可以連.
		</pre>
	</li>
</ul>
<?php include('bottom.php'); ?>