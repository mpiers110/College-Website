<!DOCTYPE html>
<html>
	<head>
		<title>Kendege TVC Noticeboard</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<meta name="description" content="School Portal Kit By PM Web Solutions" />
		<meta name="keywords" content="Kendege TVC" />
		<meta name="author" content="PM Web Solutions" />
        <link rel="shortcut icon" href="img/ken.png" title="Ktvc">
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" href="css/delily.css" />
		<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/blink.js"></script>
		<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
		<link rel="stylesheet" type="text/css" href="engine1/style.css" />
		<script type="text/javascript" src="engine1/jquery.js"></script>
		<!-- End WOWSlider.com HEAD section -->
		<style>
		* { margin: 0; padding: 0; }
		
		html { 
			background: url(images/bg.jpg) no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
		
		#page-wrap { width: 400px; margin: 50px auto; padding: 20px; background: white; -moz-box-shadow: 0 0 20px black; -webkit-box-shadow: 0 0 20px black; box-shadow: 0 0 20px black; }
		p { font: 15px/2 Georgia, Serif; margin: 0 0 30px 0; text-indent: 40px; }
	
		.responsive {
		width: 100%;
		height: auto;
		}
		.centerText {
		text-align: left; 
		}
		</style>
	</head>

	<body>
		<div class="container-fluid" style="">
			<div class="container-fluid" style="border-top-left-radius: 15px; border-top-right-radius: 15px; background: #fff; margin-top: 1%;">
				<div class="container-fluid" style="padding-bottom: 1.5%;">
					<div class='col-md-6'>
						<img src="assets/img/brand/final.jpg" alt="banner" style="float: right; margin-right:15px" class="responsive" width="1000" height="150">
						<!--<h1><img src="assets/img/brand/ktvc.gif" alt="logo" style="float: left; margin-right:15px" width="1000" height="150"></h1>-->
					<!--<div>
						<a><img src="assets/img/brand/ktvc.gif" alt="logo" style="float: left; margin-right:15px" width="1000" height="150"></a><!-- width="100" height="100"--
						<!--<h1 style='color: green;' font="Cooper Black" class='logo'>Kendege Technical and Vocational College</h1>--
						</div>-->
					</div>
					<a><img src="assets/img/brand/bloc.png" alt="bloc" style="float: right; margin-right:15px" width="300" height="150"></a>
				</div>
				
				
				<nav class="navbar navbar-inverse custom">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myDropDownMenu" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						
						<div class="collapse navbar-collapse" id="myDropDownMenu">
							<ul class="nav navbar-nav">
								<li><a style='color: white;' href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
								<li class="dropdown"><a style='color: white;' class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-file"></span> About Us <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="history.php"><span class="glyphicon glyphicon-check"></span> History</a></li>
										<li><a href="about.php"><span class="glyphicon glyphicon-check"></span> Mission and Vision</a></li>
										<li><a href="gallery.php"><span class="glyphicon glyphicon-check"></span> Gallery</a></li>
										
									</ul>
								</li>
								<li class="dropdown"><a style='color: white;' class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-th-list"></span> Student Affairs <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="dean.php"><span class="glyphicon glyphicon-check"></span> Dean of Students</a></li>
										<li><a href="dean.php"><span class="glyphicon glyphicon-check"></span> Guidance and Counselling</a></li>
										<li><a href="union.php"><span class="glyphicon glyphicon-check"></span> Students' Union</a></li>
										<li><a href="../lms.kendegetvc.ac.ke/index.php"><span class="glyphicon glyphicon-check"></span> Students' Portal</a></li>
									</ul>
								</li>
								<li class="dropdown"><a style='color: white;' class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-book"></span> Academic Departments <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="exam.php"><span class="glyphicon glyphicon-check"></span> Exam Department</a></li>
										<li><a href="ict.php"><span class="glyphicon glyphicon-check"></span> ICT Department</a></li>
										<li><a href="engineering.php"><span class="glyphicon glyphicon-check"></span> Engineering Department</a></li>
										<li><a href="sciences.php"><span class="glyphicon glyphicon-check"></span> Applied Sciences Department</a></li>
										<li><a href="business.php"><span class="glyphicon glyphicon-check"></span> Business Department</a></li>
										<li><a href="sports.php"><span class="glyphicon glyphicon-check"></span> Games and Sports Department</a></li>
									</ul>
								</li>
								<li class="dropdown"><a style='color: white;' class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-education"></span> Administration <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="board.php"><span class="glyphicon glyphicon-check"></span> Board of Governors</a></li>
										<li><a href="principal.php"><span class="glyphicon glyphicon-check"></span> Principal</a></li>
										<li><a href="depa.php"><span class="glyphicon glyphicon-check"></span> Deputy Principal</a></li>
										<li><a href="registrar.php"><span class="glyphicon glyphicon-check"></span> Registrar</a></li>
										<li><a href="finance.php"><span class="glyphicon glyphicon-check"></span> Finance</a></li>
									</ul>
								</li>
								
								<li><a style='color: white;' href='contact.php'><span class="glyphicon glyphicon-envelope"></span> Our Contacts</a></li>
								<li class="dropdown"><a style='color: white;' class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-download"></span> Downloads <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="application%20form.pdf"><span class="glyphicon glyphicon-check"></span> Application Form</a></li>
										<li><a href="Kendege_TVC_Fees_Structure.pdf"><span class="glyphicon glyphicon-check"></span> Fee Structure</a></li>
										<li><a href="Kendege_TVC_Brochure.pdf"><span class="glyphicon glyphicon-check"></span> Course Brochure</a></li>
										<li><a href="kuccps.pdf"><span class="glyphicon glyphicon-check"></span> KUCCPS Programs Requirements</a></li>
										<li><a href="guide.pdf"><span class="glyphicon glyphicon-check"></span> KNEC Project Guide</a></li>
										<li><a href="policy.pdf"><span class="glyphicon glyphicon-check"></span> Student Academic Policy</a></li>
										<li><a href="noticeboard.php"><span class="glyphicon glyphicon-check"></span> Tenders</a></li>
										<li><a href="noticeboard.php"><span class="glyphicon glyphicon-check"></span> Vacancies</a></li>
									</ul>
								</li>
								<li><a style='color: white;' href="noticeboard.php"><span class="glyphicon glyphicon-bullhorn"></span> Notice Board</a></li>
							</ul>
							<ul class='nav navbar-nav navbar-right'>
								<li class="dropdown">
									<a style='color: white;' class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-off"></span> Portal <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="../lms.kendegetvc.ac.ke/index.php"><span class="glyphicon glyphicon-user"></span> Staff Login</a></li>
										<li><a href="../lms.kendegetvc.ac.ke/index.php"><span class="glyphicon glyphicon-user"></span> Student Login</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</nav>
				
				<div class="container-fluid">
					<div class="row">
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
						  <div class="caption">
							<h3 style='color: red;'>ANNOUNCEMENTS</h3>
							<h4> The College closed for the holidays on Friday the 25th of June.</h4>
							<h4> The KNEC July Series will begin on the 4th of July.</h4>
							<h4> Trainees taking the KNEC November Series exams are encouraged to register for the same through the Exams Office.</h4>
						</div>
						</div>
					  </div>
					 <div class="col-sm-6 col-md-4">
						<div class="thumbnail">
						  <div class="caption">
							<h3 style='color: red;'>TENDERS</h3>
							<h4><a href="Prequalification Tender 2022-2023.pdf"> Prequalification Tender 2022-2023</a></h4>
						</div>
						</div>
					  </div>
					 <div class="col-sm-6 col-md-4">
						<div class="thumbnail">
						  <div class="caption">
							<h3 style='color: red;'>VACANCIES</h3>
							<h4> Vacancies will be announced here once they are available.</h4>
						</div>
						</div>
					  </div>
					</div>
				</div>
				<hr/>
				<hr/>
								
			</div>
			
			<footer>
				<div class="row">
					<div class="col-md-3">
						<div class="container-fluid">
							<ul class='footer_nav'>
								<h5 class='links'>MENU</h5>
								<li><a style='color: white;' href="index.php"> Home</a></li>
								<li><a style='color: white;' href="gallery.php"> Gallery</a></li>
								<li><a style='color: white;' href="about.php"> About Us</a></li>
								<li><a style='color: white;' href="contact.php"> Our Contacts</a></li>
							</ul>
						</div>
					</div>
					<div class='col-md-3'>
						<ul class='footer_nav'>
							<h5 class='links'>QUICK LINKS</h5>
							<li><a style='color: green;' href="https://student.kuccps.net/institutions/3995">KUCCPS</a></li>
							<li><a style='color: green;' href="http://www.knec.ac.ke/">KNEC</a></li>
							<li><a style='color: green;' href="http://www.helb.co.ke/">HELB</a></li>
							<li><a style='color: green;' href="http://www.tveta.go.ke/">TVETA</a></li>
						</ul>
					</div>
					<div class="col-md-6">
						<br />
						<div class="container-fluid text-center footer2">
							<p>Copyright &#169; 2022 All Rights Reserved 
								&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; Kendege TVC.
							</p>
							<p>Powered By <a style='color: green;' href="https://pmwebsolutions.rf.gd">PM Web Solutions</a>&nbsp;&nbsp;&nbsp;&nbsp;<a style='color: #181818;' href="../lms.kendegetvc.ac.ke/index.php"> Admin</a></p>
						</div>
					</div>
				</div>
			</footer>
		</div>	
	</body>
</html>