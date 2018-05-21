<?php include('top.php'); ?>
<ol>
	<li>安裝 brew, 指令在: <a href="https://brew.sh/" target="_blank">https://brew.sh/</a></li>
	<li>安裝 puttygen, 指令: brew install putty</li>
	<li>ppk 轉 pem 指令: puttygen xxx.ppk -O private-openssh -o xxx.pem</li>
	<li>ssh 範例: ssh sean@rup.awoo.org -p 9527 -i /Users/sean/Documents/sean.pem</li>
	<li>ssh-keygen -R ip</li>
</ol>
參考:
<ol>
	<li><a href="https://brew.sh/" target="_blank">https://brew.sh/</a></li>
	<li><a href="https://www.ssh.com/ssh/putty/mac/" target="_blank">https://www.ssh.com/ssh/putty/mac/</a></li>
	<li><a href="http://killer-jok.iteye.com/blog/1853451" target="_blank">ssh-keygen</a></li>
</ol>
<?php include('bottom.php'); ?>