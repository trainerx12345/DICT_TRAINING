<?php 
class Department{
  private $conn;
  public $department_id;
  public $name;
  public $short_name;
  public $search;

  public function __construct($dbase) {
    $this->conn = $dbase;
  }
  public function read(){
    $query = 'Select * from department_list';
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt;
  }

  public function create(){
    $query = 'INSERT INTO department_list SET name=?,short_name=?';
    $stmt = $this->conn->prepare($query);
    
    $stmt->bindParam(1,$this->name);
    $stmt->bindParam(2,$this->short_name);
    if($stmt->execute()){
      return true;
    }else{
      return false;
    }
  }
 
  public function edit(){
    $query = 'Select * from department_list where id=?';
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(1,$this->department_id);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $this->name = $row['name'];
    $this->short_name = $row['short_name'];
  }
  public function update(){
    $query = "UPDATE department_list SET name=?,short_name=? WHERE id = ?";
    $stmt = $this->conn->prepare($query);

    $stmt->bindParam(1, $this->name);
    $stmt->bindParam(2, $this->short_name);  
    $stmt->bindParam(3, $this->department_id);

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

  $query = "SELECT * FROM department_list WHERE name LIKE :keyword OR short_name LIKE :keyword";
  $stmt = $this->conn->prepare($query);
  $keyword = "%" . $keyword . "%";
  $stmt->bindParam(':keyword', $keyword, PDO::PARAM_STR);
  $stmt->execute();
  return $stmt;
}
  
  public function delete(){
    $query = "DELETE FROM department_list WHERE id = ?";
    $stmt = $this->conn->prepare($query);

    $stmt->bindParam(1, $this->department_id);

    $stmt->execute();
}
}