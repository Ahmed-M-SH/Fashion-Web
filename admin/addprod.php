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

<div class="container jumbotron">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h2 class="text-center">اضافه تفاصيل المنتج</h2>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
				  <div class="form-group">
				      رقم المنتج.:<input type="text" class="form-control" name="rollno" placeholder="ادخل رقم المنتج" >
				  </div>
				  <div class="form-group">
				    
				    الاسم المنتج<input type="text" class="form-control" name="Name_prod" placeholder="الاسم المنتج" required>
				  </div>
				  <div class="form-group">
				      نوع المنتج: <input type="text" class="form-control" name="Type" placeholder="ادخل نوع المنتج" required>
				  </div>
				  <div class="form-group">
				    
				    رقم الكمية.:<input type="text" class="form-control" name="Quantity" placeholder="رقم الكمسة" required>
				  </div>
 
				  <div class="form-group">
				    
					الصوره:<input type="file" class="form-control" name="simg" required>
				   </div>
				  <div class="form-group">
				    
				     تفاصيل المنتج.:<input type="text" class="form-control" name="Details" placeholder="تفاصيل المنتج " required>
				  </div>
				 

				  <button type="submit" name="submit" class="btn btn-info btn-lg">اضافه</button>
			</form>
		</div>
	</div>
</div>

<?php include('../footer.php') ?>

<?php 

	if (isset($_POST['submit'])) {
		if (!empty($_POST['rollno']) && !empty($_POST['Name_prod'])) {
		
			include ('../dbcon.php');
			$roll=$_POST['rollno'];
			$name=$_POST['Name_prod'];
			$Type=$_POST['Type'];
			$Quantity=$_POST['Quantity'];
			include('ImageUpload.php');
			$Details=$_POST['Details'];
			
			

			$sql = "INSERT INTO `prod`( `rollno`, `Name_prod`, `Type`, `Quantity`, `image`, `Details`) VALUES ('$roll','$name','$Type','$Quantity' ,'$imgName','$Details')";

			$run = mysqli_query($conn,$sql);

			if ($run == true) {
				
				?>
				<script>
					alert("تمت الاضافه بنجاح");
				</script>
				<?php
			} else {
				echo "خطا : ".$sql."<br>". mysqli_error($conn); 
			}
		} else {
				?>
				<script>
					alert("الرجاء ادخل الرقم و الاسم");
				</script>
				<?php
		}


	}

 ?>








