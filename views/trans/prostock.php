<?php include '../includes/head.php'; ?>
<script>
window.onload = set;

function set() {
  document.getElementById('custmaster').className = "active";
  document.getElementById('admin').setAttribute("aria-expanded","true");
  document.getElementById('adminSubmenu').style.display = "block";
}

</script>

<form action="" method="post">
  <div class="container">
    <div class="row">

        <div class="col-4">
          <div class="form-group">
            <label for="Vendor Type">Vendor Type:<sup>*</sup></label>
            <input type="text" name="" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label for="Purchase Date">Purchase Date<sup>*</sup>:</label>
            <input type="date" name="" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="Remarks">Remarks:</label>
            <textarea class="form-control" rows="2"></textarea>
          </div>
        </div>

        <div class="col-4">
          <div class="form-group">
            <label for="Product Category">Product Category:</label>
            <input type="text" name="" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label for="Quantity">Quantity<sup>*</sup>:</label>
            <input type="number" name="" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="Stock No">Stock No:</label>
            <input type="text" name="" class="form-control" readonly>
          </div>
        </div>

        <div class="col-4">

          <div class="form-group">
            <label for="product Description">Product Description:</label>
            <input type="text" name="" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label for="Warranty">Warranty:</label>
            <input type="text" name="" class="form-control" >
          </div>
        </div>

    </div>
    <hr>
    <div class="row">

      <div class="col-4">
        <div class="form-group">
          <label for="Vendor Code">Vendor Code<sup>*</sup>:</label>
          <input type="text" name="" class="form-control" readonly>
        </div>
        <div class="form-group">
          <label for="Unit Price">Vendor Code<sup>*</sup>:</label>
          <input type="text" name="" class="form-control" readonly>
        </div>
      </div>

      <div class="col-4">
        <div class="form-group">
          <label for="Receipt">Receipt No:</label>
          <input type="text" name="" class="form-control" readonly>
        </div>
      </div>

      <div class="col-4">
        <div class="form-group">
          <label for="Receipt Date">Receipt Date:</label>
          <input type="date" name="" class="form-control" readonly>
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
      <th>Customer Code</th>
      <th>Customer Name</th>
      <th>TDS</th>
      <th>GST No</th>
      <th>Delivery Address</th>
      <th>City</th>
      <th>Pincode</th>
      <th>Mobile No</th>
      <th>Email</th>
      <th>Payment Type</th>
      <th>Status</th>
    </thead>
    <tbody>

    </tbody>
  </table>
</div>
<?php include '../includes/foot.php'; ?>
