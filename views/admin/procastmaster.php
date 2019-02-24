<?php include '../includes/head.php'; ?>
<script>
window.onload = set;

function set() {
  document.getElementById('procastmaster').className = "active";
  document.getElementById('admin').setAttribute("aria-expanded","true");
  document.getElementById('adminSubmenu').style.display = "block";
}

</script>

<form action="" method="post">
  <div class="container">
    <div class="row">

        <div class="col-4">
          <div class="form-group">
            <label for="Vendor code">Product Category Code<sup>*</sup>:</label>
            <input type="text" name="" class="form-control" required>
          </div>
        </div>

        <div class="col-4">
          <div class="form-group">
            <label for="Vendor Name">Product Category Name<sup>*</sup>:</label>
            <input type="text" name="" class="form-control" required>
          </div>
        </div>

        <div class="col-4">

          <div class="form-group">
            <div class="form-group">
              <label for="Status">Status:</label>
              <select class="custom-select">
                <option>ACTIVE</option>
                <option>INACTIVE</option>
              </select>
            </div>
          </div>
        </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-10"></div>
      <div class="col-2">
        <input type="submit" value="Update" class="btn btn-success">
        <input type="reset" value="Reset" class="btn btn-info">
      </div>
    </div>
  </div>
</form>

<hr>

<div class="container">
  <p style="color: royalblue;">Customer Master Details</p>
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
      <th>Product Category Code</th>
      <th>Product Category Name</th>
      <th>Status</th>
    </thead>
    <tbody>

    </tbody>
  </table>
</div>

<?php include '../includes/foot.php'; ?>
