<?php include('includes/head.php');?>
<script>
window.onload = set;
function set() {
  document.getElementById('dash').className = "active";
}
</script>
<div class="container">
  <div class="row">

    <div class="col-3">
      <div class="card" style="background-color: deeppink;color: white;">
        <div class="card-body">
          <h6>INVOICE COUNT</h6>
        </div>
      </div>
    </div>
    <div class="col-3">
      <div class="card" style="background-color: royalblue;color: white;">
        <div class="card-body">
          <h6>REPLACEMENT IN</h6>
        </div>
      </div>
    </div>
    <div class="col-3">
      <div class="card" style="background-color: purple;color: white;">
        <div class="card-body">
          <h6>REPLACEMENT OUT</h6>
        </div>
      </div>
    </div>
    <div class="col-3">

    </div>

  </div>
</div>
<?php include('includes/foot.php'); ?>
