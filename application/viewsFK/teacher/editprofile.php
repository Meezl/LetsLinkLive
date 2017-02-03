<?php
foreach($userdetails as $row)
{
	$name = $row->name;
	$email = $row->email;
	$biography = $row->biography;
	$rand = $row->rand;
	$qualifications = $row->qualifications;
	$location = $row->location;
	$timezone = $row->timezone;
	$lastlogin = $row->lastlogin;
	$lastIp = $row->lastIp;
	
	if($location=='')
	{
		$location = "Not Detected";
	}
	if($timezone=='')
	{
		$timezone = "Not Detected";
	}
	
	if($biography=='')
	{
		$biography = "No Biography written";
	}
	
	if($qualifications=='')
	{
		$qualifications = "No qualifications added";
	}
}
?>

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Update Profile
            
          </h1>
          
        </section>



<section class="content">
<div class="row">
            <div class="col-xs-12">
              <div class="box">
                
                <div class="box-header">
                  <h3 class="box-title">Edit</h3>
                  <div class="box-tools">
                    <div class="input-group" style="width: 150px;">
                      
                     
                    </div>
                  </div>
                </div><!-- /.box-header -->
                
                <div class="box-body">
                	
                    <div class="row">
                        <form id="editForm" class="form-horizontal style-form" method="post">
                        	<input type="hidden" id="exists" name="exists" value="Exists" />
                    		<input type="hidden" id="emailCHECKER" name="emailCHECKER" value="" />
                            <input type="hidden" name="rand" id="rand" value="<?php echo $rand ?>" />
                            
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email: <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" id="email" name="email" onKeyUp="checkemail();" value="<?php echo $email ?>" class="form-control col-md-7 col-xs-12  ">
                                     
                                     <i style="color:#F00; font-style:normal"><span id="email_bad_status"></span></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name: <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="name" name="name" value="<?php echo $name ?>" class="form-control col-md-7 col-xs-12  ">
                                     
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="location">Location: <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="location" readonly="readonly" name="location" value="<?php echo $location ?>" class="form-control col-md-7 col-xs-12  ">
                                     
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="timezone">Timezone: <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="timezone" name="timezone" readonly="readonly" value="<?php echo $timezone ?>" class="form-control col-md-7 col-xs-12  ">
                                     
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="qualifications">Qualifications: <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea name="qualifications" rows="3" placeholder="Describe your qualifications" id="qualifications" class="form-control col-md-7 col-xs-12"><?php echo $qualifications ?></textarea>
                                     
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="biography">Biography: <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea name="biography" rows="5" id="biography" placeholder="Describe yourself" class="form-control col-md-7 col-xs-12"><?php echo $biography ?></textarea>
                                     
                                </div>
                            </div>
                            
                            
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-success">Update Profile!</button>
                                </div>
                            </div>
                        </form>
                    </div>
                      
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
        </section>

        </div>


<script type="text/javascript">
//CHECK email existence AND AUTOFILL
function checkemail()
{
   var email=document.getElementById( "email" ).value;
   if(email)
   {
	   
		$.ajax({
		   type: 'post',
		   url: '<?php echo base_url('Profile/checkemail/'.$rand) ?>',
		   data: {
		   email:email,
		   },
		   success: function (response) {
		   $('#emailCHECKER').val(response);//document.getElementById('txtFirstName').value = "your name";
		  	$('#email_bad_status').html(response);
			
			}
		  });

   }
   else
   {
	   $( '#emailCHECKER' ).val("");
	   $( '#email_bad_status' ).html("");
	   return false;
   }
}
</script>

			
<script type="text/javascript">
$(document).ready(function() {
    var validator = $("#editForm").bootstrapValidator({
		feedbackIcons: {
			valid: "glyphicon glyphicon-ok",
			invalid: "glyphicon glyphicon-remove",
			validating: "glyphicon glyphicon-refresh"
		},
		//create an object literal java script object notation (JSON)
		fields : {
			email : {
				validators: {
					notEmpty : {
						message : "Email is required"
					},
					email : {
						message: "Invalid email"
					}
				}
			},//END OF email	
			name : {
				message : "Full name is required",
				validators : {
					notEmpty : {
						message : "Full name is required"
					},
					stringLength : {
						min: 3,
						max: 60,
						message : "Name should be between 3-60 characters"
					}						
				}
			},//END OF name
			qualifications : {
				message : "Qualifications is required",
				validators : {
					notEmpty : {
						message : "Please describe your Qualifications"
					},
					stringLength : {
						min: 10,
						max: 300,
						message : "Qualifications should be between 10-300 characters"
					}						
				}
			},//END OF qualifications		
			biography : {
				message : "Biography is required",
				validators : {
					notEmpty : {
						message : "Biography is required"
					},
					stringLength : {
						min: 10,
						max: 300,
						message : "Biography should be between 10-300 characters"
					}						
				}
			},//END OF biography
			exists : {
				validators : {
					different : {
						field : "emailCHECKER",
						message : "Invalid"
					}						
				}
			},//END OF exists
			emailCHECKER : {
				validators : {
					different : {
						field : "exists",
						message : "Invalid"
					}						
				}
			}//END OF exists		
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
	    url: '<?php echo base_url(); ?>Profile/saveupdate/<?php echo $rand ?>',
	    type: 'post',
	    data: $('#editForm :input'),
	    dataType: 'html',		
	    success: function(html) {
			 bootbox.alert(html);
		   if(html == 'Profile Updated')
		   {
			   $('#editForm')[0].reset();
			  	location.reload();
			   
		   }
		   
	    }
    });
  });
});

</script>