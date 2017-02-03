<script type="text/javascript">

  

function launch(class_id, userId, userName, isTeacher, lessonName, courseName){

  bootbox.confirm("Are you sure you want to launch " + lessonName + "?", function(result) {

      if(result) {

      

    $.ajax({

    url: '<?php echo base_url(); ?>Student/lauchUrl/' + class_id +'/'+ userId +'/'+ userName +'/'+ isTeacher +'/'+ lessonName +'/'+ courseName,

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





function book(class_id, title, date, start_time, end_time, status){

  bootbox.confirm("Are you sure you want to book " + title + "?", function(result) {

      if(result) {

      

    $.ajax({

    url: '<?php echo base_url(); ?>Student/book/' + class_id +'/'+ title +'/'+ date +'/'+ start_time +'/'+ end_time +'/'+ status,

    type: 'post',

    dataType: 'html',   

    success: function(html) {

        bootbox.alert(html);

        if(html == 'Lesson Booked Successfully. An email has been sent to you.')

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

            Search Broadcasts

            

          </h1>

          

        </section>







<section class="content">

<div class="row">

            <div class="col-xs-12">

              <div class="box">

                <div class="box-header">

                  <h3 class="box-title">Search Broadcasts</h3>

                  <div class="box-tools">

                    <div class="input-group" style="width: 150px;">

                      



                    <form name="search" method="post" action="">

                    <div class="input-group custom-search-form">

                      <input type="text" id="search" name="search" class="form-control input-sm pull-right" placeholder="Search by Class ID...">

                      <span class="input-group-btn">

                        

                     </span>

                    </div>

                  </form>





                      

                     

                    </div>

                  </div>

                </div><!-- /.box-header -->

                <div class="box-body table-responsive no-padding">

                   

                    

                  <table class="table table-hover">

                <?php 

                  if (isset($class_id)) 

                  {  $isTeacher =0;  ?>



                    <tr>

                      <th>Class Id</th>

                      <th>Title</th>

                      <th>Date</th>

                      <th>Start Time</th>

                      <th>End Time</th>

                      <th>Status</th>

                      <th>Action</th>

                      

                    </tr>



               



              



                    <tr>

                        <td><?php echo $class_id; ?></td> 

                        <td><?php echo $title; ?></td>

                        <td><?php echo $date; ?></td>

                        <td><?php echo $start_time; ?></td>   

                        <td><?php echo $end_time; ?></td> 

                        <td><?php echo $status; ?></td>

                        <td>



                          <a href="javascript:void(0);" onclick="launch('<?php echo $class_id; ?>','<?php echo $user_id; ?>','<?php echo $name; ?>','<?php echo $isTeacher; ?>','<?php echo $title; ?>','<?php echo $title; ?>');">

                        <span class="btn btn-success"><span class="fa fa-check"></span>&nbsp;Launch</span></a>

                        <?php 

					if($status=="Upcoming")

					{

					?>

                        <a href="javascript:void(0);" onclick="book('<?php echo $class_id; ?>','<?php echo $title; ?>','<?php echo $date; ?>','<?php echo $start_time; ?>','<?php echo $end_time; ?>','<?php echo $status; ?>');">

                        <span class="btn btn-success"><span class="fa fa-check"></span>&nbsp;Book</span></a>

					<?php

					}

					?>

                       

                        </td>

                        <td>



                                         

                        

                    </tr>





                <?php                    

                  }

               ?>     

                    

                

                

                    







                  </table>

                

                </div><!-- /.box-body -->

              </div><!-- /.box -->

            </div>

          </div>

        </section>



        </div>



