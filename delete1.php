<!DOCTYPE html>
<html lang="en">
<head>
  <title>Delete</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container">
    <h2 class="text-danger"><strong>PHP LAB Offline</strong></h2>
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link" href="home.php">Insert</a>
    </li>

    <li class="nav-item">
      <a class="nav-link active" href="delete.php">Delete</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="display.php">Display</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="update.php">Update</a>
    </li>

  </ul>
</div>

<div class="container">
    <?php 
  
  $link =mysql_connect("localhost", "root", "") or die("cannot connect"); 


  mysql_select_db("info");

  $value = $_POST['ID'];

  $sql = " DELETE FROM information WHERE ID='$value'";
  

  if(!mysql_query($sql)){
    die("Error".mysql_error($link));
    }
  else{
    echo '<div class="alert alert-success">';
    echo '<strong>Success!</strong> Data deleted successfully!';
      echo '</div>';
  }

  mysql_close($link);
?>

  </div>

    <script src="jquery/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


</body>
</html>
