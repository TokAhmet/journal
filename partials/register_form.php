<?php require_once 'head.php';
require_once "nav.php";?>

<div class="container">
  <h1 class="text-center">Register</h1>
  <form class="form-horizontal" action="register.php" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-4" for="username">Username:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="password">Password:</label>
      <div class="col-sm-5">
        <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-12">
        <input type="submit" class="center-block btn btn-success" value="Register">
      </div>
    </div>
</form>
</div>

<?php require 'footer.php';?>
