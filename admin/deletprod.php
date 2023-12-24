<?php require_once('../include/Session.php');?>
<?php require_once('../include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>

<?php include('../header.php') ?>

<div class="header-section jumbotron">
	
			<div class="col-md-12">
				<h2 class="text-center">
					<span><a href="admineprod.php" class="btn btn-info" style="float: right;">عوده</a>
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
				      رقم المنتج.:<input type="text" class="form-control" name="rollno" placeholder="ادخل رقم المنتج" >
				  </div>
				<input type="submit" name="search" value="بحث" class="btn btn-success">
			</form>
			</div>
		</div>
	</div>


<table class="table table-striped table-bordered table-responsive text-center" border="1">
	<h2 class="text-center">معلومات المنتج</h2>
	<tr>
	
		<th class="text-center">الرقم</th>
		<th class="text-center">الاسم المنتج</th>
		<th class="text-center">نوع المنتج</th>
		<th class="text-center">رقم الكمية</th>
		<th class="text-center">الصورة </th>
		<th class="text-center"> التفاصيل</th>
		<th class="text-center">حذف</th>
		
	</tr>
<?php 
	include('../dbcon.php');
	if (isset($_POST['search'])) {

		$Rollno = $_POST['rollno'];

		$sql = "SELECT * FROM `prod` WHERE `rollno` = '$Rollno'";

		$result = mysqli_query($conn,$sql);
		if (mysqli_num_rows($result)>0) {
			while ($DataRows = mysqli_fetch_assoc($result)) {
				$Id = $DataRows['id'];
				$RollNo = $DataRows['rollno'];
				$Name_pro = $DataRows['Name_prod'];
				$Type = $DataRows['Type'];
				$Quantity = $DataRows['Quantity'];
				$ProfilePic = $DataRows['image'];
				$Details = $DataRows['Details'];
				
				?>
				<tr>
					<td><?php echo $RollNo;?></td>
					<td><?php echo $Name_pro; ?></td>
					<td><?php echo $Type; ?></td>
					<td><?php echo $Quantity; ?></td>
					<td><img src="../databaseimg/<?php echo $ProfilePic;?>" alt="img"></td>
					<td><?php echo $Details; ?></td>
					
					<td><a href="deleterecord.php?Delete=<?php echo $Id; ?>&Picture=<?php echo $ProfilePic;?>" class="btn btn-danger">حذف</a></td>
				</tr>
				<?php
				
			}
			
		} else {
			echo "deleterecord cussecfull";
		}
	}

 ?>
	

</table>
</div>

<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h2><?php echo @$_GET['deleted']; ?></h2>
			</div>
		</div>
	</div>	



<?php include('../footer.php') ?>