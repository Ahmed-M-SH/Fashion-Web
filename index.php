
<?php
//include header  of html
 include('header.php')
  ?>
            

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 jumbotron">
                            <h2 style="text-align: center;">
                                مرحــــــباً بكم في نظام الادارة 
                                <span style="float: right;"><a href="login.php" class="btn btn-info btn-lg">ادارة النظام  </a></span>
                            </h2>
                    </div>
                </div>
            </div>

            
<form>
            <div class="admin-dashboard text-center">
        <div class="container">
        	
            <div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 jumbotron" >
                    <a href="adminemp.php" class="btn btn-primary btn-lg"> فاتورة شراء</a><br><br>
                    <a href="admineprod.php" class="btn btn-primary btn-lg"> فاتورة بيع</a><br><br>
                        <a href="addstudent.php" class="btn btn-primary btn-lg"> فاتورة مرتجع </a><br><br>
                    </div>
                </div>
            </div>
        </div>
</div>
    
</form>

<!--include header  of html-->
<?php include('footer.php') ?>

