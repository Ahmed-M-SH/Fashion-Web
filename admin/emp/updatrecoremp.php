<?php require_once('../include/Session.php');?>
<?php require_once('../include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>

<?php 

	include('../dbcon.php');
	$update_record= $_GET['Update'];
	$sql = "select * from products where id = '$update_record'";
	$result = mysqli_query($conn,$sql);

	while ($data_row = mysqli_fetch_assoc($result)) {
		$update_id = $data_row['id'];
				$rollno = $data_row['rollno'];
				$Name_pro = $data_row['Name_pro'];
				$Type = $data_row['Type'];
				$Quantity = $data_row['Quantity'];
		
		
		
		

	}

 ?>

<?php include('../header.php') ?>

<?php include('../admine/prod/admin.header.php') ?>

<div class="container jumbotron">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h2 class="text-center">تعديل البيانات</h2>
			<form action="../admine/prod/UpdateRecord.php?update_id=<?php echo $update_id;?>" method="post" enctype="multipart/form-data">
			<div class="form-group">
				     الرقم.:<input type="text" class="form-control" name="rollno" value="<?php echo 
				      $rollno;?>" >
				  </div>
				  <div class="form-group">
				    
				   الاسم<input type="text" class="form-control" name="Name_pro" value="<?php echo 
				    $Name_pro;?>" required>
				  </div>
				  <div class="form-group">
				     نوع المنتج: <input type="text" class="form-control" name="Type" value="<?php echo $Type;?>"  required>
				  </div>
				  <div class="form-group">
				    
				   رقم الكمية:<input type="text" class="form-control" name="Quantity" value="<?php echo $Quantity;?>" required>
				  </div>
				  <button type="submit" name="submit" class="btn btn-success btn-lg">تعديل</button>
			</form>
		</div>
	</div>
</div>

<?php include('../footer.php') ?>


<?php 
//update button
	if (isset($_POST['submit'])) {
		if (!empty($_POST['rollno']) && !empty($_POST['Name_pro'])) {
		
			include ('../dbcon.php');
			$id = $_GET['update_id'];
			$rollno=$_POST['rollno'];
			$Name_pro=$_POST['Name_pro'];
			$Type=$_POST['Type'];
			$Quantity=$_POST['Quantity'];
			

			$sql = "UPDATE products SET id='$id', rollno = '$rollno', Name_pro = '$Name_pro', Type ='$Type',  Quantity = '$Quantity' WHERE id = '$id'";

			$Execute = mysqli_query($conn,$sql);

			if ($Execute) {
				 $_SESSION['SuccessMessage'] = "updatprod cussefull ";
                Redirect_to("../admine/prod/updatprod.php");

			}


		}

	}

 ?>
