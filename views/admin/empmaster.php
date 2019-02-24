<?php include '../includes/head.php'; ?>

<script>
window.onload = set;

function set() {
  document.getElementById('empmaster').className = "active";
  document.getElementById('admin').setAttribute("aria-expanded","true");
  document.getElementById('adminSubmenu').style.display = "block";
}

</script>
<form action="index.html" method="post">
  <div class="container">
    <div class="row">

        <div class="col-4">
          <div class="form-group">
            <label for="Employee code">Employee Code:</label>
            <input type="text" name="" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label for="Department">Department<sup>*</sup>:</label>
            <input type="text" name="" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="Status">Status:</label>
            <select class="custom-select">
              <option>ACTIVE</option>
              <option>INACTIVE</option>
            </select>
          </div>
        </div>

        <div class="col-4">
          <div class="form-group">
            <label for="First name">First Name<sup>*</sup>:</label>
            <input type="text" name="" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="Email">Email<sup>*</sup>:</label>
            <input type="email" name="" class="form-control" required>
          </div>
        </div>

        <div class="col-4">
          <div class="form-group">
            <label for="Last name">Last Name<sup>*</sup>:</label>
            <input type="text" name="" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="Mobile Number:">Mobile Number<sup>*</sup>:</label>
            <input type="text" name="" class="form-control" required pattern="[5-9][0-9]{9}">
          </div>
        </div>

    </div>
    <hr>
    <div class="row">

      <div class="col-4">
        <div class="form-group">
          <label for="Username">Username<sup>*</sup>:</label>
          <input type="text" name="" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="Display name">Display Name:</label>
          <input type="text" name="" class="form-control" >
        </div>
      </div>

      <div class="col-4">
        <div class="form-group">
          <label for="Password">Password<sup>*</sup>:</label>
          <input type="password" name="" class="form-control" required pattern="{8-18}">
        </div>
        <div class="form-group">
          <label for="IP Address">IP Address:</label>
          <input type="text" name="" class="form-control">
        </div>
      </div>

      <div class="col-4">
        <div class="form-group">
          <label for="Confirm Password">Confirm Password<sup>*</sup>:</label>
          <input type="password" name="" class="form-control" required pattern="{8-18}">
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-10">

      </div>
      <div class="col-2">
        <input type="submit" value="Update" class="btn btn-success">
        <input type="reset" value="Reset" class="btn btn-info">
      </div>
    </div>
  </div>
</form>

<hr>

<div class="container">
  <p style="color: royalblue;">Employee Master Details</p>
  <hr>

  <div class="row">
    <div class="col-2">copy,csv,print</div>
    <div class="col-10"></div>
  </div>

  <div class="row">
    <div class="col-10"></div>
    <div class="col-2">search</div>
  </div>

  <table class="table">
    <thead>
      <th>S/No</th>
      <th>Employee Code</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Departments</th>
      <th>Email</th>
      <th>Mobile No</th>
      <th>Status</th>
    </thead>
    <tbody>

    </tbody>
  </table>
</div>

<?php include '../includes/foot.php'; ?>
