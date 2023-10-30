<?php 
class Allowance{
  private $conn;
  public $allowance_id;
  public $payslip_id;
  public $name;
  public $amount;
  public function __construct($dbase) {
    $this->conn = $dbase;
  }
  public function read(){
    $query = 'Select * from allowance_list';
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt;
  }

  public function create(){
    $query = 'INSERT INTO allowance_list SET name=?,amount=?';
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(1,$this->name);
    $stmt->bindParam(2,$this->amount);
    if($stmt->execute()){
      return true;
    }else{
      return false;
    }
  }
 
  public function edit(){
    $query = 'Select * from allowance_list where id=?';
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(1,$this->allowance_id);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $this->payslip_id = $row['payslip_id'];
    $this->name = $row['name'];
    $this->amount = $row['amount'];
  }

  public function update(){
    $query = "UPDATE allowance_list SET name=?,amount=? WHERE id = ?";
    $stmt = $this->conn->prepare($query);

    $stmt->bindParam(1, $this->name);
    $stmt->bindParam(2, $this->amount);  
    $stmt->bindParam(3, $this->allowance_id);

    if($stmt->execute()){
      echo "
      <script>
        alert('Record Update Successfully!');
        window.location.href='/pages/dashboard.php';
      </script>"; 
    }else{
      echo "
      <script>
        alert('Invalid Input');
      </script>"; 
    }
}
public function search($keyword) {

  $query = "SELECT * FROM allowance_list WHERE name LIKE :keyword OR amount LIKE :keyword";
  $stmt = $this->conn->prepare($query);
  $keyword = "%" . $keyword . "%";
  $stmt->bindParam(':keyword', $keyword, PDO::PARAM_STR);
  $stmt->execute();
  return $stmt;
}
  
  
  public function delete(){
    $query = "DELETE FROM allowance_list WHERE id = ?";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(1, $this->allowance_id);
    $stmt->execute();
}
}