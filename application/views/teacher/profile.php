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

            My Profile

            

          </h1>

          

        </section>







<section class="content">

<div class="row">

            <div class="col-xs-12">

              <div class="box">

                

                <div class="box-header">

                  <h3 class="box-title">Profile</h3>

                  <div class="box-tools">

                    <div class="input-group" style="width: 150px;">

                      



						

                      

                     

                    </div>

                  </div>

                </div><!-- /.box-header -->

                

                <div class="box-body">

                	

                    <div class="row" style="line-height:200%">

                        <div class="col-md-3 col-sm-3">

                            Email:

                        </div>

                        <div class="col-md-8 col-sm-8">

                            <?php echo $email ?>

                        </div>

                        <br><br>

                        <div class="col-md-3 col-sm-3">

                            Name:

                        </div>

                        <div class="col-md-8 col-sm-8">

                            <?php echo $name ?>

                        </div>

                        <br><br>

                        

                        <div class="col-md-3 col-sm-3">

                            Location:

                        </div>

                        <div class="col-md-8 col-sm-8">

                            <?php echo $location ?>

                        </div>

                        <br><br>

                        

                        <div class="col-md-3 col-sm-3">

                            Timezone:

                        </div>

                        <div class="col-md-8 col-sm-8">

                            <?php echo $timezone ?>

                        </div>

                        <br><br>

                       

                        <div class="col-md-3 col-sm-3">

                            Last Login:

                        </div>

                        <div class="col-md-8 col-sm-8">

                            <?php echo $lastlogin ?>

                        </div>

                        <br><br>

                        <div class="col-md-3 col-sm-3">

                            Last Login IP:

                        </div>

                        <div class="col-md-8 col-sm-8">

                            <?php echo $lastIp ?>

                        </div>

                        <br><br>

                        <div class="col-md-3 col-sm-3">

                            Qualifications:

                        </div>

                        <div class="col-md-8 col-sm-8">

                            <?php echo $qualifications ?>

                        </div>

                        <br><br>

                        

                        <div class="col-md-3 col-sm-3">

                            Biography:

                        </div>

                        <div class="col-md-8 col-sm-8">

                            <?php echo $biography ?>

                        </div>

                        <br><br>

                        

                    </div>

                      

                </div><!-- /.box-body -->

              </div><!-- /.box -->

            </div>

          </div>

        </section>



        </div>