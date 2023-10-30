<?php 
class Position{
  private $conn;
  public $position_id;
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
  public function update(){
    $query = "UPDATE position_list SET name=? WHERE id = ?";
    $stmt = $this->conn->prepare($query);

    $stmt->bindParam(1, $this->name); 
    $stmt->bindParam(2, $this->position_id);

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

  $query = "SELECT * FROM position_list WHERE name LIKE :keyword";
  $stmt = $this->conn->prepare($query);
  $keyword = "%" . $keyword . "%";
  $stmt->bindParam(':keyword', $keyword, PDO::PARAM_STR);
  $stmt->execute();
  return $stmt;
}
  
  public function delete(){
    $query = "DELETE FROM position_list WHERE id=?";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(1, $this->position_id);
    $stmt->execute();
}
}