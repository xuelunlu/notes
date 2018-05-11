<?php include('top.php'); ?>
<h3>安裝步驟:</h3>
<ul>
	<li>setenforce 0</li>
	<li>yum install centos-release-scl</li>
	<li>yum install bzip2(For install phantomjs-prebuilt on gcp.)</li>
	<li>yum install fontconfig(For install phantomjs-prebuilt.)</li>
	<li>yum install rh-nodejs6</li>
</ul>
<h3>建立軟連結:</h3>
<ul>
	<li>ln -s /opt/rh/rh-nodejs6/root/usr/lib64/libhttp_parser.so.rh-nodejs6-2.7.0 /usr/lib64/libhttp_parser.so.rh-nodejs6-2.7.0</li>
	<li>ln -s /opt/rh/rh-nodejs6/root/usr/lib64/libuv.so.rh-nodejs6-1.9.1 /usr/lib64/libuv.so.rh-nodejs6-1.9.1</li>
	<li>ln -s /opt/rh/rh-nodejs6/root/usr/bin/node /usr/bin/node</li>
	<li>ln -s /opt/rh/rh-nodejs6/root/usr/bin/npm /usr/bin/npm</li>
</ul>
<h3>執行方式:</h3>
<ul>
	<li>node -v</li>
	<li>npm -v</li>
</ul>
<h3>安裝pm2:</h3>
<ul>
	<li>npm install pm2 -g</li>
	<li>ln -s /opt/rh/rh-nodejs6/root/usr/bin/pm2 /usr/bin/pm2</li>
</ul>
<?php include('bottom.php'); ?>