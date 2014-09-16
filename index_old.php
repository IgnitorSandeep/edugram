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
            /* attach a submit handler to the form */
            $("#registration").submit(function(event) {

              /* stop form from submitting normally */
              event.preventDefault();

              /* get some values from elements on the page: */
              //var $form = $( this ),
               //   url = $form.attr( 'action' );

              /* Send the data using post */
              var posting = $.post(
                  'register.php',
                  { email: $('#email').val(), fname: $('#fname').val(), lname: $('#lname').val(),  phone: $('#phone').val(), password: $('#password').val() },
                  success:function() {
                    alert('success');
                  }
              });
            );

              /* Put the results in a div */
              posting.done(function( data ) {
                alert('success');
              }).error('error');
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
		
	</style>
  
</head>
<body>
<?php
	include_once 'header.php';
?>
<div class="container ">
	<div class="row nopadding ">
		<table width="100%" class="nopadding" border="0">
			<tr>
				<td width="75%" valign=top>
					<div class="nopadding1">
						<!-- Carousel
						================================================== -->
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
							
								<!-- Indicators -->
								<ol class="carousel-indicators">
									<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
									<li data-target="#myCarousel" data-slide-to="1"></li>
									<li data-target="#myCarousel" data-slide-to="2"></li>
									<li data-target="#myCarousel" data-slide-to="3"></li>
								</ol>
											
								<!-- Slider Content (Wrapper for slides )-->
								<div class="carousel-inner">
									<div class="item active">
											<img src="image/theme/shirt_900x500.jpg" alt="First slide" >
											<div class="container">
											<div class="carousel-caption">
											  <h1>Choosing Right Career</h1>
											  <p>Choosing the right career can be difficult, but having a defined career direction will help you with getting a job</p>
											  <p><a href="http://edugram.org/theme/choosing_right_career.php" class="btn btn-lg btn-success" >Explore here</a></p>
											</div>
											</div>
									</div>

									<div class="item">
									  <img src="image/theme/talent_900x500.jpg" alt="Second slide" width="900" height="500">
									  <div class="container">
										<div class="carousel-caption">
										  <h1>Honouring Talents</h1>
										  <p>Winning talents got praised by the our main guest</p>
										  <p><a class="btn btn-lg btn-primary" href="http://edugram.org/gallary.php" role="button">Browse gallery</a></p>
										</div>
									  </div>
									</div>
									<div class="item">
									  <img src="image/theme/team_900x500.jpg" alt="Third slide"  width="900" height="500" >
									  <div class="container">
										<div class="carousel-caption">
										  <h1>Our Team</h1>
										  <p>Helping People Take Responsibility</p>
										  <p><a href="#" class="btn btn-lg btn-success" data-toggle="modal" data-target="#joinus">join us</a></p>
										</div>
									  </div>
									</div>
								</div>
								<!-- Controls -->
								<a class="left carousel-control" href="#myCarousel" data-slide="prev">
									<!--span class="glyphicon glyphicon-arrow-left"></span-->
									<span class="glyphicon glyphicon-arrow-left">
										<img src="image/icons/prev.png" alt="prev">
									</span>
								</a>
								<a class="right carousel-control" href="#myCarousel" data-slide="next">
									<!--span class="glyphicon glyphicon-arrow-right"></span-->
									<span class="glyphicon glyphicon-arrow-left">
										<img src="image/icons/next.png" alt="next">
									</span>
								</a>
						</div><!-- /.carousel -->
					</div>
				</td>
				<td width="25%" valign=top>
					<div class="panel">
						<div ><p style="font-weight:bold"><img src="image/icons/new1.png" alt="new" height="40" width="40"/>&nbsp;Recents</p></div>
						 <ul class="list-group">
							<li class="list-group-item"><a href="#">registration forms are available</a></li>
							<li class="list-group-item"><a href="http://www.ncert.nic.in/ncerts/textbook/textbook.htm">Download N.C.E.R.T books here</a></li>
							<li class="list-group-item"><a href="http://www.bgfl.org/bgfl/custom/resources_ftp/client_ftp/ks3/ict/multiple_int/index.htm">Test you multiple intelligence</a></li>
							<li class="list-group-item"><a href="http://www.sarkarinaukriblog.com/2014/06/lateral-vacacnies-in-syndicate-bank.html">Vacancies in Sundicate Bank</a></li>
							<li class="list-group-item"><a href="http://articles.economictimes.indiatimes.com/2014-06-16/news/50623701_1_myntra-e-commerce-flipkart">Massive hiring by flipkart and other e-commerce retailers</a></li>
						 </ul>
					</div>
					<div>                    
						<blockquote>
						  <p>Rejection is devastation but keep trying because there is nothing impossible to them who try.</p>
						  <footer>Sandeep Singh <cite title="Source Title">- Engineer,Samsung Electronics</cite></footer>
						</blockquote>

					</div>
				</td>
			</tr>
		</table>
	</div>
</div>
<div class="container">
	<div class="row">
	
		<div class="col-md-4">
			<h2>About the trust</h2>
			<p>EduGram is a social trust to help under privileged in attaining the education and career they deserve. We help students by providing books, magazines, proper counseling and mentoring.</p>
			<p>It is an initiative taken by few young peoples to empower talent for their career and education. We have active volunteers with expertise in different areas like Science, Literature, Mathematics, Computer/Information Technology and many more.</p>
		</div>
		
		<div class="col-md-4">
			<h2>Why Edugram ?</h2>
			<p>Edugram provides a platform to know your talent.</p>
			<p>It also provide forum for advice and discussion on different areas.</p>
		</div>
		
		<div class="col-md-4">
			<h2>Events</h2>
			<p>EduGram organizes <a href="event_2013.php">"Talent Search Test"</a> every year to interact with students and promote their talents with some awards. Events are like :</p>
			<ul>
			  <li>Talent Search Test</li>
			  <li>Multiple Intelligence Test</li>
			  <li>Science Kit Show</li>
			</ul>
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
					<form class="form-horizontal" role="form" id="registration" name="joinus" method="post">
					
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
							<label class="col-md-4 control-label">Suggestion</label>
							<div class="col-md-8" >
								 <textarea class="form-control" name="suggestion" id="suggestion" rows="3" style="resize: none"></textarea>
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
	
	<div class="navbar navbar-default navbar-fixed-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<p class="navbar-text pull-left">Copyright@2013-14 by <a href="https://www.facebook.com/Edugram.ngo"> EDUGRAM </a></p>
				</div>
				<div class="col-md-6" style="vertical-align:middle;margin-top:15px;display:inline;">
					<div class="row pull-right">
						<div class="col-md-3">
						</div>
						<div class = "col-md-3">
							<!-- facebook -->
							<div id="fb-root"></div>
							<script>(function(d, s, id) {
							  var js, fjs = d.getElementsByTagName(s)[0];
							  if (d.getElementById(id)) return;
							  js = d.createElement(s); js.id = id;
							  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=683956854994786&version=v2.0";
							  fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));</script>
							<div class="fb-like" data-href="https://www.facebook.com/Edugram.ngo" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
						</div>
						<div class = "col-md-2">
							<!-- Place this tag where you want the +1 button to render. -->
							<div class="g-plusone" data-href="https://plus.google.com/102157915902233417764"></div>
							<!-- Place this tag after the last +1 button tag. -->
							<script type="text/javascript">
							  (function() {
								var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
								po.src = 'https://apis.google.com/js/platform.js';
								var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
							  })();
							</script>
						</div>
						<div class ="col-md-3">
							<a href="https://twitter.com/edugramtrust" class="twitter-follow-button" data-show-count="false">Follow @edugramtrust</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>	
						</div>
						<div class="col-md-1">
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
  </body>
</html>
