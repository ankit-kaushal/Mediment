<?php

//ambulance_action.php

include('../class/Appointment.php');

$object = new Appointment;

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'fetch')
	{
		$order_column = array('ambulance_no', 'ambulance_name');

		$output = array();

		$main_query = "
		SELECT * FROM ambulance_table ";

		$search_query = '';

		if(isset($_POST["search"]["value"]))
		{
			$search_query .= 'WHERE ambulance_no LIKE "%'.$_POST["search"]["value"].'%" ';
			$search_query .= 'OR ambulance_name LIKE "%'.$_POST["search"]["value"].'%" ';
			$search_query .= 'OR ambulance_driver LIKE "%'.$_POST["search"]["value"].'%" ';
			$search_query .= 'OR ambulance_contact LIKE "%'.$_POST["search"]["value"].'%" ';
			$search_query .= 'OR ambulance_status LIKE "%'.$_POST["search"]["value"].'%" ';
		}

		if(isset($_POST["order"]))
		{
			$order_query = 'ORDER BY '.$order_column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
		}
		else
		{
			$order_query = 'ORDER BY ambulance_no DESC ';
		}

		$limit_query = '';

		if($_POST["length"] != -1)
		{
			$limit_query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
		}

		$object->query = $main_query . $search_query . $order_query;

		$object->execute();

		$filtered_rows = $object->row_count();

		$object->query .= $limit_query;

		$result = $object->get_result();

		$object->query = $main_query;

		$object->execute();

		$total_rows = $object->row_count();

		$data = array();

		foreach($result as $row)
		{
			$sub_array = array();
			$sub_array[] = $row["ambulance_no"];
			$sub_array[] = $row["ambulance_name"];
			$sub_array[] = $row["ambulance_driver"];
			$sub_array[] = $row["ambulance_contact"];
			$status = '';
			if($row["ambulance_status"] == 'Active')
			{
				$status = '<button type="button" name="status_button" class="btn btn-primary btn-sm status_button" data-id="'.$row["ambulance_no"].'" data-status="'.$row["ambulance_status"].'">Active</button>';
			}
			else
			{
				$status = '<button type="button" name="status_button" class="btn btn-danger btn-sm status_button" data-id="'.$row["ambulance_no"].'" data-status="'.$row["ambulance_status"].'">Inactive</button>';
			}
			$sub_array[] = $status;
			$sub_array[] = '
			<div align="center">
			<button type="button" name="view_button" class="btn btn-info btn-circle btn-sm view_button" data-id="'.$row["ambulance_no"].'"><i class="fas fa-eye"></i></button>
			<button type="button" name="edit_button" class="btn btn-warning btn-circle btn-sm edit_button" data-id="'.$row["ambulance_no"].'"><i class="fas fa-edit"></i></button>
			<button type="button" name="delete_button" class="btn btn-danger btn-circle btn-sm delete_button" data-id="'.$row["ambulance_no"].'"><i class="fas fa-times"></i></button>
			</div>
			';
			$data[] = $sub_array;
		}

		$output = array(
			"draw"    			=> 	intval($_POST["draw"]),
			"recordsTotal"  	=>  $total_rows,
			"recordsFiltered" 	=> 	$filtered_rows,
			"data"    			=> 	$data
		);
			
		echo json_encode($output);

	}

	if($_POST["action"] == 'Add')
	{
		$error = '';

		$success = '';

		$data = array(
			':ambulance_no'	=>	$_POST["ambulance_no"]
		);

		$object->query = "
		SELECT * FROM ambulance_table 
		WHERE ambulance_no = :ambulance_no
		";

		$object->execute($data);

		if($object->row_count() > 0)
		{
			$error = '<div class="alert alert-danger">Ambulance Already Exists</div>';
		}
		else
		{
			if($error == '')
			{
				$data = array(
					':ambulance_no'		        	=>	$object->clean_input($_POST["ambulance_no"]),
					':ambulance_name'				=>	$object->clean_input($_POST["ambulance_name"]),
					':ambulance_driver'				=>	$object->clean_input($_POST["ambulance_driver"]),
					':ambulance_contact'			=>	$object->clean_input($_POST["ambulance_contact"]),
					':ambulance_status'				=>	'Active'
				);

				$object->query = "
				INSERT INTO ambulance_table 
				(ambulance_no, ambulance_name, ambulance_driver, ambulance_contact, ambulance_status) 
				VALUES (:ambulance_no, :ambulance_name, :ambulance_driver, :ambulance_contact, :ambulance_status)
				";

				$object->execute($data);

				$success = '<div class="alert alert-success">Ambulance Added</div>';
			}
		}

		$output = array(
			'error'		=>	$error,
			'success'	=>	$success
		);

		echo json_encode($output);

	}

	if($_POST["action"] == 'fetch_single')
	{
		$object->query = "
		SELECT * FROM ambulance_table 
		WHERE ambulance_no = '".$_POST["ambulance_id"]."'
		";

		$result = $object->get_result();

		$data = array();

		foreach($result as $row)
		{
			$data['ambulance_no'] = $row['ambulance_no'];
			$data['ambulance_name'] = $row['ambulance_name'];
			$data['ambulance_driver'] = $row['ambulance_driver'];
			$data['ambulance_contact'] = $row['ambulance_contact'];
		}

		echo json_encode($data);
	}

	if($_POST["action"] == 'Edit')
	{
		$error = '';

		$success = '';

		$data = array(
			':ambulance_no'	=>	$_POST["ambulance_no"],
			':ambulance_no'			=>	$_POST['hidden_id']
		);

		$object->query = "
		SELECT * FROM ambulance_table 
		WHERE ambulance_no = :ambulance_no
		AND ambulance_id != :ambulance_id
		";

		$object->execute($data);

		if($object->row_count() > 0)
		{
			$error = '<div class="alert alert-danger">Ambulance Already Exists</div>';
		}
		else
		{

			if($error == '')
			{
				$data = array(
				    ':ambulance_no'		        	=>	$object->clean_input($_POST["ambulance_no"]),
					':ambulance_name'				=>	$object->clean_input($_POST["ambulance_name"]),
					':ambulance_driver'				=>	$object->clean_input($_POST["ambulance_driver"]),
					':ambulance_contact'			=>	$object->clean_input($_POST["ambulance_contact"])
				);

				$object->query = "
				UPDATE ambulance_table  
				SET ambulance_no = :ambulance_no, 
				ambulance_name = :ambulance_name, 
				ambulance_driver = :ambulance_driver, 
				ambulance_contact = :ambulance_contact
				WHERE ambulance_no = '".$_POST['hidden_id']."'
				";

				$object->execute($data);

				$success = '<div class="alert alert-success">Ambulance Data Updated</div>';
			}			
		}

		$output = array(
			'error'		=>	$error,
			'success'	=>	$success
		);

		echo json_encode($output);

	}

	if($_POST["action"] == 'change_status')
	{
		$data = array(
			':ambulance_status'		=>	$_POST['next_status']
		);

		$object->query = "
		UPDATE ambulance_table 
		SET ambulance_status = :ambulance_status 
		WHERE ambulance_no = '".$_POST["id"]."'
		";

		$object->execute($data);

		echo '<div class="alert alert-success">Class Status change to '.$_POST['next_status'].'</div>';
	}

	if($_POST["action"] == 'delete')
	{
		$object->query = "
		DELETE FROM ambulance_table 
		WHERE ambulance_no = '".$_POST["id"]."'
		";

		$object->execute();

		echo '<div class="alert alert-success">Ambulance Deleted</div>';
	}
}

?>