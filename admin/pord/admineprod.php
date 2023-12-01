<?php require_once('../include/Session.php');?>
<?php require_once('../include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>

<?php include('../header.php') ?>

<div class="header-section jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center">
					  لوحة التحكم بالمخزن
					<span><a href="logout.php" class="btn btn-info" style="float: right;">خروج</a>
                    </span>
				</h2>
               
               		
			</div>
		</div>
	</div>
</div>

<div class="admin-dashboard text-center" >
        <div class="container">
        	
            <div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 jumbotron" >
                   
                    <a href="../admin/pord/addprod.php" class="btn btn-primary btn-lg" name="addpord">اضافه منتج</a><br><br>
                        <a href="updatprod.php" class="btn btn-primary btn-lg">تعديل تفاصيل المنتجات</a><br><br>
                        <a href="deletprod.php" class="btn btn-primary btn-lg">حذف المنتجات</a>   
                    </div>
                </div>
            </div>
        </div>
</div>


<?php include('../footer.php') ?>
