<?php include('top.php'); ?>
<ol>
	<li>本篇文章從安裝 <a href="https://github.com/serbanghita/Mobile-Detect" target="_blank">Mobile Detect</a> 這個程式庫開始, 說明如何為網站建立 Composer 套件管理工具, 首先在專案的根目錄建立一個 composer.json 檔案, 然後在裡面加上:
	<pre>
		<code>
{
  "require": {
    "mobiledetect/mobiledetectlib": "^2.8"
  }
}
		</code>
	</pre>
</li>
<li>執行 composer install, 專案的根目錄就會產生 composer.lock 檔案以及 vendor 目錄, <a href="https://github.com/serbanghita/Mobile-Detect" target="_blank">Mobile Detect</a> 程式庫就已經出現在 vendor 目錄中了, 網站程式只要引入 vender/autoload.php 檔, 就會自動載入 vendor 目錄中的所有程式庫.</li>
<li>composer.lock 裡面記錄了所安裝的套件的資訊, 有被記錄在 composer.lock 裡面的套件, Composer 不會去搜尋更新的版本, 而是維持這個檔案中所記錄的版本, 因為新版的套件很有可能與目前使用的版本不相容, composer.lock 可以避免非預期的升級.</li>
<li>composer.json 與 composer.lock 需要加入 git, 其他開發者才知道有哪些程式庫.</li>
<li>vendor 資料夾不要加入 git, 其他開發者只要透過指令來更新就好.</li>
<li>使用<a href="https://pkg.phpcomposer.com/" target="_blank">中国全量镜像</a>: composer config repo.packagist composer https://packagist.phpcomposer.com</li>
<li>安裝程式庫時固定版本: composer require xxx/yyy:1.0.0</li>
</ol>
<?php include('bottom.php'); ?>