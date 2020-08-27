<?php
require '../vendor/autoload.php';

use ugurkorkmaz\JDB;

$jdb = JDB::settings(['path' => 'database/']);

$jdb->Create->Table('author')->Row('test',['var' => 'var']);

$jdb->Create->Push();
