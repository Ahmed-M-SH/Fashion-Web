<?php require_once('../include/Session.php');?>
<?php require_once('../include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>

<?php 
	include('../dbcon.php');
	$update_record= $_GET['Update'];
	$sql = "select * from emplo where id = '$update_record'";
	$result = mysqli_query($conn,$sql);
		


	

	while ($data_row = mysqli_fetch_assoc($result)) {
		$update_id = $data_row['id'];
				$name = $data_row['Name_emp'];
				$phone = $data_row['Phone'];
				$address = $data_row['Address'];
				$salary= $data_row['salary'];
				$job = $data_row['Job'];
		
		
		
		

	}

 ?>

<?php include('../header.php') ?>

<?php include('admin.header.php') ?>

<div class="container jumbotron">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h2 class="text-center">تعديل البيانات</h2>
			<form action="UpdateRecordEmp.php?update_id=<?php echo $update_id;?>" method="post" enctype="multipart/form-data">
			<div class="form-group">
				     الاسم.:<input type="text" class="form-control" name="Name_emp" value="<?php echo 
				      $name;?>" required>
				  </div>
				  <div class="form-group">
				     الهاتف.:<input type="text" class="form-control" name="Phone" value="<?php echo 
				      $phone;?>" required>
				  </div>
				  <div class="form-group">
				     العنوان.:<input type="text" class="form-control" name="Address" value="<?php echo 
				      $address;?>" required>
				  </div>
				  <div class="form-group">
				     المرتب.:<input type="text" class="form-control" name="salary" value="<?php echo 
				      $salary;?>" required>
				  </div>
				  <div class="form-group">
				     المرتب.:<input type="text" class="form-control" name="Job" value="<?php echo 
				      $job;?>" required>
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
		if (!empty($_POST['Name_emp']) ) {
		
			include ('../dbcon.php');
			$id = $_GET['update_id'];
			$name=$_POST['Name_emp'];
			$phone=$_POST['Phone'];
			$address=$_POST['Address'];
			$salary=$_POST['salary'];
			$job=$_POST['Job'];


		

			$sql = "UPDATE emplo SET id='$id', Name_emp = '$name', Phone ='$phone',  Address = '$address' , salary = '$salary' , Job = '$job' WHERE id = '$id'";

			$Execute = mysqli_query($conn,$sql);

			if ($Execute) {
				 $_SESSION['SuccessMessage'] = "updatprod cussefull ";
                Redirect_to("updateemp.php");

			}


		}

	}

 ?>
