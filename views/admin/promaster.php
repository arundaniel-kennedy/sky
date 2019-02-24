<?php include '../includes/head.php'; ?>
<script>
window.onload = set;

function set() {
  document.getElementById('promaster').className = "active";
  document.getElementById('admin').setAttribute("aria-expanded","true");
  document.getElementById('adminSubmenu').style.display = "block";
}

</script>

<form action="" method="post">
  <div class="container">
    <div class="row">

        <div class="col-4">
          <div class="form-group">
            <label for="Product code">Product Code<sup>*</sup>:</label>
            <input type="text" name="" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label for="Product Config">Product Config<sup>*</sup>:</label>
            <input type="text" name="" class="form-control" placeholder="000 00 000 000 000 000">
          </div>
          <div class="form-group">
            <label for="IGST">IGST(%)<sup>*</sup>:</label>
            <input type="number" name="" class="form-control">
          </div>
        </div>

        <div class="col-4">
          <div class="form-group">
            <label for="Product code">Product Category<sup>*</sup>:</label>
            <select class="custom-select">
              <?php ?>
              <option><?php ?></option>
              <?php ?>
            </select>
          </div>
          <div class="form-group">
            <label for="SGST">SGST(%)<sup>*</sup>:</label>
            <input type="number" name="" class="form-control">
          </div>
          <div class="form-group">
            <label for="HSN Code">HSN Code<sup>*</sup>:</label>
            <input type="text" name="" class="form-control">
          </div>
        </div>

        <div class="col-4">
          <div class="form-group">
            <label for="Product Description">Product Description<sup>*</sup>:</label>
            <input type="text" name="" class="form-control">
          </div>
          <div class="form-group">
            <label for="CGST">CGST(%)<sup>*</sup>:</label>
            <input type="number" name="" class="form-control">
          </div>
          <div class="form-group">
            <label for="HSN Code">SAC Code<sup>*</sup>:</label>
            <input type="text" name="" class="form-control">
          </div>
          <div class="form-group">
            <label for="Status">Status:</label>
            <select class="custom-select">
              <option>ACTIVE</option>
              <option>INACTIVE</option>
            </select>
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
  <p style="color: royalblue;">Product Master Details</p>
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
      <th>Product Code</th>
      <th>Product Category</th>
      <th>Product Description</th>
      <th>Product Configuration</th>
      <th>SGST</th>
      <th>CGST</th>
      <th>IGST</th>
      <th>HSN Code</th>
      <th>SAC Code</th>
      <th>Status</th>
    </thead>
    <tbody>

    </tbody>
  </table>
</div>

<?php include '../includes/foot.php'; ?>
