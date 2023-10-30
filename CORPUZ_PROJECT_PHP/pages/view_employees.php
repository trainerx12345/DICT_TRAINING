<?php 
  include '../classes/employees.php';
  include_once '../classes/departments.php';
  include_once '../classes/positions.php';
  $db = new Database();
  $dbase = $db->getConnection();

  $user = new Employee($dbase);
  $data = $user->read();

  $department = new Department($dbase);
  $department_data = $department->read();
  $department_data2 = $department->read();

  $position = new Position($dbase);
  $position_data = $position->read();
  $position_data2 = $position->read();
   ?>
<!-- Section Employees-->

<section class="py-5 vh-100" id="employees">
  <div class="container">
    <!-- Register Modal -->
    <div id="create_employees" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"
      data-bs-keyboard="false" data-bs-backdrop="static">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-3 shadow">
          <div class="modal-header bg-primary text-white">
            <h2 class="modal-title">Create a Employee</h2>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form class="g-3 needs-validation" action="./create/create_employees.php" method="post">
              <div class="mb-3">
                <label for="name" class="form-label">Employee First Name</label>
                <input type="text" class="form-control" id="emp_fname" name='emp_fname' placeholder='Enter First Name'
                  required>
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Employee Middle Name</label>
                <input type="text" class="form-control" id="emp_mname" name='emp_mname' placeholder='Enter Middle Name'>
              </div>

              <div class="mb-3">
                <label for="name" class="form-label">Employee Last Name</label>
                <input type="text" class="form-control" id="emp_lname" name='emp_lname' placeholder='Enter Last Name'
                  required>
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Employee Email Address </label>
                <input type="email" class="form-control" id="emp_email" name='emp_email'
                  placeholder='Enter Email Address' required>
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Employee Company Id </label>
                <input type="text" class="form-control" id="emp_company_id" name='emp_company_id'
                  placeholder='Enter Company Id' required>
              </div>


              <div class="mb-3">
                <label for="" class="form-label">Department</label>
                <select class="form-select form-select-md" name="selected_department" id="selected_department">
                  <option selected value="Selected one">Select one</option>
                  <?php
                    while($row=$department_data->fetch(PDO::FETCH_ASSOC)){
                      extract($row);
                      ?>
                  <option value=<?php echo$id; ?> title=<?php echo$name; ?>><?php echo$name; ?>
                  </option>
                  <?php ;}
                  ?>
                </select>
                <input type="text" id='d_id' name='d_id' readonly key='d_id' hidden>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Position</label>
                <select class="form-select form-select-md" name="selected_position" id="selected_position">
                  <option selected value="Selected one">Select one</option>
                  <?php
                    while($row=$position_data->fetch(PDO::FETCH_ASSOC)){
                      extract($row);
                      ?>
                  <option value=<?php echo$id; ?> title=<?php echo$name; ?>><?php echo$name; ?>
                  </option>
                  <?php ;}
                  ?>
                </select>
                <input type="text" id='p_id' name='p_id' readonly key='p_id' hidden>
              </div>

              <div class="text-center">
                <button id="cancelButton" class="btn btn-outline-danger me-3" data-bs-dismiss="modal">
                  <i class="fas fa-window-close me-1"></i>Cancel
                </button>
                <button class="btn btn-primary" type="submit" name="btn_submit">
                  <i class="fas fa-plus me-2"></i>Submit
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- ======================================================================================================================================== -->
    <!-- Update Modal -->
    <div id="update_employee" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-bs-keyboard="false"
      data-bs-backdrop="static">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-3 shadow">
          <div class="modal-header bg-primary text-white">
            <h2 class="modal-title">Update Department</h2>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <form class="g-3 needs-validation" action="/pages/update/update_employees.php" method="post">
              <input type="hidden" name="employee_id" id="employee_id">
              <div class="mb-3">
                <label for="name" class="form-label">Employee First Name</label>
                <input type="text" class="form-control" id="u_fname" name='u_fname' placeholder='Enter First Name'
                  required>
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Employee Middle Name</label>
                <input type="text" class="form-control" id="u_mname" name='u_mname' placeholder='Enter Middle Name'>
              </div>

              <div class="mb-3">
                <label for="name" class="form-label">Employee Last Name</label>
                <input type="text" class="form-control" id="u_lname" name='u_lname' placeholder='Enter Last Name'
                  required>
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Employee Email Address </label>
                <input type="email" class="form-control" id="u_email" name='u_email' placeholder='Enter Email Address'
                  required>
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Employee Company Id </label>
                <input type="text" class="form-control" id="u_company_id" name='u_company_id'
                  placeholder='Enter Company Id' required>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Department</label>
                <select class="form-select form-select-md" name="uselected_department" id="uselected_department">
                  <option selected value="Selected one">Select one</option>
                  <?php
                    while($row=$department_data2->fetch(PDO::FETCH_ASSOC)){
                      extract($row);
                      ?>
                  <option value=<?php echo$id; ?> title=<?php echo$name; ?>><?php echo$name; ?>
                  </option>
                  <?php ;}
                  ?>
                </select>
                <input type="text" id='d_id_u' name='d_id_u' readonly hidden>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Position</label>
                <select class="form-select form-select-md" name="uselected_position" id="uselected_position">
                  <option selected value="Selected one">Select one</option>
                  <?php
                    while($row=$position_data2->fetch(PDO::FETCH_ASSOC)){
                      extract($row);
                      ?>
                  <option value=<?php echo$id; ?> title=<?php echo$name; ?>><?php echo$name; ?>
                  </option>
                  <?php ;}
                  ?>
                </select>
                <input type="text" id='p_id_u' name='p_id_u' readonly hidden>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                  aria-label="Close">Close</button>
                <button type="submit" id='btn_update_employee' name="btn_update_employee" class="btn btn-primary">Update
                  Data</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


    <!-- ===DISPLAY ======================================================================================================================================== -->

    <h2 class="text-center mb-4">List of Employees</h2>
    <div class="table-responsive">
      <div class='d-flex align-items-center gap-3 my-3'>
        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#create_employees">
          <i class="fas fa-plus me-2"></i>
          Add Employee
        </button>

        <!-- SEARCH FEATURE ========================================================== -->
        <div class="d-flex gap-2 flex-fill">
          <h4 class="mb-3">Search Employees</h4>
          <form id="searchForm" class="d-flex gap-2  flex-grow-1">
            <input class="form-control me-2" type="search" placeholder="Enter department name" aria-label="Search"
              id="searchInput">
            <button class="btn btn-primary" type="submit">Search</button>
          </form>
        </div>

      </div>

      <table class="table table-bordered" id='tables-departments'>
        <thead>
          <tr>
            <th>Id</th>
            <th>Company Id</th>
            <th>Department</th>
            <th>Position</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th style="width:200px;">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
       while($row=$data->fetch(PDO::FETCH_ASSOC)){
         extract($row);
         ?>
          <tr>
            <td><?php echo$id; ?> </td>
            <td><?php echo htmlspecialchars($company_id); ?> </td>
            <td hidden><?php echo htmlspecialchars($department_id);?> </td>
            <td><?php echo htmlspecialchars($department_name);?> </td>
            <td hidden><?php echo htmlspecialchars($position_id);?> </td>
            <td><?php echo htmlspecialchars($position_name);?> </td>
            <td><?php echo htmlspecialchars($first_name);?> </td>
            <td><?php echo htmlspecialchars($middle_name);?> </td>
            <td><?php echo htmlspecialchars($last_name);?> </td>
            <td><?php echo htmlspecialchars($email);?> </td>
            <td>
              <button type="button" class="btn btn-success editbtnEmployee"> EDIT </button>
              <a delete-e-id='<?php echo$id; ?>' class='btn btn-danger delete_employee'>Delete</a>
            </td>
          </tr>
          <?php
          }
          ?>
        </tbody>

      </table>
    </div>
  </div>
</section>

<script>
  $(document).ready(function () {
    $('#selected_department').change(function () {
      var selectedDepartment = $(this).val();
      console.log(selectedDepartment);
      // var selectedDept_name = $(this).find('option:selected').text();
      $('#d_id').val(selectedDepartment);
    });
    $('#selected_position').change(function () {
      var selectedPosition = $(this).val();
      console.log(selectedPosition);
      // var selectedDrinkName = $(this).find('option:selected').text();
      $('#p_id').val(selectedPosition);
    });
    $('#uselected_department').change(function () {
      var selectedDepartment = $(this).val();
      console.log(selectedDepartment);
      // var selectedDept_name = $(this).find('option:selected').text();
      $('#d_id_u').val(selectedDepartment);
    });
    $('#uselected_position').change(function () {
      var selectedPosition = $(this).val();
      console.log(selectedPosition);
      // var selectedDrinkName = $(this).find('option:selected').text();
      $('#p_id_u').val(selectedPosition);
    });


  });
</script>
<script>
  $(document).ready(function () {
    $('.editbtnEmployee').on('click', function () {
      $('#update_employee').modal('show');
      $tr = $(this).closest('tr');
      var data = $tr.children("td").map(function () {
        return $(this).text().replace(/(rn|n|r)/gm, "").trim();
      }).get();

      console.log(data);

      $('#employee_id').val(data[0]);
      $('#u_company_id').val(data[1]);
      $('#u_fname').val(data[6]);
      $('#u_mname').val(data[7]);
      $('#u_lname').val(data[8]);
      $('#u_email').val(data[9]);

      var selectedDepartmentId = parseInt(data[2]);
      $('#uselected_department').val(selectedDepartmentId);

      var selectedPositionId = parseInt(data[4]);
      $('#uselected_position').val(selectedPositionId);

      $('#d_id_u').val(selectedDepartmentId);
      $('#p_id_u').val(selectedPositionId);
    });

    $('#searchForm').submit(function (event) {
      event.preventDefault();
      var searchKeyword = $('#searchInput').val();
      $.ajax({
        url: '/pages/search/search_department.php',
        method: 'POST',
        data: {
          keyword: searchKeyword
        },
        success: function (data) {
          $('#tables-departments tbody').html(data);
        },
        error: function () {
          alert('Error occurred while searching.');
        }
      });
    });

    // JavaScript for handling cancel event
    $('#searchInput').on('input', function () {
      if ($(this).val() === '') {
        $.ajax({
          url: '/pages/search/search_department.php', // Path to your PHP script to fetch all departments
          method: 'POST',
          data: {
            keyword: ''
          },
          success: function (data) {
            $('#tables-departments tbody').html(data);
          },
          error: function () {
            alert('Error occurred while fetching departments.');
          }
        });
      }
    });
    $('.delete_employee').on('click', function () {
      var id = $(this).attr('delete-e-id');
      console.log(id);
      var q = confirm("Are you sure?");
      if (q == true) {
        $.post('/pages/delete/delete_employees.php', {
          employee_id: id
        }, function (data) {
          location.reload();
        }).fail(function () {
          alert('Unable to delete.');
        });
      }
    });

  });
</script>