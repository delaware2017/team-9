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

								<header id="header">
									<a href="index.html" class="logo"><strong>Grading Portal</strong> created by Code For Good Team 9</a>
							
								</header>
								<section>
									<header class="main">
										<h1>Academics</h1>
									</header>

										<h4>Here are academics nominees and their scores. The academic rubric is further below. <a href="#"> Enter/Update Scores</a></h4> 
									<p></p>


							<table> 
									<?php 

									$delimiter = '|';
  									$students = file("data.txt");
  									$file = fopen("academics.txt", "a+");

  									file_put_contents("academics.txt", "");

  									foreach ($students as $student) {
								        $info = explode($delimiter, $student);

								       
								        if ($info[7] == ' Academics ') {
								        	fputs($file, $student);
								        }
								        
								      }

								     fclose($file);
								     fclose($students);

								  
								     $academ = file("academics.txt");

      									print "
									        <tr>
											<th> <h4> Last Name, First Name </h4> </th>
											<th> <h4> Category: </h4> </th>
											<th> <h4> Transcript: </h4> </th>
											<th> <h4> Total Score: </h4> </th>
											
										
											</tr>
											";

      									foreach ($academ as $student) {
									        $info = explode($delimiter, $student);
									      
								            
									        print "
									        <tr>
											<th> $info[4], $info[3]  </th>
											<th> $info[7] </th>
											<th style=\"color:blue;\"> $info[13] </th>
											<th> $info[15] </th> 
											</tr>
											";
									        
									    }

  									
								?>
							
							</table>
									<h4>Here is the academic rubric:</h4>
									<table>
										<tr>
											<th></th>
											<th>Academic Criteria</th>
											<th>0 - Does not meet expectations</th>
											<th>1 - Minimully meets expectations</th>
											<th>2 - Meets expectations</th>
											<th>3 - Exceeds expectations</th>
											<th>Score</th>
										</tr>
										<tr>
											<th>1a</th>
											<th>Evaluation based on unweighted cumulative GPA.</th>
											<th>Below minimum 3.5 unweighted GPA.</th>
											<th>Has minimum 3.5 unweighted GPA.</th>
											<th>Has unweighted GPA of 3.75-3.90.</th>
											<th>Has unweighted GPA above 3.91.</th>
											<th></th>
										</tr>
										<tr>
											<th>1B</th>
											<th>If no unweighted GPA, evaluate by weighted GPA.</th>
											<th>Has minimum 3.5 weighted GPA.</th>
											<th>Has weighted GPA of 3.75-3.90.</th>
											<th>Has weighted GPA of 3.91-4.0.</th>
											<th>Has weighted GPA above 4.0.</th>
											<th></th>
										</tr>
										<tr>
											<th>2A</th>
											<th>Evaluate student based on unweighted class rank.</th>
											<th>Ranks in top 15% of class.</th>
											<th>Ranks in top 10% of class.</th>
											<th>Ranks in top 5% of class.</th>
											<th>Ranks in top 3% of class.</th>
											<th></th>
										</tr>
										<tr>
											<th>2B</th>
											<th>If no unweighted class rank, evaluate by weighted class rank.</th>
											<th>Ranks in top 10% of class.</th>
											<th>Ranks in top 5% of class.</th>
											<th>Ranks in top 3% of class.</th>
											<th>Ranks in top 1% of class.</th>
											<th></th>
										</tr>
										<tr>
											<th>3</th>
											<th>Number of AP classes taken.</th>
											<th>Does not currently take AP classes.</th>
											<th>Takes 1 AP class.</th>
											<th>Takes 2 AP classes.</th>
											<th>Takes 3 or more AP classes.</th>
											<th></th>
										</tr>
										<tr>
											<th>4</th>
											<th>Number of honors classes taken.</th>
											<th>Does not currently take honors classes.</th>
											<th>Takes 1 honors class.</th>
											<th>Takes 2 honors classes.</th>
											<th>Takes 3 or more honors classes.</th>
											<th></th>
										</tr>
										<tr>
                      <th>5</th>
                      <th>AP and honors courses overall grades</th>
											<th>0</th>
											<th>1</th>
											<th>2</th>
											<th>3</th>
											<th></th>
                      <th></th>
                    </tr>
                    <tr>
                      <th>Discretionary points: Assign additional points based on standardized test scores, academic awards, honor society membership, etc.</th>
											<th>0</th>
											<th>1</th>
											<th>2</th>
											<th>3</th>
											<th></th>
										</tr>
									</table>
								</section>

							<!-- Content -->

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
												<li><a href="academics.php">Academics</a></li>
												<li><a href="stem.html">STEM</a></li>
												<li><a href="arts.html">Art</a></li>
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
