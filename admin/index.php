<?php
	include("../includes/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
<?php
  $statement = $pdo->prepare("SELECT * FROM tbl_product ");
  // $statement = $pdo->prepare("SELECT * FROM tbl_product");
  $statement->execute();
  $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
  foreach ($result as $row) {
?>
    <tr>
      <th scope="row"><?php echo $row['p_id']; ?></th>
      <td><?php echo $row['p_name']; ?></td>
    </tr>
<?php
  }
?>
</tbody>
</table>
<br>
<br>
<br>
<br>
<Label>Get Data with Product ID : </Label>
<input type="text" name="pid" id="pid">
<br>
<br>
<input type="button" value="Fetch" name="fetch_pid">
<?php
  $get_data = 
  $statement = $pdo->prepare("SELECT * FROM tbl_product where p_id = ?");
  // $statement = $pdo->prepare("SELECT * FROM tbl_product");
  $statement->execute(array($get_data));
  $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
  foreach ($result as $row) {
?>

<tr>
      <th scope="row"><?php echo $row['p_id']; ?></th>
      <td><?php echo $row['p_name']; ?></td>
  </tr>


<?php
  }
?>

<div class="container my-5">
<?php require_once("footer.php"); ?>  
</div>    
</body>
</html>