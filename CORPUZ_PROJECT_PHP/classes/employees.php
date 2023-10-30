<?php 

class Employee{
  private $conn;
  public $employee_id;
  public $company_id;
  public $department_id;
  public $position_id;
  public $first_name;
  public $middle_name;
  public $last_name;
  public $email;

  public function __construct($dbase) {
    $this->conn = $dbase;
    
  }
  public function read(){
    $query = 'SELECT
    employee_list.id,
    employee_list.company_id,
    department_list.id AS department_id,
    department_list.`name` AS department_name,
    position_list.id AS position_id,
    position_list.`name` AS position_name,
    employee_list.first_name,
    employee_list.middle_name,
    employee_list.last_name,
    employee_list.email
    FROM
    employee_list
    INNER JOIN department_list ON employee_list.department_id = department_list.id
    INNER JOIN position_list ON employee_list.position_id = position_list.id
    ';
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt;
  }

  public function create(){
    $query = 'INSERT INTO employee_list SET 
    company_id=?,
    department_id=?,
    position_id=?,
    first_name=?,
    middle_name=?,
    last_name=?,
    email=?';
    $stmt = $this->conn->prepare($query);
    
    $stmt->bindParam(1,$this->company_id);
    $stmt->bindParam(2,$this->department_id);
    $stmt->bindParam(3,$this->position_id);
    $stmt->bindParam(4,$this->first_name);
    $stmt->bindParam(5,$this->middle_name);
    $stmt->bindParam(6,$this->last_name);
    $stmt->bindParam(7,$this->email);
    if($stmt->execute()){
      return true;
    }else{
      return false;
    }
  }
 
  public function edit(){
    $query = 'Select * from employee_list where id=?';
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(1,$this->employee_id);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $this->company_id = $row['company_id'];
    $this->department_id = $row['department_id'];
    $this->position_id = $row['position_id'];
    $this->first_name = $row['first_name'];
    $this->middle_name = $row['middle_name'];
    $this->last_name = $row['last_name'];
    $this->email = $row['email'];
  }

  public function update(){
    $query = "UPDATE employee_list SET department_id=?,position_id=?,first_name=?,middle_name=?,last_name=?,email=?,company_id=? WHERE id = ?";
    $stmt = $this->conn->prepare($query);

    $stmt->bindParam(1, $this->department_id);
    $stmt->bindParam(2, $this->position_id);
    $stmt->bindParam(3, $this->first_name);
    $stmt->bindParam(4, $this->middle_name);
    $stmt->bindParam(5, $this->last_name);  
    $stmt->bindParam(6, $this->email);
    $stmt->bindParam(7, $this->company_id);
    $stmt->bindParam(8, $this->employee_id);
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

  $query = "SELECT * FROM employee_list WHERE first_name LIKE :keyword OR middle_name LIKE :keyword OR last_name LIKE :keyword OR email LIKE :keyword";
  $stmt = $this->conn->prepare($query);
  $keyword = "%" . $keyword . "%";
  $stmt->bindParam(':keyword', $keyword, PDO::PARAM_STR);
  $stmt->execute();
  return $stmt;
}
  

  public function delete(){
    $query = "DELETE FROM employee_list WHERE id = ?";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(1, $this->employee_id);
    $stmt->execute();
}
}