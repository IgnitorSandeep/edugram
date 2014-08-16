<!DOCTYPE html>
<html>
  <head>
    <title>Edugram | Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="http://edugram.org/bootstrap-3.0.0/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="bootstrap-3.0.0/assets/js/html5shiv.js"></script>
      <script src="bootstrap-3.0.0/assets/js/respond.min.js"></script>
    <![endif]-->
    <!-- Custom styles for this template -->
	<style>
  <style>
    .nopadding {
	   padding: 0 !important;
	   margin: 0 !important;
	}
	.fb{
		background: url("http://edugram.org/../image/icons/social-icon.png?v=2") no-repeat scroll left top rgba(0, 0, 0, 0);
		display: inline-block;
		height: 29px;
		margin: 0px 3px 0 5px;
		width: 29px;
	}
	.fb:hover {
		background: url("http://edugram.org/../image/icons/social-icon.png?v=2") no-repeat scroll left -29px rgba(0, 0, 0, 0);
		transition: all 0.5s ease 0s;
	}
	
	.twitter{
		background: url("http://edugram.org/../image/icons/social-icon.png?v=2") no-repeat scroll -106px top rgba(0, 0, 0,0);
		display: inline-block;
		height: 29px;
		margin: 0 3px 0 5px;
		width: 29px;
	}
	.twitter:hover {
		background: url("http://edugram.org/../image/icons/social-icon.png?v=2") no-repeat scroll -106px -29px rgba(0, 0,0,0);
		transition: all 0.5s ease 0s;
	}
	
	.google{
		background: url("http://edugram.org/../image/icons/social-icon.png?v=2") no-repeat scroll -70px top rgba(0, 0, 0,0);
		display: inline-block;
		height: 29px;
		margin: 0 3px 0 5px;
		width: 29px;
	}
	.google:hover {
		background: url("http://edugram.org/../image/icons/social-icon.png?v=2") no-repeat scroll -70px -29px rgba(0, 0,0,0);
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
    ul {         
          padding:0 0 0 0;
          margin:0 0 0 0;
    }
    ul li {     
          list-style:none;
          
    }
    ul li img {
          cursor: pointer;
    }
    .modal-body {
          padding:5px !important;
    }
    .modal-content {
          border-radius:0;
    }
    .modal-dialog img {
          text-align:center;
          margin:0 auto;
    }
    .controls{          
        width:50px;
        display:block;
        font-size:11px;
        padding-top:8px;
        font-weight:bold;          
    }
    .next {
        float:right;
        text-align:right;
    }
	/*override modal for demo only*/
	.modal-dialog {
		  max-width:1080px;
		  padding-top: 90px;
	}
	@media screen and (min-width: 768px){
		.modal-dialog {
		  width:720px;
		  padding-top: 90px;
		}     
	}	
  
    @media screen and (max-width:1500px){
	  #ads {
		  display:none;
	  }
    }
	.margin-ul{
		margin-bottom:1px;   
	}
  </style>
  <body>
	<?php
			include_once '../header.php';
	?>
    <div class="container">
        <div class="row" style="border-bottom:1px dashed #ccc;  padding:0 0 0 0; margin-bottom:10px;">
            <h2><span>Gallery</span></h2>
        </div>
        <!-- Adding All ../images to the gallery -->
        <ul class="row">
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 " style="margin-bottom:25px;" >
                <img class="img-responsive" src="../image/gallary/2013/1.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 "style="margin-bottom:25px;">
                <img class="img-responsive" src="../image/gallary/2013/2.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 "style="margin-bottom:25px;">
                <img class="img-responsive" src="../image/gallary/2013/3.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"style="margin-bottom:25px;">
                <img class="img-responsive" src="../image/gallary/2013/4.jpg">
            </li> 
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"style="margin-bottom:25px;">
                <img class="img-responsive" src="../image/gallary/2013/5.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"style="margin-bottom:25px;">
                <img class="img-responsive" src="../image/gallary/2013/6.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"style="margin-bottom:25px;">
                <img class="img-responsive" src="../image/gallary/2013/7.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"style="margin-bottom:25px;">
                <img class="img-responsive" src="../image/gallary/2013/8.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"style="margin-bottom:25px;">
                <img class="img-responsive" src="../image/gallary/2013/9.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"style="margin-bottom:25px;">
                <img class="img-responsive" src="../image/gallary/2013/10.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"style="margin-bottom:25px;">
                <img class="img-responsive" src="../image/gallary/2013/11.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"style="margin-bottom:25px;">
                <img class="img-responsive" src="../image/gallary/2013/12.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"style="margin-bottom:25px;">
                <img class="img-responsive" src="../image/gallary/2013/13.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"style="margin-bottom:25px;">
                <img class="img-responsive" src="../image/gallary/2013/14.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"style="margin-bottom:25px;">
                <img class="img-responsive" src="../image/gallary/2013/15.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"style="margin-bottom:25px;">
                <img class="img-responsive" src="../image/gallary/2013/16.jpg">
            </li>
            <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4"style="margin-bottom:25px;">
                <img class="img-responsive" src="../image/gallary/2013/17.jpg">
            </li>
        </ul>   
		<br><br> 
		
		<!-- Modal for View photo individually -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">         
			  <div class="modal-body">                
			  </div>
			</div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
              
    </div> <!-- /container -->
	<?php
		include_once '../footer.php';
	?>
	
   </body>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="http://edugram.org/js/jquery-1.11.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="http://edugram.org/bootstrap-3.0.0/dist/js/bootstrap.min.js"></script>
   <script>
        $(document).ready(function(){        
            $('li img').on('click',function(){
                var src = $(this).attr('src');
                var img = '<img src="' + src + '" class="img-responsive"/>';
               
                //start of new code new code
                var index = $(this).parent('li').index();   
                
                var html = '';
                html += img;                
                html += '<div style="height:25px;clear:both;display:block;">';
                html += '<a class="controls next" href="'+ (index+2) + '">next &raquo;</a>';
                html += '<a class="controls previous" href="' + (index) + '">&laquo; prev</a>';
                html += '</div>';
                
                $('#myModal').modal();
                $('#myModal').on('shown.bs.modal', function(){
                    $('#myModal .modal-body').html(html);
                    //new code
                    $('a.controls').trigger('click');
                })
                $('#myModal').on('hidden.bs.modal', function(){
                    $('#myModal .modal-body').html('');
                });
           });
        
        })
        
        //new code
        $(document).on('click', 'a.controls', function(){
            var index = $(this).attr('href');
            var src = $('ul.row li:nth-child('+ index +') img').attr('src');             
            
            $('.modal-body img').attr('src', src);
            
            var newPrevIndex = parseInt(index) - 1; 
            var newNextIndex = parseInt(newPrevIndex) + 2; 
            
            if($(this).hasClass('previous')){               
                $(this).attr('href', newPrevIndex); 
                $('a.next').attr('href', newNextIndex);
            }else{
                $(this).attr('href', newNextIndex); 
                $('a.previous').attr('href', newPrevIndex);
            }
            
            var total = $('ul.row li').length + 1; 
            //hide next button
            if(total === newNextIndex){
                $('a.next').hide();
            }else{
                $('a.next').show()
            }            
            //hide previous button
            if(newPrevIndex === 0){
                $('a.previous').hide();
            }else{
                $('a.previous').show()
            }
            return false;
        });

    </script>
	
</html>
