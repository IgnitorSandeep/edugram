<!DOCTYPE html>
<html>
  <head>
    <title>Edugram | Admin Login</title>
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
	<script src="../js/jquery-1.11.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="../bootstrap-3.0.0/dist/js/bootstrap.min.js"></script>
	
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
		include_once '../header.php';
	?>
	
	<div class="container">
		<div class="row">
			<div class="col-md-offset-4 col-md-4 col-md-offset-4"  style="vertical-align:middle;margin-top:5px;display:inline;">
			
				<form class="form-signin" role="form"  id="adminlogin" name="adminlogin" method="post" action="authenticate.php">
				
					<h2 class="form-signin-heading">Please sign in</h2
					<h2 style="text-align: center;">
						<font color="red" style="text-align: center;">
						<?php
							if(isset($_GET['msg'])){
								echo $_GET['msg'];
							}							
						?>
					</font>
					</h2>
					<input type="email" class="form-control" name="email" id ="email" placeholder="Email address" required autofocus>
					<input type="password" class="form-control"  name="password" id ="password"  placeholder="Password" required>
					<label class="checkbox">
						<input type="checkbox" value="remember-me"> Remember me
					</label>
					<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
					
				</form>
			</div>
		</div>

    </div> <!-- /container -->
	<br/>
	<br/>

	
	<div class="container-fluid navbar-fixed-bottom">
		<?php
			include_once '../footer.php';
		?>
	</div>
	
  </body>
</html>
