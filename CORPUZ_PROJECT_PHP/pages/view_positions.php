<?php 
   include '../classes/positions.php';

   $db = new Database();
   $dbase = $db->getConnection();

   $position = new Position($dbase);
   $data = $position->read();
   
   ?>
<!-- Section Employees-->
<section class="py-5 vh-100" id="position">
  <div class="container">
    <!-- Register Modal -->
    <div id="create_position" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-bs-keyboard="false"
      data-bs-backdrop="static">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-3 shadow">
          <div class="modal-header bg-primary text-white">
            <h2 class="modal-title">Create a Position</h2>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form class="g-3 needs-validation" action="./create/create_position.php" method="post">
              <div class="mb-3">
                <label for="name" class="form-label">Position Name</label>
                <input type="text" class="form-control" id="pos_name" name='pos_name' placeholder='Enter Position Name'
                  required>
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
    <div id="update_position" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" data-bs-keyboard="false"
      data-bs-backdrop="static">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-3 shadow">
          <div class="modal-header bg-primary text-white">
            <h2 class="modal-title">Update Position</h2>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <form class="g-3 needs-validation" action="/pages/update/update_position.php" method="post">
              <input type="hidden" name="position_id" id="position_id">
              <div class="col-md-4">
                <label for="name" class="form-label">Position Name</label>
                <input type="text" class="form-control" id="update_post_name" name='update_post_name'
                  placeholder=' Position Name' required>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                  aria-label="Close">Close</button>
                <button type="submit" id='btn_update_position' name="btn_update_position" class="btn btn-primary">Update
                  Data</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


    <!-- ===DISPLAY ======================================================================================================================================== -->

    <h2 class="text-center mb-4">List of Positions</h2>
    <div class="table-responsive">
      <div class='d-flex align-items-center gap-3 my-3'>
        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#create_position">
          <i class="fas fa-plus me-2"></i>
          Add Position
        </button>

        <!-- SEARCH FEATURE ========================================================== -->
        <div class="d-flex gap-2 flex-fill">
          <h4 class="mb-3">Search Positions</h4>
          <form id="searchForm" class="d-flex gap-2  flex-grow-1">
            <input class="form-control me-2" type="search" placeholder="Enter position name" aria-label="Search"
              id="searchInput">
            <button class="btn btn-primary" type="submit">Search</button>
          </form>
        </div>

      </div>

      <table class="table table-bordered" id='tables-positions'>
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
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
            <td><?php echo htmlspecialchars($name); ?> </td>
            <td>
              <button type="button" class="btn btn-success editposbtn"> EDIT </button>
              <a deletepos-id='<?php echo$id; ?>' class='btn btn-danger delete-position'>Delete</a>
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
    $('.editposbtn').on('click', function () {

      $('#update_position').modal('show');

      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function () {
        return $(this).text().replace(/(rn|n|r)/gm, "").trim();
      }).get();

      console.log(data);

      $('#position_id').val(data[0]);
      $('#update_post_name').val(data[1]);
    });


    $('#searchForm').submit(function (event) {
      event.preventDefault();
      var searchKeyword = $('#searchInput').val();
      $.ajax({
        url: '/pages/search/search_position.php',
        method: 'POST',
        data: {
          keyword: searchKeyword
        },
        success: function (data) {
          $('#tables-positions tbody').html(data);
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
          url: '/pages/search/search_position.php', // Path to your PHP script to fetch all positions
          method: 'POST',
          data: {
            keyword: ''
          },
          success: function (data) {
            $('#tables-positions tbody').html(data);
          },
          error: function () {
            alert('Error occurred while fetching positions.');
          }
        });
      }
    });
    $('.delete-position').on('click', function () {
      var id = $(this).attr('deletepos-id');
      console.log(id);
      var q = confirm("Are you sure?");
      if (q == true) {
        $.post('/pages/delete/delete_position.php', {
          position_id: id
        }, function (data) {
          location.reload();
        }).fail(function () {
          alert('Unable to delete.');
        });
      }
    });

  });
</script>