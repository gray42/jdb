<?php
define("ROOT", dirname(__DIR__));
require 'vendor/autoload.php';

use JDB\JDB;

$jdb = JDB::settings(['path' => 'database/']);

$jdb->Create->Table('author')->Row('denme',['var' => 'var']);

$jdb->Create->Push();
