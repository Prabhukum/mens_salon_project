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

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="icon" href="saloon/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../includes/css/hair_cut_for_men">

    <style>
      .form-control {
        color: #000000;
        background-color: #f1f1f1;
      }
    </style>

</head>
<body>

<?php
if(isset($_POST["fetched_p_name"]) 
&& isset($_POST["fetched_p_old_price"])
&& isset($_POST["fetched_p_current_price"])
&& isset($_POST["fetched_p_qty"])
&& isset($_POST["fetched_p_featured_photo"])
&& isset($_POST["fetched_p_description"])
&& isset($_POST["fetched_p_short_description"])
&& isset($_POST["fetched_p_feature"])
&& isset($_POST["fetched_p_service_time"])
&& isset($_POST["fetched_p_total_view"])
&& isset($_POST["fetched_p_is_featured"])
&& isset($_POST["fetched_p_is_active"])
&& isset($_POST["fetched_ecat_id"]))
{

  $fetched_p_name = $_POST["fetched_p_name"];
  $fetched_p_old_price = $_POST["fetched_p_old_price"];
  $fetched_p_current_price = $_POST["fetched_p_current_price"];
  $fetched_p_qty = (int) $_POST["fetched_p_qty"];
  $fetched_p_featured_photo = $_POST["fetched_p_featured_photo"];
  $fetched_p_description = $_POST["fetched_p_description"];
  $fetched_p_short_description = $_POST["fetched_p_short_description"];
  $fetched_p_feature = $_POST["fetched_p_feature"];
  $fetched_p_service_time = $_POST["fetched_p_service_time"];
  $fetched_p_total_view = $_POST["fetched_p_total_view"];
  $fetched_p_is_featured = $_POST["fetched_p_is_featured"];
  $fetched_p_is_active = $_POST["fetched_p_is_active"];
  $fetched_ecat_id = $_POST["fetched_ecat_id"];
  $fetched_p_id = $_POST["fetched_p_id"];


  $statement = $pdo->prepare("Update tbl_product SET p_name = '$fetched_p_name',p_old_price = '$fetched_p_old_price',p_current_price = '$fetched_p_current_price',p_qty = '$fetched_p_qty',p_featured_photo = '$fetched_p_featured_photo',p_description = '$fetched_p_description',p_short_description = '$fetched_p_short_description',p_feature = '$fetched_p_feature',p_service_time = '$fetched_p_service_time',p_total_view = '$fetched_p_total_view',p_is_featured = '$fetched_p_is_featured',p_is_active = '$fetched_p_is_active',ecat_id = '$fetched_ecat_id' where p_id = '$fetched_p_id'");
  $statement->execute();
  echo '<script type="text/JavaScript"> 
          alert("*** Record updated on Database ***");
       </script>';
} 

?>
<br>
<br>


<form action="" method="GET">
  <div class="dropdown">
    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
      Select Product
    </a>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
      <?php
        $statement = $pdo->prepare("SELECT p_id FROM tbl_product");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
        foreach ($result as $row) {
      ?>
        <li><a class="dropdown-item" href="home.php?get_pid=<?php echo $row["p_id"]; ?>"><?php echo $row["p_id"]; ?></a></li>
      <?php
        }
      ?>
    </ul>
    <label> OR </label>
    <input style="color: #000000; background-color: #f1f1f1;" type="text" name="get_pid" value="<?php if(isset($_GET['get_pid'])){echo $_GET['get_pid'];} ?>">
    <br>
    <br>
    <button type="submit" class="btn btn-primary">Fetch</button>
    </div>
</form>

<br>
<br>
<br>

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
    ?>
      <div class="form-group">
        <tr><td><label>Product ID</label></td><td width="75%"><input type="text" class="form-control" name="fetched_p_id" value="<?php echo $row["p_id"]; ?>"></td></tr>
      </div>
      <div class="form-group">
        <tr><td><label>Product Name</label></td><td><input type="text" class="form-control" name="fetched_p_name" value="<?php echo $row["p_name"]; ?>"></td></tr>
      </div>
      <div class="form-group">
        <tr><td><label>Product Category ID</label></td><td><input type="text" class="form-control" name="fetched_ecat_id" value="<?php echo $row["ecat_id"]; ?>"></td></tr>
      </div>
      <div class="form-group">
        <tr><td><label>Product Old Price</label></td><td><input type="text" class="form-control" name="fetched_p_old_price" value="<?php echo $row["p_old_price"]; ?>"></td></tr>
      </div>
      <div class="form-group">
        <tr><td><label>Product Current Price</label></td><td><input type="text" class="form-control" name="fetched_p_current_price" value="<?php echo $row["p_current_price"]; ?>"></td></tr>
      </div>
      <div class="form-group">
        <tr><td><label>Product Image</label></td><td><input type="text" class="form-control" name="fetched_p_featured_photo" value="<?php echo $row["p_featured_photo"]; ?>"></td></tr>
      </div>
      <div class="form-group">
        <tr><td><label>Product Description</label></td><td><textarea class="form-control" name="fetched_p_description" rows="5"><?php echo $row["p_description"]; ?></textarea></td></tr>
      </div>
      <div class="form-group">
        <tr><td><label>Product Short Description</label></td><td><textarea class="form-control" name="fetched_p_short_description" rows="2"><?php echo $row["p_short_description"]; ?></textarea></td></tr>
      </div>
      <div class="form-group">
        <tr><td><label>Product Feature</label></td><td><textarea class="form-control" name="fetched_p_feature" rows="2"><?php echo $row["p_feature"]; ?></textarea></td></tr>
      </div>
      <div class="form-group">
        <tr><td><label>Product Service Time</label></td><td><input type="text" class="form-control" name="fetched_p_service_time" value="<?php echo $row["p_service_time"]; ?>"></td></tr>
      </div>
      <div class="form-group">
        <tr><td><label>Product Quantity</label></td><td><input type="text" class="form-control" name="fetched_p_qty" value="<?php echo $row["p_qty"]; ?>"></td></tr>
      </div>
      <div class="form-group">
        <tr><td><label>Product Total View</label></td><td><input type="text" class="form-control" name="fetched_p_total_view" value="<?php echo $row["p_total_view"]; ?>"></td></tr>
      </div>
      <div class="form-group">
        <tr><td><label>Is Featured</label></td><td>
          <input type="radio" name="fetched_p_is_featured" value="0" id="fetched_p_is_featured1" <?php if($row["p_is_featured"] == 0) echo "checked"; ?>> OFF  
          <input type="radio" name="fetched_p_is_featured" value="1" id="fetched_p_is_featured2" <?php if($row["p_is_featured"] == 1) echo "checked"; ?>> ON
        </td></tr>
      </div>
      <div class="form-group">
        <tr><td><label>Is Active</label></td><td>
        <input type="radio" name="fetched_p_is_active" value="0" id="fetched_p_is_active1" <?php if($row["p_is_active"] == 0) echo "checked"; ?>> OFF  
          <input type="radio" name="fetched_p_is_active" value="1" id="fetched_p_is_active2" <?php if($row["p_is_active"] == 1) echo "checked"; ?>> ON
        </td></tr>
      </div>

      <script>
      function getRadioBtnValue() {
        var x = document.getElementById("fetched_p_is_featured_off").value;
        document.getElementByName("fetched_p_is_featured").innerHTML = x;
      }
      </script>
    <?php
        }
      }
    ?>
  </tbody>
</table>
<br>
<br>
  <button type="submit" class="btn btn-primary" onclick="getRadioBtnValue()">Update</button>
</form>

</body>
</html>