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
            <label for="Customer code">Customer Code:</label>
            <input type="text" name="" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label for="Delivery Address">Delivery Address<sup>*</sup>:</label>
            <textarea class="form-control" rows="2" required></textarea>
          </div>
          <div class="form-group">
            <label for="State">State<sup>*</sup>:</label>
            <input type="text" name="" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="Mobile Number:">Mobile Number<sup>*</sup>:</label>
            <input type="text" name="" class="form-control" required pattern="[5-9][0-9]{9}">
          </div>
          <div class="form-group">
            <label for="Email ID">Email ID<sup>*</sup>:</label>
            <input type="email" name="" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="TDS">TDS(%)<sup>*</sup>:</label>
            <input type="number" name="" value="" class="form-control" required>
          </div>
        </div>

        <div class="col-4">
          <div class="form-group">
            <label for="Customer Name">Customer/Company Name<sup>*</sup>:</label>
            <input type="text" name="" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="Billing Address">Billing Address:</label>
            <textarea class="form-control" rows="2"></textarea>
          </div>
          <div class="form-group">
            <label for="Country">Country<sup>*</sup>:</label>
            <input type="text" name="" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="Telephone No">Telephone No:</label>
            <input type="text" name="" class="form-control">
          </div>
          <div class="form-group">
            <label for="URL">URL:</label>
            <input type="url" name="" class="form-control">
          </div>
          <div class="form-group">
            <label for="Payment Type">Payment Type<sup>*</sup>:</label>
            <select class="custom-select">
              <option>PRE PAID</option>
              <option>POST PAID</option>
            </select>
          </div>
        </div>

        <div class="col-4">

          <div class="form-group">
            <label for="GST No">GST No:</label>
            <input type="text" name="" class="form-control" >
          </div>
          <div class="form-group">
            <label for="City">City<sup>*</sup>:</label>
            <input type="text" name="" class="form-control" required >
          </div>
          <br>
          <div class="form-group">
            <label for="Pincode">Pincode<sup>*</sup>:</label>
            <input type="number" name="" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="Fax No">Fax No:</label>
            <input type="text" name="" class="form-control" >
          </div>
          <div class="form-group">
            <label for="State Code">State Code<sup>*</sup>:</label>
            <input type="number" name="" class="form-control" required>
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

      <div class="col-4">
        <div class="form-group">
          <label for="Username">Username<sup>*</sup>:</label>
          <input type="text" name="" class="form-control" required>
        </div>
      </div>

      <div class="col-4">
        <div class="form-group">
          <label for="Password">Password<sup>*</sup>:</label>
          <input type="password" name="" class="form-control" required pattern="{8-18}">
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
