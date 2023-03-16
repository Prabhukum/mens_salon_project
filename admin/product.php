<?php
	include("../includes/config.php");
  	if(!$_SESSION['is_admin'])
		header("Location:index.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Product Panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="icon" href="saloon/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../includes/css/hair_cut_for_men.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/select2.full.min.js"></script>
	<script src="js/jquery.inputmask.js"></script>
	<script src="js/jquery.inputmask.date.extensions.js"></script>
	<script src="js/jquery.inputmask.extensions.js"></script>
	<script src="js/moment.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/icheck.min.js"></script>
	<script src="js/fastclick.js"></script>
	<script src="js/jquery.sparkline.min.js"></script>
	<script src="js/jquery.slimscroll.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/app.min.js"></script>
	<script src="js/jscolor.js"></script>
	<script src="js/on-off-switch.js"></script>
    <script src="js/on-off-switch-onload.js"></script>
    <script src="js/clipboard.min.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/summernote.js"></script>

    <style>
      .form-control {
        color: #000000;
        background-color: #f1f1f1;
      }
      .center {
        margin: auto;
        width: 80%;
        padding: 10px;
      }
    </style>
    

</head>
<body>

<div class="center">

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

if(isset($_GET['get_pid'])){
  if($_POST["fetched_p_id"] == $_GET['get_pid']) {
    $statement = $pdo->prepare("Update tbl_product SET p_name = '$fetched_p_name',p_old_price = '$fetched_p_old_price',p_current_price = '$fetched_p_current_price',p_qty = '$fetched_p_qty',p_featured_photo = '$fetched_p_featured_photo',p_description = '$fetched_p_description',p_short_description = '$fetched_p_short_description',p_feature = '$fetched_p_feature',p_service_time = '$fetched_p_service_time',p_total_view = '$fetched_p_total_view',p_is_featured = '$fetched_p_is_featured',p_is_active = '$fetched_p_is_active',ecat_id = '$fetched_ecat_id' where p_id = '$fetched_p_id'");
    $statement->execute();
    echo '<script type="text/JavaScript"> 
            alert("*** Record updated on Database ***");
        </script>';
  } else {
    $statement = $pdo->prepare("INSERT INTO `tbl_product` (`p_id`, `p_name`, `p_old_price`, `p_current_price`, `p_qty`, `p_featured_photo`, `p_description`, `p_short_description`, `p_feature`, `p_service_time`, `p_total_view`, `p_is_featured`, `p_is_active`, `ecat_id`) VALUES 
    ('$fetched_p_id', '$fetched_p_name', '$fetched_p_old_price', '$fetched_p_current_price', '$fetched_p_qty', '$fetched_p_featured_photo', '$fetched_p_description', '$fetched_p_short_description', '$fetched_p_feature', '$fetched_p_service_time', '$fetched_p_total_view', '$fetched_p_is_featured', '$fetched_p_is_active', '$fetched_ecat_id')");
    $statement->execute();
    echo '<script type="text/JavaScript"> 
            alert("*** Record added to Database ***");
         </script>';
  }

  $valid = 1;

  $path = $_FILES['p_featured_photo']['name'];
  $path_tmp = $_FILES['p_featured_photo']['tmp_name'];

  if($path!='') {
      $ext = pathinfo( $path, PATHINFO_EXTENSION );
      $file_name = basename( $path, '.' . $ext );
      if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' ) {
          $valid = 0;
          $error_message .= 'You must have to upload jpg, jpeg, gif or png file<br>';
      }
  }


  if($valid == 1) {

    if( isset($_FILES['photo']["name"]) && isset($_FILES['photo']["tmp_name"]) )
      {

        $photo = array();
          $photo = $_FILES['photo']["name"];
          $photo = array_values(array_filter($photo));

        $photo_temp = array();
          $photo_temp = $_FILES['photo']["tmp_name"];
          $photo_temp = array_values(array_filter($photo_temp));

        $statement = $pdo->prepare("SHOW TABLE STATUS LIKE 'tbl_product_photo'");
    $statement->execute();
    $result = $statement->fetchAll();
    foreach($result as $row) {
      $next_id1=$row[10];
    }
    $z = $next_id1;

          $m=0;
          for($i=0;$i<count($photo);$i++)
          {
              $my_ext1 = pathinfo( $photo[$i], PATHINFO_EXTENSION );
          if( $my_ext1=='jpg' || $my_ext1=='png' || $my_ext1=='jpeg' || $my_ext1=='gif' ) {
              $final_name1[$m] = $z.'.'.$my_ext1;
                  move_uploaded_file($photo_temp[$i],"../app/saloon/product_photos/".$final_name1[$m]);
                  $m++;
                  $z++;
          }
          }

          if(isset($final_name1)) {
            for($i=0;$i<count($final_name1);$i++)
          {
            $statement = $pdo->prepare("INSERT INTO tbl_product_photo (photo,p_id) VALUES (?,?)");
            $statement->execute(array($final_name1[$i],$_REQUEST['id']));
          }
          }            
      }

      if($path == '') {
        $statement = $pdo->prepare("Update tbl_product SET p_name = '$fetched_p_name',p_old_price = '$fetched_p_old_price',p_current_price = '$fetched_p_current_price',p_qty = '$fetched_p_qty',p_featured_photo = '$fetched_p_featured_photo',p_description = '$fetched_p_description',p_short_description = '$fetched_p_short_description',p_feature = '$fetched_p_feature',p_service_time = '$fetched_p_service_time',p_total_view = '$fetched_p_total_view',p_is_featured = '$fetched_p_is_featured',p_is_active = '$fetched_p_is_active',ecat_id = '$fetched_ecat_id' where p_id = '$fetched_p_id'");
        $statement->execute();
      } else {

        unlink('../app/saloon/'.$_POST['current_photo']);

    $final_name = 'product-featured-'.$_REQUEST['id'].'.'.$ext;
        move_uploaded_file( $path_tmp, '../app/saloon/'.$final_name );

        $statement = $pdo->prepare("Update tbl_product SET p_name = '$fetched_p_name',p_old_price = '$fetched_p_old_price',p_current_price = '$fetched_p_current_price',p_qty = '$fetched_p_qty',p_featured_photo = '$final_name',p_description = '$fetched_p_description',p_short_description = '$fetched_p_short_description',p_feature = '$fetched_p_feature',p_service_time = '$fetched_p_service_time',p_total_view = '$fetched_p_total_view',p_is_featured = '$fetched_p_is_featured',p_is_active = '$fetched_p_is_active',ecat_id = '$fetched_ecat_id' where p_id = '$fetched_p_id'");
        $statement->execute();
      }
      $success_message = 'Product is updated successfully.';
  }


}
else {
  $statement = $pdo->prepare("INSERT INTO `tbl_product` (`p_id`, `p_name`, `p_old_price`, `p_current_price`, `p_qty`, `p_featured_photo`, `p_description`, `p_short_description`, `p_feature`, `p_service_time`, `p_total_view`, `p_is_featured`, `p_is_active`, `ecat_id`) VALUES 
  ('$fetched_p_id', '$fetched_p_name', '$fetched_p_old_price', '$fetched_p_current_price', '$fetched_p_qty', '$fetched_p_featured_photo', '$fetched_p_description', '$fetched_p_short_description', '$fetched_p_feature', '$fetched_p_service_time', '$fetched_p_total_view', '$fetched_p_is_featured', '$fetched_p_is_active', '$fetched_ecat_id')");
  $statement->execute();
  echo '<script type="text/JavaScript"> 
          alert("*** Record added to Database ***");
       </script>';
}
}

?>

<?php
if(isset($_POST["fetched_p_id_delete"])){
  $delete_id = $_POST["fetched_p_id_delete"];
  $statement = $pdo->prepare("Delete from tbl_product where p_id = '$delete_id'");
  $statement->execute();
  echo '<script type="text/JavaScript"> 
    alert("*** Record removed from Database ***");
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
        <li><a class="dropdown-item" href="product.php?get_pid=<?php echo $row["p_id"]; ?>"><?php echo $row["p_id"]; ?></a></li>
      <?php
        }
        $row["p_id"] = "";
      ?>
    </ul>
    <label> OR </label>
    <input style="color: #000000; background-color: #f1f1f1;" type="text" name="get_pid" value="<?php if(isset($_GET['get_pid'])){echo $_GET['get_pid'];} ?>">
    <button type="submit" class="btn btn-primary">Fetch</button>
    <label>&emsp;&emsp;&emsp;</label>
    <a class="btn btn-primary" href="product.php">Reset</a>
    </div>
</form>
<br>

<form action="" method="POST">
<?php
  if(isset($_GET['get_pid'])) {
      $get_data = $_GET['get_pid'];
      $statement = $pdo->prepare("SELECT * FROM tbl_product where p_id = ?");
      $statement->execute(array($get_data));
      if($statement->rowCount() != 0)
      {
        $data_found = true;
      $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
      foreach ($result as $row) {
    ?>
        <input type="hidden" name="fetched_p_id_delete" value="<?php echo $row["p_id"]; ?>">
        <button type="submit" class="btn btn-primary">Delete Record</button>
      <?php
      }
    }
  }
  ?>
</form>
<br>
<?php

if($_POST["form-reset"]) {

}

?>

<form action="" method="POST">
<table>
  <tbody>
    <?php
    $data_found = false;
    if(isset($_GET['get_pid'])) {
      $get_data = $_GET['get_pid'];
      $statement = $pdo->prepare("SELECT * FROM tbl_product where p_id = ?");
      $statement->execute(array($get_data));
      if($statement->rowCount() != 0)
      {
        $data_found = true;
      $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
      foreach ($result as $row) {
    ?>
      <div class="form-group">
        <tr><td><label>Product ID</label></td><td width="85%"><input type="text" class="form-control" name="fetched_p_id" value="<?php echo $row["p_id"]; ?>"></td></tr>
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
      } else {
        $data_found = false;
      }
      } if($data_found == false) {
    ?>
      <div class="form-group">
        <tr><td><label>Product ID</label></td><td width="85%"><input type="text" class="form-control" name="fetched_p_id" value="<?php echo $row["p_id"]; ?>"></td></tr>
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
        <label for="" class="col-sm-3 control-label">Existing Featured Photo</label>
        <div class="col-sm-4" style="padding-top:4px;">
          <img src="../app/saloon/<?php echo $p_featured_photo; ?>" alt="" style="width:150px;">
          <input type="hidden" name="current_photo" value="<?php echo $p_featured_photo; ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="" class="col-sm-3 control-label">Change Featured Photo </label>
        <div class="col-sm-4" style="padding-top:4px;">
          <input type="file" name="p_featured_photo">
        </div>
      </div>
      <div class="form-group">
        <label for="" class="col-sm-3 control-label">Other Photos</label>
        <div class="col-sm-4" style="padding-top:4px;">
          <table id="ProductTable" style="width:100%;">
            <tbody>
              <?php
                $_REQUEST['id'] = $row["p_id"];
                $statement = $pdo->prepare("SELECT * FROM tbl_product_photo WHERE p_id=?");
                $statement->execute(array($_REQUEST['id']));
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                foreach ($result as $row) {
              ?>
              <tr>
                <td>
                    <img src="../app/saloon/product_photos/<?php echo $row['photo']; ?>" alt="" style="width:150px;margin-bottom:5px;">
                </td>
                <td style="width:28px;">
                  <a onclick="return confirmDelete();" href="product-other-photo-delete.php?id=<?php echo $row['pp_id']; ?>&id1=<?php echo $_REQUEST['id']; ?>" class="btn btn-danger btn-xs">X</a>
                </td>
              </tr>
              <?php
                }
              ?>
            </tbody>
        </table>
        </div>
        <div class="col-sm-2">
          <input type="button" id="btnAddNew" value="Add Item" style="margin-top: 5px;margin-bottom:10px;border:0;color: #fff;font-size: 14px;border-radius:3px;" class="btn btn-warning btn-xs">
        </div>
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

    <script>
          $("#btnAddNew").click(function () {

          var rowNumber = $("#ProductTable tbody tr").length;

          var trNew = "";              

          var addLink = "<div class=\"upload-btn" + rowNumber + "\"><input type=\"file\" name=\"photo[]\"  style=\"margin-bottom:5px;\"></div>";
              
          var deleteRow = "<a href=\"javascript:void()\" class=\"Delete btn btn-danger btn-xs\">X</a>";

          trNew = trNew + "<tr> ";

          trNew += "<td>" + addLink + "</td>";
          trNew += "<td style=\"width:28px;\">" + deleteRow + "</td>";

          trNew = trNew + " </tr>";

          $("#ProductTable tbody").append(trNew);

      });

      $('#ProductTable').delegate('a.Delete', 'click', function () {
          $(this).parent().parent().fadeOut('slow').remove();
          return false;
      });
    </script>
      <?php
        }
      ?>
  </tbody>
</table>
<br>
<br>
  <button type="submit" class="btn btn-primary" onclick="getRadioBtnValue()">Add / Update Record</button>

  <div class="form-group">
    <label for="" class="col-sm-3 control-label">Featured Photo <span>*</span></label>
    <div class="col-sm-4" style="padding-top:4px;">
      <input type="file" name="p_featured_photo">
    </div>
  </div>
  <div class="form-group">
    <label for="" class="col-sm-3 control-label">Other Photos</label>
    <div class="col-sm-4" style="padding-top:4px;">
      <table id="ProductTable" style="width:100%;">
                    <tbody>
                        <tr>
                            <td>
                                <div class="upload-btn">
                                    <input type="file" name="photo[]" style="margin-bottom:5px;">
                                </div>
                            </td>
                            <td style="width:28px;"><a href="javascript:void()" class="Delete btn btn-danger btn-xs">X</a></td>
                        </tr>
                    </tbody>
                </table>
    </div>
    <div class="col-sm-2">
                <input type="button" id="btnAddNew" value="Add Item" style="margin-top: 5px;margin-bottom:10px;border:0;color: #fff;font-size: 14px;border-radius:3px;" class="btn btn-warning btn-xs">
            </div>
  </div>

  </form>
  </div>
</div>


</body>
</html>