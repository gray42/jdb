<?php

namespace JDB;

class Issets
{
    /**
     * @var bool $result
     */
    public $result;

    /**
     * @return bool
     */
    public function __construct(string $type, string $file)
    {
        switch ($type) {
            case 'f':
                $this->result = $this->fileControll($file);
                break;
            case 'd':
                $this->result = $this->dirControll($file);
                break;
            default:
                $this->result = null;
                break;
        }
    }
    private function fileControll(string $file)
    {
        return is_file($file);
    }
    private function dirControll(string $dir)
    {
        return is_dir($dir);
    }
}
