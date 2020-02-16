<?php

namespace JDB;

use JDB\Cruds\Create;
use JDB\Cruds\Read;
use JDB\Cruds\Update;
use JDB\Cruds\Delete;
use JDB\Cruds\Search;
use JDB\Issets;

class JDB
{
    public $Create;
    public $Read;
    public $Update;
    public $Delete;
    public $Search;

    private static $JDB = null;
    private $Path;

    private function __construct(array $config)
    {
        $this->Path = $config['path'];
        $pathIs = new Issets('d', $this->Path);
        if ($pathIs->result == false) {
            mkdir($this->Path);
        }

        $this->Create = new Create($config);
        $this->Read = new Read($config);
        $this->Update = new Update($config);
        $this->Delete = new Delete($config);
        $this->Search = new Search($config);
    }
    public static function settings(array $config)
    {
        if (self::$JDB == null) {
            self::$JDB = new JDB($config);
        }

        return self::$JDB;
    }
}
