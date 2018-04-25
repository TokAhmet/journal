
<?php
require_once 'session_start.php';

if (isset($_SESSION["loggedIn"])): ?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/ahmet_ordulu_journal">Journal</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="partials/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<?php endif; ?>

<?php if (!isset($_SESSION["loggedIn"])): ?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/ahmet_ordulu_journal">Journal</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="partials/register_form.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
    </ul>
  </div>
</nav>
<?php endif; ?>
