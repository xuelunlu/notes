<?php include('top.php'); ?>
<h3>doc</h3>
<ul>
	<li><a target="_blank" href="http://redisdoc.com/index.html">Redis 命令参考</a></li>
</ul>
<h3>PHP</h3>
<ul>
	<li><a href="https://github.com/nrk/predis" target="_blank">程式庫</a></li>
	<li><a href="http://squizzle.me/php/predis/doc/" target="_blank">doc</a></li>
</ul>
[code type="php"]
$CI = &get_instance();
$redis_config = $CI->config->item(\'redis\');
$this->predis = new \Predis\Client($redis_config);
[/code]
<?php include('bottom.php'); ?>