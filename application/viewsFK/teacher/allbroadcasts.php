<script type="text/javascript">
  
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
  bootbox.confirm("Are you sure you want to remove " + nm + "?", function(result) {
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
						echo $total." broadcasts found";
					?>
                    
                  <table class="table table-hover">
                    <tr>
                      <th>B/Id</th>
                      <th>Title</th>
                      <th>Date</th>
                      <th>Start Time</th>
                      <th>End Time</th>
                      <th>Status</th>
                      <th>Action</th>
                      
                    </tr>

               

                    
                    <?php  
                
            foreach ($classes as $class){
						$id = $class->id;
						$title = $class->title;
						$date = $class->date;
						$start_time = $class->start_time;
						$end_time = $class->end_time;
						$description = $class->description;
						$status = $class->status;
            $userId = $class->user_id;
            $isTeacher = 1;
					
						
						
					?>
                
                <tr>
                    <td><?php echo $id; ?></td> 
                    <td><?php echo $title; ?></td>
                    <td><?php echo $date; ?></td>
                    <td><?php echo $start_time; ?></td>   
                    <td><?php echo $end_time; ?></td> 
                    <td><?php echo $status; ?></td>
                    <td>

                      <a href="javascript:void(0);" onclick="launch('<?php echo $id; ?>','<?php echo $userId; ?>','<?php echo $username; ?>','<?php echo $isTeacher; ?>','<?php echo $title; ?>','<?php echo $title; ?>');">
                    <span class="btn btn-success"><span class="fa fa-check"></span>&nbsp;Launch</span></a>

                    <a href="javascript:void(0);" onclick="rm('<?php echo $title; ?>', '<?php echo $id; ?>');">
                    <span class="btn btn-danger"><span class="fa fa-times"></span>&nbsp;Remove</span></a>
                    </td>
                  	<td>

                                     
                    
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

