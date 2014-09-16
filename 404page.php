<!DOCTYPE html>
<html>
<head>
    <title>Page Not Found</title>
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
<div class="container-fluid">

<?php
include_once 'header.php';
?>
</div>
<div class="container-fluid nopadding" style="background: none repeat scroll 0 0 #0689d8;border-bottom: 1px solid black;margin-top:0px;">
	<div class="row-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				  <h1 style="color: white;">404 Error Page Not Found</h1>
				  <div class="short-description" style="color: white;">
					<h3>The requested page could not be found.</h3>
				  </div>
				</div> <!-- close col-md-12 -->
				<br/>
			</div>
		</div>
	</div> <!-- close row-fluid -->
</div> <!-- close container -->
<div class="container" style="min-height: 440px" >

	<div class="row-fluid">
	
	</div>

</div>

<div class="container-fluid nopadding navbar navbar-fixed-bottom">
	<?php
	include_once 'footer.php';
	?>
</div>

</body>
</html>
