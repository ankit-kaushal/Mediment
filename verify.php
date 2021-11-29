<?php

//verify.php

include('lheader.php');

include('class/Appointment.php');

$object = new Appointment;

if(isset($_GET["code"]))
{
	$object->query = "
	UPDATE patient_table 
	SET email_verify = 'Yes' 
	WHERE patient_verification_code = '".$_GET["code"]."'
	";

	$object->execute();

	$_SESSION['success_message'] = '<div class="alert alert-success">You Email has been verify, now you can login into system</div>';

	header('location:login.php');
}
?>

<div class="alert alert-success" role="alert">
  You Email has been verify, now you can login into system
</div>
<?php

include('mfooter.php');

?>

