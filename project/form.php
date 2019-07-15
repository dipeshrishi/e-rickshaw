<!doctype html>
<html>

  <head>
    <link rel="stylesheet" href="css/style.css">
      <title>E-Rickshaw</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel = "stylesheet" type = "text/css"href = "css/style.css" />

  </head>

  <body>
    <?php
$conn = mysqli_connect("localhost", "root", "", "rickshaw");
if($conn === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}
$name=$_POST['name'];
$no=$_POST['number'];
$cno=$_POST['cnumber'];


$sql = "INSERT INTO rickshaw (no,name,contact_no)
VALUES ($no, '$name','$cno')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

    <form method="post" action="form.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" style="width:300px" name="name">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Rickshaw Number</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Number" style="width:300px" name="number">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Contact Number</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Number" style="width:300px" name="cnumber">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

  </body>

  </html>
