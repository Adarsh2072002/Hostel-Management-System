<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php

 require 'includes/config.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hostels</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Intrend Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
		
	<!-- css files -->
	 
	<link rel="stylesheet" href="web_home/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="web_home\css_home\node_modules\bootstrap\dist\css\bootstrap.min.css"> 
	<link rel="stylesheet" href="web_home/css_home/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- //web-fonts -->
	
</head>

<body>

<!-- banner -->
<div class="inner-page-banner" id="home"> 	   
	<!--Header-->
	<header>
		<div class="container agile-banner_nav">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				
				<h1><a class="navbar-brand" href="home.php"><img src="web_home\images\BEC logo.png" alt="logo" ><span class="display"></span></a></h1>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
						</li>
						
						<li class="nav-item active">
							<a class="nav-link" href="services.php">Hostels</a>
	                    </li>
						<li class="nav-item">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>
						<li class="nav-item">
						    <a class="nav-link" href="message_user.php">Message Received</a>
					    </li>
						<li class="nav-item">
						<a class="nav-link" href="#">Gallery</a>
					    </li>
						<li class="dropdown nav-item">
						    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><?php echo $_SESSION['roll']; ?>
							<b class="caret"></b>
						    </a>
						   <ul class="dropdown-menu agile_short_dropdown">
							  <li>
								<a href="profile.php">My Profile</a>
							  </li>
							  <li>
								<a href="includes/logout.inc.php">Logout</a>
							  </li>
						    </ul>
					    </li>
					</ul>
				</div>
			  
			</nav> 
		</div>
	</header>
	<!--Header-->
</div>
<!-- //banner --> 

<!-- services -->
<div id=wrapper class="content-display">
	<ul class="nav flex-row  navbar navbar-expand-lg navbar-light bg-light" >
	<li class="nav-item">
		<a style="color:#007bff; font-weight:bold; font-size:25px;" class="nav-link active"  href="#aboutHostel">About Hostel</a>
	</li>
	<li class="nav-item">
		<a style="color:#007bff; font-weight:bold; font-size:25px;" class="nav-link"  href="#vblock">Sir M. Visvesavaraya Block</a>
	</li>
	<li class="nav-item">
		<a style="color:#007bff; font-weight:bold; font-size:25px;" class="nav-link" href="#nblock">Netaji Block</a>
	</li>
	<li class="nav-item">
		<a style="color:#007bff; font-weight:bold; font-size:25px;" class="nav-link" href="#GirlsHostel">Malaprabha Ladies Hostel</a>
	</li>
	<li class="nav-item">
		<a style="color:#007bff; font-weight:bold; font-size:25px;" class="nav-link" href="#pghostel">PG Boys Hostel</a>
	</li>
	
	</ul>
	<div id="aboutHostel" class="content">
	<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">
  <!-- Begin Page Content -->
  <div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
	  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
	  <i class="fa fa-bars"></i>
	</button>
</div>
	
	<!-- Content Row -->

	<div class="row justify-content-between">
	  <!-- Area Chart -->
	  <div class="col-xl-8 col-lg-7">
	  <div class="pricing-area text-center">
		   <div class="row">
			  <div class="col-sm-12 plan price-one wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
				  <ul>
					  <li class="heading-three"> <h5 align="center" style="color:#007bff; font-weight:bold; font-size:25px;">Overview</h5> </li>
					  <li>
						  <ul style="text-align:justify"> 
								<li style="font-size:18px; font-weight:bold;">The hostels of B.V.V Sangha are managed by a committee set up by the Sangha in the name of Student Welfare and hostel Committee (SWC) consisting of 12 members. This committee is headed by Shri. 
		  Kumar Hiremath, Chairman and the other members are Shri. Virupakshappa S. Koti, Shri Chandrashekar B. Badali, Shri Vishwanath V. Palled, Shri Shashidhar V. Goudar, Shri Kumar S. Jigalur, 
		  Shri Sangamesh M. Guddad, Shri Basavaraj C. Kengapur, Shri Channayya P. Balulmath, Shri Prabhu B. Nara, Shri Anand S. Sasanur and Shri Manohar M. Navalagi.</li> 
								<li style="font-size:18px; font-weight:bold;">Basaveshwar Engineering College hostels are managed by Chief Warden and supported by Deputy chief wardens and Wardens. Dr. S. S. Injaganeri, Principal is the Chief Warden, Dr. Veena S.
		   Soragavi, Dr. P. L. Timmanagoudar, Dr. C. M. Veerendrakumar are Deputy chief wardens and other wardens are Shri B. R. Endigeri, Shri. B. M. Vyas, Dr. Mahabaleshwar S. K., Dr. A. V. Sutagundar,
		   Shri Vivekanand B. S., Dr. Shobha Patil, and Smt. Sunita Tambakad.</li>
								 
						  </ul>
					  </li>
				</ul>
			 </div>
			</div>
		 </div>
		 <div class="pricing-area text-center">
		   <div class="row">
			  <div class="col-sm-12 plan price-one wow fadeInDown" style="visibility:visible; animation-name: none;">
				  <ul>
					  <li class="heading-two" style="background-color:#800080"> <h5 align="center" style="color:#007bff">Facilities Available</h5> </li>
					  <br>
					  <table width="200" border="1" cellpadding="0" cellspacing="0" style="font-size:18px; font-weight:bold;">
<tbody><tr bgcolor="#99CCFF">
<td>Pure Vegetarian Mess</td>
<td>Library</td>
<td>Computer centre with Internet</td>
</tr>
<tr>
<td>T V</td>
<td>Multi Gym</td>
<td>Guest room</td>
</tr>
<tr bgcolor="#99CCFF">
<td>Generator</td>
<td>Laundry</td>
<td>Hot water</td>
</tr>
<tr>
<td>Volley ball ground</td>
<td>Indoor sports (i.e., Table Tennis, Badminton, Carom, Chess etc.)</td>
<td></td>
</tr>
</tbody></table>
										  
			 </ul></div>
			 </div>
		 </div>
			 
		<div class=" mb-4" style="text-align:justify">
		  <ul>
		  <li>
		  <div class="tab-content justify-content-center" id="myTabContent">
		</div>
  </li></ul></div>
</div>
	   
	  <!-- hod Chart -->
	  <div class="col-xl-4 col-lg-5">
		<div class="card shadow mb-4">
		  <!-- Card Header - Dropdown -->
		  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
			<h4 class="m-0 font-weight-bold text-primary">Hostels</h4>
		  </div>
		   <!-- Card Body -->
		  <div class="card-body">
		   <div class="text-center">
			  <div class="cn-col-4">
					 <div class="">
							 <img src="web_home\images\nblock.jpg" alt="N Block">
							 <img src="/img/bg-img/bg-1.jpg" alt=""><br>
							 
					</div>
			 </div>
			</div>
		  </div> <!-- end card body -->
		</div>
	  </div> <!-- end col -->
	  
	  <div class="row justify-content-between">
	  <!-- Area Chart -->
	  <div class="col-xl-8 col-lg-6">
		<div class="card shadow mb-4" style="text-align:justify">
		  <!-- Card Header - Dropdown -->
		  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		   <h2><span class="style1"><a href="#highlite" id="four-tab" data-toggle="tab" role="tab" aria-selected="true">Hostel Occupancy Details</a></span></h2>
		  </div>
		  <span class="style1">
		  <!-- Card Body -->
		  </span>				
		  <ul>
		  <li>
		  <div class="tab-content justify-content-center" id="myTabContent">
											  
		 <div class="card-body tab-pane show active" id="facility" aria-labelledby="three-tab" role="tabpanel">
		 <div class="table-responsive">
		  <table class="table table-bordered font-weight-bold" id="dataTable" width="100%" cellspacing="0">
			<thead>
			  <tr bgcolor="#FFCC99">
				<th width="9%">Sl. No.</th>
				<th width="45%">Hostel Name</th>
				<th width="46%">Utility</th>
			  </tr>
			</thead>
		  
			<tbody>
			  <tr bgcolor="#99CCFF">
				 <td><div align="center">1</div></td>
				<td>Sir M. Visvesavaraya Block</td>
				<td>Boys Hostel (Senior students)</td>
									
			  </tr>
			  <tr>
				<td><div align="center">2</div></td>
				<td>Netaji Block </td>
				<td>Boys Hostel (First year students)</td>
									 
			  </tr>
			  <tr bgcolor="#99CCFF">
				<td><div align="center">3</div></td>
				<td>Malaprabha hostel </td>
				<td>Girls</td>
			 </tr>
		   
			  <tr>
				<td><div align="center">4</div></td>
				<td>PG Boys hostel </td>
				<td>PG and Research students</td>
			 </tr>
									  
			</tbody>
		  </table>
		</div>
	  </div>
  </div>
</li></ul></div>
</div>
<!-- End of Page Wrapper -->



<!-- Bootstrap core JavaScript-->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/js/sb-admin-2.min.js"></script>




</div></div></div></div></div>
</div>
<div id="vblock" class="content">
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">
  <!-- Begin Page Content -->
  <div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
	  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
	  <i class="fa fa-bars"></i>
	</button>
</div>
	
	<!-- Content Row -->

	<div class="row justify-content-between">
	  <!-- Area Chart -->
	  <div class="col-xl-8 col-lg-7">
	  <div class="pricing-area text-center">
		   <div class="row">
			  <div class="col-sm-12 plan price-one wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
				  <ul>
					  <li class="heading-three"> <h5 align="center" style="color:#007bff; font-weight:bold; font-size:25px;">Sir M. Visvesavaraya Block</h5> </li>
					  <li>
						  <ul style="text-align:justify"> 
								<li style="font-size:18px; font-weight:bold;">The Visvesavaraya hostel was started in the year 1968 to accommodate boys of Basaveshwar Engineering College Bagalkot. The hostel has grown many folds and is equipped with all 
							  facilities since from its inception. The total number of rooms in the hostel is 128 with a total capacity of 384.</li> 
																	   
						  </ul>
					  </li>
				</ul>
			 </div>
			</div>
		 </div>
		 <div class="pricing-area text-center">
		   <div class="row">
			  <div class="col-sm-12 plan price-one wow fadeInDown" style="visibility:visible; animation-name: none;">
				  <ul>
					  <li class="heading-two" style="background-color:#800080"> <h5 align="center" style="color:#FFFFFF">Facilities Available</h5> </li>
					  <br>
					  <table width="200" border="1" cellpadding="0" cellspacing="0" style="font-size:18px; font-weight:bold;">
<tbody><tr bgcolor="#99CCFF">
<td>Pure Vegetarian Mess</td>
<td>Library</td>
<td>Computer centre with Internet</td>
</tr>
<tr>
<td>T V</td>
<td>Multi Gym</td>
<td>Guest room</td>
</tr>
<tr bgcolor="#99CCFF">
<td>Generator</td>
<td>Laundry</td>
<td>Hot water</td>
</tr>
<tr>
<td>Volley ball ground</td>
<td>Indoor sports (i.e., Table Tennis, Badminton, Carom, Chess etc.)</td>
<td></td>
</tr>
</tbody></table>
<div class="d-grid gap-2 col-6 mx-auto applybtn">
          <a href="application_form.php?id=Sir M. Visvesavaraya Block" class="btn btn-primary" type="button">Click to apply for hostel</a>
	  </div>
										  
			 </ul></div>
			 </div>
		 </div>
			 
		<div class=" mb-4" style="text-align:justify">
		  <ul>
		  <li>
		  <div class="tab-content justify-content-center" id="myTabContent">
		</div>
  </li></ul></div>
</div>
	   
	  <!-- hod Chart -->
	  <div class="col-xl-4 col-lg-5">
		<div class="card shadow mb-4">
		  <!-- Card Header - Dropdown -->
		  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
			<h4 class="m-0 font-weight-bold text-primary">Sir M. Visvesavaraya Block</h4>
		  </div>
		   <!-- Card Body -->
		  <div class="card-body">
		   <div class="text-center">
			  <div class="cn-col-4">
					 <div class="">
							 
							 <img src="web_home\images\vblock.jpg" alt="V Block">
							 <img src="/img/bg-img/bg-1.jpg" alt=""><br>
							 
					</div>
			 </div>
			</div>
		  </div> <!-- end card body -->
		</div>
		
	  </div> <!-- end col -->
	  
	  
<!-- Bootstrap core JavaScript-->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/js/sb-admin-2.min.js"></script>




</div></div></div></div>

</div>
<div id="nblock" class="content">
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">
  <!-- Begin Page Content -->
  <div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
	  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
	  <i class="fa fa-bars"></i>
	</button>
</div>
	
	<!-- Content Row -->

	<div class="row justify-content-between">
	  <!-- Area Chart -->
	  <div class="col-xl-8 col-lg-7">
	  <div class="pricing-area text-center">
		   <div class="row">
			  <div class="col-sm-12 plan price-one wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
				  <ul>
					  <li class="heading-three"> <h5 align="center" style="color:#007bff; font-weight:bold; font-size:25px;">Netaji Block</h5> </li>
					  <li>
						  <ul style="text-align:justify"> 
								<li style="font-size:18px; font-weight:bold;">The Netaji hostel was started in the year 1996 to accommodate the increase 
							  in demand from the students of Basaveshwar Engineering College Bagalkot. This hostel 
							  was mainly started to accommodate the first year students of the college. 
							  The hostel has a beautiful garden with all the adequate facilities required for the students. 
							  The total number of rooms in the hostel is 100 with total capacity of 300 students.</li> 
																	   
						  </ul>
					  </li>
				</ul>
			 </div>
			</div>
		 </div>
		 <div class="pricing-area text-center">
		   <div class="row">
			  <div class="col-sm-12 plan price-one wow fadeInDown" style="visibility:visible; animation-name: none;">
				  <ul>
					  <li class="heading-two" style="background-color:#800080"> <h5 align="center" style="color:#FFFFFF">Facilities Available</h5> </li>
					  <br>
					  <table width="200" border="1" cellpadding="0" cellspacing="0" style="font-size:18px; font-weight:bold;">
<tbody><tr bgcolor="#99CCFF">
<td>Pure Vegetarian Mess</td>
<td>Library</td>
<td>Computer centre with Internet</td>
</tr>
<tr>
<td>T V</td>
<td>Multi Gym</td>
<td>Guest room</td>
</tr>
<tr bgcolor="#99CCFF">
<td>Generator</td>
<td>Laundry</td>
<td>Hot water</td>
</tr>
<tr>
<td>Volley ball ground</td>
<td>Indoor sports (i.e., Table Tennis, Badminton, Carom, Chess etc.)</td>
<td></td>
</tr>
</tbody></table>
<div class="d-grid gap-2 col-6 mx-auto applybtn">
          <a href="application_form.php?id=Netaji Block" class="btn btn-primary" type="button">Click to apply for hostel</a>
	  </div>
										  
			 </ul></div>
			 </div>
		 </div>
			 
		<div class=" mb-4" style="text-align:justify">
		  <ul>
		  <li>
		  <div class="tab-content justify-content-center" id="myTabContent">
		</div>
  </li></ul></div>
</div>
	   
	  <!-- hod Chart -->
	  <div class="col-xl-4 col-lg-5">
		<div class="card shadow mb-4">
		  <!-- Card Header - Dropdown -->
		  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
			<h4 class="m-0 font-weight-bold text-primary">Netaji Block</h4>
		  </div>
		   <!-- Card Body -->
		  <div class="card-body">
		   <div class="text-center">
			  <div class="cn-col-4">
					 <div class="">
							 
							 <img src="web_home\images\nblock.jpg" alt="N Block">
							 <img src="/img/bg-img/bg-1.jpg" alt=""><br>
							 
					</div>
			 </div>
			</div>
		  </div> <!-- end card body -->
		</div>
	  </div> <!-- end col -->
	  
<!-- Bootstrap core JavaScript-->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/js/sb-admin-2.min.js"></script>




</div></div></div></div>
</div>
<div id="GirlsHostel" class="content">
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">
  <!-- Begin Page Content -->
  <div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
	  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
	  <i class="fa fa-bars"></i>
	</button>
</div>
	
	<!-- Content Row -->

	<div class="row justify-content-between">
	  <!-- Area Chart -->
	  <div class="col-xl-8 col-lg-7">
	  <div class="pricing-area text-center">
		   <div class="row">
			  <div class="col-sm-12 plan price-one wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
				  <ul>
					  <li class="heading-three"> <h5 align="center" style="color:#007bff; font-weight:bold;font-size:25px;">Malaprabha Ladies Hostel</h5> </li>
					  <li>
						  <ul style="text-align:justify"> 
								<li style="font-size:18px; font-weight:bold;">The hostel was started in the year 1998 to accommodate the students of 
							  Basaveshwar Engineering College Bagalkot. The hostel is well equipped with all 
							  requisite facilities to cater to the needs of all Girl students. The total number of 
							  rooms available in the hostel are 190 with a total capacity of 468 students.</li> 
																	   
						  </ul>
					  </li>
				</ul>
			 </div>
			</div>
		 </div>
		 <div class="pricing-area text-center">
		   <div class="row">
			  <div class="col-sm-12 plan price-one wow fadeInDown" style="visibility: visible; animation-name: none;">
				  <ul>
					  <li class="heading-two" style="background-color:#800080"> <h5 align="center" style="color:#FFFFFF">Facilities Available</h5> </li>
					  <br>
					  <table width="200" border="1" cellpadding="0" cellspacing="0" style="font-size:18px; font-weight:bold;">
<tbody><tr bgcolor="#99CCFF">
<td>Pure Vegetarian Mess</td>
<td>Library</td>
<td>Computer centre with Internet</td>
</tr>
<tr>
<td>T V</td>
<td>Multi Gym</td>
<td>Guest room</td>
</tr>
<tr bgcolor="#99CCFF">
<td>Generator</td>
<td>Laundry</td>
<td>Hot water</td>
</tr>
<tr>
<td>Volley ball ground</td>
<td>Indoor sports (i.e., Table Tennis, Badminton, Carom, Chess etc.)</td>
<td></td>
</tr>
</tbody></table>
<div class="d-grid gap-2 col-6 mx-auto applybtn">
          <a href="application_form.php?id=Malaprabha Ladies Hostel" class="btn btn-primary" type="button">Click to apply for hostel</a>
	  </div>
										  
			 </ul></div>
			 </div>
		 </div>
			 
		<div class=" mb-4" style="text-align:justify">
		  <ul>
		  <li>
		  <div class="tab-content justify-content-center" id="myTabContent">
		</div>
  </li></ul></div>
</div>
	   
	  <!-- hod Chart -->
	  <div class="col-xl-4 col-lg-5">
		<div class="card shadow mb-4">
		  <!-- Card Header - Dropdown -->
		  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
			<h4 class="m-0 font-weight-bold text-primary">Malaprabha Ladies Hostel</h4>
		  </div>
		   <!-- Card Body -->
		  <div class="card-body">
		   <div class="text-center">
			  <div class="cn-col-4">
					 <div class="">
							 
							 <img src="web_home\images\background.jpg" alt="V Block">
							 <img src="/img/bg-img/bg-1.jpg" alt=""><br>
							 
					</div>
			 </div>
			</div>
		  </div> <!-- end card body -->
		</div>
	  </div> <!-- end col -->
	  
<!-- Bootstrap core JavaScript-->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/js/sb-admin-2.min.js"></script>




</div></div></div></div>
</div>
<div id="pghostel" class="content">
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">
  <!-- Begin Page Content -->
  <div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
	  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
	  <i class="fa fa-bars"></i>
	</button>
</div>
	
	<!-- Content Row -->

	<div class="row justify-content-between">
	  <!-- Area Chart -->
	  <div class="col-xl-8 col-lg-7">
	  <div class="pricing-area text-center">
		   <div class="row">
			  <div class="col-sm-12 plan price-one wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
				  <ul>
					  <li class="heading-three"> <h5 align="center" style="color:#007bff; font-weight:bold; font-size:25px;">PG Boys Hostel</h5> </li>
					  <li>
						  <ul style="text-align:justify"> 
								<li style="font-size:18px; font-weight:bold;">The hostel was started in the year 2013 to provide accommodation 
							  exclusively for PG and Research students of Basaveshwar Engineering College Bagalkot. 
							  Total rooms available in the hostel are 40 with a total capacity of 80 students.</li> 
																	   
						  </ul>
					  </li>
				</ul>
			 </div>
			</div>
		 </div>
		 <div class="pricing-area text-center">
		   <div class="row">
			  <div class="col-sm-12 plan price-one wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
				  <ul>
					  <li class="heading-two" style="background-color:#800080"> <h5 align="center" style="color:#FFFFFF">Facilities Available</h5> </li>
					  <br>
					  <table width="200" border="1" cellpadding="0" cellspacing="0" style="font-size:18px; font-weight:bold;">
<tbody><tr bgcolor="#99CCFF">
<td>Pure Vegetarian Mess</td>
<td>Library</td>
<td>Computer centre with Internet</td>
</tr>
<tr>
<td>T V</td>
<td>Multi Gym</td>
<td>Guest room</td>
</tr>
<tr bgcolor="#99CCFF">
<td>Generator</td>
<td>Laundry</td>
<td>Hot water</td>
</tr>
<tr>
<td>Volley ball ground</td>
<td>Indoor sports (i.e., Table Tennis, Badminton, Carom, Chess etc.)</td>
<td></td>
</tr>
</tbody></table>
<div class="d-grid gap-2 col-6 mx-auto applybtn">
          <a href="application_form.php?id=PG Boys Hostel" class="btn btn-primary" type="button">Click to apply for hostel</a>
	  </div>
										  
			 </ul></div>
			 </div>
		 </div>
			 
		<div class=" mb-4" style="text-align:justify">
		  <ul>
		  <li>
		  <div class="tab-content justify-content-center" id="myTabContent">
		</div>
  </li></ul></div>
</div>
	   
	  <!-- hod Chart -->
	  <div class="col-xl-4 col-lg-5">
		<div class="card shadow mb-4">
		  <!-- Card Header - Dropdown -->
		  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
			<h4 class="m-0 font-weight-bold text-primary">PG Boys Hostel</h4>
		  </div>
		   <!-- Card Body -->
		  <div class="card-body">
		   <div class="text-center">
			  <div class="cn-col-4">
					 <div class="">
							 
							 <img src="web_home\images\vblock.jpg" alt="V Block">
							 <img src="/img/bg-img/bg-1.jpg" alt=""><br>
							 
					</div>
			 </div>
			</div>
		  </div> <!-- end card body -->
		</div>
	  </div> <!-- end col -->
	  
<!-- Bootstrap core JavaScript-->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/js/sb-admin-2.min.js"></script>




</div></div></div></div>
</div>

</div>

<!-- <section class="services py-5">
	<div class="container py-lg-5 py-3">
		<h2 class="heading text-capitalize mb-sm-5 mb-4"> Hostels </h2>
		<div class="row service-grids">
			<div class="col-lg-4 col-md-6 service-grid1">
				<h3>A Hostel</h3></a>
				<div class="row">
					<div class="col-md-3 col-2">
						<h4>1 yr</h4>
					</div>
					<div class="col-md-9 col-10">
						<p>A Hostel</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-md-0 mt-5 service-grid1">
				<h3>B Hostel</h3>
				<div class="row">
					<div class="col-md-3 col-2">
						<h4>3 yr</h4>
					</div>
					<div class="col-md-9 col-10">
						<p>B Hostel</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-lg-0 mt-5 service-grid1">
				<h3>C Hostel</h3>
				<div class="row">
					<div class="col-md-3 col-2">
						<h4>2 yr</h4>
					</div>
					<div class="col-md-9 col-10">
						<p>C Hostel</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-5 service-grid1">
				<h3>D Hostel</h3>
				<div class="row">
					<div class="col-md-3 col-2">
						<h4>4 yr</h4>
					</div>
					<div class="col-md-9 col-10">
						<p>D Hostel</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-5 service-grid1">
				<h3>E Hostel</h3>
				<div class="row">
					<div class="col-md-3 col-2">
						<h4>4 yr</h4>
					</div>
					<div class="col-md-9 col-10">
						<p>E Hostel</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-5 service-grid1">
				<h3>F Hostel</h3>
				<div class="row">
					<div class="col-md-3 col-2">
						<h4>4 yr</h4>
					</div>
					<div class="col-md-9 col-10">
						<p>F Hostel</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->
<!-- services -->

<!-- banner-bottom -->
	<!-- <div class="banner-bottom">
		<div class="container-fluid">
			<div class="banner_bottom_agile_grids">
				<div class="row wthree_banner_bottom_right_grids pr-sm-3">
					<div class="col-lg-3 col-sm-6 banner_bottom_right_grid">
						<div class="view view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-bed" aria-hidden="true"></i>
								<h3> Apply for A-Hostel</h3>
								<p>A Hostel</p>
							</div>
							<div class="mask">
								<a href="application_form.php?id=A"><img src="web_home/images/s1.jpg" class="img-responsive" alt="" /></a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 mt-sm-0 mt-3 banner_bottom_right_grid">
						<div class="view view1 view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-bed" aria-hidden="true"></i>
								<h3>Apply for B-Hostel</h3>
								<p>B Hostel</p>
							</div>
							<div class="mask">
								<a href="application_form.php?id=B"><img src="web_home/images/s2.jpg" class="img-responsive" alt="" /></a>
							</div>
						</div>
					</div>
				
					<div class="col-lg-3 col-sm-6 mt-lg-0 mt-3 banner_bottom_right_grid">
						<div class="view view2 view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-bed" aria-hidden="true"></i>
								<h3>Apply for C-Hostel</h3>
								<p>C Hostel</p>
							</div>
							<div class="mask">
								<a href="application_form.php?id=C"><img src="web_home/images/s3.jpg" class="img-responsive" alt="" /></a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 mt-lg-0 mt-3 banner_bottom_right_grid">
						<div class="view view3 view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-bed" aria-hidden="true"></i>
								<h3>Apply for D-Hostel</h3>
								<p>D Hostel</p>
							</div>
							<div class="mask">
								<a href="application_form.php?id=D"><img src="web_home/images/s4.jpg" class="img-responsive" alt="" /></a>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
 banner-bottom -->

<!-- 
<br>
<br>

<div class="banner-bottom">
		<div class="container-fluid">
			<div class="banner_bottom_agile_grids">
				<div class="row wthree_banner_bottom_right_grids pr-sm-3">
					<div class="col-lg-3 col-sm-6 banner_bottom_right_grid">
						<div class="view view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-bath" aria-hidden="true"></i>
								<h3> Apply for D-Hostel</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adip. Sed semper sem non commodo egestas. In rutrum enim a neque volutpat aliquet</p>
							</div>
							<div class="mask">
								<img src="web_home/images/s1.jpg" class="img-responsive" alt="" />
							</div>
						</div>
					</div>-->
					<!-- <div class="col-lg-3 col-sm-6 mt-sm-0 mt-3 banner_bottom_right_grid">
						<div class="view view1 view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-bed" aria-hidden="true"></i>
								<h3> Apply for E-Hostel</h3>
								<p>E Hostel</p>
							</div>
							<div class="mask">
								<a href="application_form.php?id=E"><img src="web_home/images/s2.jpg" class="img-responsive" alt="" /></a>
							</div>
						</div>
					</div>
				
					<div class="col-lg-3 col-sm-6 mt-lg-0 mt-3 banner_bottom_right_grid">
						<div class="view view2 view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-bed" aria-hidden="true"></i>
								<h3>Apply for F-Hostel </h3>
								<p>F Hostel</p>
							</div>
							<div class="mask">
								<a href="application_form.php?id=F"><img src="web_home/images/s3.jpg" class="img-responsive" alt="" /></a>
							</div>
						</div>
					</div> --> 
					<!--<div class="col-lg-3 col-sm-6 mt-lg-0 mt-3 banner_bottom_right_grid">
						<div class="view view3 view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-bed" aria-hidden="true"></i>
								<h3>Office Chairs</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adip. Sed semper sem non commodo egestas. In rutrum enim a neque volutpat aliquet</p>
							</div>
							<div class="mask">
								<img src="web_home/images/s4.jpg" class="img-responsive" alt="" />
							</div>
						</div>
					</div>-->
					<!-- <div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div> --> 

<!-- team -->

<!-- //team -->

<!-- footer -->
<footer class="py-5">
	<div class="container py-md-5">
		<div class="footer-logo mb-5 text-center">
			<a class="navbar-brand" href="https://www.becbgk.edu/" target="_blank">BEC <span class="display"> BAGALKOT</span></a>
		</div>
		<div class="footer-grid">
			
			<div class="list-footer">
				<ul class="footer-nav text-center">
					<li>
						<a href="home.php">Home</a>
					</li>
					
					<li>
						<a href="services.php">Hostels</a>
					</li>
					<li>
						<a href="contact.php">Contact</a>
					</li>
					<li>
						<a href="profile.php">Profile</a>
					</li>
				</ul>
			</div>
			
		</div>
	</div>
</footer>
<!-- footer -->

<!-- js-scripts -->		

	<!-- js -->
	<script type="text/javascript" src="web_home/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="web_home/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->
	
	<!-- banner js -->
	<script src="web_home/js/snap.svg-min.js"></script>
	<script src="web_home/js/main.js"></script> <!-- Resource jQuery -->  
	<!-- //banner js --> 

	<!-- flexSlider --><!-- for testimonials -->
	<script defer src="web_home/js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
	<!-- //flexSlider --><!-- for testimonials -->

	<!-- start-smoth-scrolling -->
	<script src="web_home/js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="web_home/js/move-top.js"></script>
	<script type="text/javascript" src="web_home/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->
	
<!-- //js-scripts -->

</body>
</html>