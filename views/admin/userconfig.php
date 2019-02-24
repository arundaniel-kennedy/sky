<?php include '../includes/head.php'; ?>
<script>
window.onload = set;

function set() {
  document.getElementById('userconfig').className = "active";
  document.getElementById('admin').setAttribute("aria-expanded","true");
  document.getElementById('adminSubmenu').style.display = "block";
}

</script>

<form action="" method="post">
  <div class="container">
    <div class="row">

        <div class="col-4">

          <div class="form-group">
            <label for="Employee code">Employee/User Code:</label>
            <select class="custom-select" name="">
              <?php ?>
              <option><?php ?></option>
              <?php ?>
            </select>
          </div>
        </div>

        <div class="col-4">
          <div class="form-group">
            <label for="Employee Name">Employee Name:</label>
            <input type="text" name="" class="form-control" readonly>
          </div>
        </div>

        <div class="col-4 pt-2">
          <br>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
              Select all Screens
            </label>
          </div>

        </div>

    </div>
    <hr>
    <div class="row">
      <div class="col-10"></div>
      <div class="col-2">
        <input type="submit" value="Save" class="btn btn-success">
        <input type="reset" value="Reset" class="btn btn-info">
      </div>
    </div>
  </div>
</form>

<hr>

<div class="container">
  <p style="color: royalblue;">User Authentication Details</p>
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
      <th>ISSelect</th>
      <th>ScreenID</th>
      <th>ScreenName</th>
      <th>FunctionName</th>
    </thead>
    <tbody>

    </tbody>
  </table>
</div>


<?php include '../includes/foot.php'; ?>
