<?php
include '../includes/header.php';
include_once '../classes/worker.php';

$first_name = null;
$last_name = null;
$full_name = null;
$selected_bread_price = 0;
$selected_drink_price = 0;
$selected_bread_quantity = 0;
$selected_drink_quantity = 0;
$cart_total = 0;
$total_bread = 0;
$total_drink = 0;
$grand_total = 0;
$final_drink = null;
$final_bread = null;

$array_bread = ['Raisin Bread' => 150.32, 'Valley Bread' => 53.32, 'Coconut Bread' => 20.12, 'Useless Bread' => 52.32];
$array_drink = ['Lemon Juice' => 39.43, 'Soda' => 51.54, 'Strawberry Juice' => 120.32, 'Extra Joss' => 321.42];

if (isset($_POST['btn_checkout'])) {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $selected_bread_price = $_POST['selected_bread'];
  $selected_drink_price = $_POST['selected_drink'];
  $selected_bread_quantity = $_POST['selected_bread_quantity'];
  $selected_drink_quantity = $_POST['selected_drink_quantity'];
  $final_drink =  $_POST['h_drink'];
  $final_bread =  $_POST['h_bread'];

  $selected_bread_quantity = isset($_POST['selected_bread_quantity']) ? floatval($_POST['selected_bread_quantity']) : 0;
  $selected_drink_quantity = isset($_POST['selected_drink_quantity']) ? floatval($_POST['selected_drink_quantity']) : 0;

  $full_name = setFullName($first_name, $last_name);
  $cart_total = calculateCartTotal($selected_bread_quantity, $selected_drink_quantity);
  $total_bread = calculateTotalBread(floatval($selected_bread_price), $selected_bread_quantity);
  $total_drink = calculateTotalDrink(floatval($selected_drink_price), $selected_drink_quantity);
  $grand_total = calculateGrandTotal($total_bread, $total_drink);
}
?>


<body class='container'>
  <header class='container'>
    <div class="shadow shadow-sm my-3 d-flex justify-content-center align-items-center">

      <h1>7/13 Mini mart</h1>
    </div>
  </header>
  <main class='container'>
    <section class='row'>

      <div class='col-7 mx-auto shadow shadow-lg my-3 justify-content-center align-content-center rounded-lg p-3 '>
        <div class="d-flex justify-content-between align-items-center mb-3 p-3">
          <h5>Store</h5>
        </div>
        <form action='./basics_functions.php' method='post'>
          <div class='row'>
            <div class='col-5'>
              <div class="form-group">
                <label for="" class="form-label">First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control" placeholder=""
                  key='first_name'>
              </div>
            </div>
            <div class='col-5'>
              <div class="form-group">
                <label for="" class="form-label">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="" key='last_name'>
              </div>
            </div>
          </div>

          <div class='row'>
            <div class='col-5'>
              <div class="mb-3">
                <label for="" class="form-label">Bread</label>
                <select class="form-select form-select-md" name="selected_bread" id="selected_bread">
                  <option selected value="No order bread">Select one</option>
                  <?php foreach ($array_bread as $bread => $bread_price) {
                    echo "<option value=" . $bread_price . " title=" . $bread . ">" . $bread . "</option>";
                  }
                  ?>
                </select>
                <input type="text" id='h_bread' name='h_bread' readonly key='h_bread' hidden>
              </div>
            </div>
            <div class='col-3'>
              <div class="form-group mb-3">
                <label for="" class="form-label">Price</label>
                <input type="text" name="price_bread" id="price_bread" class="form-control" placeholder="" readonly
                  tabindex="-1">
              </div>
            </div>
            <div class='col-2'>
              <div class="form-group mb-3">
                <label for="" class="form-label">Quantity</label>
                <input type="number" name="selected_bread_quantity" id="selected_bread_quantity" class="form-control"
                  placeholder="" min=0>
              </div>
            </div>
          </div>
          <div class='row'>
            <div class='col-5'>
              <div class="mb-3">
                <label for="" class="form-label">Drinks</label>
                <select class="form-select form-select-md" name="selected_drink" id="selected_drink">
                  <option selected value="No order drink">Select one</option>
                  <?php foreach ($array_drink as $drink => $drink_price) {
                    echo "<option value=" . $drink_price . " title=" . $drink . ">" . $drink . "</option>";
                  }
                  ?>
                </select>
                <input type="text" id='h_drink' name='h_drink' readonly key='h_drink' hidden>

              </div>
            </div>
            <div class='col-3'>
              <div class="form-group mb-3">
                <label for="" class="form-label">Price</label>
                <input type="text" name="price_drink" id="price_drink" class="form-control" placeholder="" readonly
                  tabindex="-1">
              </div>
            </div>
            <div class=' col-2'>
              <div class="form-group mb-3">
                <label for="" class="form-label">Quantity</label>
                <input type="number" name="selected_drink_quantity" id="selected_drink_quantity" class="form-control"
                  placeholder="" min=0>
              </div>

            </div>
          </div>
          <div class='d-flex me-2 justify-content-end gap-2'>
            <button class=" btn btn-outline-danger" type="submit" name="btn_cancel" id="btn_cancel">Cancel</button>
            <button class=" btn btn-outline-primary" type="submit" name="btn_checkout"
              id="btn_checkout">Checkout</button>
          </div>
        </form>
      </div>

      <div class='col-3 shadow me-1 mx-auto rounded-lg p-3 '>

        <div class="d-flex justify-content-between align-items-center mb-3">
          <h5>Full Name</h5>
          <small class="text-body-secondary">
            <?php echo $full_name ?>
          </small>
        </div>
        <h4 class=" d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Order</span>
          <span class="badge bg-primary rounded-pill"><?php echo $cart_total ?></span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0" id='final_drink' name='final_drink'><?php echo $final_bread ?></h6>
              <small class="text-body-secondary"> Price : ₱ <?php echo $selected_bread_price ?></small> <br />
              <small class="text-body-secondary"> Quantity : <?php echo $selected_bread_quantity ?></small>
            </div>
            <span class="text-body-secondary"> ₱ <?php echo str_pad($total_bread, 2, '0', STR_PAD_LEFT) ?></span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0" id='final_drink' name='final_drink'><?php echo $final_drink ?></h6>
              <small class="text-body-secondary">Price : ₱ <?php echo $selected_drink_price ?></small><br />
              <small class="text-body-secondary">Quantity : <?php echo $selected_drink_quantity ?></small>
            </div>
            <span class="text-body-secondary"> ₱ <?php echo str_pad($total_drink, 2, '0', STR_PAD_LEFT) ?></span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Grand Total :</span>
            <strong> ₱ <?php echo  str_pad($grand_total, 2, '0', STR_PAD_LEFT) ?></strong>
          </li>
        </ul>
      </div>


      </div>
    </section>
  </main>
  <footer class=' container'>
  </footer>

</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function () {
    $('#selected_drink').change(function () {
      var selectedDrink = $(this).val();
      var selectedDrinkName = $(this).find('option:selected').text();
      $('#h_drink').val(selectedDrinkName);
      $('#price_drink').val('₱ ' +
        selectedDrink);
    });

    $('#selected_bread').change(function () {
      var selectedBread = $(this).val();
      var selectedBreadName = $(this).find('option:selected').text();
      $('#h_bread').val(selectedBreadName);
      $('#price_bread').val('₱ ' +
        selectedBread);
    });



  });
</script>
<?php
include '../includes/footer.php';
?>