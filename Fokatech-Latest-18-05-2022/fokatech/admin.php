<?php

    session_start();
    if(!isset($_SESSION['uname'])){
        header('location:login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Dashboard</title>
  <link href="css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
       <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="js/fontawsome-all.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/fontawesome-all.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center" href="admin.php">
             
                <img src="assets/img/fkt.png" height="35px" width="130px"/>

            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="admin.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span style="font-size:14px!important;">Dashboard</span></a>
            </li>

         
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
           
           

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="enquiry_table.php">
                    <i class="fas fa-table" style="font-size:14px;font-weight:bold!important;"color:#FFF></i>
                    <span style="font-size:14px;font-weight:bold!important;">Enquiry Form</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

          
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow ">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    
                    <div class="container-fluid">
                        <h1 align="center">ADMIN</h1>
                    </div>
                      <li class="nav-item dropdown no-arrow" type="none">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo strtoupper($_SESSION['uname']); ?></span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a href="logout.php" style="font-size:13px;padding:10px;">
                                    <i class="fa fa-times-circle"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
<br>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-md-8">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                <h2 align="center">Enquiries</h2>
											
                                           <center> <i class="fas fa-clipboard-list fa-5x"></i></center>
                                        
												</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                           <br><br>
										   <div class="row">
										   <div class="col-md-4"><p align="center">Today<br><br><?php
                                                    include 'config.php';
                                                    $sql = "SELECT * FROM enquiry_form where date=current_date()";
                                                    $result = mysqli_query($con, $sql);
                                                    echo mysqli_num_rows($result);
                                                ?></p></div>
										     <div class="col-md-4"><p align="center">This Week<br><br><?php
                                                    include 'config.php';
                                                    $sql = "SELECT * FROM enquiry_form where date between current_date()-7 and current_date()";
                                                    $result = mysqli_query($con, $sql);
                                                    echo mysqli_num_rows($result);
                                                ?></p></div>
												
												 <div class="col-md-4"><p align="center">This Month <br><br><?php
                                                            include 'config.php';
                                                            $sql = "SELECT * FROM enquiry_form where MONTH(`date`)=MONTH(now())
       and YEAR(`date`)=YEAR(now());";
                                                            $result = mysqli_query($con, $sql);
                                                            echo mysqli_num_rows($result);
                                                        ?></p></div>
										   
										   </div>
										   
										   
                                            </div>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div> -->
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                      

                        <!-- Earnings (Monthly) Card Example -->
                       

                        <!-- Pending Requests Card Example -->
                        <div class="col-md-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
											<form name="searchFRM" method="post" action="">
                  <center> <select id="product" class="form-control" name="products" required onChange="this.form.submit()" style="width:200px;">
				   <option value="">-- All Enquiries --</option>
       <option value="Location Tracker" title="Location Tracker" <?php if(@$_REQUEST['products']=='Location Tracker') { echo "selected"; } ?>>Location Tracker</option>
        <option value="Battery Monitor" title="Battery Monitor" <?php if(@$_REQUEST['products']=='Battery Monitor') { echo "selected"; } ?>>Battery Monitor</option>
       <option value="Security Monitor" title="Security Monitor" <?php if(@$_REQUEST['products']=='Security Monitor') { echo "selected"; } ?>>Security Monitor</option>
       <option value="THS Monitor" title="THS Monitor" <?php if(@$_REQUEST['products']=='THS Monitor') { echo "selected"; } ?>>THS Monitor</option>
<option value="Smart Fluid_Monitor" title="Smart Fluid Monitor" <?php if(@$_REQUEST['products']=='Smart Fluid Monitor') { echo "selected"; } ?>>
Smart Fluid Monitor</option>
		   <option value="Smart Connect" title="Smart Connect" <?php if(@$_REQUEST['products']=='Smart Connect') { echo "selected"; } ?>>Smart Connect</option>
                                        
                                    </select></center>
									</form>
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-primary">
											
                                               <p align="center" style="padding-top:20px;">
											   <i class="fas fa-users fa-3x text-gray-300" style="color:#4E73DF!important"></i><br><br>
											   Total Enquiries <br><br>
											  
											   <?php
                                                    include 'config.php';
													$sql = "SELECT * FROM enquiry_form";
													if(isset($_REQUEST['products']))
													{
													$selected_prod=$_REQUEST['products'];
													$sql = "SELECT * FROM enquiry_form where products like '%$selected_prod%'";
													}
                                                     $result = mysqli_query($con, $sql);
                                                    echo mysqli_num_rows($result);
                                                ?></p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
<br>
                    <div class="row">

                        <!-- Area Chart -->
                        <!-- <div class="col-xl-8 col-lg-7"> -->
                            <div class='container'>
                            <div class="card shadow">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-1 font-weight-bold text-primary">Site Statistics</h6>
                                  
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="">
									<div class="row">
									<div class="col-md-8"><h4 align="center">Most Viewed Products </h4>
									
									<p align="right">
									<select name="filterBy" class="form-control col-md-4">
									<option value="all">All</option>
									<option value="Today">Today</option>
									<option value="This Week">This Week</option>
									<option value="This Month">This Month</option>
									<option value="This Year">This Year</option>
									
									</select>
									</p>   <table class="table table-stripped">
										<tr><th>S.No</th><th>Product</th><th>Total Views</th><th>Location</th></tr>
										<tr><td>1</td><td>Location Tracker</td><td>124</td><td>Oslo, Norway</td></tr>
										<tr><td>2</td><td>battery Monitor</td><td>109</td><td>Oslo, Norway</td></tr>
										<tr><td>3</td><td>Security Monitor</td><td>104</td><td>Oslo, Norway</td></tr>
										<tr><td>4</td><td>THS Monitor</td><td>98</td><td>Oslo, Norway</td></tr>
										<tr><td>5</td><td>Smart Connect </td><td>74</td><td>Oslo, Norway</td></tr>
										</table>
										
										</div>
										
										<div class="col-md-4">
										
										<div class="card col-md-12">
										<p align="center"><br><b>Live Visitors</b></p>
										<br>
										<h1 align="center">87</h1><br><br>
										</div>
										
										
										<div class="card col-md-12">
										<p align="center"><br><b>Total Admin</b></p>
										<br>
										<h1 align="center">87</h1><br><br>
										</div>
										
										
										</div>
										
										
                                    </div>
                                </div>
                            </div>
                        </div>

                       
                            </div>
                        </div>
                    </div>
					<br>
                    <center>
                        <a href="register.php" class="btn btn-primary btn-icon-split" style="margin-right: 7%;">
                            <span class="icon text-white-50">
                                <i class="fas fa-flag"></i>
                            </span>
                            <span class="text">Create admin</span>
                        </a>


                       
                    </center>
                    <br>
                    <br>

                    <!-- Content Row -->
                    <!-- <div class="row"> -->

                    <!-- Content Column -->
                    <!-- <div class="col-lg-6 mb-4"> -->

                    <!-- Project Card Example -->
                    <!-- <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">Server Migration <span
                                            class="float-right">20%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Sales Tracking <span
                                            class="float-right">40%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Customer Database <span
                                            class="float-right">60%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: 60%"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Payout Details <span
                                            class="float-right">80%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Account Setup <span
                                            class="float-right">Complete!</span></h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div> -->

                    <!-- Color System -->
                    <!-- <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-primary text-white shadow">
                                        <div class="card-body">
                                            Primary
                                            <div class="text-white-50 small">#4e73df</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-success text-white shadow">
                                        <div class="card-body">
                                            Success
                                            <div class="text-white-50 small">#1cc88a</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-info text-white shadow">
                                        <div class="card-body">
                                            Info
                                            <div class="text-white-50 small">#36b9cc</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-warning text-white shadow">
                                        <div class="card-body">
                                            Warning
                                            <div class="text-white-50 small">#f6c23e</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-danger text-white shadow">
                                        <div class="card-body">
                                            Danger
                                            <div class="text-white-50 small">#e74a3b</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-secondary text-white shadow">
                                        <div class="card-body">
                                            Secondary
                                            <div class="text-white-50 small">#858796</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-light text-black shadow">
                                        <div class="card-body">
                                            Light
                                            <div class="text-black-50 small">#f8f9fc</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-dark text-white shadow">
                                        <div class="card-body">
                                            Dark
                                            <div class="text-white-50 small">#5a5c69</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 mb-4"> -->

                    <!-- Illustrations -->
                    <!-- <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="img/undraw_posting_photo.svg" alt="...">
                                    </div>
                                    <p>Add some quality, svg illustrations to your project courtesy of <a
                                            target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                                        constantly updated collection of beautiful svg images that you can use
                                        completely free and without attribution!</p>
                                    <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on
                                        unDraw &rarr;</a>
                                </div>
                            </div> -->

                    <!-- Approach -->
                    <!-- <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                                </div>
                                <div class="card-body">
                                    <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                                        CSS bloat and poor page performance. Custom CSS classes are used to create
                                        custom components and custom utility classes.</p>
                                    <p class="mb-0">Before working with this theme, you should become familiar with the
                                        Bootstrap framework, especially the utility classes.</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div> -->
                    <!-- /.container-fluid -->

                    <!-- </div> -->
                    <!-- End of Main Content -->

                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; Your Website 2021</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="logout.php" >Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="js/demo/chart-area-demo.js"></script>
            <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>