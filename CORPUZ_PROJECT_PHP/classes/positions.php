<?php 
class Position{
  private $conn;
  public $position_id;
  public $payslip_id;
  public $name;
  public function __construct($dbase) {
    $this->conn = $dbase;
  }
  public function read(){
    $query = 'Select * from position_list';
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt;
  }

  public function create(){
    $query = 'INSERT INTO position_list SET name=?';
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(1,$this->name);
    if($stmt->execute()){
      return true;
    }else{
      return false;
    }
  }
 
  public function edit(){
    $query = 'Select * from position_list where id=?';
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(1,$this->position_id);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $this->name = $row['name'];
  }
  
  public function delete(){
    $query = "DELETE FROM position_list WHERE id = ?";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(1, $this->position_id);
    $stmt->execute();
}
}