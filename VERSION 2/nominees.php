<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
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

							<!-- Content -->
								<section>
									<header class="main">
										<h1>Student Nominees</h1>
									</header>
									<h4>Here, you can see the nominees.</h4>
									<p></p>
									<h5>Nominees:</h5>
									<ul>
										
										
										
										<li>Walt</li>
										<li>Angel</li>
										<li>Miriam</li>
									</ul>

									<h5>Ordered scored nominees</h5>
									<table>
										<tr>
											<th>Nominee</th>
											<th>Score</th>
										</tr>
										<tr>

									<?php 

										$delimiter = '|';
      									$students = file("data.txt");

      									foreach ($students as $student) {
									        $info = explode($delimiter, $student);
									        
									        $first_name = $info[0];
								            $last_name = $info[1];
								            
									        print "
									        <tr>
											<th> $info[0] </th>
											<th> $info[1] </th>
											</tr>
											";
									        
									      }
      									
									 ?>

											<th>Miriam</th>
											<th>18</th>
										</tr>
									</table>

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
										<li>
											<span class="opener">Categories</span>
											<ul>
												<li><a href="admin.html">Academics</a></li>
												<li><a href="#">STEM</a></li>
												<li><a href="#">Art</a></li>
												<li><a href="#">Community Service</a></li>
												<li><a href="#">Athletics</a></li>
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