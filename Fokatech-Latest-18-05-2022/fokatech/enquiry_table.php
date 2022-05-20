	<?php
    include 'config.php';
    session_start();

    if(isset($_POST['save_btn'])){

			  $client_id=$_SESSION['id'];
        $switchRoom = mysqli_real_escape_string($con,$_POST['id1']);
        $currentStatus = mysqli_real_escape_string($con,$_POST['OldStatus']);
        $updated_value = mysqli_real_escape_string($con,$_POST['NewStatus']);
        // if($currentStatus == "0"){
        //     $query = "update enquiry_form set status = '1' where id = '".$switchRoom."'";
        //     mysqli_query($con, $query);
        // }
        // else{
        //     $query = "update enquiry_form set status = '0' where id = '".$switchRoom."'";
        //     mysqli_query($con, $query);
        // }


				$comment=$_POST['comment1'];
				echo $comment;
				echo "update enquiry_form set status = '$updated_value' where id = '".$switchRoom."'";
        $query = "update enquiry_form set status = '$updated_value' where id = '".$switchRoom."'";
				mysqli_query($con,"INSERT INTO `status_comments_history`(`Enquiry_form_id`, `old_status`, `new_status`, `comment`, `commented_by`, `datetime`) VALUES ('$switchRoom','$currentStatus','$updated_value','$comment','$client_id',now())");
        mysqli_query($con, $query);

		header("Location: enquiry_table.php");
    }

    if(isset($_POST['comBut'])){
        $comments = mysqli_real_escape_string($con,$_POST['comments']);
        $id = mysqli_real_escape_string($con,$_POST['comBut']);
        $query = "update enquiry_form set comments = '$comments' where id='$id'";
        mysqli_query($con, $query);
		header("Location: enquiry_table.php");
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

    <title>Admin - Tables</title>
 <link href="css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
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
 
  <style media="screen">
  	*{
			font-family: Trebuchet MS;
		}
  </style>
	<script>

  function StausVal(a,b,c)
  {

   if(a==0)
    OldStatus="New";
	 if(b==0)
	  NewStatus="new"	;
		if(a==1)
		 OldStatus="open";
		if(b==1)
		 NewStatus="open"	;
		 if(a==2)
			OldStatus="Contacted by email";
		if(b==2)
		 NewStatus="Contacted by email"	;
		 if(a==3)
			OldStatus="Contacted by phone";
		if(b==3)
		 NewStatus="Contacted by phone"	;
		 if(a==4)
			OldStatus="Closed";
		if(b==4)
		 NewStatus="Closed"	;
		 if(a==5)
			OldStatus=" Feedback Received";
		if(b==5)
		 NewStatus=" Feedback Received"	;
		 if(a==6)
			OldStatus="Comments Updated";
		if(b==6)
		 NewStatus="Comments Updated"	;
		 if(a==7)
			OldStatus="Follo-Up";
		if(b==7)
		 NewStatus="Follo-Up"	;
		 if(a==8)
			OldStatus="Prospective";
		if(b==8)
		 NewStatus="Prospective"	;
		 if(a==9)
			OldStatus="Waiting for customer";
		if(b==9)
		 NewStatus="Waiting for customer"	;

    $("#OldStatus1").val(b);
		$("#NewStatus1").val(a);
		$("#OldStatus").html(NewStatus);
		$("#NewStatus").html(OldStatus);
		$("#id1").val(c);

    $("#save_click").click();



  }
	function sample(a)
	{
   // $(".common_sample").addClass('hide');
		$("#row"+a).toggle();
 $("#fa"+a).toggleClass('fa-plus fa-minus')
	}

  </script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center" href="admin.php">
                <!-- <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div> -->
                <!-- <div class="sidebar-brand-text mx-3">FOKA</div> -->
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

                    <div class="container-fluid" style="margin-left: 45%;">

                    </div>

                        <!-- Nav Item - User Information -->
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
                                    <i class="fas fa-times-circle"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                  <center>  <h1 class="h3 mb-2 text-gray-800" style="margin-top:-8px">Enquiry Form Manager</h1></center>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size:15px!important;">
                                    <thead>
                                        <tr style="color:#000080 !important">
                                            <th></th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>State</th>
                                            <th>City</th>
                                            <th>Tracker</th>
                                            <th>Products</th>
                                            <th>Status</th>
                                            <th>Update Status</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                            include 'config.php';
                                            $sql = "SELECT * FROM enquiry_form";
                                            $result = mysqli_query($con, $sql);
                                            if(mysqli_num_rows($result) > 0){
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    $id=$row['id'];
																									$data_querry=mysqli_query($con,"SELECT * FROM `status_comments_history` WHERE Enquiry_form_id=$id ");
																									$data=mysqli_fetch_assoc($data_querry);
                                                    echo '<tr>';
                                                        echo '<td><button class="btn btn-primary" onclick="sample('. $row['id'] .')"><i class="fa fa-plus" id="fa'.$row['id'].'"></i></button></td>';
                                                        echo '<td>'. $row['name'] .'</td>';
                                                        echo '<td>'. $row['email'] .'</td>';
                                                        echo '<td>'. $row['phone'] .'</td>';
                                                        echo '<td>'. $row['state'] .'</td>';
                                                        echo '<td>'. $row['city'] .'</td>';
                                                        echo '<td>'. $row['tracker'] .'</td>';
                                                        echo '<td>'. $row['products'] .'</td>';
                                                        if($row['status'] == '0')
                                                            { echo '<td>New</td>';}
                                                        else if($row['status'] == '1')
                                                            { echo '<td>Open</td>';}
                                                        else if($row['status'] == '2')
                                                            { echo '<td>Contacted by email</td>';}
                                                        else if($row['status'] == '3')
                                                            { echo '<td>Contacted by phone</td>';}
                                                        else if($row['status'] == '4')
                                                            { echo '<td>Closed</td>';}
                                                        else if($row['status'] == '5')
                                                            { echo '<td>Feedback Received</td>';}
                                                        else if($row['status'] == '6')
                                                            { echo '<td>Comments Updated</td>';}
                                                        else if($row['status'] == '8')
                                                            { echo '<td>Follo-Up</td>';}
                                                        else if($row['status'] == '8')
                                                            { echo '<td>Prospective</td>';}
                                                        else if($row['status'] == '9')
                                                            { echo '<td>Waiting for customer</td>';}
                                                        echo '<td>

                                        <select id="enquires" name="status_change" class="form-control" onChange="StausVal(this.value,'.$row['status'].','.$row['id'].')">
																			                            	<option value="" title="New">-Select status-</option>
                                                                    <option value="0" title="New">New</option>
                                                                    <option value="1" title="Open">Open</option>
                                                                    <option value="2" title="Contacted by email">Contacted by email</option>
                                                                    <option value="3" title="Contacted by phone">Contacted by phone</option>
                                                                    <option value="4" title="Closed">Closed</option>
                                                                    <option value="5" title="Feedback Received">Feedback Received</option>
                                                                    <option value="6" title="Comments Updated">Comments Updated</option>
                                                                    <option value="7" title="Follow-up">Follow-up</option>
                                                                    <option value="8" title="Prospective">Prospective</option>
                                                                    <option value="9" title="Waiting for customer">Waiting for customer</option>
                                                                </select>

                                                                <hr>

                                                                <input type = "hidden" id = "stt" name = "stt" value = "'.$row['status'].'">
                                                                <center>

								<button type="button" class="btn btn-primary hidden" id="save_click" data-toggle="modal" data-target="#statusModal">Save</button>
                                                                </center>
                                                            </form>
                                                        </td>';




$rowid="row".$row['id'];

                                                         echo '</td><tr class="common_sample" id="'.$rowid.'" style="display:none;"><td colspan="10"><table class="table table-bordered ">
																												 <tr style="color:#000080;font-size:17px"><td colspan="5" align="center" >Tracking History</td></tr>
																												 <tr style="color:#000080"><td>Oldstaus</td><td>Newstatus</td><td>Comment</td><td>Comment By</td><td>Comment On</td></tr>';
																												 $data_querry=mysqli_query($con,"SELECT * FROM `status_comments_history` WHERE Enquiry_form_id=$id order by datetime DESC ");
																												 while($data=mysqli_fetch_assoc($data_querry))
																												 {

																													 if($data['old_status']==0)
																														 $oldstatus="new";
																													elseif($data['old_status']==1)
																														 $oldstatus="open";
																													elseif($data['old_status']==2)
																																 $oldstatus="	Contacted by email";
																													elseif($data['old_status']==3)
																																	$oldstatus="Contacted by phone";
																													elseif($data['old_status']==4)
																																		 $oldstatus="	Closed";
																												 elseif($data['old_status']==5)
																																				$oldstatus="Feedback Received";
																												elseif($data['old_status']==6)
																													$oldstatus="Comments Updated";
																														elseif($data['old_status']==7)
																													$oldstatus="	Follo-Up";
																													elseif($data['old_status']==8)
																													$oldstatus="	Prospective";
																													elseif($data['old_status']==9)
																													$oldstatus="Waiting for customer";

																													if($data['new_status']==0)
																														 $newstatus="new";
																													elseif($data['new_status']==1)
																														 $newstatus="open";
																													elseif($data['new_status']==2)
																															 $newstatus="	Contacted by email";
																													elseif($data['new_status']==3)
																																	$newstatus="Contacted by phone";
																													elseif($data['new_status']==4)
																																		 $newstatus="	Closed";
																												 elseif($data['new_status']==5)
																																				$newstatus="Feedback Received";
																												elseif($data['new_status']==6)
																													$newstatus="Comments Updated";
																														elseif($data['new_status']==7)
																													$newstatus="	Follo-Up";
																													elseif($data['new_status']==8)
																													$newstatus="	Prospective";
																													elseif($data['new_status']==9)
																													$newstatus="Waiting for customer";


																													echo '<tr><td>'.$oldstatus.'</td><td>'.$newstatus.'</td><td>'.$data['comment'].'</td><td>'.$_SESSION['uname'].'</td><td>'.$data['datetime'].'</td></tr>';

																												}
																												 echo '</table>
																												 </td></tr>


    ';
                                                }
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
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


	 <div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header " style="text-align:center;">
                    <h5 class="modal-title" id="exampleModalLabel"  style="font-weight:bold;color:#000080;font-size:16px !important;">Update Status and comments</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body"><form  method="post" >
									<input type="hidden" name="id1" id="id1" >
									<input type="hidden" name="OldStatus" id="OldStatus1" >
									<input type="hidden" name="NewStatus" id="NewStatus1" >
							<h4 ><span style="color:#000080">Current Status : </span><span id="OldStatus"></span> &nbsp;&nbsp;<br><br><span style="color:#000080">New Status &nbsp;&nbsp;&nbsp;&nbsp; :</span> <span id="NewStatus"></span></h4>
							<h4><span style="color:#000080">Comments : (optional) </span></h4><br>
							<textarea cols="60" rows="5" name="comment1"></textarea>


				</div>
                <div class="modal-footer">
                    <center>
											<input type="submit"  class="btn btn-primary" name="save_btn" value="save">
											<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  </center>
											</form>
                </div>
            </div>
        </div>
    </div>






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
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
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
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
