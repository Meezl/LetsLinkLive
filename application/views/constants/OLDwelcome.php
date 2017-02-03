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


<!--calendar-->
<link href="<?php echo base_url(); ?>assets/calendar/css/monthly.css" rel="stylesheet" type="text/css">
<script src="<?php echo base_url(); ?>assets/calendar/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/calendar/js/monthly.js"></script>


</head>
<body>
<div style="overflow:hidden;">
<header class="header" id="header"><!--header-start-->
	<div class="container">
    	<figure style="margin-bottom: 35px" class=" animated fadeInDown delay-07s">
        	<a href="#"><img src="<?php echo base_url(); ?>assets/img/LLL_logo.png" alt=""></a>	
        </figure>	
        <h1 class="animated fadeInDown delay-07s">Welcome To Lets Link Live</h1>
        <ul class="we-create animated fadeInUp delay-1s">
        	<li>Expanding the boundaries of traditional leraning...</li>
        </ul>
    </div>
</div>
</header><!--header-end-->


<nav class="main-nav-outer" id="test"><!--main-nav-start-->
	<div class="container">
        <ul class="main-nav">
            <li><a href="#header">Home</a></li>
            <li><a href="#service">Services</a></li>
            <li><a href="#signup">Sign Up</a></li>
            <li class="small-logo"><a href="#header"><img src="<?php echo base_url(); ?>assets/img/small-logo.png" alt=""></a></li>
            <li><a href="<?php echo base_url('Teacher') ?>">Teacher Login</a></li>

            <li><a href="" data-toggle="modal" data-target="#studentLogin"> Student Zone</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
</nav><!--main-nav-end-->



<section class="main-section" id="service"><!--main-section-start-->
	<div class="container">
    	<h2>Services</h2>
    	<h6>We offer exceptional service with complimentary hugs.</h6>
        <div class="row">
        	<div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
            	<div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa-paw"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>One-on-One Video</h3>
                        <p>Proin iaculis purus digni consequat sem digni ssim. Donec entum digni ssim.</p>
                    </div>
                </div>
                <div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa-gear"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>Shared Whiteboard</h3>
                        <p>Proin iaculis purus consequat sem digni ssim. Digni ssim porttitora .</p>
                    </div>
                </div>
                <div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa-apple"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>Educators Make Money</h3>
                        <p>Proin iaculis purus consequat digni sem digni ssim. Purus donec porttitora entum.</p>
                    </div>
                </div>
                <div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa-medkit"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>24/7 Support</h3>
                        <p>Proin iaculis purus consequat sem digni ssim. Sem porttitora entum.</p>
                    </div>
                </div>
            </div>
            <figure class="col-lg-8 col-sm-6  text-right wow fadeInUp delay-02s">
            	<img src="<?php echo base_url(); ?>assets/img/macbook-pro.png" alt="">
            </figure>
        
        </div>
	</div>
</section><!--main-section-end-->



<section class="main-section alabaster"><!--main-section alabaster-start-->
	<div class="container">
    	<div class="row">
			<figure class="col-lg-3 col-sm-3 wow fadeInLeft">
            	<img  src="<?php echo base_url(); ?>assets/img/iphone.png" alt="">
            </figure>
        	<div class="col-lg-6 col-sm-6 featured-work">
            	
            	<h2>Events Calendar</h2>
                <div style="width:100%; max-width:100%; display:inline-block;">
                    <div class="monthly" id="mycalendar"></div>
                </div>
                
<script type="text/javascript">
	$(window).load( function() {

		$('#mycalendar').monthly({
			mode: 'event',
			xmlUrl: '<?php echo base_url()?>Broadcasts/events'
		});

		$('#mycalendar2').monthly({
			mode: 'picker',
			target: '#mytarget',
			setWidth: '250px',
			startHidden: true,
			showTrigger: '#mytarget',
			stylePast: true,
			disablePast: true
		});

	switch(window.location.protocol) {
	case 'http:':
	case 'https:':
	// running on a server, should be good.
	break;
	case 'file:':
	alert('Just a heads-up, events will not work when run locally.');
	}

	});
</script>
   
   
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
            	<p class="client-part-haead wow fadeInDown delay-05">It was a pleasure to work with the guys at Knight Studio. They made sure 
we were well fed and drunk all the time!</p>
            </div>
        </div>
    	<ul class="client wow fadeIn delay-05s">
        	<li><a href="#">
            	<img src="<?php echo base_url(); ?>assets/img/client-pic1.jpg" alt="">
                <h3>James Bond</h3>
                <span>License To Drink Inc.</span>
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
                    <img src="<?php echo base_url(); ?>assets/img/team-leader-pic1.jpg" alt="">
                    <ul>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-pinterest"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-03s">Walter White</h3>
                <span class="wow fadeInDown delay-03s">Chief Executive Officer</span>
                <p class="wow fadeInDown delay-03s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
            </div>
            <div class="team-leader-box">
                <div class="team-leader  wow fadeInDown delay-06s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="<?php echo base_url(); ?>assets/img/team-leader-pic2.jpg" alt="">
                    <ul>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-pinterest"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-06s">Jesse Pinkman</h3>
                <span class="wow fadeInDown delay-06s">Product Manager</span>
                <p class="wow fadeInDown delay-06s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
            </div>
            <div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-09s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="<?php echo base_url(); ?>assets/img/team-leader-pic3.jpg" alt="">
                    <ul>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-pinterest"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-09s">Skyler white</h3>
                <span class="wow fadeInDown delay-09s">Accountant</span>
                <p class="wow fadeInDown delay-09s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
            </div>
        </div>
    </div>
</section><!--main-section team-end-->



<section class="business-talking"><!--business-talking-start-->
	<div class="container">
        <h2>Let’s Talk Business.</h2>
    </div>
</section><!--business-talking-end-->
<div class="container">
<section class="main-section contact" id="contact">
	
        <div class="row">
        	<div class="col-lg-6 col-sm-7 wow fadeInLeft">
            	<div class="contact-info-box address clearfix">
                	<h3><i class=" icon-map-marker"></i>Address:</h3>
                	<span>308 Negra Arroyo Lane<br>Albuquerque, New Mexico, 87111.</span>
                </div>
                <div class="contact-info-box phone clearfix">
                	<h3><i class="fa-phone"></i>Phone:</h3>
                	<span>1-800-BOO-YAHH</span>
                </div>
                <div class="contact-info-box email clearfix">
                	<h3><i class="fa-pencil"></i>email:</h3>
                	<span>hello@knightstudios.com</span>
                </div>
            	<div class="contact-info-box hours clearfix">
                	<h3><i class="fa-clock-o"></i>Hours:</h3>
                	<span><strong>Monday - Thursday:</strong> 10am - 6pm<br><strong>Friday:</strong> People work on Fridays now?<br><strong>Saturday - Sunday:</strong> Best not to ask.</span>
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











<footer class="footer">
    <div class="container">
        <div class="footer-logo"><img src="<?php echo base_url(); ?>assets/img/logo.png" alt=""></div>
        <span class="copyright">Copyright © 2015 | Designed by <a href="#">Stealth Freak</a>.</span>
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


</body>
</html>