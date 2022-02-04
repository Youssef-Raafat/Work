<?php
session_start();

use Muddaris\Lib\FrontController;
use Muddaris\Lib\language;

require_once 'config.php';
require_once PUBLIC_PATH . 'lib' . DS . 'autoload.php';

$lang = new language;
new FrontController($lang);
