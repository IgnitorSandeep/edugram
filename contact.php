
<!DOCTYPE html>
<html>
<head>
    <title>Edugram | Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="http://edugram.org/bootstrap-3.0.0/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="bootstrap-3.0.0/assets/js/html5shiv.js"></script>
    <script src="bootstrap-3.0.0/assets/js/respond.min.js"></script>
    <![endif]-->
    <!-- Script for adding Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.0.0/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        (function() {
            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
            po.src = 'https://apis.google.com/js/plusone.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
        })();
    </script>
    <script>
        function initialize() {
            var map_canvas = document.getElementById('map_canvas');
            var my_loc = new google.maps.LatLng(26.774704, 83.852343);
            var map_options = {
                center: my_loc,
                zoom: 8,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(map_canvas, map_options)
            var marker = new google.maps.Marker({
                position: my_loc,
                map: map,
                title: 'Edugram Office,Naika Chhapara'
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);

    </script>
    <script type='text/javascript'>
        $(document).ready(function() {
            /* attach a submit handler to the form */
            $("#form1").submit(function(event) {

                /* stop form from submitting normally */
                event.preventDefault();

                /* get some values from elements on the page: */
                // var $form = $( this ),
                var $url = 'verify.php';

                /* Send the data using post */
                var posting = $.post( url, { name: $('#name').val(), email: $('#email').val(), phone: $('#phone').val(), country: $('#country').val(), query: $('#query').val() },  success:function() {
                    $("#message").html("submitted");
                } );

                /* Put the results in a div */
                posting.done(function( data ) {
                   $("#message").html("submitted");
                });
            });
        });
        $("#form1").submit(function(event) {

            /* stop form from submitting normally */
            event.preventDefault();

            /* get some values from elements on the page: */
            // var $form = $( this ),
            var $url = 'verify.php';

            /* Send the data using post */
            var posting = $.post( url, { name: $('#name').val(), email: $('#email').val(), phone: $('#phone').val(), country: $('#country').val(), query: $('#query').val() },  success:function() {
                $("#message").html("submitted");
            } );

            /* Put the results in a div */
            posting.done(function( data ) {
                $("#message").html("submitted");
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
        .main h1{
            vertical-align:centre;
            color:red;
        }
        #map_canvas {
            width: 100%;
            height: 380px;
        }
    </style>
</head>
<body>
<?php
include_once 'header.php';
?>
<div class="container">
    <div class="row ">
        <h1 align="center">Mail us, call us or reach us in person</h1>
    </div>
    <div class="row ">
        <div class="col-md-6">
            <div class="row" id="message" style="text-align: center;">
                <font color="red" style="text-align: center;">
                    <?php
                    if(isset($_GET['err'])){
                        echo $_GET['err'];
                    }
                    ?>
                </font>
            </div>
            <form class="form-horizontal" role="form" id="form1" name="contactus" method="post" action="verify.php">



                <div class="form-group">
                    <label for="email" class="col-md-2 control-label">Email</label>
                    <div class="col-md-8">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                    </div>
                </div>

                <div class="form-group">
                    <label for="name" class="col-md-2 control-label">Name</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>
                </div>

                <div class="form-group">
                    <label for="Phone" class="col-md-2 control-label">Phone</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="phone"  name="phone" placeholder="Phone">
                    </div>
                </div>

                <div class="form-group">
                    <label for="country" class="col-md-2 control-label">Country</label>
                    <div class="col-md-8">
                        <select id="country" name="country">
                            <option>India</option>
                            <option>Russia</option>
                            <option>USA</option>
                            <option>UK</option>
                            <option>Autralia</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="desc" class="col-md-2 control-label">Message</label>
                    <div class="col-md-8">
                        <textarea name="query" id="query" rows="5" cols="50" style="resize: none;width=100%;" width="100%"></textarea>
                    </div>
                </div>

                <!-- this is for captcha for robot attack safety -->
                <div class="form-group">
                    <label for="country" class="col-md-2 control-label"></label>
                    <div class="col-md-8">
                        <?php
							require_once('recaptcha-php/recaptchalib.php');
							$publickey = "6Leg9_MSAAAAAOfPiOM0v3NDQ7zJwf4A71w29xsH"; // you got this from the signup page
							echo recaptcha_get_html($publickey);
						?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-8">
                        <button type="submit" class="btn btn-default" value="submit">Submit</button>
                    </div>
                </div>

            </form>
            <br/>
            <br/>
            <br/>
        </div>

        <div class="col-md-6">
            <div class="row ">
                <address>
                    <strong>Edugram Office</strong><br>
                    Middle School<br>
                    Naikachhapara, UP - 274206<br>
                    <abbr title="Phone">P:</abbr> (+91) 8802747708
                </address>
            </div>
            <br/>
            <div class="row">
                <strong>Locate us </strong>
                <!--
                Google Map Canvas To Locate Address
                =========================================-->
                <div id="map_canvas"></div>
            </div>
            <br/>
        </div>
    </div>
</div><!-- End of container div-->
<div class="container-fluid nopadding">
	<div class="row-fluid">
		<?php
			include_once 'footer.php';
		?>
	</div><!-- end row fluid -->
</div><!-- end containerfluid -->
</body>
</html>
