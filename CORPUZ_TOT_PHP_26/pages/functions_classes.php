<?php 
include_once '../classes/worker.php';

$worker = new Worker();
if(isset($_POST['btn_submit'])){
    $hours_worked = $_POST['hourly_worked'];
    $hourly_rate = $_POST['hourly_rate'];
    // $regular_pay = caculateRegularPay($hours_worked,$hourly_rate);

    $worker->hours_worked = floatval($hours_worked);
    $worker->hourly_rate = floatval($hourly_rate);
    $regular_pay = $worker->calculatePay();
    
}
?>
<!DOCTYPE html>
<html lang='en'>

  <head>
    <meta charset='UTF-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <title>Document</title>
  </head>

  <body>
    <form action='functions_classes.php' method='post'>

      <p>Hours Worked</p>
      <input type='number' name='hourly_worked' id='hourly_worked' key='hourly_worked' />

      <p>Hourly Rate</p>
      <input type=' number' name='hourly_rate' id='hourly_rate' key='hourly_rate' />

      <button type='submit' name="btn_submit" id="btn_submit" key='btn_submit'>Calculate</button>
    </form>
    <strong><?php if($_POST){echo $regular_pay;} ?></strong>
  </body>

</html>