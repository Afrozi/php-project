
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>users data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center my-4">users data</h1>
    <div class="container">
    <button class="btn btn-primary my-3"><a class="text-light" href="index.php">insert</a> </button>
    </div>
    <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">sno</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
  <?php
 include 'connect.php';
      $sql="SELECT * FROM `bollybood`";
      $result = mysqli_query($conn,$sql);
      if ($result) {
         while ($rows=mysqli_fetch_assoc($result)) {
            $sno=$rows['sno'];
            $name=$rows['name'];
            $email=$rows['email'];
            $password=$rows['password'];
               echo ' <tr>
               <th scope="row">'.$sno.'</th>
               <td>'.$name.'</td>
               <td>'.$email.'</td>
               <td>'.$password.'</td>
               <td><button class="btn btn-primary"><a class="text-light" href="update.php? updateid='.$sno.'">update</a> </button> <button class="btn btn-danger"> <a class="text-light" href="delete.php? deleteid='.$sno.'">delete</a></button></td>
             </tr>';
         }
      }

?>
  </tbody>
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>