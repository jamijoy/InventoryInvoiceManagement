<!DOCTYPE html>
<html lang="en">
<?php session_start();?>
<head>

	    <!-- ==============================================
		Title and Meta Tags
		=============================================== -->
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blu Fashion BD - Notification</title>
		<meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta property="og:title" content="" />
        <meta property="og:url" content="" />
        <meta property="og:description" content="" />		
		
		<!-- ==============================================
		Favicons
		=============================================== --> 
		<link rel="icon" href="assets/img/logo.html">
		<link rel="apple-touch-icon" href="img/favicons/apple-touch-icon.html">
		<link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.html">
		<link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.html">
		
	    <!-- ==============================================
		CSS
		=============================================== -->
        <link type="text/css" href="assets/css/demos/photo.css" rel="stylesheet" />
				
		<!-- ==============================================
		Feauture Detection
		=============================================== -->
		<script src="assets/js/modernizr-custom.html"></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->	
		
  </head>

<body>

     <!-- ==============================================
     Navigation Section
     =============================================== -->  
     <header class="tr-header">
      <nav class="navbar navbar-default">
       <div class="container-fluid">
	    <div class="navbar-header">
		 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
		  <span class="sr-only">Toggle navigation</span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		 </button>
		 <a class="navbar-brand" href="bf_home.html">Blu Fashion</a>
		</div><!-- /.navbar-header -->
		<div class="navbar-left">
		 <div class="collapse navbar-collapse" id="navbar-collapse">
		  <ul class="nav navbar-nav">
		  </ul>
		 </div>
		</div><!-- /.navbar-left -->
		<div class="navbar-right">                          
		 <ul class="nav navbar-nav">
		   <li>
		   <div class="search-dashboard">
               <form>
                    <input placeholder="Search Product Here" type="text">
                    <button type="submit"><i class="fa fa-search"></i></button>
               </form>
          </div>							
		   </li>

		   <li class="dropdown notification-list">
		    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
			 <i class="fa fa-bell noti-icon"></i>
			 <span class="badge badge-danger badge-pill noti-icon-badge">4</span>
			</a>
			<div class="dropdown-menu dropdown-menu-right dropdown-lg">
             
			 <div class="dropdown-item noti-title">
			  <h6 class="m-0">
			   <span class="pull-right">
			    <a href="#" class="text-dark"><small>Clear All</small></a> 
			   </span>Notification
			  </h6>
			 </div>

			 <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 416.983px;">
			  <div class="slimscroll" style="max-height: 230px; overflow: hidden; width: auto; height: 416.983px;">
			   <div id="Slim">
			    <a href="javascript:void(0);" class="dropdown-item notify-item">
				 <div class="bg-success"></div>
				 <p class="notify-details">Your product has been added<small class="text-muted">1 min ago</small></p>
				</a><!--/ dropdown-item-->
				<a href="javascript:void(0);" class="dropdown-item notify-item">
				 <div class="bg-success"></div>
				 <p class="notify-details">Your product has been added<small class="text-muted">5 min ago</small></p>
				</a><!--/ dropdown-item-->
				<a href="javascript:void(0);" class="dropdown-item notify-item">
				 <div class="bg-success"></div>
				 <p class="notify-details">Your product has been added<small class="text-muted">7 min ago</small></p>
				</a><!--/ dropdown-item-->
				<a href="javascript:void(0);" class="dropdown-item notify-item">
				 <div class="bg-success"></div>
				 <p class="notify-details">Your product has been added<small class="text-muted">13 min ago</small></p>
				</a><!--/ dropdown-item-->
			   </div><!--/ .Slim-->
			   <div class="slimScrollBar" style="background: rgb(158, 165, 171) none repeat scroll 0% 0%; width: 8px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div>
			   <div class="slimScrollRail" style="width: 8px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div>
			  </div><!--/ .slimscroll-->
			 </div><!--/ .slimScrollDiv-->
			 <a href="photo_notifications.html" class="dropdown-item text-center notify-all">
			  View all <i class="fa fa-arrow-right"></i>
			 </a><!-- All-->
            </div><!--/ dropdown-menu-->
		   </li>

		   
		  
		 <li class="dropdown mega-avatar">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		   <span class="avatar w-32"><img src="assets/img/users/2.jpg" class="img-resonsive img-circle" width="25" height="25" alt="..."></span>
		   <!-- hidden-xs hides the username on small devices so only the image appears. -->
		   <span class="hidden-xs">
			<?php echo $_SESSION["username"]; ?>
		   </span>
		  </a>
		  <div class="dropdown-menu w dropdown-menu-scale pull-right">
		   <a class="dropdown-item" href="profile.php"><span>Profile</span></a> 
		   <a class="dropdown-item" href="#"><span>Settings</span></a> 
		   <a class="dropdown-item" href="#">Need help?</a> 
		   <div class="dropdown-divider"></div>
		   <a class="dropdown-item" href="index.html">Sign out</a>
		  </div>
		 </li><!-- /navbar-item -->	
		 
		 </ul><!-- /.sign-in -->   
		</div><!-- /.nav-right -->
       </div><!-- /.container -->
      </nav><!-- /.navbar -->
     </header><!-- Page Header --> 
  
	 <!-- ==============================================
	 Navbar Second Section
	 =============================================== -->
	<section class="nav-sec">
	  <div class="d-flex justify-content-between">
	   <div class="p-2 nav-icon-lg dark-black">
	   <a class="nav-icon" href="bf_home.php"><em class="fa fa-home"></em>
		<span>Home</span>
	   </a>
	   </div>
	   <div class="p-2 nav-icon-lg clean-black">
	   <a class="nav-icon" href="product.php"><em class="fa fa-crosshairs"></em>
		<span>Add Product</span>
	   </a>
	   </div>
	   <div class="p-2 nav-icon-lg mint-green">
	   <a class="nav-icon" href="notification.php"><em class="fa fa-bell noti-icon"></em>
		<span>Notification</span>
	   </a>
	   </div>
	   <div class="p-2 nav-icon-lg clean-black">
	   <a class="nav-icon" href="invoice.php"><em class="fa fa-align-left"></em>
		<span>Invoice</span>
	   </a>
	   </div>
	   <div class="p-2 nav-icon-lg dark-black">
	   <a class="nav-icon" href="profile.php"><em class="fa fa-user"></em>
		<span>Blue Fashion User Account</span>
	   </a>
	   </div>
	  </div>
	</section>		
  
	 <!-- ==============================================
	 Profile News Feed Section
	 =============================================== --> 
	 <section class="newsfeed">
	  <div class="container-fluid">
	   <div class="row">
		
		
	    <div class="col-lg-6">
		
         <div class="cardbox">
		 
          <div class="cardbox-heading">
           <!-- START dropdown-->
           <div class="dropdown pull-right">
            <button class="btn btn-secondary btn-flat btn-flat-icon" type="button" data-toggle="dropdown" aria-expanded="false">
		     <em class="fa fa-ellipsis-h"></em>
			</button>
            <div class="dropdown-menu dropdown-scale dropdown-menu-right" role="menu" style="position: absolute; transform: translate3d(-136px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
	         <a class="dropdown-item" href="#">Dismiss</a>
			 <a class="dropdown-item" href="#">Remove Notification</a>
            </div>
           </div><!--/ dropdown -->
           <!-- END dropdown-->
           <div class="media m-0">
            
            <div class="media-body">
             <p class="m-0">1 Product has been added</p>
			 <small><span>15/3/2020 08:50 PM</span></small>
            </div>
           </div><!--/ media -->
          </div><!--/ cardbox-heading -->
		  
		  <div class="cardbox-item">
		   <span>
			   <a href="#myModal" data-toggle="modal">
			   <center>
				Something About the notification.
				</center>
			   </a> 
			</span>
          </div><!--/ cardbox-item -->	
        
		 </div><!--/ cardbox -->
		
         <div class="cardbox">
		 
          <div class="cardbox-heading">
           <!-- START dropdown-->
           <div class="dropdown pull-right">
            <button class="btn btn-secondary btn-flat btn-flat-icon" type="button" data-toggle="dropdown" aria-expanded="false">
		     <em class="fa fa-ellipsis-h"></em>
			</button>
            <div class="dropdown-menu dropdown-scale dropdown-menu-right" role="menu" style="position: absolute; transform: translate3d(-136px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
	         <a class="dropdown-item" href="#">Dismiss</a>
			 <a class="dropdown-item" href="#">Remove Notification</a>
            </div>
           </div><!--/ dropdown -->
           <!-- END dropdown-->
           <div class="media m-0">
            
            <div class="media-body">
             <p class="m-0">1 Product has been added</p>
			 <small><span>15/3/2020 08:50 PM</span></small>
            </div>
           </div><!--/ media -->
          </div><!--/ cardbox-heading -->
		  
		  <div class="cardbox-item">
		   <span>
			   <a href="#myModal" data-toggle="modal">
			   <center>
				Something About the notification.
				</center>
			   </a> 
			</span>
          </div><!--/ cardbox-item -->	
        
		 </div><!--/ cardbox -->
		 
		 <div class="cardbox">
		 
          <div class="cardbox-heading">
           <!-- START dropdown-->
           <div class="dropdown pull-right">
            <button class="btn btn-secondary btn-flat btn-flat-icon" type="button" data-toggle="dropdown" aria-expanded="false">
		     <em class="fa fa-ellipsis-h"></em>
			</button>
            <div class="dropdown-menu dropdown-scale dropdown-menu-right" role="menu" style="position: absolute; transform: translate3d(-136px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
	         <a class="dropdown-item" href="#">Dismiss</a>
			 <a class="dropdown-item" href="#">Remove Notification</a>
            </div>
           </div><!--/ dropdown -->
           <!-- END dropdown-->
           <div class="media m-0">
            
            <div class="media-body">
             <p class="m-0">1 Product has been added</p>
			 <small><span>15/3/2020 08:50 PM</span></small>
            </div>
           </div><!--/ media -->
          </div><!--/ cardbox-heading -->
		  
		  <div class="cardbox-item">
		   <span>
			   <a href="#myModal" data-toggle="modal">
			   <center>
				Something About the notification.
				</center>
			   </a> 
			</span>
          </div><!--/ cardbox-item -->	
        
		 </div><!--/ cardbox -->
		 
		 <div class="cardbox">
		 
          <div class="cardbox-heading">
           <!-- START dropdown-->
           <div class="dropdown pull-right">
            <button class="btn btn-secondary btn-flat btn-flat-icon" type="button" data-toggle="dropdown" aria-expanded="false">
		     <em class="fa fa-ellipsis-h"></em>
			</button>
            <div class="dropdown-menu dropdown-scale dropdown-menu-right" role="menu" style="position: absolute; transform: translate3d(-136px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
	         <a class="dropdown-item" href="#">Dismiss</a>
			 <a class="dropdown-item" href="#">Remove Notification</a>
            </div>
           </div><!--/ dropdown -->
           <!-- END dropdown-->
           <div class="media m-0">
            
            <div class="media-body">
             <p class="m-0">1 Product has been added</p>
			 <small><span>15/3/2020 08:50 PM</span></small>
            </div>
           </div><!--/ media -->
          </div><!--/ cardbox-heading -->
		  
		  <div class="cardbox-item">
		   <span>
			   <a href="#myModal" data-toggle="modal">
			   <center>
				Something About the notification.
				</center>
			   </a> 
			</span>
          </div><!--/ cardbox-item -->	
        
		 </div><!--/ cardbox -->
		
		</div><!--/ col-lg-6 -->
<!--
		<div class="col-lg-3">
		

			<div class="trending-box">
			 <div class="row">
			  <div class="col-lg-12">
				<h4>Trending Photos</h4>
			  </div>
			 </div>
			</div>
		</div>
-->	
        
		
	   </div><!--/ row -->
	  </div><!--/ container -->
	 </section><!--/ newsfeed -->
  
	 <!-- ==============================================
	 Modal Section
	 =============================================== -->
     <div id="myModal" class="modal fade">
      <div class="modal-dialog">
       <div class="modal-content">
        <div class="modal-body">
		
         <div class="row">
			<center><h3>Notification Details</h3></center>
         </div><!--/ row -->
        </div><!--/ modal-body -->
		
       </div><!--/ modal-content -->
      </div><!--/ modal-dialog -->
     </div><!--/ modal -->
	 
	 
     <!-- ==============================================
	 Scripts
	 =============================================== -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/base.js"></script>
	<script src="assets/plugins/slimscroll/jquery.slimscroll.js"></script>
	<script>
	$('#Slim,#Slim2').slimScroll({
	        height:"auto",
			position: 'right',
			railVisible: true,
			alwaysVisible: true,
			size:"8px",
		});		
	</script>

  </body>


</html>
