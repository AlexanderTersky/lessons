<?php

class Database
{
    private $dsn;
    private $user;
    private $password;

    private static $instance;
    private static $pdo;

    public function __construct($config, $opt = [])
    {
        $this->dsn = $config['driver'].':host='.$config['host'].';dbname='.$config['dbname'].';charset='.$config['charset'];
        $this->user = $config['username'];
        $this->password = $config['password'];
    }

    public static function connect($config, $opt = [])
    {
        if (empty(self::$instance) && empty(self::$pdo)){
            self::$instance = new Database($config, $opt);
            self::$pdo = new PDO(self::$instance->dsn, self::$instance->user, self::$instance->password);
        }
        return self::$pdo;
    }

}