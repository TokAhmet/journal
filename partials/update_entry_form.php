<?php
require_once 'session_start.php';
require_once 'database.php';
require_once 'head.php';


$statement = $db->prepare(
  "SELECT * FROM entries
  WHERE entryID = :entryID"
);

$statement->execute([
  ":entryID" => $_POST["entryID"]
]);


$entry = $statement->fetch(PDO::FETCH_ASSOC);
?>

<?php
require_once 'session_start.php';

if (isset($_SESSION["loggedIn"])): ?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/ahmet_ordulu_journal">Journal</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<?php endif; ?>

<div class="container">
  <h1 class="text-center">Update Entry</h1>
  <form class="form-horizontal" action="update_entry.php" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-4" for="title">Titel:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="title" id="title" placeholder="Update Titel">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="content">Content:</label>
      <div class="col-sm-5">
        <textarea class="form-control" name="content" id="content" placeholder="Update Content"></textarea>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-12">
        <input type="hidden" name="entryID" value="<?= $entry["entryID"]?>">
        <button type="submit" class="center-block btn btn-success">Update Entry</button>
      </div>
    </div>
  </form>
</div>

<?php require_once 'footer.php';?>
