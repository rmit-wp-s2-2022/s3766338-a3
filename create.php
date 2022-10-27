<!DOCTYPE html>
<html lang="en">

<?php
require_once('./header.php')

?>

<body>
  <?php require_once('./heading.php')
  ?>
  <div class="create-student">
    <h1 class="create-student__heading">
      Create Student
    </h1>
    <form class="create-student__form" action="./function.php" method="POST">
      <div class="form-group">
        <label for="id">Student ID</label>
        <input type="text" class="form-control" id="id" name="id" placeholder="Student ID">
        <?php if (!empty($_GET['validID'])) {
          echo ("<span style='color: red'> " . $_GET['validID'] . '<span> <br/>');
        } ?>
      </div>
      <div class="form-group">
        <label for="firstname">FirstName</label>
        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
        <?php if (!empty($_GET['validfirstname'])) {
          echo ("<span style='color: red'>" . $_GET['validfirstname'] . '<span> <br/>');
        } ?>
      </div>
      <div class="form-group">
        <label for="lastname">Last Name</label>
        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
        <?php if (!empty($_GET['validlastname'])) {
          echo ("<span style='color: red'>" . $_GET['validlastname'] . '<span> <br/>');
        } ?>
      </div>
      <div class="form-group">
        <label for="mobilephone">Mobile Phone</label>
        <input type="text" class="form-control" id="mobilephone" name="mobilephone" placeholder="mobile phone">
        <?php if (!empty($_GET['validmobilephone'])) {
          echo (" <span style='color: red'> Account" . $_GET['validmobilephone'] . '<span> <br/>');
        } ?>
      </div>
      <button type="submit" class="btn btn-primary">Create</button>
    </form>
  </div>
  <?php
  require_once('./footer.php')

  ?>
</body>

</html>
