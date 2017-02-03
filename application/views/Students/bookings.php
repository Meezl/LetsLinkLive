
<div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <section class="content-header">

          <h1>

            My Bookings

            

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

                    if($countbookings==0)

                    {

                        echo "No bookings";

                    }

                    else

                    {

                        echo $countbookings." bookings found";

                    ?>

                    

                  <table class="table table-hover">

                    <tr>

                      <th>Class Id</th>

                      <th>Title</th>

                      <th>Date</th>

                      <th>Start Time</th>

                      <th>End Time</th>

                     
                      

                    </tr>



               



                    

                    <?php  

                

            foreach ($bookings as $row){

                        $id = $row->id;

                        $title = $row->title;

                        $date = $row->date;

                        $start_time = $row->start_time;

                        $end_time = $row->end_time;

                        $status = $row->status;

            			$class_id = $row->class_id;

            

                        

                    ?>

                

                <tr>

                    <td><?php echo $class_id; ?></td> 

                    <td><?php echo $title; ?></td>

                    <td><?php echo $date; ?></td>

                    <td><?php echo $start_time; ?></td>   

                    <td><?php echo $end_time; ?></td> 

                    

                                   

                    

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



