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
<div class="container jumbotron">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h2 class="text-center">اضافه  موظفين</h2>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
				  <div class="form-group">
                  الاسم الكامل:<input type="text" class="form-control" name="Name_emp" placeholder="fullname" >
				  </div>
				  <div class="form-group">
				    
                  رقم الهاتف:<input type="text" class="form-control" name="pphone" placeholder="pphone" required>
				  </div>
				  <div class="form-group">
				      العنوان: <input type="text" class="form-control" name="city" placeholder="ادخل المدينه" required>
				  </div>
				  <div class="form-group">
				    
                  المرتب:<input type="text" class="form-control" name="salary" placeholder="salary" required>
				  </div>
				  <div class="form-group">
				    
                  الوظيفة:<input type="text" class="form-control" name="job" placeholder="job" required>
				  </div>

				  <button type="submit" name="submit" class="btn btn-info btn-lg">اضافه</button>
			</form>
		</div>
	</div>
</div>

<?php include('../footer.php') ?>

<?php 

	if (isset($_POST['submit'])) {
		if (!empty($_POST['Name_emp']) && !empty($_POST['pphone'])) {
		
			include ('../dbcon.php');
			
			$name=$_POST['Name_emp'];
            $pphone=$_POST['pphone'];
			$city=$_POST['city'];
			$salary=$_POST['salary'];
			$job=$_POST['job'];
			

			$sql = "INSERT INTO `emplo`( `Name_emp`, `Phone`, `Address`, `salary`, `Job`) VALUES ('$name','$pphone','$city','$salary','$job')";

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








