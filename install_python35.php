<?php include('top.php'); ?>
<h3 style="color: #FF0000;">只適用CentOS 7</h3>
<h3>安裝步驟:</h3>
<ul>
	<li>setenforce 0</li>
	<li>yum install centos-release-scl</li>
	<li>yum install rh-python35</li>
</ul>
<h3>建立軟連結:</h3>
<ul>
	<li>ln -s /opt/rh/rh-python35/root/usr/lib64/libpython3.5m.so.rh-python35-1.0 /usr/lib64/libpython3.5m.so.rh-python35-1.0</li>
	<li>ln -s /opt/rh/rh-python35/root/usr/bin/python3.5 /usr/bin/python3.5</li>
	<li>ln -s /opt/rh/rh-python35/root/usr/bin/pip3.5 /usr/bin/pip3.5</li>
</ul>
<h3>套件安裝:</h3>
<ul>
	<li>pip3.5 install --upgrade pip</li>
	<li>pip3.5 install tensorflow==1.0.1</li>
	<li>pip3.5 install keras==2.0.2</li>
	<li>pip3.5 install h5py</li>
	<li>pip3.5 install --upgrade gensim</li>
	<li>pip3.5 install jieba</li>
	<li>pip3.5 install google-compute-engine</li>
	<li>pip3.5 install PyMySQL</li>
	<li>yum install opencc</li>
	<li>yum install opencc-tools</li>
</ul>
<?php include('bottom.php'); ?>