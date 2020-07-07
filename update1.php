<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update</title>
  
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
      <a class="nav-link" href="update.php active">Update</a>
    </li>

  </ul>
</div>

<div class="container">
    <?php 
  
  $link =mysql_connect("localhost", "root", "") or die("cannot connect"); 


  mysql_select_db("info");
  
  $value = $_POST['ID'];
  $value1 = $_POST['Fname'];
  $value2 = $_POST['Lname'];
  $value3 = $_POST['Address'];
  $value4 = $_POST['Age'];

  $sql = " UPDATE information SET FirstName='$value1', LastName='$value2', Address='$value3', Age='$value4' WHERE ID='$value' ";
  

  if(!mysql_query($sql)){
    die("Error".mysql_error($link));
    }
  else{
    echo '<div class="alert alert-success">';
    echo '<strong>Success!</strong> Data updated successfully!';
      echo '</div>';
  }

  mysql_close($link);
?>

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
