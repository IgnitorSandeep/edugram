<!DOCTYPE html>
<html>
<head>
    <title>Edugram | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="http://edugram.org/bootstrap-3.0.0/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="bootstrap-3.0.0/assets/js/html5shiv.js"></script>
    <script src="bootstrap-3.0.0/assets/js/respond.min.js"></script>
    <![endif]-->
    <!-- Custom styles for this template -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.0.0/dist/js/bootstrap.min.js"></script>
    <script type='text/javascript'>
        $(document).ready(function() {
		
            $('#myCarousel').carousel({interval: 3500});
			
			$('#slide-content-0').show();
			
            //$('#carousel-text').html($('#slide-content-0').html());
			
            //Handles the carousel thumbnails
            $('[id^=carousel-selector-]').click( function(){
                var id_selector = $(this).attr("id");
                var id = id_selector.substr(id_selector.length -1);
                var id = parseInt(id);
                $('#myCarousel').carousel(id);
				$('#slide-content-'+id).show();
				//$('#content-'+id).show();
            });    // When the carousel slides, auto update the text
			
            $('#myCarousel').on('slid', function (e) {
			
                var id = $('.item.active').data('slide-number');
                //$('#carousel-text').html($('#slide-content-'+id).html());
				
				var prev_id,next_id ;
				
				if(id==0){
					prev_id = 4;
				}else{
					prev_id = parseInt(id)-1;
				}
				if(id==4){
					next_id = 0
				}else{
					next_id = id+1;
				}
				
				$('#slide-content-'+next_id).hide();
				
				$('#slide-content-'+prev_id).hide();
				
				$('#slide-content-'+id).show();
				
            });

        });
    </script>

    <style>

        .nopadding {
            padding: 0 !important;
            margin: 0 !important;
        }
        .fb{
            background: url("http://edugram.org/image/icons/social-icon.png?v=2") no-repeat scroll left top rgba(0, 0, 0, 0);
            display: inline-block;
            height: 29px;
            margin: 0px 3px 0 5px;
            width: 29px;
        }
        .fb:hover {
            background: url("http://edugram.org/image/icons/social-icon.png?v=2") no-repeat scroll left -29px rgba(0, 0, 0, 0);
            transition: all 0.5s ease 0s;
        }

        .twitter{
            background: url("http://edugram.org/image/icons/social-icon.png?v=2") no-repeat scroll -106px top rgba(0, 0, 0,0);
            display: inline-block;
            height: 29px;
            margin: 0 3px 0 5px;
            width: 29px;
        }

        .twitter:hover {
            background: url("http://edugram.org/image/icons/social-icon.png?v=2") no-repeat scroll -106px -29px rgba(0, 0,0,0);
            transition: all 0.5s ease 0s;
        }

        .google{
            background: url("http://edugram.org/image/icons/social-icon.png?v=2") no-repeat scroll -70px top rgba(0, 0, 0,0);
            display: inline-block;
            height: 29px;
            margin: 0 3px 0 5px;
            width: 29px;
        }
        .google:hover {
            background: url("http://edugram.org/image/icons/social-icon.png?v=2") no-repeat scroll -70px -29px rgba(0, 0,0,0);
            transition: all 0.5s ease 0s;
        }
        .full{
            width:100%;
        }
        .set-height-500{
            height:500px;
        }
        .heading-center{
            text-align:"center";
        }
        .content{
            min-height :40px;
            max-height :50px;
        }
        html, body {
            height: 100%;
            width: 100%;


        }
        p{
            margin-top:0;
            margin-bottom:0;
        }
        .nav{

        }

        .logo{
            float:left;
            padding-left:0px;
            padding-right:0px;
            width:74.9%;
            height:110px;
        }
        .right-top{
            float:left;
            padding-left:0px;
            padding-right:0px;
            width:25.1%;
        }


        .socialmedia{
            float:left;

        }
        ul{
            margin-top:0px;
            margin-bottom:0px;

        }
        .socialmedia li{
            padding-left:0;
            padding-right:0;
        }
        .menu{
            float:right;

        }
		.bs-example{
			margin: 10px;
		}

    </style>

</head>
<body>
<?php
include_once 'header.php';
?>
<div class="container">
    <!-- main slider carousel -->
    <div class="row">
        <div class="col-md-12" id="slider">
            <div class="row">
                <div class="col-md-8" id="carousel-bounding-box">
                    <div id="myCarousel" class="carousel slide">

                        <!-- main slider carousel items -->
                        <div class="carousel-inner">
                            <div class="active item" data-slide-number="0">
                                <img src="image/theme/choosing-right-career.jpg">
                            </div>
                            <div class="item" data-slide-number="1">
                                <img src="image/theme/honouring-talents.jpg">
                            </div>
                            <div class="item" data-slide-number="2">
                                <img src="image/theme/educational-information.jpg">
                            </div>
                            <div class="item" data-slide-number="3">
                                <img src="image/theme/self-help-group.jpg">
                            </div>
							<div class="item" data-slide-number="4">
                                <img src="image/theme/student-library.jpg">
                            </div>
                        </div>

                        <!-- main slider carousel nav controls -->
                        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
							<!--span class="glyphicon glyphicon-arrow-left"></span-->
							<span class="glyphicon glyphicon-arrow-left">
								<img src="image/icons/icon-prev.png" alt="prev">
							</span>
						</a>
                        <a class="carousel-control right" href="#myCarousel" data-slide="next">
							<!--span class="glyphicon glyphicon-arrow-right"></span-->
							<span class="glyphicon glyphicon-arrow-left">
								<img src="image/icons/icon-next.png" alt="next">
							</span>
						</a>
						
                    </div>
                </div>

                <!-- main slider carousel info text -->
                <div class="col-md-4" id="carousel-text" style="height:500px">
					<div  class="row panel panel-primary" style="max-height:138px;margin-top:7px; font-size: 95%;">
						<div class="panel-body" ><strong>Choosing Right Career</strong></div>
						<div id="slide-content-0" class="panel-footer" style="display:none;text-overflow: ellipsis;overflow: hidden; font-size: 95%;"><p align="justify">Students need help in understanding their talent and matching career, right information to take uninfluenced decision and their interest area...<a href="http://edugram.org/theme/choosing_right_career.php">Read more </a></p></div>
					</div>
					<div   class="row panel panel-primary" style="max-height:138px;text-overflow: ellipsis;overflow: hidden; font-size: 95%;">
						<div class="panel-body"><strong>Honouring Talents</strong></div>
						<div id="slide-content-1" class="panel-footer" style="display:none;"><p align="justify">Talent, focus and motivation are key ingredients of success. To keep students and youth motivated and focused; Edugram organizes events to awards, honour and recognize talent. ...<a href="http://edugram.org/gallery.php">Read more</a></p></div>
					</div>
					<div  class="row panel panel-primary" style="max-height:138px;text-overflow: ellipsis;overflow: hidden; font-size: 95%;">
						<div class="panel-body"><strong>Educational Information</strong></div>
						<div id="slide-content-2" class="panel-footer" style="display:none;text-overflow: ellipsis;overflow: hidden;"><p  align="justify">In career decisions students have to deal with over-information, sponsored information, biased and under-information. Providing unbiased and complete information is target of Edugram...<a href="#">Read more</a></p></div>
					</div>
					<div  class="row panel panel-primary" style="max-height:138px;text-overflow: ellipsis;overflow: hidden; font-size: 95%;">
						<div class="panel-body"><strong>Self-help Groups &amp; libraries</strong></div>
						<div id="slide-content-3" class="panel-footer" style="display:none;"><p align="justify">Edugram helps in setting  self-help and study  group for interested students and youth of local community. Depending upon need Edugram can pitch-in to help in setting small library or book club....<a href="http://edugram.org/theme/self_help.php">Read more</a></p></div>
					</div>
					<div  class="row panel panel-primary" style="max-height:138px;text-overflow: ellipsis;overflow: hidden; font-size: 95%;">
						<div class="panel-body"><strong>Mentoring</strong></div>
						<div id="slide-content-4" class="panel-footer" style="display:none;"><p align="justify">Students need continuous motivation, focus, advice, information and counselling. Edugram Volunteers intend to give personalized help to the students...<a href="http://edugram.org/theme/library_for_students.php">Read more</a></p></div>
					</div>
				</div>
            </div>
        </div>
    </div> <!--/main slider carousel-->
</div>

<div class="row">
</div>

<div class="container">
	
    <div class="row">

        <div class="col-md-4">
            <h2>About Edugram</h2>
            <p align="justify">Edugram is an effort towards for helping students and career seekers of underprivileged strata of our society in making right educational and career move.</p>
            <p align="justify">Assessing talent and suggesting right career, providing right educational information, counselling, organizing events, helping in forming self-study groups, providing books to needy students are some of the modes of Edugram programs.</p>
			<p><a href="http://edugram.org/about/aboutus.php">Read more</a></p>
	   </div>

        <div class="col-md-4">
            <h2>Events</h2>
			<p align="justify">Edugram organizes events every year at some places to interact with students, to provide education and career information, and to motivate them for studies. Edugram also conducts some assessment to understand suitable career and education field for a person.</p>
            <p align="justify">Please write us at <a href="mailto:edugramorg@gmail.com">edugramorg[at]gmail[dot]com</a>.</p>
			<p><a href="http://edugram.org/event_2013.php">Read More</a></p>
        </div>
		
		<div class="col-md-4">
		<br/>
			<div class="panel panel-info">
				<div class="panel-heading"><Strong>Recent News</strong></div>
				<div class="panel-body">					
					<?php
						$link = mysql_connect ("localhost","sandeeui_edugram","dbpass123")  or die (mysql_error());
						@mysql_select_db ("sandeeui_edugram",$link);
						$result = mysql_query("select * from recents where verified=1",$link);
						//$num_rows=mysql_num_rows($result);
						//echo $num_rows;
						//$imagepath="image/icons/arrow.png";
						
						while ($row = mysql_fetch_array($result)){
							if($row['link']!=""){
								echo "<p>";
								?>
								<img src="image/icons/arrow.png" alt="- ">
								<?php
								echo"<a href=".$row[link]." target='_blank'>";
								echo " ".$row['title'];
								echo "</a>";
								echo"</p>";
							}else{
								echo "<p>";
								?>
								<img src="image/icons/arrow.png" alt="- ">
								<?php
								echo " ".$row['title'];
								echo"</p>";
							}
						}
					?>									
				
					
					
				</div>
			  </div>
           
        </div>
    </div>

	<hr>

    <!-- quick links to suggestions volunteer partnership mi test -->
    <div class="row">
	
        <div class=" col-md-2  col-lg-2 col-md-offset-2  col-lg-offset-2">
            <p><a class="featurette-image img-responsive img-circle" href="#" class="btn btn-lg btn-success" data-toggle="modal" data-target="#suggestion"><img src="image/icons/suggestion.png" alt="suggestion"  width="140" height="140"></a></p>
        </div>
		
		<div class="col-md-2 col-lg-2">
            <p><a href="http://edugram.org/getinvolve/partnership.php" ><img class="featurette-image img-responsive img-circle" src="image/icons/partnership.bmp" alt="partnership"  width="140" height="140"></a></p>
        </div>
		
		<div class="col-md-2 col-lg-2">
            <p><a href="#" data-toggle="modal" data-target="#joinus"><img class="featurette-image img-responsive img-circle" src="image/icons/volunteer.jpg" alt="volunteer"  width="140" height="120"></a></p>
        </div>

        <div class="col-md-2 col-lg-2">
            <p><a href="http://edugram.org/theme/library_for_students.php" ><img class="featurette-image img-responsive img-circle" src="image/icons/lib.png" alt="library"  width="140" height="120"></a></p>
        </div>

    </div>
    
    <!-- Join Us -->
    <div class="modal fade" id='joinus' tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">User Registration</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form" id="registration" name="joinus" method="post" action="register.php">

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Email</label>
                            <div class="col-md-8">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">First Name</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="fname" name="fname" placeholder="Name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Last Name</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="lname" name="lname" placeholder="Name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Phone" class="col-md-4 control-label">Phone</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="phone"  name="phone" placeholder="Phone">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">	Password:</label>
                            <div class="col-md-8">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                                <p class="help-block">
                                    Min: 6 characters (Alphanumeric only)
                                </p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">	Retype Password:</label>
                            <div class="col-md-8">
                                <input type="password" class="form-control" id="repassword" name="repassword"placeholder="Enter Password">
                                <p class="help-block">
                                    Min: 6 characters (Alphanumeric only)
                                </p>
                            </div>
                        </div>

                        <!-- this is for captcha for robot attack safety -->
                        <div class="form-group">
                            <label for="country" class="col-md-4 control-label"></label>
                            <div class="col-md-8">
								<?php
									require_once('recaptcha-php/recaptchalib.php');
									$publickey = "6Leg9_MSAAAAAOfPiOM0v3NDQ7zJwf4A71w29xsH"; // you got this from the signup page
									echo recaptcha_get_html($publickey);
								?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-4 col-md-4">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                            <div class="col-md-offset-2 col-md-2">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div><!-- Join Us Ends Here -->
    </div>
    <!-- Suggestion Box -->
    <div class="modal fade" id='suggestion' tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Suggestion Box</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form" id="registration" name="suggestion" method="post" action="suggestion.php">

                        <div class="form-group">
                            <label class="col-md-4 control-label" >Suggestion</label>
                            <div class="col-md-8">
                                <textarea class="form-control" name="suggestion" id="suggestion" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Email<small>(Optional)</small></label>
                            <div class="col-md-8">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">First Name<small>(Optional)</small></label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="fname" name="fname" placeholder="Name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Last Name<small>(Optional)</small></label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="lname" name="lname" placeholder="Name">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-4 col-md-4">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                            <div class="col-md-offset-2 col-md-2">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </form>

                </div>

            </div>

        </div><!-- Suggestion Box Ends Here -->

    </div>
</div>
<?php
	include_once 'footer.php';
?>

</body>
</html>
