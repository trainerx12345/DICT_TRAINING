<?php 
   include '../shared/header.php';
   include '../config/database.php';
   include '../classes/users.php';

   $db = new Database();
   $dbase = $db->getConnection();

   $user = new Users($dbase);

   if(isset($_POST['btn_submit'])){
      $user->first_name = $_POST['first_name'];
      $user->last_name = $_POST['last_name'];
      $user->username = $_POST['username'];
      $user->password = $_POST['password'];

      if($user->create()){

        echo '<div class="alert alert-success" role="alert">
          <strong>Success</strong>
        </div>';
        
      }
   }
   
   ?>
<h2>Create a User</h2>

<form class="row g-3 needs-validation" action="create.php" method="post">
  <div class="col-md-4">
    <label for="first_name" class="form-label">First name</label>
    <input type="text" class="form-control" id="first_name" name='first_name' placeholder=' First Name' required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="last_name" class="form-label">Last name</label>
    <input type="text" class="form-control" id='last_name' name='last_name' placeholder=' Last Name' required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="username" class="form-label">Username</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id='username' name='username' placeholder=' Username' required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder='Password' required>
    <div class="invalid-feedback">
      Please provide a password.
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-outline-dark ms-2" type="submit" name="btn_submit">
      <i class="fas fa-user me-2"></i>
      Submit</button>
  </div>
</form>