<?php

interface Logger {
    public function save($message);
    //继承接口必须实现接口中的全部方法
}

class FileLogger implements Logger{
    public function save($message)
    {
        var_dump('log into file '.$message);
    }
}

class DatabaseLogger implements Logger{
    public function save($message)
    {
        var_dump('log into database '.$message);
    }
}

class UsersController {
    protected $logger;

    /**
     * UsersController constructor.
     * @param $logger
     */
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function register()
    {
        $user = 'Jelly';
        $this->logger->save($user);
    }
}

$controller = new UsersController(new DatabaseLogger());
$controller->register();