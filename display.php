<!DOCTYPE html>
<html lang="en">
<head>
  <title>Display</title>

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
      <a class="nav-link" href="delete.php">Delete</a>
    </li>

    <li class="nav-item">
      <a class="nav-link active" href="display.php">Display</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="update.php">Update</a>
    </li>

  </ul>
</div>

<?php 
      $conn = mysql_connect("localhost", "root", "");
      if(!$conn){
        die("Connection failed: ".mysql_error());
      }
      mysql_select_db("info",$conn);
      $sql = "SELECT*FROM information";
      $myData = mysql_query($sql, $conn);  
      mysql_close($conn);
  ?>

  <div class="container">
    <h2 class="text-center text-info"><strong>User Information</strong></h2>
  </div>

<div class="container">
  <table class="table table-striped">                     
      <div class="table responsive">
          <thead class="thead-dark">
              <tr>
                <th>ID</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Age</th>
                 <th>Address</th>
              </tr>
          </thead>
          <tbody>
<?php 

  while ($record = mysql_fetch_array($myData)) { 
          echo "<tr>
              <td>" . $record["ID"] . "</td>
              <td>" . $record["FirstName"] . "</td>
              <td>" . $record["LastName"] . "</td>
              <td>" . $record["Age"] . "</td>
              <td>" . $record["Address"] . "</td>
            </tr>"; 
       
  } 
?>
        </tbody>
    </div>
</table>


</div>

    <script src="jquery/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
