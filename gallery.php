<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/php; charset=UTF-8">
		<title>Gallery::KTVC</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="img/ken.png">
		<link rel="stylesheet" href="css/delily.css" />
		<link href="css/bootstrap.css" rel="stylesheet" />
		<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/dbss.js"></script>
		<script type="text/javascript" src="fancybox/lib/jquery.mousewheel.pack.js"></script>
		<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
		<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js"></script>
		<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen" />
		<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js"></script>
		<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js"></script>
		<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
		<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>
		<script type="text/javascript" src="js/fancytech.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$(".fancybox").fancybox();
			});
		</script>
		<style>
.responsive {
  width: 100%;
  height: auto;
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
								<li class="dropdown"><a style='color: white;' class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-icon"></span> About Us <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="history.php"><span class="glyphicon glyphicon-check"></span> History</a></li>
										<li><a href="about.php"><span class="glyphicon glyphicon-check"></span> Mission and Vision</a></li>
										<li><a href="gallery.php"><span class="glyphicon glyphicon-check"></span> Gallery</a></li>
										
									</ul>
								</li>
								<li class="dropdown"><a style='color: white;' class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-icon"></span> Student Affairs <span class="caret"></span></a>
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
								
								<li><a style='color: white;' href='contact.php'><span class="glyphicon glyphicon-inbox"></span> Our Contacts</a></li>
								<li class="dropdown"><a style='color: white;' class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-arrow"></span> Downloads <span class="caret"></span></a>
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
									<ul class="dropdown-menu">
										<li><a href="noticeboard.php"><span class="glyphicon glyphicon-calendar"></span> School Calendar</a></li>
										<li><a href="noticeboard.php"><span class="glyphicon glyphicon-time"></span> Exam Time Table</a></li>
									</ul>
								</li>
							</ul>
							<ul class='nav navbar-nav navbar-right'>
								<li class="dropdown">
									<a style='color: white;' class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> Portal <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="../lms.kendegetvc.ac.ke/index.php"><span class="glyphicon glyphicon-user"></span> Staff Login</a></li>
										<li><a href="../lms.kendegetvc.ac.ke/index.php"><span class="glyphicon glyphicon-user"></span> Student Login</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</nav>
		
				<!----Content Section----->
				<div class="container-fluid">
					<div class="panel panel-default">
						<div class="panel-heading">
							<span class="glyphicon glyphicon-education"></span> School Facilities
						</div>
						<div class="panel-body">
							<div class="row">
							  
							  <div class="col-xs-12 col-md-4">
								<div class="thumbnail">
								  <a><img src="assets/img/brand/1.jpg" class="img-thumbnail" alt="KTVC" title="KTVC"></a>
								</div>
							  </div>
							  <div class="col-xs-12 col-md-4">
								<div class="thumbnail">
								  <a><img src="assets/img/brand/2.jpg" class="img-thumbnail" alt="KTVC" title="KTVC"></a>
								</div>
							  </div>
							  <div class="col-xs-12 col-md-4">
								<div class="thumbnail">
								  <a><img src="assets/img/brand/3.jpg" class="img-thumbnail" alt="KTVC" title="KTVC"></a>
								</div>
							  </div>
							  <div class="col-xs-12 col-md-4">
								<div class="thumbnail">
								  <a><img src="assets/img/brand/4.jpg" class="img-thumbnail" alt="KTVC" title="KTVC"></a>
								</div>
							  </div>
							  <div class="col-xs-12 col-md-4">
								<div class="thumbnail">
								  <a><img src="assets/img/brand/5.jpg" class="img-thumbnail" alt="KTVC" title="KTVC"></a>
								</div>
							  </div>
							  <div class="col-xs-12 col-md-4">
								<div class="thumbnail">
								  <a><img src="assets/img/brand/5b.jpg" class="img-thumbnail" alt="KTVC" title="KTVC"></a>
								</div>
							  </div>
							</div>
						</div>
					</div>
					
					<!--<div class="panel panel-default">
						<div class="panel-heading">
							<span class="glyphicon glyphicon-cd"></span> Sporting Activity
						</div>
						<div class="panel-body">
							<div class="row">
							  
							  <div class="col-xs-12 col-md-4">
								<div class="thumbnail">
								  <a class="fancybox-thumbs" data-fancybox-group="thumb" title="Sporting Lectures" href="img/R.jpg"><img src="img/R.jpg" class="img-thumbnail" alt="KTVC" title="KTVC"></a>
								  <div class="caption text-center">
									<p>Sporting Lectures</p>
								  </div>
								</div>
							  </div>
							  <div class="col-xs-12 col-md-4">
								<div class="thumbnail">
								  <a class="fancybox-thumbs" data-fancybox-group="thumb" title="Basketball Champions" href="img/L.jpg"><img src="img/L.jpg" class="img-thumbnail" alt="KTVC" title="KTVC"></a>
								  <div class="caption text-center">
									<p>Basketball Champions</p>
								  </div>
								</div>
							  </div>
							  <div class="col-xs-12 col-md-4">
								<div class="thumbnail">
								  <a class="fancybox-thumbs" data-fancybox-group="thumb" title="Football Champions" href="img/S.jpg"><img src="img/S.jpg" class="img-thumbnail" alt="KTVC" title="KTVC"></a>
								  <div class="caption text-center">
									<p>Football Champions</p>
								  </div>
								</div>
							  </div>
							  
							</div>
						</div>
					</div>-->
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<span class="glyphicon glyphicon-hourglass"></span> School Building
						</div>
						<div class="panel-body">
							<div class="row">
							  
							  <div class="col-xs-12 col-md-4">
								<div class="thumbnail">
								  <a><img src="assets/img/brand/7.jpg" class="img-thumbnail" alt="KTVC" title="KTVC"></a>
								</div>
							  </div>
							  <div class="col-xs-12 col-md-4">
								<div class="thumbnail">
								  <a><img src="assets/img/brand/10.jpg" class="img-thumbnail" alt="KTVC" title="KTVC"></a>
								</div>
							  </div>
							  <div class="col-xs-12 col-md-4">
								<div class="thumbnail">
								  <a><img src="assets/img/brand/11.jpg" class="img-thumbnail" alt="KTVC" title="KTVC"></a>
								</div>
							  </div>
							  <div class="col-xs-12 col-md-4">
								<div class="thumbnail">
								  <a><img src="assets/img/brand/ab.jpg" class="img-thumbnail" alt="KTVC" title="KTVC"></a>
								</div>
							  </div>
							  <div class="col-xs-12 col-md-4">
								<div class="thumbnail">
								  <a><img src="assets/img/brand/lib.jpg" class="img-thumbnail" alt="KTVC" title="KTVC"></a>
								</div>
							  </div>
							  <div class="col-xs-12 col-md-4">
								<div class="thumbnail">
								  <a><img src="assets/img/brand/16.jpg" class="img-thumbnail" alt="KTVC" title="KTVC"></a>
								</div>
							  </div>
							</div>
						</div>
					</div>
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<span class="glyphicon glyphicon-picture"></span> Random
						</div>
						<div class="panel-body">
							<div class="row">
							  
							  <!--<div class="col-xs-12 col-md-4">
								<div class="thumbnail">
								  <a><img src="assets/img/brand/c9.jpg" class="img-thumbnail" alt="KTVC" title="KTVC"></a>
								</div>
							  </div>-->
							  <div class="col-xs-12 col-md-4">
								<div class="thumbnail">
								  <a><img src="assets/img/(i.jpg" class="img-thumbnail" alt="KTVC" title="KTVC"></a>
								  
								</div>
							  </div>
							  <div class="col-xs-12 col-md-4">
								<div class="thumbnail">
								  <a><img src="assets/img/brand/r.jpg" class="img-thumbnail" alt="KTVC" title="KTVC"></a>
								</div>
							  </div>
							  <div class="col-xs-12 col-md-4">
								<div class="thumbnail">
								  <a><img src="assets/img/b.jpg" class="img-thumbnail" alt="KTVC" title="KTVC"></a>
								</div>
							  </div>
							  <div class="col-xs-12 col-md-4">
								<div class="thumbnail">
								  <a><img src="assets/img/c.jpg" class="img-thumbnail" alt="KTVC" title="KTVC"></a>
								</div>
							  </div>
							  <div class="col-xs-12 col-md-4">
								<div class="thumbnail">
								  <a><img src="assets/img/d.jpg" class="img-thumbnail" alt="KTVC" title="KTVC"></a>
								</div>
							  </div>
							  <div class="col-xs-12 col-md-4">
								<div class="thumbnail">
								  <a><img src="assets/img/brand/18.jpg" class="img-thumbnail" alt="KTVC" title="KTVC"></a>
								</div>
							  </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!----Footer Section----->
			<footer>
				<div class="row">
					<div class="col-md-3">
						<div class="container-fluid">
							<ul class='footer_nav'>
								<h5 class='links'>MENU</h5>
								<li><a style='color: white;' href="index.php"><!--span class="glyphicon glyphicon-home"></span--> Home</a></li>
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