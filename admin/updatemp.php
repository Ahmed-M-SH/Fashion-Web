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
				 اختيار رقم الهاتف: <select name="Type" class="btn btn-info" style="margin-right: 30px;">	
                    <option>اختيار النوع</option>
                                    <option>mukup</option>
                                    
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
	<h2 class="text-center">تعديل معلومات الطالب</h2>
	<tr class="text-center">
		<th>الرقم.</th>
		<th>رقم المنتج</th>
		<th>الاسم المنتج</th>
		<th >نوع المنتج</th>
		<th>رقم الكمية.</th>
		
		<th>تعديل</th>
	</tr>
<?php 
	include('../dbcon.php');
	if (isset($_POST['search'])) {

		$Type = $_POST['Type'];

		$sql = "SELECT * FROM `products` WHERE `Type` = '$Type'";

		$result = mysqli_query($conn,$sql);
		if (mysqli_num_rows($result)>0) {
			while ($DataRows = mysqli_fetch_assoc($result)) {
				$Id = $DataRows['id'];
				$RollNo = $DataRows['rollno'];
				$Name_pro = $DataRows['Name_pro'];
				$Type = $DataRows['Type'];
				$Quantity = $DataRows['Quantity'];
			
				?>
				<tr class="text-center">
					<td><?php echo $RollNo;?></td>
					<td><?php echo $Name_pro; ?></td>
					<td><?php echo $Type; ?></td>
					<td><?php echo $Quantity; ?></td>
					<td><a href="updatrecoremp.php?Update=<?php echo $Id; ?>" class="btn btn-warning">تعديل</a></td>
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