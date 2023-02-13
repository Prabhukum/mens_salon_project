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

<?php
if($_POST["fetched_p_name"] 
&& $_POST["fetched_p_old_price"]
&& $_POST["fetched_p_current_price"]
&& $_POST["fetched_p_qty"]
&& $_POST["fetched_p_featured_photo"]
&& $_POST["fetched_p_description"]
&& $_POST["fetched_p_short_description"]
&& $_POST["fetched_p_feature"]
&& $_POST["fetched_p_service_time"]
&& $_POST["fetched_p_total_view"]
&& $_POST["fetched_p_is_featured"]
&& $_POST["fetched_p_is_active"]
&& $_POST["fetched_ecat_id"])
{
  $statement = $pdo->prepare("Update tbl_product SET p_name = ?,p_old_price = ?,p_current_price = ?,p_qty = ?,p_featured_photo = ?,p_description = ?,p_short_description = ?,p_feature = ?,p_service_time = ?,p_total_view = ?,p_is_featured = ?,p_is_active = ?,ecat_id = ? where p_id = ?");
  $statement->execute(array($_POST["fetched_p_name"],$_POST["fetched_p_old_price"],$_POST["fetched_p_current_price"],$_POST["fetched_p_qty"],$_POST["fetched_p_featured_photo"],$_POST["fetched_p_description"],$_POST["fetched_p_short_description"],$_POST["fetched_p_feature"],$_POST["fetched_p_service_time"],$_POST["fetched_p_total_view"],$_POST["fetched_p_is_featured"],$_POST["fetched_p_is_active"],$_POST["fetched_ecat_id"],$_GET['get_pid']));

}


?>

<form action="" method="POST">
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
                <input type="text" name="fetched_<?php echo trim($colname["Field"]); ?>" value="<?php echo $row[$colname["Field"]]; ?>" disabled>
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

<div class="container my-5">
<?php require_once("footer.php"); ?>  
</div>    
</body>
</html>