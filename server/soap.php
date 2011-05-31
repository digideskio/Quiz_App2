<?php
error_reporting(E_ALL|E_STRICT);
ini_set('display_errors', 1);
#date_default_timezone_set('Asia/shanghai');

//�����·��
define("ROOT_PATH",realpath(dirname(__FILE__)."/.."));


//���û���·��
set_include_path(ROOT_PATH.'/lib/');

require_once "Zend/Loader/Autoloader.php";
Zend_Loader_Autoloader::getInstance()->setFallbackAutoloader(true);

require_once(ROOT_PATH.'/config.php');
require_once(ROOT_PATH.'/server/Fluttery.php');

$options=array(
  'uri'=> 'http://www.app-arena.com/manager/server/soap.php',
);
$server=new Zend_Soap_Server(null,$options);

$server->setClass('Fluttery');
$server->setObject(new Fluttery());

$server->handle();
