<?php
	session_start();
	$link;
	if(isset($_SESSION['username'])){  
		//echo $_SESSION['username'];
		$link = mysql_connect ("db-server", "db-user","db-pass")  or die (mysql_error());
		mysql_select_db ("edugrmq5_db",$link);
	}else{
			header('Location: index.php');
	}
	$isupdated=0;
	if(isset($_POST['submit'])){
		//1 for updated into the database
		for($i=1;$i<=8;$i++){
			$news="news-".$i;
			$link1="link-".$i;
			$sql="UPDATE recents ".
				 "SET title='$_POST[$news]',".
				 "link='$_POST[$link1]' ".
				 "where _id= $i;";
			//echo $sql;
			$retval = mysql_query( $sql, $link );
			if(! $retval )
			{
				//2 for error occured in the database
				$isupdated=2;
				break;
			}
		}
		$isupdated=1;
	}else{
		//3 --> submit button not clicked ! 
		$isupdated=3;
	}
	
 
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin | Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/plugins/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	 .nopadding {
            padding: 0 !important;
            margin: 0 !important;
        }
	
	</style>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">Welcome,
				<?php 
					if(isset($_SESSION['user'])){
						echo $_SESSION['user'];
					}else{
						echo 'User';
					}  
				?>
				</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
					<!-- this is to update from database-->
                    <ul class="dropdown-menu dropdown-messages">
							<?php
							mysql_connect ("db-server", "db-user","db-pass")  or die (mysql_error());
							mysql_select_db ("edugrmq5_db");
							$sql = mysql_query("select email,query,time from contactus order by time desc limit 3");

							while ($row = mysql_fetch_array($sql)){
								
								?>
								<li>
									<a href="#">
										<div>
											<strong><?php echo $row['email']; ?></strong>
											<span class="pull-right text-muted">
												<em><?php echo $row['time']; ?></em>
											</span>
										</div>
										<div><?php echo $row['query']; ?></div>
									</a>
								  </li>
								<li class="divider"></li>
								<?php
							}
						?>
                        <li id="queries1">
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
               
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                      
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                      
                        <li>
                            <a class="active" href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
						<li id="members1">
                            <a href="#" ><i class="fa fa-user fa-fw "></i>New Members</a>
                        </li>
						<li id="queries3">
                            <a href="#" ><i class="fa fa-comments fa-fw"></i>Queries</a>
                        </li>
						<li id="suggestion">
                            <a href="#" ><i class="fa fa-table fa-fw disabled"></i> Suggestions</a>
                        </li>
                        <li>
                            <a href="dashboard.php"><i class="fa fa-edit fa-fw"></i>Manage Recent News</a>
                        </li>
						<li>
                            <a href="#"><i class="fa fa-money fa-fw disabled"></i> Donations</a>
                        </li> 
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
			<br/>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
								
								<div class="col-xs-9 text-right">
                                    <div class="huge"><?php
								$result = mysql_query("select * from contactus where isreplied=0",$link);
								$num_rows=mysql_num_rows($result);
								echo $num_rows;
								?></div>
                                    <div>Queries!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#" id="queries2">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php
								$result = mysql_query("select * from volunteers where isverified=0",$link);
								$num_rows=mysql_num_rows($result);
								echo $num_rows;
								?></div>
                                    <div>New Members!</div>
                                </div>
                            </div>
                        </div>
                        <a  href="#" id="members">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
									<?php 
									$result = mysql_query("select * from service where isverified=0",$link);
									$num_rows=mysql_num_rows($result);
									echo $num_rows;
									?>
									</div>
                                    <div>New Service Requests!</div>
                                </div>
                            </div>
                        </div>
                        <a  href="#" id="services">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
               
            </div>
            <!-- /.row -->
			
			<div class="row">
				<div class="col-lg-12" id="updateme" style="overflow: auto;" >
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>Update Recent News</h4>
						</div>
						<!-- /.panel-heading -->
						<div class="panel-body" style="min-height:300px;">
							<div>
							<?php
								if($isupdated==1){
									echo"<p>Recent News Updated Successfully!</p>"	;							
								}
								else if ($isupdated==2){
									echo"<p>Oops! Something went wrong while updating database :( </p>"	;	
								}
							?>
							</div>
							<div>
								<form method="post" action="dashboard.php" >		
									<table class="table table-condensed">
									    <thead>

											<tr>

												<th>News ID</th>

												<th>Title</th>

												<th>Link</th>

											</tr>

										</thead>
																		<?php
										$result = mysql_query("select * from recents where verified=1 order by _id",$link);
										$count=1;
										while ($row = mysql_fetch_array($result)){
											
											?>
											<tr>
												<td>
													<label name="<?php echo "label-".$count;?>"><?php echo $count;?></label>
												</td>
												<td>
													<input type="text" name="<?php echo "news-".$count; ?>" value="<?php echo $row['title'] ?>" style="width:100%;">
												</td>
												<td>
													<input type="text" name="<?php echo "link-".$count;?>" value="<?php echo $row['link'] ?>" style="width:100%;">
												</td>
											</tr>
											 <?php
											
											$count++;
										}
						
									?>
									<tr><td>
										<input type="submit" name="submit">
									</td></tr>
									</table>
								</form>
							</div>
						</div>
						<!-- /.panel-body -->
					</div>
					<!-- /.panel -->
				</div>
			</div>
			<!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
	
	<div class="container-fluid nopadding">
		<?php
			include_once '../footer.php';
		?>
	</div>
	
    <!-- /#wrapper -->
	
    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>
	

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>
	<script>
	$( "#queries1" ).click(function() {
		$( "#updateme" ).load('queries.php' );
	});
	$( "#queries2" ).click(function() {
		$( "#updateme" ).load('queries.php' );
	});
	$( "#queries3" ).click(function() {
		$( "#updateme" ).load('queries.php' );
	});
	$( "#members" ).click(function() {
		$( "#updateme" ).load('members.php' );
	});
	$( "#members1" ).click(function() {
		$( "#updateme" ).load('members.php' );
	});
	$( "#suggestion" ).click(function() {
		$( "#updateme" ).load('suggestions.php' );
	});
	</script>
	

</body>

</html>
