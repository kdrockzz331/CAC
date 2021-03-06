<?php
session_start();
if (!isset($_SESSION['stdid']))
{
    echo "<script type='text/javascript'>window.location.replace('http://localhost/cac/index.php');</script>"; 
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CAC || Dashboard</title>
  <link rel="icon" type="image/png" href="images/logo.png"/>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <?php 
	include_once('navbar.php');
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php
    include_once('main_sidebar.php');
  ?>
  <!-- Main Sidebar Container ends-->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Attendence</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Go to</li>
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-12 connectedSortable">
			<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?php echo $_SESSION["stdname"]; ?> Attendence</h3>

               
              </div>
              
			  <?php
				
				$servername = "localhost";
				$username = "root";
				$password = "";
				$db="studentattedence";
				 
				$conn = mysqli_connect($servername, $username, $password,$db);
				$stdid = $_SESSION['stdid'];
				$stdsem = $_SESSION['stdsem'];
				$stdc= $stdsem;
				while($stdc <= $stdsem){
                  echo "
				  
			  
              <div class='card-body table-responsive p-0'>
                <table class='table table-hover text-nowrap'>
				<div class='card-header'>
					<h3 class='card-title'>Semister - " .$stdc. "</h3>               
				</div>
                  <thead>
                    <tr>
                      <th>S.no</th>
                      <th>Subject Name</th>
                      <th>Code</th>
                      <th>Conducted</th>
                      <th>Attendend</th>
					  <th>Percentage</th>
                    </tr>
                  </thead>
                  <tbody> ";
				 
				  
				

				  $attendence = mysqli_query($conn,"SELECT * FROM attendslog WHERE stdid = '$stdid' AND semid = '$stdc'");
				  while($row = mysqli_fetch_array($attendence)){
						$per =  round(($row['Attended']/ $row['Conducted'])*100,2);
						echo "<tr>";
						echo "<td>" . $row['id'] . "</td>";
						echo "<td>" . $row['subject'] . "</td>";
						echo "<td>" . $row['subjectCode'] . "</td>";
						echo "<td>" . $row['Conducted'] . "</td>";
						echo "<td>" . $row['Attended'] . "</td>";
						echo "<td>" . $per . "</td>";
						echo "</tr>";
					}
				
                    
                    
                  echo "</tbody>
				  </table>
              </div>
			  ";
				  
				  $stdc = $stdc +1;
				  
				}
				  	mysqli_close($conn);
				  ?>
             
            </div>
          </div>
         
        </div>
        <!-- /.row -->
        <!-- Main row -->
   
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- footer -->
  <?php
	include_once('footer.php');
  ?>		
  <!-- /.footer -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

</body>
</html>
