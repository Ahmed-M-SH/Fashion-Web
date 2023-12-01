<?php require_once('../include/Session.php');?>
<?php require_once('../include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>

<?php include('../header.php') ?>
<?php include('admin.header.php') ?>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3  jumbotron ">
			<div  style="text-align: center;">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" >
				 اختيار النوع: <select name="Job" class="btn btn-info" style="margin-right: 30px;">	
                    <option>اختيار النوع</option>
                                    <option>eng</option>
                                    
								</select>

				<input type="submit" name="search" value="بحث" class="btn btn-success">
			</form>
			</div>
		</div>
	</div>

<?php
    echo  ErrorMessage();
    echo  SuccessMessage();
 ?>
<table class="table table-bordered table-striped table-responsive">
	<h2 class="text-center">تعديل معلومات الموظفين</h2>
	<tr class="text-center">
	
	<th>الاسم.</th>
		<th>رقم الهاتف</th>
		<th> العنوان</th>
		<th >الراتب </th>
		<th> الوظيفة.</th>
		
		<th>تعديل</th>
	</tr>
<?php 
	include('../dbcon.php');
	if (isset($_POST['search'])) {

		$job = $_POST['Job'];              

		$sql = "SELECT * FROM `emplo` WHERE `Job` = '$job'";

		$result = mysqli_query($conn,$sql);
		if (mysqli_num_rows($result)>0) {
			while ($DataRows = mysqli_fetch_assoc($result)) {
				$Id = $DataRows['id'];
				$name=$DataRows['Name_emp'];
				$phone=$DataRows['Phone'];
				$address=$DataRows['Address'];
				$salary=$DataRows['salary'];
				$job=$DataRows['Job']; 
			
				?>
				<tr class="text-center">
				
				<td><?php echo $name;?></td>
					<td><?php echo $phone; ?></td>
					<td><?php echo $address; ?></td>
					<td><?php echo $salary; ?></td>
					<td><?php echo $job; ?></td>
					<td><a href="UpdateRecordEmp.php?Update=<?php echo $Id; ?>" class="btn btn-warning">تعديل</a></td>
				</tr>
				<?php
				
			}
			
		} else {
			echo "erorr";
		}
	}

 ?>
	

</table>
</div>
<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h2><?php echo @$_GET['updated']; ?></h2>
			</div>
		</div>
	</div>	



<?php include('../footer.php');?>