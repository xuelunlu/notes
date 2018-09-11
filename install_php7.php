<?php include('top.php'); ?>
<h3>安裝步驟:</h3>
<ul>
	<li>setenforce 0</li>
	<li>yum install centos-release-scl</li>
	<li>yum install httpd24</li>
	<li>yum install rh-mysql57-mysql-server</li>
	<li>yum install rh-php70-php rh-php70-php-mbstring rh-php70-php-mysqlnd rh-php70-php-gd rh-php70-php-opcache</li>
</ul>
<h3>建立軟連結:</h3>
<ul>
	<li>ln -s /opt/rh/rh-mysql57/root/usr/bin/mysql /usr/bin/mysql</li>
	<li>ln -s /opt/rh/rh-mysql57/root/usr/bin/mysqladmin /usr/bin/mysqladmin</li>
	<li>ln -s /opt/rh/rh-mysql57/root/usr/bin/mysqldump /usr/bin/mysqldump</li>
	<li>ln -s /opt/rh/rh-php70/root/usr/bin/php /usr/bin/php</li>
</ul>
<h3>啟動指令:</h3>
<ul>
	<li>service httpd24-httpd start</li>
	<li>service rh-mysql57-mysqld start</li>
	<li>systemctl start httpd24-httpd</li>
</ul>
<h3>初始化:</h3>
<ul>
	<li>mysqladmin -u root password 'your.password'</li>
	<li>chown xuelun_lu /opt/rh/httpd24/root/var/www/html</li>
	<li>chgrp xuelun_lu /opt/rh/httpd24/root/var/www/html</li>
</ul>
<h3>設定檔位置:</h3>
<ul>
	<li>/etc/opt/rh/rh-php70/php.ini</li>
	<li>/opt/rh/httpd24/root/etc/httpd/conf/httpd.conf</li>
	<li>/opt/rh/httpd24/root/etc/httpd/conf.d</li>
	<li>/etc/opt/rh/rh-mysql57/my.cnf</li>
</ul>
<h3>log檔位置:</h3>
<ul>
	<li>/var/log/httpd24</li>
</ul>
<h3>網站根目錄位置:</h3>
<ul>
	<li>/opt/rh/httpd24/root/var/www/html</li>
</ul>
<h3>建立虛擬主機:</h3>
<ul>
	<li>vi /opt/rh/httpd24/root/etc/httpd/conf.d/virtual.conf</li>
	<li><pre>
		#NameVirtualHost *:80
		&ltVirtualHost *:80&gt
		ServerName tool.ithelper.idv.tw
		DocumentRoot /opt/rh/httpd24/root/var/www/html/tool
		&lt/VirtualHost&gt
	</pre></li>
</ul>
<h3>其他:</h3>
<ul>
	<li>git clone https://github.com/amnuts/opcache-gui.git</li>
</ul>
<h3>參考:</h3>
<ul>
	<li><a href="https://wiki.centos.org/zh-tw/AdditionalResources/Repositories/SCL" target="_blank">https://wiki.centos.org/zh-tw/AdditionalResources/Repositories/SCL</a></li>
	<li><a href="https://wiki.centos.org/SpecialInterestGroup/SCLo/CollectionsList" target="_blank">https://wiki.centos.org/SpecialInterestGroup/SCLo/CollectionsList</a></li>
</ul>
<?php include('bottom.php'); ?>