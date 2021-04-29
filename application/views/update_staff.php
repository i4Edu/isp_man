<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Edit Staff</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          <li class="breadcrumb-item active">Staff Management</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
  <div class="container">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Update Form</h3>
      </div>
      <!-- /.card-header -->

      <!-- form start -->
      <?php echo form_open('Operations/update_staff'); ?>
        <div class="card-body">
          
          <div class="form-row">
            <div class="form-group col-md">
              <label for="inputUsername">Username</label>
              <input type="text" name="username" class="form-control" value="<?php echo $staff->username; ?>" id="inputUsername">
              <div class="text-danger"><?php echo form_error('username'); ?></div>
            </div>

            <div class="form-group col-md">
              <label for="inputPass">Password</label>
              <input type="password" name="password" class="form-control" placeholder="Type New Password If Required" id="inputPass">
              <div class="text-danger"><?php echo form_error('password'); ?></div>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md">
              <label for="inputFirstName">First Name</label>
              <input type="text" name="first_name" class="form-control" value="<?php echo $staff->first_name; ?>" id="inputFirstName">
              <div class="text-danger"><?php echo form_error('first_name'); ?></div>
            </div>

            <div class="form-group col-md">
              <label for="inputLastName">Last Name</label>
              <input type="text" name="last_name" class="form-control" value="<?php echo $staff->last_name; ?>" id="inputLastName">
              <div class="text-danger"><?php echo form_error('last_name'); ?></div>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md">
              <label for="inputContact">Contact #</label>
              <input type="text" name="contact_no" class="form-control" value="<?php echo $staff->contact_no; ?>" id="inputContact">
              <div class="text-danger"><?php echo form_error('contact_no'); ?></div>
            </div>

            <div class="form-group col-md">
              <label for="selectStaffRole">Staff Role</label>
              <select name="staff_role" class="custom-select" id="selectStaffRole">
                <option value="">Choose...</option>
                <option value="1">Admin</option>
                <option value="2">Manager</option>
              </select>
              <div class="text-danger"><?php echo form_error('staff_role'); ?></div>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md">
              <label for="selectStore">Branch</label>
              <select name="branch_id" class="custom-select" id="selectStore">
                <option value="">Choose...</option>
                <option value="1">Aalishan Cable</option>
                <option value="2">Others</option>
              </select>
              <div class="text-danger"><?php echo form_error('branch_id'); ?></div>
            </div>
          </div>

        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      <?php echo form_close(); ?>

    </div>
    <!-- /.card -->
  </div>
</div>
<!-- /.content -->
