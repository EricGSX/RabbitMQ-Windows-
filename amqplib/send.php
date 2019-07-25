<?php
require_once __DIR__ . '/vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

//创建服务器连接
$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
$channel = $connection->channel();
// 创建服务器通道

$channel->queue_declare('test', false, false, false, false);
$msg = new AMQPMessage('This is my test');
$channel->basic_publish($msg, '', 'test');

echo "success";

//关闭通道和链接
$channel->close();
$connection->close();