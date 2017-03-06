<?php

foreach($userdetails as $row)

{

	$name = $row->name;

	$email = $row->email;

	$rand = $row->rand;
	

}

?>


<div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <section class="content-header">

          <h1>

            Update Profile Photo

            

          </h1>

          

        </section>







<section class="content">

<div class="row">

            <div class="col-xs-12">

              <div class="box">

                

                <div class="box-header">

                  <h3 class="box-title">Upload</h3>

                  <div class="box-tools">

                    <div class="input-group" style="width: 150px;">

                      

                     

                    </div>

                  </div>

                </div><!-- /.box-header -->

                

                <div class="box-body">

                	

                    <div class="row">

                        <form id="editForm" class="form-horizontal style-form" method="post" action="<?php echo base_url() ?>Photo/do_upload" enctype="multipart/form-data">
	
                        
                            <input type="hidden" name="rand" id="rand" value="<?php echo $rand ?>" />
                            <input type="hidden" name="email" id="email" value="<?php echo $email ?>" />

                            

                            <div class="form-group">

                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="userfile">Select Photo: <span class="required">*</span>

                                </label>

                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    
                                    <input type="file" name="userfile" id="userfile" class="form-control col-md-7 col-xs-12  " />

                                     
                                </div>

                            </div>

                            
                            <div class="form-group">

                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                                    <button type="submit" value="upload" class="btn btn-success">Upload Photo!</button>

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

$(document).ready(function() {

    var validator = $("#editForm").bootstrapValidator({

		feedbackIcons: {

			valid: "glyphicon glyphicon-ok",

			invalid: "glyphicon glyphicon-remove",

			validating: "glyphicon glyphicon-refresh"

		},

		//create an object literal java script object notation (JSON)

		fields : {

			userfile : {

				validators: {

					notEmpty : {

						message : "Select a photo"

					}

				}

			}//END OF photo	
			

		}

    /*})

  .on('success.form.bv', function(e) {

      // Prevent form submission

      e.preventDefault();

      // Get the form instance

      var $form = $(e.target);



      // Get the BootstrapValidator instance

      var bv = $form.data('bootstrapValidator');



      // Use Ajax to submit form data

 $.ajax({

	    url: '<?php //echo base_url(); ?>Photo/do_upload',
		
	    type: 'post',

	    data: $('#editForm :input'),
		

	    dataType: 'html',		

	    success: function(html) {

			 bootbox.alert(html);

		   if(html == 'Profile Photo Updated')

		   {

			   $('#editForm')[0].reset();

			  	location.reload();

			   

		   }

		   

	    }

    });*/

  });

});



</script>