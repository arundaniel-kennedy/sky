<br><br><center><h1>Metropolitan Transport Corporation</h1></center>
<center><h3>(Chennai)</h3></center><br><br>
<div class="container" style="color: #E21F53;">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
<a class="navbar-brand" href="index.php">MTC</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="facil.php">Facilities</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="fare.php">Fare List</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="service.php">Service</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="strength.php">Strength</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="route.php">Route</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="feedback.php">Feedback</a>
    </li>
  </ul>
  <div class="float-right">
    <ul class="navbar-nav">
      <?php //if($SESSION["validuser"]=="validuser"){ ?>
      <li class="nav-item">
        <a class="nav-link" href="login.php"><span class="fas fa-sign-in-alt"> login</span></a>
      </li>
    <?php //}
    //else{ ?>
      <li class="nav-item">
        Welcome <?php echo $SESSION["user"] ?>
      </li>
    <?php //} ?>
    </ul>
  </div>
</div>
</nav>

<br><br><br>
