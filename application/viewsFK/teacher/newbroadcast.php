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


<?php
date_default_timezone_set('Africa/Nairobi');     
$datevariable = new DateTime();
$date = date_format($datevariable, 'Y-m-d');
$time = date_format($datevariable, 'H:i:s');
?>

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Add Broadcast
          </h1>
          
        </section>



<section class="content">
<div class="row">
            <div class="col-xs-12">
              <div class="box">
                
                <div class="box-header">
                  <h3 class="box-title">New Broadcast</h3>
                  <div class="box-tools">
                    <div class="input-group" style="width: 150px;">
                      
                     
                    </div>
                  </div>
                </div><!-- /.box-header -->
                
                <div class="box-body">
                	
                    <div class="row">
                        

                        <form id="editForm" class="form-horizontal style-form" method="post">
                        	<input type="hidden" id="exists" name="exists" value="Exists" />
                    		<input type="hidden" id="emailCHECKER" name="emailCHECKER" value="" />
                            <input type="hidden" name="rand" id="rand" value="<?php //echo $rand ?>" />
                            
                            
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="topic">Title: <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="title" name="title" value="" placeholder="Title" class="form-control col-md-7 col-xs-12">
                                     
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date">Broadcast Date: <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    
                                    <input class="form-control col-md-7 col-xs-12 has-feedback-left" id="date" value="<?php echo $date; ?>" name="date" placeholder="YYYY-MM-DD" type="text"/>
                            <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                                    
                                </div>
                            </div>
                            
                            <div class="form-group">                    	
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="start_time">Start Time: <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12" style="color:#585858">
                                   <div class="input-group bootstrap-timepicker timepicker">
                                        <input id="class_start_time" name="start_time" placeholder="From" type="text" class="form-control input-small">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">                    	
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="end_time">End Time: <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12" style="color:#585858">
                                   <div class="input-group bootstrap-timepicker timepicker">
                                        <input id="class_end_time" name="end_time" type="text" placeholder="To" class="form-control input-small">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                    </div>
                                </div>
                            </div>
                                                       
                            
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="timezone">Time Zone: <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="timezone" id="timezone" class="form-control">
                                        <option title="GMT Standard Time" value="28">(GMT) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>
                                        <option title="Greenwich Standard Time" value="30">(GMT) Monrovia, Reykjavik</option>
                                        <option title="W. Europe Standard Time" value="72">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
                                        <option title="Romance Standard Time" value="53">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
                                        <option title="Central European Standard Time" value="14">(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
                                        <option title="W. Central Africa Standard Time" value="71">(GMT+01:00) West Central Africa</option>
                                        <option title="Jordan Standard Time" value="83">(GMT+02:00) Amman</option>
                                        <option title="Middle East Standard Time" value="84">(GMT+02:00) Beirut</option>
                                        <option title="Egypt Standard Time" value="24">(GMT+02:00) Cairo</option>
                                        <option title="South Africa Standard Time" value="61">(GMT+02:00) Harare, Pretoria</option>
                                        <option title="FLE Standard Time" value="27">(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
                                        <option title="Jerusalem Standard Time" value="35">(GMT+02:00) Jerusalem</option>
                                        <option title="E. Europe Standard Time" value="21">(GMT+02:00) Minsk</option>
                                        <option title="Namibia Standard Time" value="86">(GMT+02:00) Windhoek</option>
                                        <option title="GTB Standard Time" value="31">(GMT+03:00) Athens, Istanbul, Minsk</option>
                                        <option title="Arabic Standard Time" value="2">(GMT+03:00) Baghdad</option>
                                        <option title="Arab Standard Time" value="49">(GMT+03:00) Kuwait, Riyadh</option>
                                        <option title="Russian Standard Time" value="54">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
                                        <option title="E. Africa Standard Time" value="19">(GMT+03:00) Nairobi</option>
                                        <option title="Georgian Standard Time" value="87">(GMT+03:00) Tbilisi</option>
                                        <option title="Iran Standard Time" value="34">(GMT+03:30) Tehran</option>
                                        <option title="Arabian Standard Time" value="1">(GMT+04:00) Abu Dhabi, Muscat</option>
                                        <option title="Azerbaijan Standard Time" value="88">(GMT+04:00) Baku</option>
                                        <option title="Caucasus Standard Time" value="9">(GMT+04:00) Baku, Tbilisi, Yerevan</option>
                                        <option title="Mauritius Standard Time" value="89">(GMT+04:00) Port Louis</option>
                                        <option title="Afghanistan Standard Time" value="47">(GMT+04:30) Kabul</option>
                                        <option title="Ekaterinburg Standard Time" value="25">(GMT+05:00) Ekaterinburg</option>
                                        <option title="Pakistan Standard Time" value="90">(GMT+05:00) Islamabad, Karachi</option>
                                        <option title="West Asia Standard Time" value="73">(GMT+05:00) Islamabad, Karachi, Tashkent</option>
                                        <option title="India Standard Time" value="33">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
                                        <option title="Sri Lanka Standard Time" value="62">(GMT+05:30) Sri Jayawardenepura</option>
                                        <option title="Nepal Standard Time" value="91">(GMT+05:45) Kathmandu</option>
                                        <option title="N. Central Asia Standard Time" value="42">(GMT+06:00) Almaty, Novosibirsk</option>
                                        <option title="Central Asia Standard Time" value="12">(GMT+06:00) Astana, Dhaka</option>
                                        <option title="Myanmar Standard Time" value="41">(GMT+06:30) Rangoon</option>
                                        <option title="SE Asia Standard Time" value="59">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
                                        <option title="North Asia Standard Time" value="50">(GMT+07:00) Krasnoyarsk</option>
                                        <option title="China Standard Time" value="17">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
                                        <option title="North Asia East Standard Time" value="46">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
                                        <option title="Malay Peninsula Standard Time" value="60">(GMT+08:00) Kuala Lumpur, Singapore</option>
                                        <option title="W. Australia Standard Time" value="70">(GMT+08:00) Perth</option>
                                        <option title="Taipei Standard Time" value="63">(GMT+08:00) Taipei</option>
                                        <option title="Tokyo Standard Time" value="65">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
                                        <option title="Korea Standard Time" value="77">(GMT+09:00) Seoul</option>
                                        <option title="Yakutsk Standard Time" value="75">(GMT+09:00) Yakutsk</option>
                                        <option title="Cen. Australia Standard Time" value="10">(GMT+09:30) Adelaide</option>
                                        <option title="AUS Central Standard Time" value="4">(GMT+09:30) Darwin</option>
                                        <option title="E. Australia Standard Time" value="20">(GMT+10:00) Brisbane</option>
                                        <option title="AUS Eastern Standard Time" value="5">(GMT+10:00) Canberra, Melbourne, Sydney</option>
                                        <option title="West Pacific Standard Time" value="74">(GMT+10:00) Guam, Port Moresby</option>
                                        <option title="Tasmania Standard Time" value="64">(GMT+10:00) Hobart</option>
                                        <option title="Vladivostok Standard Time" value="69">(GMT+10:00) Vladivostok</option>
                                        <option title="Central Pacific Standard Time" value="15">(GMT+11:00) Magadan, Solomon Is., New Caledonia</option>
                                        <option title="New Zealand Standard Time" value="44">(GMT+12:00) Auckland, Wellington</option>
                                        <option title="Fiji Standard Time" value="26">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
                                        <option title="Azores Standard Time" value="6">(GMT-01:00) Azores</option>
                                        <option title="Cape Verde Standard Time" value="8">(GMT-01:00) Cape Verde Is.</option>
                                        <option title="Mid-Atlantic Standard Time" value="39">(GMT-02:00) Mid-Atlantic</option>
                                        <option title="E. South America Standard Time" value="22">(GMT-03:00) Brasilia</option>
                                        <option title="Argentina Standard Time" value="94">(GMT-03:00) Buenos Aires</option>
                                        <option title="SA Eastern Standard Time" value="55">(GMT-03:00) Buenos Aires, Georgetown</option>
                                        <option title="Greenland Standard Time" value="29">(GMT-03:00) Greenland</option>
                                        <option title="Montevideo Standard Time" value="95">(GMT-03:00) Montevideo</option>
                                        <option title="Newfoundland Standard Time" value="45">(GMT-03:30) Newfoundland</option>
                                        <option title="Atlantic Standard Time" value="3">(GMT-04:00) Atlantic Time (Canada)</option>
                                        <option title="SA Western Standard Time" value="57">(GMT-04:00) Georgetown, La Paz, San Juan</option>
                                        <option title="Central Brazilian Standard Time" value="96">(GMT-04:00) Manaus</option>
                                        <option title="Pacific SA Standard Time" value="51">(GMT-04:00) Santiago</option>
                                        <option title="Venezuela Standard Time" value="76">(GMT-04:30) Caracas</option>
                                        <option title="SA Pacific Standard Time" value="56">(GMT-05:00) Bogota, Lima, Quito</option>
                                        <option title="Eastern Standard Time" value="23">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                                        <option title="US Eastern Standard Time" value="67">(GMT-05:00) Indiana (East)</option>
                                        <option title="Central America Standard Time" value="11">(GMT-06:00) Central America</option>
                                        <option title="Central Standard Time" value="16">(GMT-06:00) Central Time (US &amp; Canada)</option>
                                        <option title="Mexico Standard Time" value="37">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                                        <option title="Canada Central Standard Time" value="7">(GMT-06:00) Saskatchewan</option>
                                        <option title="US Mountain Standard Time" value="68">(GMT-07:00) Arizona</option>
                                        <option title="Mexico Standard Time" value="38">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                                        <option title="Mountain Standard Time" value="40">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                                        <option title="Pacific Standard Time" value="52">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                                        <option title="Pacific Standard Time (Mexico)" value="104">(GMT-08:00) Tijuana, Baja California</option>
                                        <option title="Alaskan Standard Time" value="48">(GMT-09:00) Alaska</option>
                                        <option title="Hawaiian Standard Time" value="32">(GMT-10:00) Hawaii</option>
                                        <option title="Samoa Standard Time" value="58">(GMT-11:00) Midway Island, Samoa</option>
                                        <option title="Dateline Standard Time" value="18">(GMT-12:00) International Date Line West</option>
                                        <option title="Eastern Daylight Time" value="105">(GMT-4:00) Eastern Daylight Time (US &amp; Canada)</option>
                                        <option title="Central Europe Standard Time" value="13">GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="topic">Max. Attendees: <span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="seat_attendees" placeholder="Max. attendees" name="seat_attendees" value="" class="form-control col-md-7 col-xs-12">
                                     
                                </div>
                            </div>
                            
                           
                            
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-success">Create Broadcast!</button>
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
//CHECK email existence AND AUTOFILL
function checkemail()
{
   var email=document.getElementById( "email" ).value;
   if(email)
   {
	   
		$.ajax({
		   type: 'post',
		   url: '<?php echo base_url('Profile/checkemail/'.$rand) ?>',
		   data: {
		   email:email,
		   },
		   success: function (response) {
		   $('#emailCHECKER').val(response);//document.getElementById('txtFirstName').value = "your name";
		  	$('#email_bad_status').html(response);
			
			}
		  });

   }
   else
   {
	   $( '#emailCHECKER' ).val("");
	   $( '#email_bad_status' ).html("");
	   return false;
   }
}
</script>

			
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
			title : {
				validators: {
					notEmpty : {
						message : "Topic is required"
					},
					stringLength : {
						min: 6,
						max: 60,
						message : "Topic should be between 6-60 characters"
					}
				}
			},//END OF email	
			timezone : {
				message : "Time zone is required",
				validators : {
					notEmpty : {
						message : "Please select time zone"
					}						
				}
			},//END OF name
			seat_attendees : {
				validators : {
					/*notEmpty : {
						message : "Please en"
					},*/
					greaterThan : {
						value : 1,
						message : "Attendees Number must be greater than 1"
					}
				}
			},//END OF name
			date : {
				message : "Start Date/time is required",
				validators : {
					notEmpty : {
						message : "Please provide Start Date/time"
					}					
				}
			},//END OF Start Date/time	
			start_time : {
				message : "Start time is required",
				validators : {
					notEmpty : {
						message : "Please provide Start time"
					}					
				}
			},//END OF start_time
			end_time : {
				message : "Stop time is required",
				validators : {
					notEmpty : {
						message : "Please provide Stop time"
					}					
				}
			}//END OF end_time		
				
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
	    url: '<?php echo base_url(); ?>Broadcasts/savebroadcast',
	    type: 'post',
	    data: $('#editForm :input'),
	    dataType: 'html',		
	    success: function(html) {
			 bootbox.alert(html);
		   if(html == 'Class scheduled Successfully')
		   {
			   $('#editForm')[0].reset();
			  	location.reload();
			   
		   }
		   
		   
	    }
    });
  });
});

</script>

<!--DATE TIME PICKER-->

<script type="text/javascript">
    $(function () {
        $('#datetimepicker6').datetimepicker();
        $('#datetimepicker7').datetimepicker({
            useCurrent: false
        });
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        });
    });
</script>


<script>
	$(document).ready(function(){
		var date_input=$('input[name="date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'yyyy-mm-dd',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>

<script type="text/javascript">
	$('#class_start_time').timepicker();
</script>

<script type="text/javascript">
	$('#class_end_time').timepicker();
</script>

<!--date time picker: CSS IN HEADER FILE-->

<!--<script type="text/javascript" src="<?php //echo base_url(); ?>assets/insession/datetimepicker/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="<?php //echo base_url(); ?>assets/insession/datetimepicker/bootstrap.min.js"></script>
-->
<script src="<?php echo base_url(); ?>assets/insession/datetimepicker/moment-with-locales.js"></script>
<script src="<?php echo base_url(); ?>assets/insession/datetimepicker/bootstrap-datetimepicker.js"></script>

<!------------------------>



<!-------------------------------> 