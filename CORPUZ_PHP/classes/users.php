<?php 
class Users{
  private $conn;
  public $user_id;
  public $first_name;
  public $last_name;
  public $username;
  public $password;
  public function __construct($dbase) {
    $this->conn = $dbase;
    
  }
  public function read(){
    $query = 'Select * from users';
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt;
  }

  public function create(){
    $query = 'INSERT INTO users SET firstname=?,lastname=?,username=?,password=?';
    $stmt = $this->conn->prepare($query);
    
    $stmt->bindParam(1,$this->first_name);
    $stmt->bindParam(2,$this->last_name);
    $stmt->bindParam(3,$this->username);
    $stmt->bindParam(4,$this->password);
    if($stmt->execute()){
      return true;
    }else{
      return false;
    }
  }
 
  public function edit(){
    $query = 'Select * from users where id=?';
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(1,$this->user_id);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $this->first_name = $row['firstname'];
    $this->last_name = $row['lastname'];
    $this->username = $row['username'];
    $this->password = $row['password'];
  }
}