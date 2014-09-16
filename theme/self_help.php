<!DOCTYPE html>
<html>
  <head>
    <title>Edugram | Self Help Group</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="http://edugram.org/bootstrap-3.0.0/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="/edugram/bootstrap/js/html5shiv.js"></script>
      <script src="/edugram/bootstrap/js/respond.min.js"></script>
    <![endif]-->
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
		.teammate{
		height:390px;
		}
		.teamsectionhgt{
		padding:20px; 
		}
	</style>
</head>

<body>
	<?php
		include'../header.php';
	?>		
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<h2><span>Self Help Group For Studies </span></h2>
				<p>	
				We all face problems in life and at some course time it get resolve.But while facing initially almost all problem seems like difficult but when it resolve we get that it was very easy to handle them.So we all are experience with solving real life problem.				
				</p>
				<p>
				Same happens during studies, when we start every academic year we found subjects difficult enough but when we done with it.we found it little easier  than it was.<br>
				</p>
				<p>
				A student can easily help a student there in lower class to him.So students can help each other by making a <strong>self help group for studies</strong>.
				</p>
			</div>
			<div class="col-md-6 col-lg-6 teamsectionhgt">
				<div class="row">
					<div class="col-md-12 teammate"style="background:url(../image/theme/support-group-logo.jpg) center center; background-size:cover;"></div>
				</div>
				<div class="row">
					<br/>
					<blockquote >
					  <p>Great opportunities to help others seldom come, but small ones surround us every day.</p>
					  <footer>Sally Koch<cite title="Source Title">Source Title</cite></footer>
					</blockquote>
				</div>
			</div>
		</div>
	</div>
	
	<?php
		include_once '../footer.php';
	?>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="http://edugram.org/js/jquery-1.11.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="http://edugram.org/bootstrap-3.0.0/dist/js/bootstrap.min.js"></script>
  </body>
</html>
