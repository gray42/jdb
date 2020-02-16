<?php
require '../vendor/autoload.php';

use JDB\JDB;

$jdb = JDB::settings(['path' => 'database/']);

$jdb->Create->Table('author')->Row('test',['var' => 'var']);

$jdb->Create->Push();
