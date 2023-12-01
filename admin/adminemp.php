<?php require_once('../include/Session.php');?>
<?php require_once('../include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>

<?php include('../header.php') ?>

<div class="header-section jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center">
					لوحه التحكم
					<span><a href="logout.php" class="btn btn-info" style="float: right;">خروج</a>
                    <h2 class="text-center">
					<span><a href="admindash.php" class="btn btn-info" style="float: right;">عوده</a>
                    </span>
				</h2>
                    </span>
				</h2>
              
               		
			</div>
		</div>
	</div>
</div>
<div class="admin-dashboard text-center">
        <div class="container">
        	
            <div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 jumbotron" >
                    <a href="addemp.php" class="btn btn-primary btn-lg">اضافه موظف جديد</a><br><br>
                        <a href="updateemp.php" class="btn btn-primary btn-lg">تعديل تفاصيل الموظف</a><br><br>
                        <a href="deletemp.php" class="btn btn-primary btn-lg">حذف تفاصيل الموظف</a>  <br><br>
                        <a href="EmpR.php" class="btn btn-primary btn-lg">سجل الموظفين  </a>   
                    </div>
                </div>
            </div>
        </div>
</div>




<?php include('../footer.php') ?>
