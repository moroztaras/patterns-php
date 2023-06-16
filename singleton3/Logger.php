<?php

class Logger
{
    const FILE = './log.txt';

    const ALLOWED_LOG_TYPES = [
        'file',
        'error_log'
    ];

    private ?string $logType = null;
    private ?string $dateFormat = null;
    private ?string $prefix = null;

    private static ?Logger $instance = null;

    public static function getInstance():self
    {
        if(!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }
    private function __construct() {}
    private function __clone() {}

    public function setDateFormat(string $dateFormat):self
    {
        $this->dateFormat = $dateFormat;

        return $this;
    }

    public function getDateFormat():?string
    {
        if (!$this->dateFormat){
            throw new \Exception('Date format is null');
        }

        return $this->dateFormat;
    }

    public function setLogType(?string $logType):self
    {
        if (!in_array($logType, self::ALLOWED_LOG_TYPES)) {
            throw new \Exception('Undefined log type');
        }
        $this->logType = $logType;

        return $this;
    }

    public function getLogType():string
    {
        if (!$this->logType){
            throw new \Exception('Log type is null');
        }

        return $this->logType;
    }

    public function setProfile($profile):self
    {
        $this->prefix = $profile;

        return $this;
    }

    public function getPrefix(): ?string
    {
        return $this->prefix;
    }

    public function log(string $data):void
    {
        $prefix = $this->getPrefix();
        $message = sprintf('%s: %s%s',
            date($this->getDateFormat()),
        $prefix ? $prefix.' ':'',
        $data.PHP_EOL
        );

        if ($this->getLogType() === 'file') {
            file_put_contents(self::FILE, $message, FILE_APPEND);
        } elseif ($this->getLogType() === 'error_log') {
            error_log($message);
        }
    }

}