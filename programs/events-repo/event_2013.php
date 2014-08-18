<!DOCTYPE html>
<html>
  <head>
    <title>Edugram | Events</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap-3.0.0/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="bootstrap-3.0.0/assets/js/html5shiv.js"></script>
      <script src="bootstrap-3.0.0/assets/js/respond.min.js"></script>
    <![endif]-->
	<style>
	.teammate{
	height:320px;
	}
	.teamsectionhgt{
	padding:20px; 
	}
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
				include '../header.php';
			?>
        <div class="container">  
			
			<div class="row">
				<div class="col-md-7">
					<h2 class="featurette-heading">What was it? <span class="text-muted"> A Gental Initiative</span></h2>
					<p class="lead">Edugram has successfully organized a innovative apptitude test
					  and Multiple Intelligence Test in village - Naikachhapara/Amarpur
					  in a middle school situated in Naikachhapar.
					  There were around 300 students have participated into this event
					  and winning talents got honoured with presents.We are really thankful
					  of people have co-ordinates to make this event successful.
					</p>
				</div>
				<div class="col-md-5" style="margin-top:15px;">
					<img src="image/event/team.jpg" class="featurette-image img-responsive"  alt="500x500">
				</div>
			</div>
    
			<hr class="featurette-divider">
			<div class="row">
				<div class="col-md-5">
				  <img src="image/event/career.jpg" class="featurette-image img-responsive"  alt="500x500">
				</div>
				<div class="col-md-7">
				  <h2 class="featurette-heading">What to study ? <span class="text-muted">Let's Disscuss !</span></h2>
				  <p class="lead">Each students has a unique talent.
				  Depending on the particular talent one can become be a<strong>"Master"</strong>.
				  For being a master, you should know what is your weakness and strengths ?<br/>
				  Weakness and  Strength depends on individual IQ.
				  So we calculated multiple intelligences among students participated in event on Howard Gardner's multiple intelligence theories model.</p>
				</div>
			</div>
    
			<hr class="featurette-divider">
    
			<div class="row featurette">
				<div class="col-md-7">
				  <h2 class="featurette-heading">How to learn ? <span class="text-muted">Self Help Group !</span></h2>
				  <p class="lead">We all experience problem throughout the life but sometimes we get it solve very easily.
				  These experience with problems and solution can be helpful for others.
				  So best way of learning is group study.<br/>
				  To test students ability into their academic,we also organized general test which covers syllabus.
				  We honoured recognized talents with presents.
				  </p>
				</div>
				<div class="col-md-5">
				  <img src="image/event/talent.jpg" class="featurette-image img-responsive" alt="500x500">
				</div>
			</div>
			<!-- /END THE FEATURETTES -->
        </div><!-- /.container -->
		<br/>
		<div class="container-fluid">
			<?php
			include_once '../footer.php';
			?>
		</div>   
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="ev_files/jquery.js"></script>
        <script src="ev_files/bootstrap.js"></script>
        <script src="ev_files/docs.js"></script>
      
    
    </body></html>