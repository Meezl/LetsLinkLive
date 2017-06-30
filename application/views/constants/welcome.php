<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">

<title>Lets Link Live</title>
<link rel="icon" href="<?php echo base_url(); ?>assets/favicon.png" type="image/png">
<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/favicon.ico" type="img/x-icon">

<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet" type="text/css">


<!--calendar
<link href="<?php //echo base_url(); ?>assets/calendar/css/monthly.css" rel="stylesheet" type="text/css">
<script src="<?php //echo base_url(); ?>assets/calendar/js/jquery.js"></script>
<script src="<?php //echo base_url(); ?>assets/calendar/js/monthly.js"></script>-->

<script src="<?php echo base_url(); ?>assets/calendar/js/jquery.js"></script>

<link href="<?php echo base_url(); ?>assets/calendar/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/calendar/css/fullcalendar.min.css" type="text/css" rel="stylesheet" />
    

</head>
<body>
<div style="overflow:hidden;">
<header class="header" id="header"><!--header-start-->
	<div class="container">
    	<figure style="margin-bottom: 35px" class=" animated fadeInDown delay-07s">
        	<a href="#"><img src="<?php echo base_url(); ?>assets/img/LLL_logo.png" alt=""></a>	
        </figure>	
        <h1 class="animated fadeInDown delay-07s"></h1>
        <ul class="we-create animated fadeInUp delay-1s">
        	<li></li>
        </ul>
    </div>
</div>
</header><!--header-end-->


<nav class="main-nav-outer" id="test"><!--main-nav-start-->
	<div class="container">
        <ul class="main-nav">
            <li><a href="#header">Home</a></li>
            <li><a href="" data-toggle="modal" data-target="#resource" >Resource Library</a></li>
            <li><a href="#calendar">Calendar</a></li>
            <li><a href="#signup">Sign Up</a></li>
            
            <li><a href="<?php echo base_url('Teacher') ?>">Teacher Login</a></li>

            <li><a href="" data-toggle="modal" data-target="#studentLogin">Student Login</a></li>
            <li><a href="#contact">Contact</a></li>
            
        </ul>
        <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
</nav><!--main-nav-end-->



<section class="main-section" id="service"><!--main-section-start-->
	<div class="container">
    	<h2>Features</h2>
    	<h6>We offer exceptional service with complimentary hugs. </h6>
        <div class="row">
        	<div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
            	<div class="service-list">
                	<div class="service-list-col1">
                    <!--<i class="fa-paw"></i> -->
                    </div>
                	<div class="service-list-col2">
                        <h3>● LIVE ON-LINE CLASSES </h3>
                        <p>Chat with the teacher live</p>
                    </div>
                </div>
                <div class="service-list">
                	<div class="service-list-col1">
                    	<!--<i class="fa-gear"></i>-->
                    </div>
                	<div class="service-list-col2">
                        <h3>● SHARED WHITEBOARD</h3>
                        <p> Teacher and students share the whiteboard during  live classes</p>
                    </div>
                </div>
                <div class="service-list">
                	<div class="service-list-col1">
                    	<!--<i class="fa-apple"></i>-->
                    </div>
                	<div class="service-list-col2">
                        <h3>● RESOURCE LIBRARY</h3>
                        <p>Reading Materials from teachers </p>
                    </div>
                </div>
                <div class="service-list">
                	<div class="service-list-col1">
                    	<!--<i class="fa-medkit"></i>-->
                    </div>
                	<div class="service-list-col2">
                        <h3>● VIDEO LIBRARY</h3>
                        <p>Video of past classes and class demon strations.</p>
                    </div>
                </div>
            </div>
            <figure class="col-lg-8 col-sm-6  text-right wow fadeInUp delay-02s">
            	<img src="<?php echo base_url(); ?>assets/img/macbook-pro.png" alt="">
            </figure>
        
        </div>
	</div>
</section><!--main-section-end-->



<section class="main-section alabaster" id="calendar"><!--main-section alabaster-start-->
	<div class="container">
    	<div class="row">
			<!--<figure class="col-lg-3 col-sm-3 wow fadeInLeft">
            	<img  src="<?php //echo base_url(); ?>assets/img/iphone.png" alt="">
            </figure>-->
        	<div class="col-lg-10 col-sm-10 col-md-offset-1 col-sm-offset-1 featured-work">
            	           	
                <div style="width:100%; max-width:100%; display:inline-block;">
                	
                    <h1>Classes Calendar</h1>
                                                                
                     <div id="bootstrapModalFullCalendar"></div>
                    
                    <div id="fullCalModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> <span class="sr-only">close</span></button>
                                    
                                    <h4 id="modalTitle" class="modal-title"></h4>
                                </div>
                                <div id="modalBody" class="modal-body">
                                    <h3>Class Description</h3>
                                    <p></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <a href="" class="btn btn-default" data-toggle="modal" data-target="#studentLogin">Student Login</a>
                                    <a href="#signup" class="btn btn-default" ="modal">Sign up</a>
                                    <!--<a class="btn btn-primary" id="eventUrl" target="_blank">Event Page</a>-->
                                </div>
                            </div>
                        </div>
                    </div> 
                    
                </div>
                
   
   
          </div>
        </div>
	</div>
</section><!--main-section alabaster-end-->



<div class="container">
<section class="main-section contact" id="signup">
    <h2>Sign Up Now</h2>
    <h6>Sign Up as a student and learn or as an educator and make money.</h6>
        <div class="row">
            <!--<div class="col-lg-6 col-sm-7 wow fadeInLeft">
                <form id="studentForm" method="post" name="student">
                    <div class="form">
                        <center><h3 style="padding-bottom: 30px">Student Sign Up</h3></center>
                        <input class="input-text form-control" type="text" name="name" placeholder="Your Name *">
                        <input class="input-text form-control" type="text" name="email" placeholder="Your E-mail *">
                        
                        
                        
                        <input class="input-btn" type="submit" value="Sign Up">
                        <button type="submit" class="btn btn-primary col-sm-3">Add</button>
                    </div> 
                </form> 
            </div>-->







            <div class="col-lg-6 col-sm-7 wow fadeInLeft">
            <div class="form">
            <form id="studentForm" method="post">
                <center><h3 style="padding-bottom: 30px">Student Sign Up</h3></center>
                              
                                <div class="form-group" style="border-bottom:none; padding:0px">
                                      <div class="">
                                        <input type="text" name="name" placeholder="Your Name*" class="input-text form-control">
                                      </div>
                                </div>
                                
                                <div class="form-group " style="border-bottom:none; padding:0px">
                                      <div class="">
                                        <input type="text" name="email" placeholder="Your E-Mail*" class="input-text form-control">
                                      </div>
                                </div>
                              
                          <button type="submit" class="btn btn-primary col-sm-3">Sign Up</button>
                      
                    
                </form>
                </div>
                </div>






            <div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">

                <div class="form">
                <form id="teacherForm" method="post">
                    <center><h3 style="padding-bottom: 30px">Teacher Sign Up</h3></center>
                                  
                                    <div class="form-group col-sm-12" style="border-bottom:none; padding:0px">
                                          <div class="">
                                            <input type="text" name="name" placeholder="Your Name*" class="input-text form-control">
                                          </div>
                                    </div>
                                    
                                    <div class="form-group " style="border-bottom:none; padding:0px">
                                          <div class="">
                                            <input type="text" name="email" placeholder="Your E-Mail*" class="input-text form-control">
                                          </div>
                                    </div>
                                    
                                    <div class="form-group " style="border-bottom:none; padding:0px">
                                          <div class="">
                                            <textarea name="qualifications" rows="3" placeholder="Your qualifications*" id="qualifications" class="input-text form-control"></textarea>
                                          </div>
                                    </div>
                                    
                                    <div class="form-group " style="border-bottom:none; padding:0px">
                                          <div class="">
                                            <textarea name="biography" rows="3" id="biography" placeholder="Describe yourself*" class="input-text form-control"></textarea>
                                          </div>
                                    </div>

                                    <div class="form-group col-sm-12" style="border-bottom:none; padding:0px">
                                          <div class="">
                                            <input type="password" name="pass" placeholder="Password" class="input-text form-control">
                                          </div>
                                    </div>

                                    <div class="form-group col-sm-12" style="border-bottom:none; padding:0px">
                                          <div class="">
                                            <input type="password" name="confpass" placeholder="Confirm Password" class="input-text form-control">
                                          </div>
                                    </div>
                                  
                              <button type="submit" class="btn btn-primary col-sm-3">Sign Up</button>
                          
                        
                    </form>
                    </div>
                <!--<form name="teacher">
                    <div class="form">
                        <center><h3 style="padding-bottom: 30px">Teacher SIgn Up</h3></center>
                        <input class="input-text" type="text" name="" value="Your Name *" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                        <input class="input-text" type="text" name="" value="Your E-mail *" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                        <input class="input-text" type="password" name="" placeholder="Password">
                        <input class="input-text" type="password" name="" placeholder="Confirm Password">
                        <input class="input-btn" type="submit" value="Sign Up">
                    </div> 
                </form>--> 
            </div>
        </div>
</section>
</div>


<section class="main-section client-part" id="client"><!--main-section client-part-start-->
	<div class="container">
		<b class="quote-right wow fadeInDown delay-03"><i class="fa-quote-right"></i></b>
    	<div class="row">
        	<div class="col-lg-12">
        	<h2 style="color: White;">Mission Statement</h2>
            	<p class="client-part-haead wow fadeInDown delay-05">Let’s Link Live is a global, integrated gateway to live learning. We recognize that knowledge has the power to change lives. Our mission is to create a platform for accessing and disseminating knowledge and in the process transform lives.!</p>
            </div>
        </div>
    	<ul class="client wow fadeIn delay-05s">
        	<li><a href="#">
                <h3>Irving Newman</h3>
                <span>MEDF Inc.</span>
            </a></li>
        </ul>
    </div>
</section><!--main-section client-part-end-->
<div class="c-logo-part"><!--c-logo-part-start-->
	<div class="container">
    	<ul>
        	<li><a href="#"><img src="<?php echo base_url(); ?>assets/img/c-liogo1.png" alt=""></a></li>
            <li><a href="#"><img src="<?php echo base_url(); ?>assets/img/c-liogo2.png" alt=""></a></li>
            <li><a href="#"><img src="<?php echo base_url(); ?>assets/img/c-liogo3.png" alt=""></a></li>
            <li><a href="#"><img src="<?php echo base_url(); ?>assets/img/c-liogo4.png" alt=""></a></li>
            <li><a href="#"><img src="<?php echo base_url(); ?>assets/img/c-liogo5.png" alt=""></a></li>
    	</ul>
	</div>
</div><!--c-logo-part-end-->
<section class="main-section team" id="team"><!--main-section team-start-->
	<div class="container">
        <h2>team</h2>
        <h6>Take a closer look into our amazing team. We won’t bite.</h6>
        <div class="team-leader-block clearfix">
            <div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-03s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="<?php echo base_url(); ?>assets/img/irving2.jpg" alt="">
                    <ul>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-pinterest"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-03s">Irving Newman</h3>
                <span class="wow fadeInDown delay-03s">Co-Founder Lets Link Live</span>
                <p class="wow fadeInDown delay-03s">Graduate Dalhousie University. <br> Lifetime Entrepreneur. <br>Founder and Executive Director MEDF</p>
            </div>
            <div class="team-leader-box">
                <div class="team-leader  wow fadeInDown delay-06s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="<?php echo base_url(); ?>assets/img/Mike2.jpg" alt="">
                    <ul>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-pinterest"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-06s">Michael N. Kaburi</h3>
                <span class="wow fadeInDown delay-06s">Project Manager MEDF</span>
                <p class="wow fadeInDown delay-06s">Graduate Moi University. <br>
Skype Educator (MEDF) <br>Mitahato Education & Development Fund .</p>
            </div>
            <div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-09s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="<?php echo base_url(); ?>assets/img/amanda.jpg" alt="">
                    <ul>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-pinterest"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-09s">Amanda Newman</h3>
                <span class="wow fadeInDown delay-09s">Co-Founder Lets Link Live.com </span>
                <p class="wow fadeInDown delay-09s">Co-Founder Parkbench.com <br> Chosen as a Google 500 startup company.
<br> For more info visit: www.parkbench.com
</p>
            </div>
        </div>
    </div>
</section><!--main-section team-end-->



<section class="business-talking"><!--business-talking-start-->
	<div class="container">
        <h2>Let’s Enhance Learning through Virtual Classroom .</h2>
    </div>
</section><!--business-talking-end-->
<div class="container">
<section class="main-section contact" id="contact">
	
        <div class="row">
        	<div class="col-lg-6 col-sm-7 wow fadeInLeft">
            	<div class="contact-info-box address clearfix">
                	<h3><i class=" icon-map-marker"></i>Address:</h3>
                	<span>P.O. Box 87 -00901, Ngewa.</span>
                </div>
                <div class="contact-info-box phone clearfix">
                	<h3><i class="fa-phone"></i>Phone:</h3>
                	<span>+254 728 082887, +254 773 394223</span>
                </div>
                <div class="contact-info-box email clearfix">
                	<h3><i class="fa-pencil"></i>email:</h3>
                	<span>info@letslinklive.com</span>
                </div>
            	<div class="contact-info-box hours clearfix">
                	<h3><i class="fa-clock-o"></i>Hours:</h3>
                	<span><strong>Monday - Thursday:</strong> 8am - 6pm<br><strong>Friday:</strong> 9am - 4pm<br><strong>Saturday - Sunday:</strong> Best not to ask.</span>
                </div>
                <ul class="social-link">
                	<li class="twitter"><a href="#"><i class="fa-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="fa-facebook"></i></a></li>
                    <li class="pinterest"><a href="#"><i class="fa-pinterest"></i></a></li>
                    <li class="gplus"><a href="#"><i class="fa-google-plus"></i></a></li>
                    <li class="dribbble"><a href="#"><i class="fa-dribbble"></i></a></li>
                </ul>
            </div>
        	<div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
            	<div class="form">
                	<input class="input-text" type="text" name="" value="Your Name *" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                    <input class="input-text" type="text" name="" value="Your E-mail *" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                	<textarea class="input-text text-area" cols="0" rows="0" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">Your Message *</textarea>
                    <input class="input-btn" type="submit" value="send message">
                </div>	
            </div>
        </div>
</section>
</div>


  <div id="studentLogin" class="modal fade" style="">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header" style="color:#0093af">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <center>
                        <h4 class="modal-title">Student Zone</h4>
                      </center>
                  </div>
                  <div class="modal-body" >
                      <form id="studentLoginForm" class="form-horizontal style-form" method="post">
                              
                              <div class="row">
                              <div class="form-group col-sm-12" style="border-bottom:none; padding:0px">
                                  <label style="color:#000; text-align: center" class="col-sm-12 control-label">Please Provide A Registered E-Mail</label>
                                    
                              </div>
                              
                              <div class="form-group col-sm-12" style="border-bottom:none; padding:0px">
                                  <label style="color:#000; padding-left:20%" class="col-sm-5 col-sm-5 control-label">E-Mail</label>
                                    <div class="col-sm-6">
                                      <input type="text" name="email" placeholder="E-Mail" class="form-control">
                                    </div>
                              </div>
                              
                              

                              </div>

                              
                        
                      
                  </div>
                  <div class="modal-footer">
                      <center>
                      
                          <button type="button" class="btn btn-default col-sm-3 col-sm-offset-5" style="margin-right:5%" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary col-sm-3">Continue</button>
                      
                      </center>
                  </div>

                    </div>
                  </form>
              </div>
          </div>
      </div>

 <div id="resource" class="modal fade" style="">
        <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header" style="color:#00000">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">WELCOME TO RESOURCE LIBRARY</h4>
                      </div>
                  <div class="modal-body" >
                   <p>Please Login or Sign up as a student to Access Resources<br> Thank You</p>
                   </div>
            <div class="modal-footer">
             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div id="manual" class="modal fade" style="">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="color:#00000">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">LETS LINK LIVE USER MANUAL</h4>
            </div>
            <div class="modal-body" >
                <p>
                <h3><u>How to use Let's Link Live as a Student/Teacher:</u></h3>
                <h3><u>As a Student:</u></h3>
                &diams;First, go to <b>sign up as student</b> and create a User account: <br>
                &rsaquo;Sign in under <b>student sign-in</b> and go to all broadcasts (classes). <br>
                &rsaquo;Select the desired class and <b>Click Book</b>. You will receive email confirmation for booking. <br>
                &rsaquo;On the day & time of the class <b>Click launch</b> <br>
                &rsaquo;To start the class Click on the text <b>"Click here to join class"</b>  & connect with the teach & other students.<br>
                &rsaquo;<b>Enable, the microphone, video & chat icons</b>
                </p>
                <p>
                <h3><u>To Connect as a Teacher</u></h3>
                &diams;First, go to <b>teacher Sign up</b>  and create a Teacher User account: <br>
                &rsaquo;Fill in your profile details <br>
                &rsaquo;Sign in under <b>teacher sign-in</b> and go to create broadcast (classes). <br>
                &rsaquo;Input, title, description & start & end time of class <br>
                &rsaquo;<b>Most important:</b> Select your Country  time zone  i.e GMT+3 Nairobi for Kenya. <br>
                &rsaquo;Choose the maximum number of attendees. Currently the max is 20. <br>
                &rsaquo;Click <b>create broadcast</b> to finish. You will receive email confirmation.
                </p>
                <p>
                <h3><u>To Start a class:</u></h3>
                &rsaquo;On the day/time of the class, sign in and click <b>launch</b> <br>
                &rsaquo;To start the class Click on the text <b>"Click here to join class"</b> to connect to students <br>
                &rsaquo;<b>Enable the microphone, the chat and video.</b> <br>
                &rsaquo;You can now see chat, talk & chat with all attendees. <br>
                &rsaquo;Other features: video sharing, screen sharing, whiteboard, document sharing
                </p>

            </div>
            <div class="modal-footer">
                <a href="/assets/files/LETS_LINK_LIVE_USER_MANUAL.pdf" download ="LETS_LINK_LIVE_USER_MANUAL.pdf" type="button" class="btn btn-success" >Download Full Manual</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>









<footer class="footer">
    <div class="container">
        <div class="footer-logo"><img src="<?php echo base_url(); ?>assets/img/LLL_logo.png" alt=""></div>
        <span class="copyright"><?php echo "Copyright &copy;"."  ".date('Y');?> <a href="http://www.mitahatoedf.com/">MEDF</a>.</span>
    </div>
    
</footer>



<!--<script type="text/javascript" src="<?php //echo base_url(); ?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.isotope.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/wow.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/classie.js"></script>


<script  src="<?php echo base_url(); ?>assets/bootstrap/js/bootbox.min.js"></script>
<script  src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrapValidator.js"></script>
<script  src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrapValidator.min.js"></script>


<script type="text/javascript">
    $(document).ready(function(e) {
        $('#test').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false    
            
        });
        
    });
</script>

  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
    document.getElementById('').onclick = function() {
      var section = document.createElement('section');
      section.className = 'wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
  </script>


<script type="text/javascript">
	$(window).load(function(){
		
		$('.main-nav li a').bind('click',function(event){
			var $anchor = $(this);
			
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 102
			}, 1500,'easeInOutExpo');
			/*
			if you don't want to use the easing effects:
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1000);
			*/
			event.preventDefault();
		});
	})
</script>

<script type="text/javascript">

$(window).load(function(){
  
  
  var $container = $('.portfolioContainer'),
      $body = $('body'),
      colW = 375,
      columns = null;

  
  $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
      columnWidth: colW
    }
  });
  
  $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
        .isotope('reLayout');
    }
    
  }).smartresize(); // trigger resize to set container width
  $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
			
            filter: selector,
         });
         return false;
    });
  
});

</script>

<script type="text/javascript">

$(document).ready(function() {

    $('#studentForm').bootstrapValidator({
        message: 'This value is not valid',
        
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: "You're required to fill in a Name!"
                    }
                }
            },

            email: {
                validators: {
                    notEmpty: {
                        message: "You're required to fill in an E-mail!"
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
      url: '<?php echo base_url(); ?>Welcome/AddStudent',
      type: 'post',
      data: $('#studentForm :input'),
      dataType: 'html',   
      success: function(html) {
      
       if(html == 'Sorry, student Could Not be Added. An Error Occurred')
      {
        bootbox.alert(html);
         $('#studentForm')[0].reset();
         location.reload();
      }  

      if(html == 'Registration has been done Successfully')
      {
        $('#studentForm')[0].reset();
        bootbox.alert(html);
         //$('#studentForm')[0].reset();
         //location.reload();
         //redirect('Student');
         window.location.href="<?php echo base_url(); ?>Welcome";
      }

      if (html == 'This E-Mail is already registered. Please LOG IN to access content.') 
      {
            bootbox.alert(html);
            $('#studentForm')[0].reset();
      }     

      }
    });
  });



      $('#teacherForm').bootstrapValidator({
        message: 'This value is not valid',
        
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: "You're required to fill in a Name!"
                    }
                }
            },
			
			qualifications: {
                validators: {
                    notEmpty: {
                        message: "Please provide your qualifications!"
                    },
					stringLength : {
						min: 10,
						max: 200,
						message:"Qualifications must be 10-200 characters long"
					}
                }
            },
			
			biography: {
                validators: {
                    notEmpty: {
                        message: "Please describe yourself!"
                    },
					stringLength : {
						min: 10,
						max: 300,
						message:"Biography must be 10-300 characters long"
					}
                }
            },

            email: {
                validators: {
                    notEmpty: {
                        message: "You're required to fill in an E-mail!"
                    }
                }
            },
            pass: {
                validators: {
                    notEmpty: {
                        message: "You're required to fill in a password!"
                    }
                }
            },
            confpass: {
                validators: {
                    notEmpty: {
                        message: "Please Confirm your password"
                    },
                        identical: {
                        field: 'pass',
                        message: "'Password' and 'Confirm Password' must match!"
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
      url: '<?php echo base_url(); ?>Welcome/AddTeacher',
      type: 'post',
      data: $('#teacherForm :input'),
      dataType: 'html',   
      success: function(html) {
      if(html == 'Sorry, teacher Could Not be Added. An Error Occurred')
      {
        bootbox.alert(html);
         $('#teacherForm')[0].reset();
         //location.reload();
      }  

      if(html == 'Registration has been done Successfully')
      {
        $('#teacherForm')[0].reset();
        bootbox.alert(html);
         //$('#studentForm')[0].reset();
         //location.reload();
         //redirect('Student');
         window.location.href="<?php echo base_url(); ?>Teacher";
      }

      if (html == 'This E-Mail is already registered. Please LOG IN to start teaching.') 
      {
            bootbox.alert(html);
            $('#teacherForm')[0].reset();
      }     

      }
    });
  });








  $('#studentLoginForm').bootstrapValidator({
        message: 'This value is not valid',
        
        fields: {

            email: {
                validators: {
                    notEmpty: {
                        message: "Please provide a registered E-mail!"
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
      url: '<?php echo base_url(); ?>Student/checkStudent',
      type: 'post',
      data: $('#studentLoginForm :input'),
      dataType: 'html',   
      success: function(html) {
      if(html == 'Sorry, This E-Mail is not registered. Please register as a student to continue')
      {
        bootbox.alert(html);
         $('#studentLoginForm')[0].reset();
         //location.reload();
      }  

      if(html == 'success')
      {
        $('#studentLoginForm')[0].reset();
        //bootbox.alert(html);
         //$('#studentForm')[0].reset();
         //location.reload();
         //redirect('Student');
         window.location.href="<?php echo base_url(); ?>Student";
      }

         

      }
    });
  });



});






</script> 



	<!--CALENDAR-->
    <script src="<?php echo base_url(); ?>assets/calendar/js/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/calendar/js/fullcalendar.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $('#bootstrapModalFullCalendar').fullCalendar({
                header: {
                    left: '',
                    center: 'prev title next',
                    right: ''
                },
                eventClick:  function(event, jsEvent, view) {
                    $('#modalTitle').html(event.title);
                    $('#modalBody').html(event.description);
                    $('#eventUrl').attr('href',event.url);
                    $('#fullCalModal').modal();
                    return false;
                },
                events:
                [
                   
				   <?php
				   foreach($get_broadcasts as $row)
				   {
					   $title = $row->title;
					   $starttime = $row->starttime;
					   $description = $row->description;
					   $classdate = $row->classdate;
					   $endtime = $row->endtime; 
					   $day = substr($classdate, 8, 2); 
					   $day = $today-$day;
				   ?>
				   	
					{
                      "title":"<?php echo $title.' ('.$classdate.')' ?>",
                      "allday":"false",
                      "description":"<p>This class is about: <br> <?=$description;?> <br> and will take place on <?php echo $classdate ?>, starting from <? echo $starttime; ?> to <?php echo $endtime; ?>.</p>",
                      "start":moment().format('<?php echo $classdate ?>'),
                      "url":"<?php echo base_url() ?>"
                   },
						
				   <?php }?>
                ]
            });
        });
    </script>


</body>
</html>