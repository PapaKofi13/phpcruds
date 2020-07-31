<?php

// CREATES AND CONNECT TO A DATABASE

date_default_timezone_set("Africa/Accra");
class Connection
{
    private $serverName;
    private $userName;
    private $password;
    private $dbName;
    private $charset;


    // REPLACE WITH YOUR DATABASE NAME
    public function connect()
    {
        $this->serverName = "localhost";
        $this->userName = "root";
        $this->password = "";
        $this->dbName = "mickey";
        $this->charset = "utf8mb4";

        try {
            $dsn = "mysql:host=" . $this->serverName . ";charset=" . $this->charset;
            $pdo = new PDO($dsn, $this->userName, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->query("CREATE DATABASE IF NOT EXISTS $this->dbName");
            $pdo->query("use $this->dbName");
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection failed " . $e->getMessage();
        }
    }
}
