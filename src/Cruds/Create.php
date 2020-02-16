<?php

namespace JDB\Cruds;

use JDB\Issets;
use JDB\Json;

class Create
{
    private $Path;
    private $tableName;
    private $rowName;
    private $Data;

    public function __construct(array $config)
    {
        $this->Path = $config['path'];
    }
    public function Table(string $table)
    {
        $this->tableName = $this->Path . $table .'/';
        $tableIs = new Issets('d', $this->tableName);
        if ($tableIs->result == false) {
            mkdir($this->tableName);
            $tableIs = true;
        }
        return $this;
    }
    public function Row(string $name, array $data)
    {
        $this->rowName = $this->tableName.$name.'.json';
        $this->Data = json_encode($data);

        return $this;
    }
    public function Push()
    {
       return file_put_contents($this->rowName,$this->Data);
    }
}
