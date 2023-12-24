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
<?php
$conn = mysqli_connect('localhost','root','','Fation');

$r = mysqli_query($conn,"select * from emplo");



?>
<div class="card shadow mb-4">
                       
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	
			<h2 class="text-center">سجل  موظفين</h2>
             <form method="post">
             <table class="table table-bordered" id="dataTable" width="80%" cellspacing="0">
             <thead>
              <th>id </th>                
               <th>name </th>
               <th>phone </th>
               <th>address </th>
               <th>salary </th>
                <th>job </th>
             </thead>
                                    <tfoot>
                                        
            <?php
           
           
         while($row = mysqli_fetch_array($r)){
    echo "<tr>";
    echo "<td>" . $row['id'] ."</td>";
    echo "<td>" . $row['Name_emp'] ."</td>";
    echo "<td>" . $row['Phone'] ."</td>";
    echo "<td>" . $row['Address'] ."</td>";
    echo "<td>" . $row['salary'] ."</td>";
    echo "<td>" . $row['Job'] ."</td>";
  
    echo "</tr>";
    

                  }


                        ?>
                       
</table>
</form>
</div>
</div>
</div>




<?php include('../footer.php') ?>
