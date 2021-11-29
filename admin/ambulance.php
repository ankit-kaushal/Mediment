<?php

//ambulance.php

include('../class/Appointment.php');

$object = new Appointment;

if(!$object->is_login())
{
    header("location:".$object->base_url."admin");
}

if($_SESSION['type'] != 'Admin')
{
    header("location:".$object->base_url."");
}
include('header.php');

?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Ambulance Management</h1>

                    <!-- DataTales Example -->
                    <span id="message"></span>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        	<div class="row">
                            	<div class="col">
                            		<h6 class="m-0 font-weight-bold text-primary">Ambulance</h6>
                            	</div>
                            	<div class="col" align="right">
                            		<button type="button" name="add_ambulance" id="add_ambulance" class="btn btn-success btn-circle btn-sm"><i class="fas fa-plus"></i></button>
                            	</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="ambulance_table" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Ambulance No.</th>
                                            <th>Ambulance Model</th>
                                            <th>Driver Name</th>
                                            <th>Driver Contact</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                <?php
                include('footer.php');
                ?>

<div id="ambulanceModal" class="modal fade">
  	<div class="modal-dialog">
    	<form method="post" id="ambulance_form">
      		<div class="modal-content">
        		<div class="modal-header">
          			<h4 class="modal-title" id="modal_title">Add Ambulance</h4>
          			<button type="button" class="close" data-dismiss="modal">&times;</button>
        		</div>
        		<div class="modal-body">
        			<span id="form_message"></span>
		          	<div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Vehicle Number <span class="text-danger">*</span></label>
                                <input type="text" name="ambulance_no" id="ambulance_no" class="form-control" data-parsley-trigger="keyup" />
                            </div>
                            <div class="col-md-6">
                                <label>Vehicle Model <span class="text-danger">*</span></label>
                                <input type="text" name="ambulance_name" id="ambulance_name" class="form-control" required  data-parsley-trigger="keyup" />
                            </div>
		          		</div>
		          	</div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Driver Name <span class="text-danger">*</span></label>
                                <input type="text" name="ambulance_driver" id="ambulance_driver" class="form-control" required data-parsley-trigger="keyup" />
                            </div>
                            <div class="col-md-6">
                                <label>Ambulance Contact <span class="text-danger">*</span></label>
                                <input type="text" name="ambulance_contact" id="ambulance_contact" class="form-control" required  data-parsley-trigger="keyup" />
                            </div>
                        </div>
                    </div>
                    
                    
        		</div>
        		<div class="modal-footer">
          			<input type="hidden" name="hidden_id" id="hidden_id" />
          			<input type="hidden" name="action" id="action" value="Add" />
          			<input type="submit" name="submit" id="submit_button" class="btn btn-success" value="Add" />
          			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        		</div>
      		</div>
    	</form>
  	</div>
</div>

<div id="viewModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal_title">View Abmulance Details</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body" id="ambulance_details">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>




<script>
$(document).ready(function(){

	var dataTable = $('#ambulance_table').DataTable({
		"processing" : true,
		"serverSide" : true,
		"order" : [],
		"ajax" : {
			url:"ambulance_action.php",
			type:"POST",
			data:{action:'fetch'}
		},
		"columnDefs":[
			{
				"targets":[0, 1, 2, 3, 4],
				"orderable":false,
			},
		],
	});


	$('#add_ambulance').click(function(){
		
		$('#ambulance_form')[0].reset();

		$('#ambulance_form').parsley().reset();

    	$('#modal_title').text('Add Ambulance');

    	$('#action').val('Add');

    	$('#submit_button').val('Add');

    	$('#ambulanceModal').modal('show');

    	$('#form_message').html('');

	});

	$('#ambulance_form').parsley();

	$('#ambulance_form').on('submit', function(event){
		event.preventDefault();
		if($('#ambulance_form').parsley().isValid())
		{		
			$.ajax({
				url:"ambulance_action.php",
				method:"POST",
				data: new FormData(this),
				dataType:'json',
                contentType: false,
                cache: false,
                processData:false,
				beforeSend:function()
				{
					$('#submit_button').attr('disabled', 'disabled');
					$('#submit_button').val('wait...');
				},
				success:function(data)
				{
					$('#submit_button').attr('disabled', false);
					if(data.error != '')
					{
						$('#form_message').html(data.error);
						$('#submit_button').val('Add');
					}
					else
					{
						$('#ambulanceModal').modal('hide');
						$('#message').html(data.success);
						dataTable.ajax.reload();

						setTimeout(function(){

				            $('#message').html('');

				        }, 5000);
					}
				}
			})
		}
	});

	$(document).on('click', '.edit_button', function(){

		var ambulance_id = $(this).data('id');

		$('#ambulance_form').parsley().reset();

		$('#form_message').html('');

		$.ajax({

	      	url:"ambulance_action.php",

	      	method:"POST",

	      	data:{ambulance_id:ambulance_id, action:'fetch_single'},

	      	dataType:'JSON',

	      	success:function(data)
	      	{

	        	$('#ambulance_no').val(data.ambulance_no);

                $('#ambulance_name').val(data.ambulance_name);
                $('#ambulance_driver').val(data.ambulance_driver);
                $('#ambulance_contact').val(data.ambulance_contact);

	        	$('#modal_title').text('Edit Ambulance');

	        	$('#action').val('Edit');

	        	$('#submit_button').val('Edit');

	        	$('#ambulanceModal').modal('show');

	        	$('#hidden_id').val(ambulance_id);

	      	}

	    })

	});

	$(document).on('click', '.status_button', function(){
		var id = $(this).data('id');
    	var status = $(this).data('status');
		var next_status = 'Active';
		if(status == 'Active')
		{
			next_status = 'Inactive';
		}
		if(confirm("Are you sure you want to "+next_status+" it?"))
    	{

      		$.ajax({

        		url:"ambulance_action.php",

        		method:"POST",

        		data:{id:id, action:'change_status', status:status, next_status:next_status},

        		success:function(data)
        		{

          			$('#message').html(data);

          			dataTable.ajax.reload();

          			setTimeout(function(){

            			$('#message').html('');

          			}, 5000);

        		}

      		})

    	}
	});

    $(document).on('click', '.view_button', function(){
        var ambulance_id = $(this).data('id');

        $.ajax({

            url:"ambulance_action.php",

            method:"POST",

            data:{ambulance_id:ambulance_id, action:'fetch_single'},

            dataType:'JSON',

            success:function(data)
            {
                var html = '<div class="table-responsive">';
                html += '<table class="table">';

                html += '<tr><th width="40%" class="text-right">Ambulance No</th><td width="60%">'+data.ambulance_no+'</td></tr>';

                html += '<tr><th width="40%" class="text-right">Ambulance Name</th><td width="60%">'+data.ambulance_name+'</td></tr>';

                html += '<tr><th width="40%" class="text-right">Ambulance Driver</th><td width="60%">'+data.ambulance_driver+'</td></tr>';

                html += '<tr><th width="40%" class="text-right">Ambulance Contact</th><td width="60%">'+data.ambulance_contact+'</td></tr>';


                html += '</table></div>';

                $('#viewModal').modal('show');

                $('#ambulance_details').html(html);

            }

        })
    });

	$(document).on('click', '.delete_button', function(){

    	var id = $(this).data('id');

    	if(confirm("Are you sure you want to remove it?"))
    	{

      		$.ajax({

        		url:"ambulance_action.php",

        		method:"POST",

        		data:{id:id, action:'delete'},

        		success:function(data)
        		{

          			$('#message').html(data);

          			dataTable.ajax.reload();

          			setTimeout(function(){

            			$('#message').html('');

          			}, 5000);

        		}

      		})

    	}

  	});



});
</script>