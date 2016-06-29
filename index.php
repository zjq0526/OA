<?php
#开启报错提示
define("APP_DEBUG", true);

//定义当前文件所有的工作目录 
define('WORKING_PATH', str_replace('\\', '/',__DIR__));

//定义上传的根目录
define('UPLOAD_ROOT_PATH','/Public/Upload/');
#引入接口文件
require "./ThinkPHP/ThinkPHP.php";