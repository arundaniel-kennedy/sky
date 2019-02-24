<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">

    <title>Skopsys | Login</title>
  </head>
  <body>

    <div class="container" style="padding-top:16vh;">
      <div class="jumbotron">

        <p class="text-center h1" style="color:#0f00ff">AMS</p>

        <form action="" method="post"  autocomplete="on">
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" class="form-control" placeholder="Username" autocomplete="username"
                    style="background: url(static/user.png);
                    background-repeat: no-repeat;
                    background-size: contain;
                    background-position: right ;
                    padding-right:30px;">
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="current-password"
            style="background: url(static/lock.png);
            background-repeat: no-repeat;
            background-size: contain;
            background-position: right ;
            padding-right:30px;">
          </div>
          <br>
          <div class="form-group">
            <center>
              <input type="submit" class="btn btn-success" value="login">
            </center>
          </div>
        </form>
        <a href="/sky/views/index.php" class="btn btn-danger">click</a>
      </div>
    </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
