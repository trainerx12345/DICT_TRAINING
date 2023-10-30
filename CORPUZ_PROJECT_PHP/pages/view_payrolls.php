<?php 
   include '../classes/payroll.php';

   $db = new Database();
   $dbase = $db->getConnection();

   $payroll = new Payroll($dbase);
   $data = $payroll->read();
   
   ?>
<!-- Section Employees-->
<section class="py-5 vh-100" id="payroll">
  <div class="container">
    <!-- Register Modal -->
    <div id="create_payroll" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-bs-keyboard="false"
      data-bs-backdrop="static">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-3 shadow">
          <div class="modal-header bg-primary text-white">
            <h2 class="modal-title">Create a Payroll</h2>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form class="g-3 needs-validation" action="./create/create_payroll.php" method="post">
              <div class="mb-3">
                <label for="name" class="form-label">Payroll Code</label>
                <input type="text" class="form-control" id="payroll_code" name='payroll_code'
                  placeholder='Enter Payroll Code' required>
              </div>
              <div class="mb-3">
                <label for="short_name" class="form-label">Start Date</label>
                <input type="date" class="form-control" id='payroll_sdate' name='payroll_sdate' required>
              </div>
              <div class="mb-3">
                <label for="short_name" class="form-label">End Date</label>
                <input type="date" class="form-control" id='payroll_edate' name='payroll_edate' required>
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Payroll Type</label>
                <input type="text" class="form-control" id="payroll_type" name='payroll_type'
                  placeholder='Enter Payroll Type' required>
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
    <div id="update_payroll" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-bs-keyboard="false"
      data-bs-backdrop="static">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-3 shadow">
          <div class="modal-header bg-primary text-white">
            <h2 class="modal-title">Update Payroll</h2>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <form class="g-3 needs-validation" action="/pages/update/update_payroll.php" method="post">
              <input type="hidden" name="payroll_id" id="payroll_id">
              <div class="mb-3">
                <label for="name" class="form-label">Payroll Code</label>
                <input type="text" class="form-control" id="_payroll_code" name='_payroll_code'
                  placeholder='Enter Payroll Code' required>
              </div>
              <div class="mb-3">
                <label for="short_name" class="form-label">Start Date</label>
                <input type="date" class="form-control" id='_payroll_sdate' name='_payroll_sdate' required>
              </div>
              <div class="mb-3">
                <label for="short_name" class="form-label">End Date</label>
                <input type="date" class="form-control" id='_payroll_edate' name='_payroll_edate' required>
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Payroll Type</label>
                <input type="text" class="form-control" id="_payroll_type" name='_payroll_type'
                  placeholder='Enter Payroll Type' required>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                  aria-label="Close">Close</button>
                <button type="submit" id='btn_update_payroll' name="btn_update_payroll" class="btn btn-primary">Update
                  Data</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


    <!-- ===DISPLAY ======================================================================================================================================== -->

    <h2 class="text-center mb-4">List of Payroll</h2>
    <div class="table-responsive">
      <div class='d-flex align-items-center gap-3 my-3'>
        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#create_payroll">
          <i class="fas fa-plus me-2"></i>
          Add Payroll
        </button>

        <!-- SEARCH FEATURE ========================================================== -->
        <div class="d-flex gap-2 flex-fill">
          <h4 class="mb-3">Search Payrolls</h4>
          <form id="searchForm" class="d-flex gap-2  flex-grow-1">
            <input class="form-control me-2" type="search" placeholder="Enter payroll name" aria-label="Search"
              id="searchInput">
            <button class="btn btn-primary" type="submit">Search</button>
          </form>
        </div>

      </div>

      <table class="table table-bordered" id='tables-payrolls'>
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Type</th>
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
            <td><?php echo htmlspecialchars($code); ?> </td>
            <td><?php echo htmlspecialchars($start_date);?> </td>
            <td><?php echo htmlspecialchars($end_date);?> </td>
            <td><?php echo htmlspecialchars($type);?> </td>
            <td>
              <button type="button" class="btn btn-success editpayrollbtn"> EDIT </button>
              <a delete-id='<?php echo$id; ?>' class='btn btn-danger delete-payroll'>Delete</a>
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

    $('.editpayrollbtn').on('click', function () {

      $('#update_payroll').modal('show');

      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function () {
        return $(this).text().replace(/(rn|n|r)/gm, "").trim();
      }).get();

      console.log(data);

      $('#payroll_id').val(data[0]);
      $('#d_name').val(data[1]);
      $('#d_short_name').val(data[2]);
    });


    $('#searchForm').submit(function (event) {
      event.preventDefault();
      var searchKeyword = $('#searchInput').val();
      $.ajax({
        url: '/pages/search/search_payroll.php',
        method: 'POST',
        data: {
          keyword: searchKeyword
        },
        success: function (data) {
          $('#tables-payrolls tbody').html(data);
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
          url: '/pages/search/search_payroll.php', // Path to your PHP script to fetch all payrolls
          method: 'POST',
          data: {
            keyword: ''
          },
          success: function (data) {
            $('#tables-payrolls tbody').html(data);
          },
          error: function () {
            alert('Error occurred while fetching payrolls.');
          }
        });
      }
    });
    $('.delete-payroll').on('click', function () {
      var id = $(this).attr('delete-id');
      console.log(id);
      var q = confirm("Are you sure?");
      if (q == true) {
        $.post('/pages/delete/delete_payroll.php', {
          payroll_id: id
        }, function (data) {
          location.reload();
        }).fail(function () {
          alert('Unable to delete.');
        });
      }
    });

  });
</script>