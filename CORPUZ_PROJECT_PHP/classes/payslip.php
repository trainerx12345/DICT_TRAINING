<?php 
class Deduction{
  private $conn;
  public $payslip_id;
  public $payroll_id;
  public $employee_id;
  public $days_present;
  public $days_absent;
  public $tardy_undertime;
  public $total_allowance;
  public $total_deduction;
  public $base_salary;
  public $withholding_tax;
  public $net;
  
  public function __construct($dbase) {
    $this->conn = $dbase;
  }
  public function read(){
    $query = 'Select * from payslip_list';
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt;
  }

  public function create(){
    $query = 'INSERT INTO payslip_list SET 
    payroll_id=?,
    employee_id=?,
    days_present=?,
    days_absent=?,
    tardy_undertime=?,
    total_allowance=?,
    total_deduction=?,
    base_salary=?,
    withholding_tax=?,
    net=?';
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(1,$this->payroll_id);
    $stmt->bindParam(2,$this->employee_id);
    $stmt->bindParam(3,$this->days_present);
    $stmt->bindParam(4,$this->days_absent);
    $stmt->bindParam(5,$this->tardy_undertime);
    $stmt->bindParam(6,$this->total_allowance);
    $stmt->bindParam(7,$this->total_deduction);
    $stmt->bindParam(8,$this->base_salary);
    $stmt->bindParam(9,$this->withholding_tax);
    $stmt->bindParam(10,$this->net);
    
    if($stmt->execute()){
      return true;
    }else{
      return false;
    }
  }
 
  public function edit(){
    $query = 'Select * from payslip_list where id=?';
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(1,$this->payslip_id);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $this->payroll_id=$row['payroll_id'];
      $this->employee_id=$row['employee_id'];
      $this->days_present=$row['days_present'];
      $this->days_absent=$row['days_absent'];
      $this->tardy_undertime=$row['tubes_undertime'];
      $this->total_allowance=$row['total_allowance'];
      $this->total_deduction=$row['total_deduction'];
      $this->base_salary=$row['base_salary'];
      $this->withholding_tax=$row['withholding_tax'];
      $this->net=$row['net'];
      
  }
  
  public function delete(){
    $query = "DELETE FROM payslip_list WHERE id = ?";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(1, $this->payslip_id);
    $stmt->execute();
}
}