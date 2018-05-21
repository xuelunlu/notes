<?php include('top.php'); ?>
<h3>Upload</h3>
<pre><code class="php">
class Upload extends MY_Controller
{

    public function index()
    {

        $config['upload_path']   = './files/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']      = '0';
        $config['max_width']     = '1024';
        $config['max_height']    = '768';
        $config['encrypt_name']  = true;

        $this->load->library('upload', $config);

        $name = 'images';

        $files = $_FILES;

        $count = count($_FILES[$name]['name']);

        $json = array();

        for ($i = 0; $i < $count; $i++) {

            $_FILES[$name]['name']     = $files[$name]['name'][$i];
            $_FILES[$name]['type']     = $files[$name]['type'][$i];
            $_FILES[$name]['tmp_name'] = $files[$name]['tmp_name'][$i];
            $_FILES[$name]['error']    = $files[$name]['error'][$i];
            $_FILES[$name]['size']     = $files[$name]['size'][$i];

            if (!$this->upload->do_upload($name)) {

                $json[$i] = [
                    'errors' => $this->upload->display_errors(),
                    'status' => 0,
                ];

            } else {

                $data = $this->upload->data();

                $data['url'] = base_url('files/' . $data['file_name']);

                $json[$i] = [
                    'data'   => $data,
                    'status' => 1,
                ];

            }

        }

        echo json_encode($json);

    }

}
class Upload extends MY_Controller
{

    public function index()
    {

        $config['upload_path']   = './files/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']      = '0';
        $config['max_width']     = '1024';
        $config['max_height']    = '768';
        $config['encrypt_name']  = true;

        $this->load->library(\'upload\', $config);

        if (!$this->upload->do_upload(\'upload\')) {

            echo json_encode([
                \'errors\' => $this->upload->display_errors(),
                \'status\' => 0,
            ]);

        } else {

            $data = $this->upload->data();

            $data[\'url\'] = base_url(\'files/\' . $data[\'file_name\']);

            echo json_encode([
                \'data\'   => $data,
                \'status\' => 1,
            ]);

        }

    }

}
</code></pre>
<h3>mailer</h3>
<pre><code class="php">
date_default_timezone_set(\'Asia/Taipei\');

include \'PHPMailer_v5.1/class.phpmailer.php\';

class MY_PHPMailer extends PHPMailer
{

    public function __construct()
    {

        parent::__construct();

        $this->SMTPDebug = 2;

        $this->IsSMTP();
        $this->SMTPAuth   = true;
        $this->SMTPSecure = \'ssl\';
        $this->Host       = \'smtp.mail.yahoo.com\';
        $this->Port       = 465;
        $this->Username   = \'course.cana@yahoo.com.tw\';
        $this->Password   = \'ce8aik8y\';

        $this->CharSet = "utf-8";

    }

    public function set_content($subject, $html_content)
    {

        $this->Subject = $subject;

        $this->MsgHTML($html_content);

    }

}

$mailer = new MY_PHPMailer();

$mailer->SetFrom(\'course.cana@yahoo.com.tw\', \'寄件人姓名\');

$mailer->AddReplyTo(\'canamfga@gmail.com\', \'回覆人姓名\');
$mailer->set_content(\'主旨\', \'<h3>\' . date(\'Y-m-d H:i:s\') . \'</h3>\');

$mailer->AddAddress(\'xuelun.lu@gmail.com\', \'呂學倫\');

if (!$mailer->Send()) {

    echo $mailer->ErrorInfo;

}
</code></pre>
<h3>age</h3>
<pre><code class="php">
/*
使用範例.
date_default_timezone_set(\'Asia/Taipei\');
echo age(\'2013-05-11 10:02:00\');
 */
function age($birthday)
{

    $timestamp = strtotime($birthday);

    $age = date(\'Y\') - date(\'Y\', $timestamp);

    if ($age >= 0) {

        if (intval(date(\'mdHis\', $timestamp)) > intval(date(\'mdHis\'))) {

            $age = $age - 1;

            if ($age < 0) {

                return 0;

            }

        }

        return $age;

    } else {

        return 0;

    }

}
</code></pre>
<h3>string</h3>
<pre><code class="php">
namespace Brown\String;

class Helper
{

    public function __construct()
    {

    }

    //去掉跟隨別的, 擠在一起的空白.
    public static function strip_doubled_up_whitespace($string)
    {

        return preg_replace(\'/\s(?=\s)/\', \'\', $string);

    }

    public static function strip_nrt($string)
    {

        return preg_replace(\'/[\n\r\t]/\', \' \', $string);

    }

}
</code></pre>
<h3>ip</h3>
<pre><code class="php">
function get_ip()
{

    if (!empty($_SERVER[\'HTTP_X_FORWARDED_FOR\'])) {

        $ip = split(\',\', $_SERVER[\'HTTP_X_FORWARDED_FOR\']);

        return trim($ip[0]);

    }

    return $_SERVER[\'REMOTE_ADDR\'];

}
</code></pre>
<h3>error_handler</h3>
<pre><code class="php">
set_error_handler(\'error_handler\');

function error_handler($errno, $errstr, $errfile, $errline, $errcontext)
{

}
</code></pre>
<h3>MySQL 連線</h3>
<pre><code class="php">
/* MySQL. */
define(\'MYSQL_HOST\', \'localhost\');
define(\'MYSQL_USER\', \'root\');
define(\'MYSQL_PASSWORD\', \'eZbbrhMbEfw2RNJY\');
define(\'MYSQL_DB\', \'site\');

if (!@mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD)) {

    die(\'無法連線資料庫！\');

}

mysql_query(\'SET NAMES utf8\');

if (!@mysql_select_db(MYSQL_DB)) {

    die(\'無法使用資料庫！\');

}
</code></pre>
<h3>Layout</h3>
<pre><code class="html">
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container-fluid">
		
	</div>
</body>
</html>
</code></pre>
<h3>命令模式</h3>
<pre><code class="php">
namespace App\Command;

interface Command
{

    public function execute();

    public function getLog();

}
</code></pre>
<pre><code class="php">
namespace App\Command;

use \App\Command\Command;

class Invoker
{

    private static $instance = false;

    private $commandList = array();

    private function __construct()
    {

    }

    public function execute(Command $command)
    {

        array_push($this->commandList, $command);

        $command->execute();

        $command->getLog();

    }

    public static function getInstance()
    {

        if (self::$instance === false) {

            self::$instance = new Invoker();

        }

        return self::$instance;

    }

}
</code></pre>
<?php include('bottom.php'); ?>