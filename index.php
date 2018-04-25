<?php
require_once 'partials/head.php';
require_once "partials/nav.php";?>

<?php if (isset($_SESSION["loggedIn"])): ?>
  
  <div class="container">
    <h1 class="text-center">Entries</h1>
    <form class="form-horizontal" action="partials/post_entry.php" method="POST" id="titelForm">
      <div class="form-group">
        <label class="control-label col-sm-4" for="title">Titel:</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" name="title" id="title" placeholder="Titel">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4" for="content">Content:</label>
        <div class="col-sm-5">
          <textarea class="form-control" name="content" id="content" placeholder="Write Content"></textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">
          <input type="submit" class="center-block btn btn-success" value="Post Entry">
        </div>
      </div>
    </form>
  </div>
    <?php
      require_once "partials/output_entry.php";
    ?>
  </div>
<?php endif; ?>

<?php if (!isset($_SESSION["loggedIn"])): ?>
<div class="container">
  <h1 class="text-center">Login</h1>
  <form class="form-horizontal" action="partials/login.php" method="POST">
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
        <input class="center-block btn btn-success" type="submit" value="Login">
      </div>
    </div>
  </form>

  <div class="text-center">
  <?php
  if (isset($_GET["message"])) {
    echo "<h3>" . $_GET["message"] . "</h3>";
  }
  ?>
</div>
</div>
<?php endif; ?>

<?php require 'partials/footer.php';?>
