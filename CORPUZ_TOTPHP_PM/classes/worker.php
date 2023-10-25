<?php 
function caculateRegularPay($hourly_rate,$hours_worked){
  $regular_pay = $hourly_rate * $hours_worked;
  return $regular_pay;
}
function setFullName($first,$last){
  if ($first !== null && $last !== null) {
    return $first. ' ' . $last;
  } else {
    return 'Empty Name';
  }  
}
function calculateCartTotal($worker_selected_bread_quantity,$worker_selected_drink_quantity ){
return $worker_selected_bread_quantity + $worker_selected_drink_quantity;
}
function calculateTotalBread($price,$quantity){
return str_pad($price * $quantity, 2, '0', STR_PAD_LEFT);
}
function calculateTotalDrink($price,$quantity){
return str_pad($price * $quantity, 2, '0', STR_PAD_LEFT);
}
function calculateGrandTotal($bread,$drink){
  return str_pad($bread + $drink, 2, '0', STR_PAD_LEFT);
}

class Worker {
  public $hours_worked;
  public $hourly_rate;
  
  function calculatePay(){
  return $this->hours_worked * $this->hourly_rate;
  }
}
?>