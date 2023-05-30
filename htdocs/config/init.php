<?php

const DEBUG = 1;
define("ROOT", dirname(__DIR__));
const WWW = ROOT . '/public';
const APP = ROOT.'/app';
const CORE = ROOT.'/vendor/khali';
const HELPERS = ROOT.'/vendor/khali/helpers';
const CACHE = ROOT. '/tmp/cache';
const LOGS = ROOT. '/tmp/logs';
const CONFIG = ROOT. '/config';
const LAYOUT = 'ishop';
define("PATH", $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST']);
const ADMIN = PATH . '/admin';
const NO_IMAGE = '/uploads/no-image.jpg';

require_once ROOT.'/vendor/autoload.php';
