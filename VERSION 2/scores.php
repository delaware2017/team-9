<!DOCTYPE html>
<html>
	<head>
		<title>Generic - Editorial by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

						<header id="header">
									<a href="index.html" class="logo"><strong>Grading Portal</strong> created by Code For Good Team 9</a>
							
								</header>

							<!-- Header -->
								<header id="header">
									<a href="index.html" class="logo"><strong>Student Scores</strong> </a>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>
									</ul>
								</header>

							<!-- Content -->
								<section>
									<header class="main">
										<h1>Student Nominees</h1>
									</header>
									
									<?php 
      
								      $delimiter = '|';
								      $students = file("data.txt");

								      $title = filter_input( INPUT_POST, 'title', FILTER_SANITIZE_STRING );
								      $artist = filter_input( INPUT_POST, 'artist', FILTER_SANITIZE_STRING ); 
								      $genre = filter_input(INPUT_POST, 'genre', FILTER_SANITIZE_STRING);
								      $date = filter_input( INPUT_POST, 'date', FILTER_SANITIZE_NUMBER_INT );
								      
								      foreach ($students as $student) {
									        $display = 1; //1 means TRUE and 0 means
									        $info = explode($delimiter, $student);
									          
									       
								            $first_name = $info[0];
								            $last_name = $info[1];
								        }

								        echo $first_name;
								        echo $last_name;
								        
							

								    ?>

								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>
						<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="rubric.html">Homepage</a></li>
										<li><a href="nominees.php">Student Nominees</a></li>
										<li><a href="admin.html">Admin Home</a></li>
										<li>
											<span class="opener">Categories</span>
											<ul>
												<li><a href="admin.html">Academics</a></li>
												<li><a href="stem.html">STEM</a></li>
												<li><a href="art.html">Art</a></li>
												<li><a href="community.html">Community Service</a></li>
												<li><a href="athletics.html">Athletics</a></li>
											</ul>
										</li>
										<li><a href="analytics.html">Analytics</a></li>
										
								</nav>

								

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>