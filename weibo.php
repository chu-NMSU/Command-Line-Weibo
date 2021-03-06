<?php
/**
 * Includes
 */ 
require_once 'lib\vendor\Sina\weibooauth.php';
require_once 'DB.class.php';
require_once 'Config.class.php';
require_once 'User.class.php';
require_once 'Auth.class.php';
require_once 'Weibo.class.php';

require_once 'Exception\BadCommandException.class.php';
require_once 'Exception\CommandNotImplementException.class.php';
require_once 'Exception\DBException.class.php';

error_reporting(E_ALL);

$weibo = new Weibo();
$weibo->run();


