<?php
class Dao{
  private $host = "us-cdbr-iron-east-01.cleardb.net";
  private $db = "heroku_9b079b48391d866";
  private $user = "bfecb98047ad0d";
  private $pass = "f6b96ffa";

  public function getConnection () {
    return new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user,
          $this->pass);

}

public function saveLogin ($name, $password) {
    $conn = $this->getConnection();
    $saveQuery =
        "INSERT INTO users
        (username, password)
        VALUES
        (:username, :password)";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":username", $name);
    $q->bindParam(":password", $password);
    $q->execute();
  }






?>
