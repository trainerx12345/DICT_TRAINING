<?php 
class Payroll{
  private $conn;
  public $payroll_id;
  public $code;
  public $start_date;
  public $end_date;
  public $type;
  
  public function __construct($dbase) {
    $this->conn = $dbase;
  }
  public function read(){
    $query = 'Select * from payroll_list';
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt;
  }

  public function create(){
    $query = 'INSERT INTO payroll_list SET 
    code=?,
    start_date=?,
    end_date=?,
    type=?
    ';
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(1,$this->code);
    $stmt->bindParam(2,$this->start_date);
    $stmt->bindParam(3,$this->end_date);
    $stmt->bindParam(4,$this->type);
    if($stmt->execute()){
      return true;
    }else{
      return false;
    }
  }
 
  public function edit(){
    $query = 'Select * from payroll_list where id=?';
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(1,$this->payroll_id);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $this->code = $row['code'];
    $this->start_date = $row['start_date'];
    $this->end_date = $row['end_date'];
    $this->type = $row['type'];
  }
  
  public function delete(){
    $query = "DELETE FROM payroll_list WHERE id = ?";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(1, $this->payroll_id);
    $stmt->execute();
}
}