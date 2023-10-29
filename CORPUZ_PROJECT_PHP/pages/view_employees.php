<?php 
   include '../shared/header.php';
   include '../config/database.php';
   include '../classes/employees.php';

   $db = new Database();
   $dbase = $db->getConnection();

   $user = new Employee($dbase);
   $data = $user->read();
   
   ?>
<!-- Section Employees-->
<section class="py-5 vh-100" id="users">
  <div class="container">
    <a name="" id="btn_add" class="btn btn-primary" href="create.php" role="button">Add</a>
    <h2 class="text-center mb-4">List of Users</h2>
    <div class="table-responsive">
      <table class="table table-bordered" id='data-tables'>
        <thead>
          <tr>
            <th>User ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>Password</th>
            <th>Avatar</th>
            <th>Last Login</th>
            <th>Type</th>
            <th>Date Added</th>
            <th>Date Updated</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
       while($row=$data->fetch(PDO::FETCH_ASSOC)){
         extract($row);
                echo"<tr>
                    <td> $id </td>
                    <td> $firstname </td>
                    <td> $lastname </td>
                    <td> $username </td>
                    <td> $password </td>
                    <td> $avatar </td>
                    <td> $last_login </td>
                    <td> $type </td>
                    <td> $date_added </td>
                    <td> $date_updated </td> 
                    <td>   <a name='btn_update' id='btn_update' class='btn btn-primary' href='update.php?id=$id role='button'>update</a></td> 
                </tr>";
            }
            ?>
        </tbody>

      </table>
    </div>
  </div>
</section>