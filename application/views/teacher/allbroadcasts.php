
<script type="text/javascript">


function reschedule(id)
{
$.ajax({
	    url: '<?php echo base_url(); ?>Broadcasts/reschedule/' + id,
	    type: 'post',
	    dataType: 'html',		
	    success: function(html) {
		   $('#edit-broadcast-content').html(html);
			   
	    }
    });
}


function launch(class_id, userId, userName, isTeacher, lessonName, courseName){

  bootbox.confirm("Are you sure you want to launch " + lessonName + "?", function(result) {

      if(result) {

      

    $.ajax({

    url: '<?php echo base_url(); ?>Broadcasts/lauchUrl/' + class_id +'/'+ userId +'/'+ userName +'/'+ isTeacher +'/'+ lessonName +'/'+ courseName,

    type: 'post',

    dataType: 'html',   

    success: function(html) {

        bootbox.alert(html);

        /*if(html == 'User Deleted Successfully')

        location.reload();*/

    }

  });

    

    }

    

  }); 

}









function rm(nm, id){

  bootbox.confirm("Are you sure you want to cancel " + nm + "?", function(result) {

      if(result) {

      

    $.ajax({

    url: '<?php echo base_url(); ?>Broadcasts/remove/' + id,

    type: 'post',

    dataType: 'html',   

    success: function(html) {

        bootbox.alert(html);

        if(html == 'Class removed Successfully')

        location.reload();

    }

  });

    

    }

    

  }); 

}

</script>



<div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <section class="content-header">

          <h1>

            All Broadcasts

            

          </h1>

          

        </section>







<section class="content">

<div class="row">

            <div class="col-xs-12">

              <div class="box">

                <div class="box-header">

                  <h3 class="box-title">All Broadcasts</h3>

                  <div class="box-tools">

                    <div class="input-group" style="width: 150px;">

                      



                      <!--<form name="search" method="post" action="">

                    <div class="input-group custom-search-form">

                      <input type="text" id="search" name="search" class="form-control input-sm pull-right" placeholder="Search...">

                      <span class="input-group-btn">

                        

                     </span>

                    </div>

                  </form>-->





                      

                     

                    </div>

                  </div>

                </div><!-- /.box-header -->

                <div class="box-body table-responsive no-padding">

                	<?php

					if($total==0)

					{

						echo "No broadcasts";

					}

					else

					{

						//echo $total." broadcasts found";

					?>

                    

                  <table class="table table-hover">

                    <tr>

                      <th>Class Id</th>

                      <th>Title</th>

                      <th>Date</th>

                      <th>Start Time</th>

                      <th>End Time</th>

                      

                      <th>Action</th>

                      

                    </tr>



               



                    

                    <?php  

                	/*foreach(braincerts as braincert)
                	{
                		$userId = $braincert->user_id;

            			
                	}*/
                	
                	$username = $this->session->userdata('username');
                	
            

						

						/*$description = $class->description;

						$status = $class->status;

                        $userId = $class->user_id;

                        $isTeacher = 1;*/

					

						

						

					?>

                

           
                
                
                
                
                
                
   
                
                <?php  
                
                foreach ($classes->result() as $class){?>
                
                <tr>
                    
                    <td><?php echo $class->class_id; ?></td>
                    <td><?php echo $class->title; ?></td>
                    <td><?php echo $class->classdate; ?></td>
                    <td><?php echo $class->starttime; ?></td>
                    <td><?php echo $class->endtime; ?></td>

                       <td>

                      <a href="javascript:void(0);" onclick="launch('<?php echo $class->class_id; ?>','<?php echo $class->user_id; ?>','<?php echo $username; ?>','<?php echo 1; ?>','<?php echo $class->title; ?>','<?php echo $class->title; ?>');">

                    <span class="btn btn-success"><span class="fa fa-check"></span>&nbsp;Launch</span></a>
		     
		     
		     
		     
                    <a href="javascript:void(0);" onclick="rm('<?php echo $class->title; ?>', '<?php echo $class->class_id; ?>');">

                    <span class="btn btn-danger"><span class="fa fa-times"></span>&nbsp;Cancel</span></a>
                    
                    
                    <span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#reschedule" onclick="reschedule('<?php echo $class->class_id; ?>')">
		   <span class="glyphicon glyphicon-pencil"></span>&nbsp;Reschedule</span>  

                    </td>

                  	
                                    
                    
                    
                </tr>
                    <?php } ?>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                

                  







                  </table>

                <?php

					}

				?>

                </div><!-- /.box-body -->

              </div><!-- /.box -->

            </div>

          </div>

        </section>

        </div>
        
        
        
        
        <div id="reschedule" class="modal fade">
			    <div class="modal-dialog">
			        <div class="modal-content">
			            <div class="modal-header" style="color:#0093af">
			                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			                <center>
			                	<h4 class="modal-title">Reschedule Class</h4>
			                </center>
			            </div>
			            <div class="modal-body" id="edit-broadcast-content">
			                
			                
			            </div>
			           
			        </div>
			    </div>
			</div>