<?php require_once('../include/Session.php');?>
<?php require_once('../include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>

<?php include('../header.php') ?>

<div class="header-section jumbotron">
	
			<div class="col-md-12">
				<h2 class="text-center">
					<span><a href="adminemp.php" class="btn btn-info" style="float: right;">عوده</a>
                    </span>
				</h2>
              
               		
			</div>
		</div>  
		<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3  jumbotron ">
			<div  style="text-align: center;">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" >
				   <div class="form-group">
				      اسم الموظف .:<input type="text" class="form-control" name="Name_emp" placeholder="ادخل اسم الموظف" >
				  </div>
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

		$name = $_POST['Name_emp'];              

		$sql = "SELECT * FROM `emplo` WHERE `Name_emp` = '$name'";

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