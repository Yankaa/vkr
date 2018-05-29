<?php
/*
 *  Конфигурационный файл
 */

defined('MVC') or die('Access denied');

define('PATH', 'vkr.loc/');
define('HOST', 'localhost');
define('DBNAME', 'zxc');
define('DBUSER', 'zxc');
define('DBPASS', '');

define('CONTROLLER', 'controller/controller.php');
define('MODEL', 'model/model.php');
define('TEMPLATE', 'default');
define('TEMPLATES', 'view/' .TEMPLATE);
define('TITLE', 'MVC');



mysql_connect(HOST, DBUSER, DBPASS) or die('Ошибка подключения к Базе данных');
mysql_select_db(DBNAME) or die('Отсутствует подключение к Базе даныых');
mysql_query("SET NAMES 'UTF8'") or die('Cant set charset');

?>