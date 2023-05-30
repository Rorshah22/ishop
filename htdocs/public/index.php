<?php

if (PHP_MAJOR_VERSION < 8) die("Необходима версия PHP8");

require_once dirname(__DIR__) . '/config/init.php';

new \Khali\App();

var_dump(\Khali\App::$app->getProperties());

