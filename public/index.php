<?php
require '../vendor/autoload.php';

// 類別先import進來
use Demo\Hello\Lara;
use Demo\Hello\Someone;
$lara= new Lara();
$vincent= new Someone('Vincent');

// 類別未先import進來
$mary= new \Demo\Hello\Someone('Mary');
$john= new Demo\Hello\Someone('John');
$hello= new Demo\HelloWorld();
use Demo\HelloWorld as World; // 類別另取別名
$world = new World();

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('WISD');
$log->pushHandler(new StreamHandler('C:\Users\88696\Desktop\wagon\uwamp\www\lara_auto\log\my.log', Level::Warning));

// add records to the log
$log->warning('Foo');
$log->error('Bar');
?>