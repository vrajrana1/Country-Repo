<?php

    require_once("test.php");
class DBTransaction{

    protected $pdo;
    public const DB_HOST       = 'localhost';
    public const DB_NAME       = 'demo';
    public const DB_USER       = 'root';
    public const DB_PASSWORD   = '';
    

    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=" . self::DB_HOST . ";dbname=" . self::DB_NAME, self::DB_USER, self::DB_PASSWORD);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }

    public function insertTransaction($sql, $data)
    {

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($data);
    }
        

}
?>