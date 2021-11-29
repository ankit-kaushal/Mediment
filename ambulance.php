<?php

//index.php

include('class/Appointment.php');

$object = new Appointment;

if(isset($_SESSION['patient_id']))
{
	header('location:dashboard.php');
}

$object->query = "
SELECT * FROM ambulance_table 
WHERE ambulance_status = 'Active' 
";

$result = $object->get_result();

include('mheader.php');

?>




            <!-- Main Content -->
            	<div class="card">
		      		<form method="post" action="result.php">
			      		<div class="card-header"><h3><b>Available Ambulance</b></h3></div>
			      		<div class="card-body">
		      				<div class="table-responsive">
		      					<table class="table table-striped table-bordered">
		      						<tr>
		      							<th>Vehicle No.</th>
		      							<th>Vehicle Name</th>
		      							<th>Driver Name</th>
		      							<th>Contact</th>
		      						</tr>
		      						<?php
		      						foreach($result as $row)
		      						{
		      							echo '
		      							<tr>
		      								<td>'.$row["ambulance_no"].'</td>
		      								<td>'.$row["ambulance_name"].'</td>
		      								<td>'.$row["ambulance_driver"].'</td>
		      								<td>'.$row["ambulance_contact"].'</td>
		      							</tr>
		      							';
		      						}
		      						?>
		      					</table>
		      				</div>
		      			</div>
		      		</form>
		      	</div>
            
            
            
            
            
            <!--#main-content-->

<?php

include('mfooter.php');

?>

<script>

$(document).ready(function(){
	$(document).on('click', '.get_appointment', function(){
		var action = 'check_login';
		var doctor_schedule_id = $(this).data('id');
		$.ajax({
			url:"action.php",
			method:"POST",
			data:{action:action, doctor_schedule_id:doctor_schedule_id},
			success:function(data)
			{
				window.location.href=data;
			}
		})
	});
});

</script>