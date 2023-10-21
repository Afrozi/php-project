<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $sno=$_GET['updateid'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
$sql = "UPDATE `bollybood` SET `name` = '$name', `email` = '$email', `password` = '$password' WHERE `bollybood`.`sno` = '$sno'";
$result = mysqli_query($conn,$sql);
if ($result) {
    header("location: display.php");
}
else {
    echo "your data has been not update";
}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>update data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center my-5">update data</h1>
    <div class="container">
    <form method='post'>
  <div class="mb-3">
    <label class="form-label">name</label>
    <input type="text" class="form-control" name="name">
  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>