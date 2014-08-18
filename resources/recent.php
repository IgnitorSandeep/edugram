<!DOCTYPE html>
<html>
  <head>
    <title>Edugram | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="bootstrap/css/normalize.css" rel="stylesheet" media="screen">
    <!-- Bootstrap -->
    <link href="bootstrap-3.0.0/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="bootstrap-3.0.0/assets/js/html5shiv.js"></script>
      <script src="bootstrap-3.0.0/assets/js/respond.min.js"></script>
    <![endif]-->
    <!-- Custom styles for this template -->
	<style >
	.slider-size {
	height: 450px; //This is your slider height
	width: 100%;
	}
	</style>
</head>
<body>
<div class="container">
	<div class="row">  
		<div class="col-lg-12">
			<?php
				include_once '../header.php';
			?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="col-lg-12">
			<!-- Carousel
			================================================== -->
			<div id="fixed" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
				<li data-target="#fixed" data-slide-to="0" class="active"></li>
				<li data-target="#fixed" data-slide-to="1"></li>
				<li data-target="#fixed" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
				<div class="item active">
				  <div style="background:url(image/theme/shirt.jpg) center center; background-size:cover;" class="slider-size">
				  <div class="carousel-caption">
					<h1>Choosing Right Career</h1>
					<p>Choosing the right career can be difficult, but having a defined career direction will help you with getting a job</p>
					<p><a href="#" class="btn btn-lg btn-success" data-toggle="modal" data-target="#">Explore here</a></p>
				  </div>
				  </div>
				</div>
				<div class="item">
				  <div style="background:url(image/theme/talent.jpg) center center; background-size:cover;" class="slider-size">
				  <div class="carousel-caption">
					<h1>Honouring Talents</h1>
					<p>Winning talents got praised by the our main guest</p>
					<p><a class="btn btn-lg btn-primary" href="gallary.php" role="button">Browse gallery</a></p>
				  </div>
				  </div>
				</div>
				<div class="item">
				  <div style="background:url(image/theme/team.jpg) center center; background-size:cover;" class="slider-size">
				  <div class="carousel-caption">
					<h1>Our Team</h1>
					<p>Helping People Take Responsibility</p>
					<p><a href="#" class="btn btn-lg btn-success" data-toggle="modal" data-target="#joinus">join us</a></p>
				  </div>
				  </div>
				</div>
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="javascript:void(0)" data-slide="prev" data-target="#fixed">
				<span class="glyphicon glyphicon-chevron-left"><</span>
			  </a>
			  <a class="right carousel-control" href="javascript:void(0)" data-slide="next" data-target="#fixed">
				<span class="glyphicon glyphicon-chevron-right">></span>
			  </a>
			</div>
		</div>
	</div>
	
	<div class="row">
	
		<div class="col-lg-4">
			<h2>About the trust</h2>
			<p>EduGram is a social trust to help under privileged in attaining the education and career they deserve. We help students by providing books, magazines, proper counseling and mentoring.</p>
			<p>It is an initiative taken by few young peoples to empower talent for their career and education. We have active volunteers with expertise in different areas like Science, Literature, Mathematics, Computer/Information Technology and many more.</p>
		</div>
		
		<div class="col-lg-4">
			<h2>Why Edugram ?</h2>
			<p>Edugram provides a platform to know your talent.</p>
			<p>It also provide forum for advice and discussion on different areas.</p>
		</div>
		
		<div class="col-lg-4">
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
	
	<div class="row barone">
	
		<div class="col-lg-2">
			<p><img src="image/suggestion.png" alt="suggestion"  width="140" height="140"></p>
		</div>
		
		<div class="col-lg-2">
			<p><img src="image/volunteer.jpg" alt="volunteer"  width="140" height="120"></p>
		</div>
		
		<div class="col-lg-2">
			<p><img src="image/partnership.bmp" alt="partnership"  width="140" height="140"></p>
		</div>
		
		<div class="col-lg-2">
			<p><img src="image/mitest.jpg" alt="mi test"  width="140" height="140"></p>
		</div>
		
		<div class="col-lg-2">
			<p><img src="image/library.jpg" alt="library"  width="130" height="130"></p>
		</div>
		
		<div class="col-lg-2">
			<p><img  src="image/donate.png" alt="donate"  width="160" height="80"></p>
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
						<label for="email" class="col-lg-4 control-label">Email</label>
						<div class="col-lg-8">
							 <input type="email" class="form-control" name="email" id="email" placeholder="Email">
						</div>
					</div>
					  
					<div class="form-group">
						<label for="name" class="col-lg-4 control-label">First Name</label>
						<div class="col-lg-8">
							 <input type="text" class="form-control" id="fname" name="fname" placeholder="Name">
						</div>
					</div>
						
					<div class="form-group">
						<label for="name" class="col-lg-4 control-label">Last Name</label>
						<div class="col-lg-8">
							 <input type="text" class="form-control" id="lname" name="lname" placeholder="Name">
						</div>
					</div>
						
					<div class="form-group">
						<label for="Phone" class="col-lg-4 control-label">Phone</label>
						<div class="col-lg-8">
							 <input type="text" class="form-control" id="phone"  name="phone" placeholder="Phone">
						</div>
					</div>
						
					<div class="form-group">
						<label for="password" class="col-lg-4 control-label">	Password:</label>
						<div class="col-lg-8">
							<input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
							<p class="help-block">
								Min: 6 characters (Alphanumeric only)
							</p>
						</div>
					</div>
				
					<div class="form-group">
						<label for="password" class="col-lg-4 control-label">	Retype Password:</label>
						<div class="col-lg-8">
							<input type="password" class="form-control" id="repassword" name="repassword"placeholder="Enter Password">
							<p class="help-block">
								Min: 6 characters (Alphanumeric only)
							</p>
						</div>
					</div>
						
					<!-- this is for captcha for robot attack safety -->
					<div class="form-group">
						<label for="country" class="col-lg-4 control-label"></label>
						<div class="col-lg-8">
							 <?php
								require_once('recaptcha-php/recaptchalib.php');
								$publickey = "6Leg9_MSAAAAAOfPiOM0v3NDQ7zJwf4A71w29xsH"; // you got this from the signup page
								echo recaptcha_get_html($publickey);
							?>
						</div>
					</div>
				  
					<div class="form-group">
						<div class="col-lg-offset-4 col-lg-4">
							<button type="submit" class="btn btn-success">Submit</button>
						</div>
						<div class="col-lg-offset-2 col-lg-2">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					</div>
					
				</form>
				
			  </div>
			</div>
		</div>
	</div><!-- Join Us Ends Here -->
	
	<!-- Copyright Notice -->
	<div class="row">
		<div class="navbar navbar-default navbar-fixed-bottom">
			<div class="container">
				<p class="navbar-text pull-left">Copyright@2013-14 by <a href="https://www.facebook.com/developer.edugram">Edugram Developers</a></p>
			</div>
		</div>
	</div>
	 
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="bootstrap-3.0.0/dist/js/bootstrap.min.js"></script>
  </body>
</html>
