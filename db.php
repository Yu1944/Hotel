<?php 
    class DatabaseConnection {
      private $host = 'localhost';
      private $username = 'root';
      private $password = '';
      private $dbname = 'hotel_mborijnland';
      private $pdo;

      public function __construct() {
        $dsn = "mysql:host={$this->host};dbname={$this->dbname}"; 
        $options = [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];
        $this->pdo = new PDO($dsn, $this->username, $this->password, $options);
      }

      public function query($sql, $bind = array()) {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($bind);
        return $stmt->fetchAll();
      }
  }

    $db = new DatabaseConnection();
?>