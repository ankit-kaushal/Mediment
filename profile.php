<?php

//profile.php



include('class/Appointment.php');

$object = new Appointment;

$object->query = "
SELECT * FROM patient_table 
WHERE patient_id = '".$_SESSION["patient_id"]."'
";

$result = $object->get_result();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mediment - Patient Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="r/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="r/css/sb-admin-2.min.css" rel="stylesheet">
    




	    <link rel="stylesheet" type="text/css" href="vendor/parsley/parsley.css"/>

	    <link rel="stylesheet" type="text/css" href="vendor/datepicker/bootstrap-datepicker.css"/>

	    <!-- Custom styles for this page -->
    	<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	  
    <link rel="icon" href="assets/image/Facvicon.png" sizes="32x32" />

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Mediment</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Book Appointment</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="appointment.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>My Appointment</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                PROFILE
            </div>

            <!-- Nav Item - Pages Collapse Menu -->

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="profile.php">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Settings</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="logout.php">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Logout</span></a>
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
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                       


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['patient_name']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="r/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Patient Dashboard</h1>
                       
                    </div>

                    <!--Start-->
                            <div class="container-fluid">
                            
                            	<div class="row justify-content-md-center">
                            		<div class="col col-md-6">
                            			<br />
                            			<?php
                            			if(isset($_GET['action']) && $_GET['action'] == 'edit')
                            			{
                            			?>
                            			<div class="card">
                            				<div class="card-header">
                            					<div class="row">
                            						<div class="col-md-6">
                            							Edit Profile Details
                            						</div>
                            						<div class="col-md-6 text-right">
                            							<a href="profile.php" class="btn btn-secondary btn-sm">View</a>
                            						</div>
                            					</div>
                            				</div>
                            				<div class="card-body">
                            					<form method="post" id="edit_profile_form">
                            						<div class="form-group">
                            							<label>Patient Email Address<span class="text-danger">*</span></label>
                            							<input type="text" name="patient_email_address" id="patient_email_address" class="form-control" required autofocus data-parsley-type="email" data-parsley-trigger="keyup" readonly />
                            						</div>
                            						<div class="form-group">
                            							<label>Patient Password<span class="text-danger">*</span></label>
                            							<input type="password" name="patient_password" id="patient_password" class="form-control" required  data-parsley-trigger="keyup" />
                            						</div>
                            						<div class="row">
                            							<div class="col-md-6">
                            								<div class="form-group">
                            									<label>Patient First Name<span class="text-danger">*</span></label>
                            									<input type="text" name="patient_first_name" id="patient_first_name" class="form-control" required  data-parsley-trigger="keyup" />
                            								</div>
                            							</div>
                            							<div class="col-md-6">
                            								<div class="form-group">
                            									<label>Patient Last Name<span class="text-danger">*</span></label>
                            									<input type="text" name="patient_last_name" id="patient_last_name" class="form-control" required  data-parsley-trigger="keyup" />
                            								</div>
                            							</div>
                            						</div>
                            						<div class="row">
                            							<div class="col-md-6">
                            								<div class="form-group">
                            									<label>Patient Date of Birth<span class="text-danger">*</span></label>
                            									<input type="text" name="patient_date_of_birth" id="patient_date_of_birth" class="form-control" required  data-parsley-trigger="keyup" readonly />
                            								</div>
                            							</div>
                            							<div class="col-md-6">
                            								<div class="form-group">
                            									<label>Patient Gender<span class="text-danger">*</span></label>
                            									<select name="patient_gender" id="patient_gender" class="form-control">
                            										<option value="Male">Male</option>
                            										<option value="Female">Female</option>
                            										<option value="Other">Other</option>
                            									</select>
                            								</div>
                            							</div>
                            						</div>
                            						<div class="row">
                            							<div class="col-md-6">
                            								<div class="form-group">
                            									<label>Patient Contact No.<span class="text-danger">*</span></label>
                            									<input type="text" name="patient_phone_no" id="patient_phone_no" class="form-control" required  data-parsley-trigger="keyup" />
                            								</div>
                            							</div>
                            							<div class="col-md-6">
                            								<div class="form-group">
                            									<label>Patient Maritial Status<span class="text-danger">*</span></label>
                            									<select name="patient_maritial_status" id="patient_maritial_status" class="form-control">
                            										<option value="Single">Single</option>
                            										<option value="Married">Married</option>
                            										<option value="Seperated">Seperated</option>
                            										<option value="Divorced">Divorced</option>
                            										<option value="Widowed">Widowed</option>
                            									</select>
                            								</div>
                            							</div>
                            						</div>
                            						<div class="form-group">
                            							<label>Patient Complete Address<span class="text-danger">*</span></label>
                            							<textarea name="patient_address" id="patient_address" class="form-control" required data-parsley-trigger="keyup"></textarea>
                            						</div>
                            						<div class="form-group text-center">
                            							<input type="hidden" name="action" value="edit_profile" />
                            							<input type="submit" name="edit_profile_button" id="edit_profile_button" class="btn btn-primary" value="Edit" />
                            						</div>
                            					</form>
                            				</div>
                            			</div>
                            
                            			<br />
                            			<br />
                            			
                            
                            			<?php
                            			}
                            			else
                            			{
                            
                            				if(isset($_SESSION['success_message']))
                            				{
                            					echo $_SESSION['success_message'];
                            					unset($_SESSION['success_message']);
                            				}
                            			?>
                            
                            			<div class="card">
                            				<div class="card-header">
                            					<div class="row">
                            						<div class="col-md-6">
                            							Profile Details
                            						</div>
                            						<div class="col-md-6 text-right">
                            							<a href="profile.php?action=edit" class="btn btn-secondary btn-sm">Edit</a>
                            						</div>
                            					</div>
                            				</div>
                            				<div class="card-body">
                            					<table class="table table-striped">
                            						<?php
                            						foreach($result as $row)
                            						{
                            						?>
                            						<tr>
                            							<th class="text-right" width="40%">Patient Name</th>
                            							<td><?php echo $row["patient_first_name"] . ' ' . $row["patient_last_name"]; ?></td>
                            						</tr>
                            						<tr>
                            							<th class="text-right" width="40%">Email Address</th>
                            							<td><?php echo $row["patient_email_address"]; ?></td>
                            						</tr>
                            						<tr>
                            							<th class="text-right" width="40%">Password</th>
                            							<td><?php echo $row["patient_password"]; ?></td>
                            						</tr>
                            						<tr>
                            							<th class="text-right" width="40%">Address</th>
                            							<td><?php echo $row["patient_address"]; ?></td>
                            						</tr>
                            						<tr>
                            							<th class="text-right" width="40%">Contact No.</th>
                            							<td><?php echo $row["patient_phone_no"]; ?></td>
                            						</tr>
                            						<tr>
                            							<th class="text-right" width="40%">Date of Birth</th>
                            							<td><?php echo $row["patient_date_of_birth"]; ?></td>
                            						</tr>
                            						<tr>
                            							<th class="text-right" width="40%">Gender</th>
                            							<td><?php echo $row["patient_gender"]; ?></td>
                            						</tr>
                            						
                            						<tr>
                            							<th class="text-right" width="40%">Maritial Status</th>
                            							<td><?php echo $row["patient_maritial_status"]; ?></td>
                            						</tr>
                            						<?php
                            						}
                            						?>	
                            					</table>					
                            				</div>
                            			</div>
                            			<br />
                            			<br />
                            			<?php
                            			}
                            			?>
                            		</div>
                            	</div>
                            </div>
                        <!--End-->
                   

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Mediment</span>
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
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="r/vendor/jquery/jquery.min.js"></script>
    <script src="r/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="r/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="r/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="r/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="r/js/demo/chart-area-demo.js"></script>
    <script src="r/js/demo/chart-pie-demo.js"></script>

        

	    <script type="text/javascript" src="vendor/parsley/dist/parsley.min.js"></script>

	    <script type="text/javascript" src="vendor/datepicker/bootstrap-datepicker.js"></script>

	    <!-- Page level plugins -->
	    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
	    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

</body>

</html>

<script>

$(document).ready(function(){

	$('#patient_date_of_birth').datepicker({
        format: "yyyy-mm-dd",
        autoclose: true
    });

<?php
	foreach($result as $row)
	{

?>
$('#patient_email_address').val("<?php echo $row['patient_email_address']; ?>");
$('#patient_password').val("<?php echo $row['patient_password']; ?>");
$('#patient_first_name').val("<?php echo $row['patient_first_name']; ?>");
$('#patient_last_name').val("<?php echo $row['patient_last_name']; ?>");
$('#patient_date_of_birth').val("<?php echo $row['patient_date_of_birth']; ?>");
$('#patient_gender').val("<?php echo $row['patient_gender']; ?>");
$('#patient_phone_no').val("<?php echo $row['patient_phone_no']; ?>");
$('#patient_maritial_status').val("<?php echo $row['patient_maritial_status']; ?>");
$('#patient_address').val("<?php echo $row['patient_address']; ?>");

<?php

	}

?>

	$('#edit_profile_form').parsley();

	$('#edit_profile_form').on('submit', function(event){

		event.preventDefault();

		if($('#edit_profile_form').parsley().isValid())
		{
			$.ajax({
				url:"action.php",
				method:"POST",
				data:$(this).serialize(),
				beforeSend:function()
				{
					$('#edit_profile_button').attr('disabled', 'disabled');
					$('#edit_profile_button').val('wait...');
				},
				success:function(data)
				{
					window.location.href = "profile.php";
				}
			})
		}

	});

});

</script>
