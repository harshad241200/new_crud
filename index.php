<?php
include_once('dbconnection.php');

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="row">
      <div class="col-md-6">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
 <?php

      $query = mysqli_query($conn, "SELECT * FROM `test` ") or die(mysqli_error($conn));
        while ($data = mysqli_fetch_array($query)) {

                 ?>                                                   
    <tr>
      <th scope="row"><?php echo $data['id']; ?></th>
      <td><?php echo $data['fname']; ?></td>
      <td><?php echo $data['lname']; ?></td>
     <td><?php $newedit = $data['id']; ?>
  <a href="http://localhost//harshadp/update.php?newedit='<?php echo $newedit; ?>'"  target="_blank"> <button type="button" class="btn btn-success" ></button></a>

<?php $deletes = $data['id']; ?>
<a href="http://localhost//harshadp/delete.php?deletes='<?php echo $deletes; ?>'"  target="_blank"> <button type="button" class="btn btn-danger" name="delete" ></button></a>
    
</td>

          <?php

                                                
                }

          ?>
    
    </tr>
    
  </tbody>
</table>
</div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>