<?php
declare(strict_types=1);

class DB
{
    private static $instance;
    private PDO    $pdo;

    private string $dbname   = 'testdb';
    private string $host     = 'mysql';
    private string $user     = 'root';
    private string $password = 'root';

    /**
     * @throws Exception
     */
    private function __construct()
    {
        try {
            $this->pdo = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                $this->user,
                $this->password
            );

            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOexception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public static function getInstance(): PDO
    {
        if (self::$instance === null) {
            self::$instance = new DB();
        }
        return self::$instance->pdo;
    }
}

session_start();
