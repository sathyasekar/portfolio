<?php
	// Header
require 'partial/header.php';
?>

  <body>

<?php
	// Nav
require 'partial/nav.php';
?>  

	<!-- Welcome Section  -->
	<div id="ww">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 centered">
					<img src="assets/img/sathya.png" height="50%" width="50%" alt="Sathya">
					<h1>About me!</h1>
					<p>Hello everybody. I'm Sathya, a second year student in web school in Paris.</p>				
				</div>
			</div>
	    </div> 
	</div>
	
	
	<!--  Information Section  -->
	
	<div class="container pt">
		<div class="row mt centered">	
			<div class="col-lg-4">
				<span class="glyphicon glyphicon-book"></span>
				<p>Reading, is my favorite hobby</p>
			</div>
			
			<div class="col-lg-4">
				<span class="glyphicon glyphicon-user"></span>
				<p>We do lot of group work for projects</p>
			</div>

			<div class="col-lg-4">
				<span class="glyphicon glyphicon-globe"></span>
				<p>I love to travel, that inspire me a lot.</p>
			</div>
		</div><!-- /row -->
		
		<div class="row mt">
			<div class="col-lg-6">
				<h4>THE THINKING</h4>
				<p> Hey, I am Sathya. I am currently in web school. We experiment many sector: design, communication, marketing, development... I am interested in UX design. I like to experience differente things, to create my personnel style. </p>
			</div><!-- /colg-lg-6 -->
			
			<div class="col-lg-6">
				<h4>THE SKILLS</h4>
				Design
				<div class="progress">
					<div class="progress-bar progress-bar-theme" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
						<span class="sr-only">60% Complete</span>
					</div>
				</div>

				Marketing
				<div class="progress">
					<div class="progress-bar progress-bar-theme" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
						<span class="sr-only">80% Complete</span>
					</div>
				</div>
				
				Communication
				<div class="progress">
					<div class="progress-bar progress-bar-theme" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
						<span class="sr-only">85% Complete</span>
					</div>
				</div>

			</div>
		</div>
	</div>
	
	

<?php
	// Footer
require 'partial/footer.php';
?>
