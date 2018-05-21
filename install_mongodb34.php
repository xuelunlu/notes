<?php include('top.php'); ?>
<h3>安裝步驟:</h3>
<ul>
	<li>setenforce 0</li>
	<li>vi /etc/yum.repos.d/mongodb-org-3.4.repo</li>
	<li>
		<pre>貼上:
[mongodb-org-3.4]
name=MongoDB Repository
baseurl=https://repo.mongodb.org/yum/redhat/$releasever/mongodb-org/3.4/x86_64/
gpgcheck=1
enabled=1
gpgkey=https://www.mongodb.org/static/pgp/server-3.4.asc
		</pre>
	</li>
	<li>yum install mongodb-org</li>
</ul>
<h3>設定檔位置:</h3>
<ul>
	<li>/etc/mongod.conf</li>
</ul>
<h3>啟動:</h3>
<ul>
	<li>service mongod start</li>
	<li>systemctl start mongod</li>
</ul>
<a target="_blank" href="https://docs.mongodb.com/manual/tutorial/install-mongodb-on-red-hat/#install-mongodb-community-edition">https://docs.mongodb.com/manual/tutorial/install-mongodb-on-red-hat/#install-mongodb-community-edition</a>
<?php include('bottom.php'); ?>