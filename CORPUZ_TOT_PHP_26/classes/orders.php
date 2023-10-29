<?php 
include './customers.php';
include './salesman.php';



class Orders {
  public $Customer = new Customers();
 public $Salesman = new Salesman();
  public $order_id;
  public $purcahse_amount;
  public $order_date;
  public $customer_id;
  public $salesman_id;


  public $getInfoCustomer;

  function getCustomerInfo() {
    return $this->Customer->full_name . ' ' . $this->Customer->city ;
  }
  
  function getSalesmanInfo() {
    return $this->Salesman->full_name . ' ' . $this->Salesman->city ;
  }

  

  
}   



?>