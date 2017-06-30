<?php

foreach($userdetails as $row)

{

	$name = $row->name;

	$email = $row->email;

	$biography = $row->biography;

	$rand = $row->rand;
	
	$photo = $row->photo;

	$qualifications = $row->name;

}

?>



<!DOCTYPE html>

<html>

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Lets Link Live | Teacher</title>

    <!-- Tell the browser to be responsive to screen width -->

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.5 -->

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/insession/bootstrap/css/bootstrap.min.css">

    <!-- Font Awesome -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Ionicons -->

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- jvectormap -->

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/insession/plugins/jvectormap/jquery-jvectormap-1.2.2.css">

    <!-- Theme style -->

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/insession/dist/css/AdminLTE.min.css">

    <!-- AdminLTE Skins. Choose a skin from the css/skins

         folder instead of downloading all of them to reduce the load. -->

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/insession/dist/css/skins/_all-skins.min.css">

    

    <!--datetime picker-->

    

 	<link href="<?php echo base_url(); ?>assets/insession/datetimepicker/bootstrap-datetimepicker.css" rel="stylesheet">



    <link rel="icon" href="<?php echo base_url(); ?>assets/img/LLL_logo.png" >



    <!-- jQuery 2.1.4 -->

    <script src="<?php echo base_url(); ?>assets/insession/plugins/jQuery/jQuery-2.1.4.min.js"></script>

    <!-- Bootstrap 3.3.5 -->

    <script src="<?php echo base_url(); ?>assets/insession/bootstrap/js/bootstrap.min.js"></script>



    <script src="<?php echo base_url(); ?>assets/insession/bootstrap/js/bootstrapValidator.js"></script>

    <script src="<?php echo base_url(); ?>assets/insession/bootstrap/js/bootstrapValidator.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/insession/bootstrap/js/bootbox.min.js"></script>





    <!-- FastClick -->

    <script src="<?php echo base_url(); ?>assets/insession/plugins/fastclick/fastclick.min.js"></script>

    <!-- AdminLTE App -->

    <script src="<?php echo base_url(); ?>assets/insession/dist/js/app.min.js"></script>

    <!-- Sparkline -->

    <script src="<?php echo base_url(); ?>assets/insession/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- jvectormap -->

    <script src="<?php echo base_url(); ?>assets/insession/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/insession/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- SlimScroll 1.3.0 -->

    <script src="<?php echo base_url(); ?>assets/insession/plugins/slimScroll/jquery.slimscroll.min.js"></script>

    <!-- ChartJS 1.0.1 -->

    <script src="<?php echo base_url(); ?>assets/insession/plugins/chartjs/Chart.min.js"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->

    <!--<script src="<?php echo base_url(); ?>assets/insession/dist/js/pages/dashboard2.js"></script>-->

    <!-- AdminLTE for demo purposes -->

    <script src="<?php echo base_url(); ?>assets/insession/dist/js/demo.js"></script>



	<!--date picke css and js-->

    <link href="<?php echo base_url('assets/css/datepicker3.min.css'); ?>" rel="stylesheet">


     <script src="<?php echo base_url('assets/js/bootstrap-datepicker.min.js'); ?>"></script>

     

     <link href="<?php echo base_url('assets/css/bootstrap-timepicker.min.css'); ?>" rel="stylesheet">

     <script src="<?php echo base_url('assets/js/bootstrap-timepicker.min.js'); ?>"></script>


    <script type="text/javascript">







$(document).ready(function() {



  

    $('#changePassForm').bootstrapValidator({

        message: 'This value is not valid',

        feedbackIcons: {

            valid: 'glyphicon glyphicon-ok',

            invalid: 'glyphicon glyphicon-remove',

            validating: 'glyphicon glyphicon-refresh'

        },

        fields: {

            oldpass: {

                validators: {

                    notEmpty: {

                        message: "You're required to fill in the Old Password!"

                    }

                }

            },



            newpass: {

                validators: {

                    notEmpty: {

                        message: "You're required to fill in a New Password!"

                    }

                }

            },



            confpass: {

                validators: {

                    notEmpty: {

                        message: "You're required to fill in a Confirmation Password!"

                    },



                    identical: {

                      field: 'newpass',

                      message: "New Password and Confirm Password must match!"

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

      url: '<?php echo base_url(); ?>Teacher/updatepassword/<?php echo $rand ?>',

      type: 'post',

      data: $('#changePassForm :input'),

      dataType: 'html',

      success: function(html) {

        bootbox.alert(html);

       if(html == 'Password successfully Updated')

      {

         $('#changePassForm')[0].reset();

         $('#changePass').modal('hide');

         location.reload();

      }



      if(html == 'ERROR: Password NOT Updated')

      {

         $('#changePassForm')[0].reset();

         $('#changePass').modal('hide');

         location.reload();

      }

      



      }

    });

  });

});



function changephoto(){
	window.location.href="<?php echo base_url()  ?>Photo";
}

</script>  





<!--REPLACED #357ca5 with #7ca729-->


      <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
  </head>

  <body class="hold-transition skin-blue sidebar-mini">

    <div class="wrapper">



      <header class="main-header">



        <!-- Logo -->

        <a style="background-color:#73962e" href="<?php echo base_url(); ?>Welcome" class="logo">

          <!-- mini logo for sidebar mini 50x50 pixels -->

          <span class="logo-mini"><b>H</b>LLL</span>

          <!-- logo for regular state and mobile devices -->

          <span class="logo-lg"><b>Home Lets Link Live</b></span>

        </a>



        <!-- Header Navbar: style can be found in header.less -->

        <nav class="navbar navbar-static-top" role="navigation" style="background-color:#7ca729">

          <!-- Sidebar toggle button-->

          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">

            <span class="sr-only">Toggle navigation</span>

          </a>

          <!-- Navbar Right Menu -->

          <div class="navbar-custom-menu" style="background-color:#73962e">

            <ul class="nav navbar-nav">

             

              



             

              <!-- User Account: style can be found in dropdown.less -->

              <li class="dropdown user user-menu" style="background-color:#73962e">

                <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                  

                  <span class="hidden-xs"><?php echo $name ?></span>

                </a>

                <ul class="dropdown-menu">

                  <!-- User image -->

                  <li class="user-header" style="background-color:#73962e">
<img title="change photo" onClick="changephoto();" src="<?php echo $photo ?>" width="100%"/>
                    

                    <p>

                      <?php echo $name ?> - <?php echo $email; ?>

                      <small>Teacher</small>

                    </p>

                  </li>

                  <!-- Menu Body -->

                 

                  <!-- Menu Footer-->

                  <li class="user-footer" style="background-color:#73962e">

                    <div class="pull-left">

                      <a href="#" data-toggle="modal" data-target="#changePass" class="btn btn-default btn-flat">Change Password</a>                      

                    </div>

                    <div class="pull-right">

                      <a href="<?php echo base_url(); ?>Teacher/logout" class="btn btn-default btn-flat">Log out</a>

                    </div>

                  </li>

                </ul>

              </li>

              <!-- Control Sidebar Toggle Button -->

              <li>

                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>

              </li>

            </ul>

          </div>



        </nav>

      </header>





       <div id="changePass" class="modal fade">

          <div class="modal-dialog">

              <div class="modal-content">

                  <div class="modal-header" style="color:#0093af">

                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                      <center>

                        <h4 class="modal-title">Change Password</h4>

                      </center>

                  </div>

                  <div class="modal-body" id="edit-user-content">

                      <form  id="changePassForm" class="form-horizontal style-form" method="post">

                          

                              <div class="form-group">

                                  <label class="col-sm-4 control-label">Current Password</label>

                                  <div class="col-sm-8">

                                      

                                      <input type="password" name="oldpass" class="form-control">

                                  </div>

                              </div>



                              <div class="form-group">

                                  <label class="col-sm-4 control-label">New Password</label>

                                  <div class="col-sm-8">

                                      <input type="password" name="newpass" class="form-control">

                                  </div>

                              </div>



                              <div class="form-group">

                                  <label class="col-sm-4 control-label">Confirm Password</label>

                                  <div class="col-sm-8">

                                      <input type="password" name="confpass" class="form-control">

                                  </div>

                              </div>



                              



                          <div class="modal-footer">

                            <center>

                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                              <button type="submit" class="btn btn-primary">Save</button>

                            </center>

                          </div>

                              

                    </form>

                      

                  </div>

                  

              </div>

          </div>

      </div>

















      <!-- Left side column. contains the logo and sidebar -->

      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->

        <section class="sidebar">

          

          

          <!-- search form

          <form action="#" method="get" class="sidebar-form">

            <div class="input-group">

              <input type="text" name="q" class="form-control" placeholder="Search...">

              <span class="input-group-btn">

                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>

              </span>

            </div>

          </form>-->

          <!-- /.search form -->

          <!-- sidebar menu: : style can be found in sidebar.less -->

          <ul class="sidebar-menu">

            <li class="header">MAIN NAVIGATION</li>

            <!--<li class="active treeview">

              <a href="<?php //echo base_url(); ?>Teacher">

                <i style="color:#0093af" class="fa fa-dashboard"></i> <span>Dashboard</span>

              </a>

              

            </li>-->

            <li class="treeview">

              <a href="#">

                <i style="color:#0093af" class="fa fa-user"></i>

                <span>Profile</span>

                <i class="fa fa-angle-left pull-right"></i>

              </a>

              <ul class="treeview-menu">

                <li><a href="<?php echo base_url(); ?>Profile"><i style="color:#0093af" class="fa fa-circle-o"></i> My Profile </a></li>

                <li><a href="<?php echo base_url(); ?>Profile/update"><i style="color:#f39c12" class="fa fa-circle-o"></i> Update Profile </a></li>

               

              </ul>

            </li>



            <li class="treeview">

              <a href="#">

                <i style="color:#0093af" class="fa fa-exchange"></i>

                <span>Broadcasts</span>

                <i class="fa fa-angle-left pull-right"></i>

              </a>

              <ul class="treeview-menu">

                <li><a href="<?php echo base_url(); ?>Broadcasts/add"><i style="color:#dd4b39" class="fa fa-circle-o"></i> Add Broadcast </a></li>

                <li><a href="<?php echo base_url(); ?>Broadcasts/"><i style="color:#00a65a" class="fa fa-circle-o"></i> All Broadcasts </a></li>
                
                <li><a href="<?php echo base_url(); ?>Broadcasts/studentsbooked"><i style="color:#00a65a" class="fa fa-circle-o"></i> View My Students </a></li>

              </ul>

            </li>


              <li class="treeview">
                  <a href="#">
                      <i style="color:#0093af" class="fa fa-book"></i>
                      <span>Resource Library</span>
                      <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                      <li><a href="<?php echo base_url(); ?>Resources/"><i style="color:#f39c12" class="fa fa-circle-o"></i> View Resources </a></li>
                      <li><a href="<?php echo base_url(); ?>Resources/add"><i style="color:#0093af" class="fa fa-circle-o"></i> Add Resources </a></li>
                  </ul>
              </li>

          </ul>

        </section>

        <!-- /.sidebar -->

      </aside>









      




