<!DOCTYPE html>
<html lang="en">
<?php
include 'invoice_header.php';
?>

<head>

	    <!-- ==============================================
		Title and Meta Tags
		=============================================== -->
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blu Fashion BD - Profile</title>
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
		
       </div><!-- /.container -->
      </nav><!-- /.navbar -->
     </header><!-- Page Header --> 

	 <!-- ==============================================
	 Navbar Second Section
	 =============================================== -->
	<section class="nav-sec">
	  <div class="d-flex justify-content-between">
	   <div class="p-2 nav-icon-lg dark-black">
	   <a class="nav-icon" href="bf_home.html"><em class="fa fa-home"></em>
		<span>Home</span>
	   </a>
	   </div>
	   <div class="p-2 nav-icon-lg clean-black">
	   <a class="nav-icon" href="product.html"><em class="fa fa-crosshairs"></em>
		<span>Add Product</span>
	   </a>
	   </div>
	   <div class="p-2 nav-icon-lg dark-black">
	   <a class="nav-icon" href="Notification.html"><em class="fa fa-bell noti-icon"></em>
		<span>Notification</span>
	   </a>
	   </div>
	   <div class="p-2 nav-icon-lg mint-green">
	   <a class="nav-icon" href="invoice.php"><em class="fa fa-align-left"></em>
		<span>Invoice</span>
	   </a>
	   </div>
	   <div class="p-2 nav-icon-lg clean-black">
	   <a class="nav-icon" href="profile.html"><em class="fa fa-user"></em>
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
           
           <div class="media m-0">
            
            <div class="media-body">
             <p class="m-0"><h2>Create Order : </h2></p>
			 <small><span>26th March, 2020.</span></small>
            </div>
           </div><!--/ media -->
          </div><!--/ cardbox-heading -->
		  
		  <div class="cardbox-item">
		        <div class="row">
				  <div class="col-9">
					<hr>
					<br>
			<form action="invoice_output.php" method="post">
					<div class="col-6 col-md-4">
					<lable class="col-sm">Store</lable>
						<div class="col-sm">
					<select name="store" id="considerStatus">
										<option value="" disabled="true" selected >Store Name</option>
										<option value="Ali Express">Ali Express</option>
										<option value="Square Toilatries Ltd.">Square Toilatries Ltd.</option>
										<option value="Tibbat Ltd.">Tibbat Ltd.</option>
										<option value="Meril Cosmetics Group">Meril Cosmetics Group</option>
					</select>
					</div>
					</div>

					<div class="col-6 col-md-4">
					<lable class="col-sm">Product Type</lable>
						<div class="col-sm">
					<select name="Category" id="considerStatus" required>
										<option value="" disabled="true" selected >Select Product Catagory</option>
										<option value="Hair Oil">Hair Oil</option>
										<option value="Hair Straightener">Hair Straightener</option>
										<option value="Body Soap">Body Soap</option>
										<option value="Hair Shampoo">Hair Shampoo</option>
					</select>
					</div> 	
					</div>

					<div class="col-6 col-md-4">
					<div class="col-sm-12" >
						<lable class="col-sm">Merchant Order Ref.</lable>
						<div class="col-sm">
					 <input type="text" name="referance" id="carry_fwd_status_edit" required>
						</div>
					</div>
					

					</div>


				  </div>
				  
				</div>
				<br>
				<br>
				<hr>

				<div class="row">

				  <div class="col-8 col-sm-6">
					<div class="row">
				  <div class="col-sm-6" >
						<lable class="col-sm">Recipient Name </lable>
						<div class="col-sm">
					 <input type="text" name="name" id="carry_fwd_status_edit" required>
						</div>
					</div>
					</div>

					<div class="row">
					<div class="col-sm-6" >
						<lable class="col-sm">Recipient Phone :</lable>
						<div class="col-sm">
					 <input type="text" name="phone" id="carry_fwd_status_edit" required>
						</div>
					</div>


						
					<div class="col-6">
					 <lable class="col-sm"> Email :</lable>
						<div class="col-6">
					   
					<input type="text" name="mail" id="carry_fwd_status_edit">
					</div>
				  </div>
					</div>
					
					

					<div class="row">
					<div class="col-sm-6">
						<label for="consider_Status">Recipient Address </label>
						<i class="fas fa-pencil-alt prefix"></i>
									   <textarea id="purpose" name="address" class="md-textarea form-control" rows="3"
									   style="margin: 0px 211px 10px 0px; width: 654px; height: 97px;" required></textarea>
					</div>
					</div>

					  <div class="row">

					<div class="col-sm-6" >
						<lable class="col-sm">Recipient Zone </lable>
						<div class="col-sm">
					 <select name="zone" id="considerStatus">
										<option value="" disabled="true" selected >Select Zone </option>
										<option value="Dhaka">Dhaka</option>
										<option value="Chittagong">Chittagong</option>
										<option value="Sylhet">Sylhet</option>
										<option value="Khulna">Khulna</option>
					</select>
						</div>
					</div>
					
					<div class="col-sm-6" >
						<lable class="col-sm">Recipient City </lable>
						<div class="col-sm">
					 <select name="city" id="considerStatus">
										<option value="" disabled="true" selected >Select City </option>
										<option value="Dhaka">Dhaka</option>
										<option value="Gazipur">Gazipur</option>
										<option value="Norshindi">Norshindi</option>
										<option value="Narayanganj">Narayanganj</option>
					</select>
						</div>
					</div>
					
					
					
				</div>

					

				  </div>





				  <div class="col-4 col-sm-6" style="margin-left: 0px;left: 20px;"> <!-- right Side -->

				  
					<lable class="col-sm">Delivery Time</lable>
						<div class="col-6">
					<select name="time" id="considerStatus">
										<option value="" disabled="true" selected >Select Time </option>
										<option value="9AM - 12PM">9AM - 12PM</option>
										<option value="12PM - 3PM">12PM - 3PM</option>
										<option value="3PM - 6PM">3PM - 6PM</option>
										<option value="3PM - 6PM">6PM - 9PM</option>
					</select>	
					</div>

					<div class="row">

					<div class="col-sm-6" >
						<lable class="col-sm">Quantity </lable>
						<div class="col-sm">
					 <input type="text" name="quantity" id="carry_fwd_status_edit" required>
						</div>
					</div>


						
					<div class="col-6">
					 <lable class="col-sm"> Price Per Unit :</lable>
						<div class="col-6">
					   
					<input type="text" name="amount" id="carry_fwd_status_edit" required>
					</div>
				  </div>
				</div>

				<div class="row">
					<div class="col-sm-6" >
						<lable class="col-sm">Amount To Collect  </lable>
						<textarea id="purpose" name="due" class="md-textarea form-control"
									   style="margin: 0px -241.75px 10px 0px; width: 548px; height: 41px;"></textarea>
					</div>
				</div>
				<div class="row">

					<div class="col-sm-6" >
						<lable class="col-sm">Special Instruction  </lable>
						<textarea id="purpose" name="ins" class="sm-textarea form-control"
									   style="margin: 0px -241.75px 10px 0px; width: 548px; height: 41px;"></textarea>
					</div>
				</div>
				<div class="row">

					<div class="col-sm-6" >
						<lable class="col-sm">Item Description & Price  </lable>
						<textarea id="purpose" name="levelprice" class="sm-textarea form-control"
									   style="margin: 0px -241.75px 10px 0px; width: 548px; height: 41px;"></textarea>
					</div>


					</div>
					<div class="row">
						
					
					<button type="submit" class="btn btn-primary btn-lg pull-right" style="margin-right: 80px;">
						Create Invoice
					</button><br/><br/>
		</form>
					</div>
				<div class="row">
					
				</div>



				  </div>
				</div><br/>
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
		 
          <div class="col-md-8 modal-image">
           <img class="img-responsive" src="assets/img/posts/14.jpg" alt="Image"/>
          </div><!--/ col-md-8 -->
          <div class="col-md-4 modal-meta">
           <div class="modal-meta-top">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
			 <span aria-hidden="true">×</span><span class="sr-only">Close</span>
			</button><!--/ button -->
            <div class="img-poster clearfix">
             <a href="#"><img class="img-responsive img-circle" src="assets/img/users/18.jpg" alt="Image"/></a>
             <strong><a href="#">Benjamin</a></strong>
             <span>12 minutes ago</span><br/>
		     <a href="#" class="kafe kafe-btn-mint-small"><i class="fa fa-check-square"></i> Following</a>
            </div><!--/ img-poster -->
			  
            <ul class="img-comment-list">
             <li>
              <div class="comment-img">
               <img src="assets/img/users/17.jpg" class="img-responsive img-circle" alt="Image"/>
              </div>
              <div class="comment-text">
               <strong><a href="#">Anthony McCartney</a></strong>
               <p>Hello this is a test comment.</p> <span class="date sub-text">on December 5th, 2016</span>
              </div>
             </li><!--/ li -->
             <li>
              <div class="comment-img">
               <img src="assets/img/users/15.jpg" class="img-responsive img-circle" alt="Image"/>
              </div>
              <div class="comment-text">
               <strong><a href="#">Vanessa Wells</a></strong>
               <p>Hello this is a test comment and this comment is particularly very long and it goes on and on and on.</p> <span>on December 5th, 2016</span>
              </div>
             </li><!--/ li -->
             <li>
              <div class="comment-img">
               <img src="assets/img/users/14.jpg" class="img-responsive img-circle" alt="Image"/>
              </div>
              <div class="comment-text">
               <strong><a href="#">Sean Coleman</a></strong>
               <p class="">Hello this is a test comment.</p> <span class="date sub-text">on December 5th, 2016</span>
              </div>
             </li><!--/ li -->
             <li>
              <div class="comment-img">
               <img src="assets/img/users/13.jpg" class="img-responsive img-circle" alt="Image"/>
              </div>
              <div class="comment-text">
               <strong><a href="#">Anna Morgan</a></strong>
               <p class="">Hello this is a test comment.</p> <span class="date sub-text">on December 5th, 2016</span>
              </div>
             </li><!--/ li -->
             <li>
              <div class="comment-img">
               <img src="assets/img/users/3.jpg" class="img-responsive img-circle" alt="Image"/>
              </div>
              <div class="comment-text">
               <strong><a href="#">Allison Fowler</a></strong>
               <p class="">Hello this is a test comment.</p> <span class="date sub-text">on December 5th, 2016</span>
              </div>
             </li><!--/ li -->
            </ul><!--/ comment-list -->
			  
            <div class="modal-meta-bottom">
			 <ul>
			  <li><a class="modal-like" href="#"><i class="fa fa-heart"></i></a><span class="modal-one"> 786,286</span> | 
			      <a class="modal-comment" href="#"><i class="fa fa-comments"></i></a><span> 786,286</span> </li>
			  <li>
			   <span class="thumb-xs">
				<img class="img-responsive img-circle" src="../../../www.bootdey.com/img/Content/user_3.jpg" alt="Image">
			   </span>
			   <div class="comment-body">
				 <input class="form-control input-sm" type="text" placeholder="Write your comment...">
			   </div><!--/ comment-body -->	
              </li>				
             </ul>				
            </div><!--/ modal-meta-bottom -->
			  
           </div><!--/ modal-meta-top -->
          </div><!--/ col-md-4 -->
		  
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