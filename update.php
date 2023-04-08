<?php
include_once('dbconnection.php');
$test_id=str_replace("'","",$_GET['newedit']);


 if (isset($_POST['update'])) {
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    $id = $_POST['update_order_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
   
    $sql = mysqli_query($conn, "UPDATE `test` SET `fname`='$fname',`lname`='$lname' WHERE `id`='$test_id'") or die(mysqli_error($conn));

    // echo $sql;
    // exit;

    echo "<script>window.location.href='update.php?newedit=$test_id'</script>";
}



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
    <form action="" method="post">


 <?php
        $query = mysqli_query($conn, "SELECT * FROM `test` where `id`='$test_id'") or die(mysqli_error($conn));
        while ($data = mysqli_fetch_array($query)) {
             //echo "<pre>"; print_r($data); echo "</pre>";
        ?>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="fname" value="<?php echo $data['fname']; ?>" class="form-control" id="" aria-describedby="emailHelp">
     <input type="hidden" id="" name="update_order_id"  class="form-control form-control-view">
  </div>

   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Lastname</label>
    <input type="text" name="lname" value="<?php echo $data['lname']; ?>" class="form-control" id="" aria-describedby="emailHelp">
  </div>
 <?php
}


?>
  <button type="submit" name="update" class="btn btn-primary">Submit</button>
</form>
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