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

           $('#myCarousel').carousel({interval: 2000});
			
            .//$('#carousel-text').html($('#slide-content-0').html());
            //Handles the carousel thumbnails
            $('[id^=carousel-selector-]').click( function(){
                var id_selector = $(this).attr("id");
                var id = id_selector.substr(id_selector.length -1);
                var id = parseInt(id);
                $('#myCarousel').carousel(id);
            });    // When the carousel slides, auto update the text
            $('#myCarousel').on('slid', function (e) {
                var id = $('.item.active').data('slide-number');
                //$('#carousel-text').html($('#slide-content-'+id).html());
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
                        <a class="carousel-control left" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left "></span></a>
                        <a class="carousel-control right" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right "></span></a>
						
                    </div>
                </div>

                <!-- main slider carousel info text -->
                <div class="col-md-4" id="carousel-text">
					<div id="slide-content-0" class="row">
						<div class="header"><h4><strong>Choosing Right Career</strong></h4></div>
						<div class="content" style="display:none"><p>We help choosing right career by  assessing the talent of students, providing right educational information, counselling, organize events, help in forming self-study groups, providing books to needy students.<a href="#">Read more ...</a></p></div>
					</div>
					<div id="slide-content-1" class="row">
						<div class="header"><h4><strong>Honouring Talents</strong></h4></div>
						<div class="content" style="display:none"><p>We also organize a Talent Search  &amp; Multiple Intelligence Test which is designed to recognize their talent.We honour student with some presents etc.<a href="#">Read more ...</a></p></div>
					</div>
					<div id="slide-content-2" class="row">
						<div class="header"><h4><strong>Educational Information</strong></h4></div>
						<div class="content" style="display:none"><p>Edugram provide educational information which helps students to decide their career according to their capability and interest.Also we guide &amp; counsel students for their ac<a href="#">Read more ...</a></p></div>
					</div>
					<div id="slide-content-3" class="row">
						<div class="header"><h4><strong>Self Help Groups</strong></h4></div>
						<div class="content" style="display:none"><p>We all face problems in life and at some course time it get resolve.But while facing initially almost all problem seems like difficult but when it resolve we get that it was very easy to handle them.<a href="#">Read more ...</a></p></div>
					</div>
					<div id="slide-content-4" class="row">
						<div class="header"><h4><strong>Students Library</strong></h4></div>
						<div class="content" style="display:none"><p>Edugram manages a library for students. We provide books for underprivileged students.All of academic books can be issued to students for a year.Magazines and News Papers are available for go and read.<a href="#">Read more ...</a></p></div>
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
            <p>Edugram is an organized effort towards helping needy students and career seeker in making right educational and  career move.</p>
            <p>We help in assessing the talent of students, providing right educational information, counselling, organize events, help in forming self-study groups, providing books to needy students.</p>
			<p><a href="#">Read more</a></p>
	   </div>

        <div class="col-md-4">
            <h2>Events</h2>
            <p>EduGram organizes <a href="event_2013.php">"Talent Search Test"</a> every year to interact with students and promote their talents with some awards. Events are like :</p>
            
			<ul>
                <li>Talent Search Test</li>
                <li>Multiple Intelligence Test</li>
                <li>Science Kit Show</li>
            </ul>
			<br/>
			<p><a href="http://edugram.org/event_2013.php">Read More</a></p>
        </div>
		
		<div class="col-md-4">
		<br/>
			<div class="panel panel-info">
				<div class="panel-heading"><Strong>Recent News</strong></div>
				<div class="panel-body">
					<p><img src="image/icons/arrow.png" alt="- "> Registration forms are available now</p>
					<p><img src="image/icons/arrow.png" alt="- "><a href="http://www.bgfl.org/bgfl/custom/resources_ftp/client_ftp/ks3/ict/multiple_int/index.htm"> Test your multiple intelligence</a></p>
					<p><img src="image/icons/arrow.png" alt="- "><a href="http://edugram.org/theme/library_for_students.php"> Check for new books in library</a></p>
					<p><img src="image/icons/arrow.png" alt="- "><a href="http://edugram.org/event_2013.php"> Edugram Assessment Event - 2013</a></p>
					<p><img src="image/icons/arrow.png" alt="- "><a href="#"> Map your talent</a></p>
					<p><img src="image/icons/arrow.png" alt="- "><a href="#"> Find my best career</a></p>
					<p><img src="image/icons/arrow.png" alt="- "><a href="#"> What to study after 12th?</a></p>
					<p><img src="image/icons/arrow.png" alt="- "><a href="#"> How to learn ?</a></p>
					
				</div>
			  </div>
           
        </div>
    </div>

    <hr>
    <!-- quick links to suggestions volunteer partnership mi test -->
    <div class="row">

        <div class=" col-md-2  col-lg-2 col-md-offset-1  col-lg-offset-1">
            <p><a class="featurette-image img-responsive img-circle" href="#" class="btn btn-lg btn-success" data-toggle="modal" data-target="#suggestion"><img src="image/icons/suggestion.png" alt="suggestion"  width="140" height="140"></a></p>
        </div>

        <div class="col-md-2 col-lg-2">
            <p><img class="featurette-image img-responsive img-circle" src="image/icons/partnership.bmp" alt="partnership"  width="140" height="140"></p>
        </div>

        <div class="col-md-2 col-lg-2">
            <p><img class="featurette-image img-responsive img-circle" src="image/icons/volunteer.jpg" alt="volunteer"  width="140" height="120"></p>
        </div>

        <div class="col-md-2 col-lg-2">
            <p><img class="featurette-image img-responsive img-circle" src="image/icons/lib.png" alt="volunteer"  width="140" height="120"></p>
        </div>

        <div class="col-md-2 col-lg-2">
            <p><img class="featurette-image img-responsive img-circle" src="image/icons/mitest.jpg" alt="mi test"  width="140" height="140"></p>
        </div>

    </div>

    <hr>

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
                            <label class="col-md-4 control-label">Suggestion</label>
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
