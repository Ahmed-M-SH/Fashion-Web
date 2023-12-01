<?php include_once('include/Session.php');?>
<?php include_once('include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>

<?php include('header.php') ?>

<?php include_once('admin/admin.header.php') ?>

<div class="container jumbotron">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h2 class="text-center">اضافه تفاصيل الطالب</h2>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
				  <div class="form-group">
                  fullname:<input type="text" class="form-control" name="fullname" placeholder="fullname" >
				  </div>
				  <div class="form-group">
                  password.:<input type="text" class="form-control" name="password" placeholder="password" required>
				  </div>
				    
                  pphone:<input type="text" class="form-control" name="pphone" placeholder="pphone" required>
				  </div>
				  
				    

				  <button type="submit" name="submit" class="btn btn-info btn-lg">اضافه</button>
			</form>
		</div>
	</div>
</div>

<?php include('footer.php') ?>

<?php 

	if (isset($_POST['submit'])) {
		if (!empty($_POST['fullname']) && !empty($_POST['pphone'])) {
		
			include ('dbcon.php');
			
			$name=$_POST['fullname'];
            $pphone=$_POST['pphone'];
			$password=$_POST['password'];
			
			

			$sql = "INSERT INTO `users`( `Name_user`, `Password`, `Phone`) VALUES ('$name','$pphone','$password')";

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








