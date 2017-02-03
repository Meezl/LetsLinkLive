

			
<script type="text/javascript">
$(document).ready(function() {
    $('#editForm').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            date: {
                validators: {
                    notEmpty: {
                        message: 'Date is required and cannot be empty'
                    }
                }
            },

            starttime: {
                validators: {
                    notEmpty: {
                        message: 'Start Time is required and cannot be empty'
                    }
                }
            },

            endtime: {
                validators: {
                    notEmpty: {
                        message: 'End Time is required and cannot be empty'
                    }
                }
            }

        }
    })
  .on('success.form.bv', function(e) {
      // Prevent form submission
      e.preventDefault();
      // Get the form instance
      var $form = $(e.target);

      // Get the BootstrapValidator instance
      var bv = $form.data('bootstrapValidator');

      // Use Ajax to submit form data
 $.ajax({
	    url: '<?php echo base_url(); ?>Broadcasts/reschedule',
	    type: 'post',
	    data: $('#editForm :input'),
	    dataType: 'html',		
	    success: function(html) {
	        bootbox.alert(html);
		   if(html == 'Class Re-Scheduled Successfully')
		   {
			   $('#editForm')[0].reset();		   
			  
		   }
		   
		   
		   $('#reschedule').modal('hide');
			  location.reload();
	    }
    });
  });
});

</script>					<form id="editForm" class="form-horizontal style-form" method="post">
							<?php
								$class_detail = $class_details->result();
								$class_details= $class_detail[0];
							?>
		                          <div class="form-group">
		                              <label class="col-sm-4 control-label">Title</label>
		                              <div class="col-sm-8">
		                                  <input type="hidden" name="class_id" value="<?php echo $class_details->class_id; ?>" class="form-control">
		                                  <input type="hidden" name="timezone" value="<?php echo $class_details->timezone; ?>" class="form-control">
		                                  <input type="text" name="title" readonly value="<?php echo $class_details->title; ?>" class="form-control">

		                              </div>
		                          </div>

		                          	<div class="form-group">
										<label class="col-sm-4 control-label">Date</label>
										<div class="col-sm-8">
		                                  <input type="text" name="date" value="<?php echo $class_details->classdate; ?>" class="form-control">

		                              </div>
									</div>
									
									

									<div class="form-group">
										<label class="col-sm-4 control-label">Start Time </label>
										<div class="col-sm-8">		                                  
		                                  <input type="text" name="starttime" value="<?php echo $class_details->starttime; ?>" class="form-control">

		                              </div>
									</div>

									<div class="form-group">
										<label class="col-sm-4 control-label">End Time </label>
										<div class="col-sm-8">		                                 
		                                  <input type="text" name="endtime" value="<?php echo $class_details->endtime; ?>" class="form-control">

		                              </div>
									</div>

									 <div class="modal-footer">
					                <center>
						                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						                <button type="submit" class="btn btn-primary">Reschedule</button>
					                </center>
					            	</div>
		                          
		                    </form>