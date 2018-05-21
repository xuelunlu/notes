<?php include('top.php'); ?>
安裝:<br>
1. yum install epel-release<br>
2. yum install rabbitmq-server<br>
<br>
啟動:<br>
1. service rabbitmq-server start<br>
<br>
啟用監控:<br>
1. sh /usr/lib/rabbitmq/lib/rabbitmq_server-3.1.5/sbin/rabbitmq-plugins enable rabbitmq_management<br>
2. 瀏覽 xxx.xxx.xxx.xxx:15672<br>
3. 帳密都輸入 guest<br>
<?php include('bottom.php'); ?>