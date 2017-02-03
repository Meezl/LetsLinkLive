<div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <section class="content-header">

          <h1>

            My Students

            

          </h1>

          

        </section>







<section class="content">

<div class="row">

            <div class="col-xs-12">

                          
              
              
              
              <div class="box">

                <div class="box-header">

                  <h3 class="box-title">For All Broadcasts</h3>

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

					if($countstudentsbookedOthers==0)

					{

						echo "No Students";

					}

					else

					{

						echo $countstudentsbookedOthers." students";

					?>

                    

                  <table class="table table-hover">

                    <tr>

                      <!--<th>Status</th>-->

                      <th>B/Id</th>

                      <th>Title</th>

                      <th>Date/Time</th>

                     

                      <th>Booked By</th>

                      
                      

                    </tr>



               



                    

                    <?php  

                

            foreach ($studentsbookedOthers as $class){

						$id = $class->id;

						$title = $class->title;
						
						$class_id = $class->class_id;

						$date = $class->date;

						$start_time = $class->start_time;

						$end_time = $class->end_time;

						$bookedBy = $class->bookedBy;

						$status = $class->status;

					?>

                

                <tr>

                    
					
                    <td><?php echo $class_id; ?></td> 
                    
                    <td><?php echo $title; ?></td>

                    <td><?php echo $date; ?>/<?php echo $start_time; ?> to <?php echo $end_time; ?></td>

                    <td><?php echo $bookedBy; ?></td>

                    

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



