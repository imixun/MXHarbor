<?php
/**
 *
 * index(入口文件)
 *
 * @package      	Yourphp
 * @author          liuxun QQ:147613338 <web@yourphp.cn>
 * @copyright     	Copyright (c) 2008-2011  (http://www.yourphp.cn)
 * @license         http://www.yourphp.cn/license.txt
 * @version        	YourPHP企业网站管理系统 v2.1 2012-10-08 yourphp.cn $
 */
if(!is_file('./Cache/config.php'))header("location: ./Install");
header("Content-type: text/html;charset=utf-8");
ini_set('memory_limit','32M');
error_reporting(E_ERROR | E_WARNING | E_PARSE);
define('Yourphp',true);
define('UPLOAD_PATH','./Uploads/');
define('VERSION','v2.2');
define('UPDATETIME','20160118');
define('APP_NAME','Manger');
define('APP_PATH','./Manger/');
define('APP_LANG',false);
define('APP_DEBUG',false);
define('THINK_PATH','./Core/');
require(THINK_PATH.'Core.php');
?>
