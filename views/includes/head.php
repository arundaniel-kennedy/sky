<!DOCTYPE html>
<html>
<?php $root ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Skopsys | Home</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="/sky/css/style.css">

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>
<body>

    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Skopsys</h3>
            </div>
            <ul class="list-unstyled components">

                <li class="" id="dash">
                    <a href="/sky/views/index.php">DashBoard</a>
                </li>

                <li class="">
                    <a href="#adminSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" id="admin">
                      Admin
                    </a>
                    <ul class="collapse list-unstyled" id="adminSubmenu">

                        <li id="empmaster">
                            <a href="/sky/views/admin/empmaster.php">Employee Master</a>
                        </li>
                        <li id="custmaster">
                            <a href="/sky/views/admin/custmaster.php">Customer Master</a>
                        </li>
                        <li id="venmaster">
                            <a href="/sky/views/admin/venmaster.php">Vendor Master</a>
                        </li>
                        <li id="procastmaster">
                            <a href="/sky/views/admin/procastmaster.php">Product Category Master</a>
                        </li>
                        <li id="promaster">
                            <a href="/sky/views/admin/promaster.php">Product Master</a>
                        </li>
                        <li id="userconfig">
                            <a href="/sky/views/admin/userconfig.php">User Screen Config</a>
                        </li>

                    </ul>
                </li>

                <li class="">
                    <a href="#tranSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                      Transaction details
                    </a>
                    <ul class="collapse list-unstyled" id="tranSubmenu">

                        <li id="prostock">
                            <a href="/sky/views/trans/prostock.php">Product Stock</a>
                        </li>
                        <li id="reprint">
                            <a href="/sky/views/trans/reprint.php">Serial No. Reprint</a>
                        </li>
                        <li id="delchallan">
                            <a href="/sky/views/trans/delchallan.php">Delivery Challan</a>
                        </li>
                        <li id="cusinvoice">
                            <a href="/sky/views/trans/cusinvoice.php">Customer Invoice</a>
                        </li>
                        <li id="cusreturn">
                            <a href="/sky/views/trans/cusreturn.php">Customer Return</a>
                        </li>
                        <li id="upgrade">
                            <a href="/sky/views/trans/upgrade.php">Upgradation</a>
                        </li>
                        <li id="repout">
                            <a href="/sky/views/trans/repout.php">Replacement Out</a>
                        </li>
                        <li id="repin">
                            <a href="/sky/views/trans/repin.php">Replacement In</a>
                        </li>
                        <li id="incancel">
                            <a hre="/sky/views/trans/incancel.php">Invoice Cancel</a>
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a href="#billSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                      Billing details
                    </a>
                    <ul class="collapse list-unstyled" id="billSubmenu">

                        <li id="cuspaydel">
                            <a href="/sky/views/bill/cuspaydel.php">Customer Payment Details</a>
                        </li>

                    </ul>
                </li>

                <li class="">
                    <a href="#repSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                      Report
                    </a>
                    <ul class="collapse list-unstyled" id="repSubmenu">

                        <li id="stockcorep">
                            <a href="/sky/views/rep/stockcorep.php">Stock Count Report</a>
                        </li>
                        <li id="custsorep">
                            <a href="/sky/views/rep/custsorep.php">Customer Stock Report</a>
                        </li>
                        <li id="delchalrep">
                            <a href="/sky/views/rep/delchalrep.php">Delivery Challan Report</a>
                        </li>
                        <li id="cusinrep">
                            <a href=/sky/views/rep/cusinrep.php>Customer Invoice Report</a>
                        </li>

                    </ul>
                </li>

                <li class="">
                    <a href="#ticSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                      Ticket
                    </a>
                    <ul class="collapse list-unstyled" id="ticSubmenu">

                        <li id="custic">
                            <a href="/sky/views/tick/custic.php">Customer Ticketing</a>
                        </li>
                        <li id="custicstat">
                            <a href="/sky/views/tick/custicstat.php">Customer Ticketing Status</a>
                        </li>
                        <li id="custicsum">
                            <a href="/sky/views/tick/custicsum.php">Customer Ticketing Summary</a>
                        </li>

                    </ul>
                </li>

            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

          <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="container-fluid">

                  <button type="button" id="sidebarCollapse" class="btn btn-info">
                      <i class="fas fa-align-left"></i>
                  </button>
                  <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <i class="fas fa-align-justify"></i>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="nav navbar-nav ml-auto">
                          <li class="nav-item active">
                              <a class="nav-link" href="#">LogOut</a>
                          </li>
                      </ul>
                  </div>
              </div>
          </nav>
