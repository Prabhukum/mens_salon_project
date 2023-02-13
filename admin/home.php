<?php
	include("../includes/config.php");
  	if(!$_SESSION['is_admin'])
		header("Location:index.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


<br>
<br>


<form action="" method="GET">
    <input type="text" name="get_pid" value="<?php if(isset($_GET['get_pid'])){echo $_GET['get_pid'];} ?>">
    <button type="submit" class="btn btn-primary">Fetch</button>
</form>

<br>
<br>
<br>

<form action="update.php" method="POST">
<table>
  <tbody>
    <?php
    if(isset($_GET['get_pid'])) {
      $get_data = $_GET['get_pid'];
      $statement = $pdo->prepare("SELECT * FROM tbl_product where p_id = ?");
      $statement->execute(array($get_data));
      $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
      foreach ($result as $row) {
        $statement1 = $pdo->prepare("SHOW COLUMNS FROM tbl_product");
        $statement1->execute();
        $field = $statement1->fetchAll(PDO::FETCH_ASSOC); 
        foreach ($field as $colname) {
    ?>

    <tr>
          <td><b><?php echo $colname["Field"]; ?></b></td>
          
          <td>
            <?php 
              if(trim($colname["Field"]) == "p_id"){
            ?>
                <input type="text" name="fetched_<?php echo trim($colname["Field"]); ?>" value="<?php echo $row[$colname["Field"]]; ?>">
            <?php 
              } else {
            ?>
              <input type="text" name="fetched_<?php echo trim($colname["Field"]); ?>" value="<?php echo $row[$colname["Field"]]; ?>">
          </td>
          <?php 
              }
          ?>
    </tr>

    <?php
        }
        }
      }
    ?>
  </tbody>
</table>
<br>
<br>
  <button type="submit" class="btn btn-primary">Update</button>
</form>

</body>
</html>