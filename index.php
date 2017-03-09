<?php
require "header.php"; ?>

<body>
	<nav class="nav_closed">
		<!-- <a href="#mainnav" id="menu">MENU</a> -->
		<div class="menu">
		  <span class="menu-global menu-top"></span>
		  <span class="menu-global menu-middle"></span>
		  <span class="menu-global menu-bottom"></span>
		</div>
		<ul id="navlist">
			<li><a href="#page-header">HOME</a></li>
			<li><a href="#about">ABOUT</a></li>
			<li><a href="#skills">SKILLS</a></li>
			<li><a href="#portfolio">PORTFOLIO</a></li>
			<li><a href="#contact">CONTACT</a></li>
		</ul>
	</nav>
	<section id="page-header"></section>

	<section id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1>THE DESIGNER</h1>
						<hr id="about_underline">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div id ="about-me">
						<img class="aboutpic" src="assets/images/aboutpic.jpg">
					</div>
					<h3>ASHLEY CHRISTINE HAYES</h3>
					<h2>Web Developer / Visual Designer</h2>
				</div>
				<div class="col-sm-6">
					<div id ="about-me">
						<div class="col-lg-8 col-lg-offset-2">
							<p class="aboutparagraph">Los Angeles based visual designer, digital artist, and web developer. Currently a student nearing graduation for my bachelors in Media Arts & Design. My goal is to utilize my design and problem solving skills within an environment that encourages and promotes creativity and professionalism. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="skills">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1>SKILLS</h1>
						<hr id="skills_underline">
					</div>
				</div>
			</div>
			<div id ="box" class="col-lg-6">
				<i class="fa fa-code fa-5x" aria-hidden="true"></i>
					<h3>Web Design</h3>
					<hr>
					<p>Design and development of websites.</p>
			</div>
			<div id="box" class="col-lg-6">
				<i class="fa fa-laptop fa-5x" aria-hidden="true"></i>
					<h3>Visual Design</h3>
					<hr>
					<p>Illustration, design, user experience and interface.</p>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1>PROGRAMS</h1>
						<hr id="programs_underline">
					</div>
				</div>
			</div>
			<div class="row">
				<div id ="pg_box" class="col-sm-3">
					<h3>PHOTOSHOP</h3>
				</div>
				<div id="pg_box" class="col-sm-3">
					<h3>ILLUSTRATOR</h3>
				</div>
				<div id="pg_box" class="col-sm-3">
					<h3>INDESIGN</h3>
				</div>
				<div id="pg_box" class="col-sm-3">
					<h3>MUSE</h3>
				</div>
			</div>
			<div class="row">
				<div id="pg_box" class="col-sm-4">
					<h3>HTML</h3>
				</div>
				<div id="pg_box" class="col-sm-4">
					<h3>CSS</h3>
				</div>
				<div id="pg_box" class="col-sm-4">
					<h3>JAVASCRIPT</h3>
				</div>
			</div>
		</div>
	</section>

	<section id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1>PORTFOLIO</h1>
						<hr id="portfolio_underline">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1>CONTACT</h1>
						<hr id="contact_underline">
					</div>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md-6">
					<span class="fa-stack fa-4x">
						<i class="fa fa-circle fa-stack-2x text-primary"></i>
						<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
					</span>
					<h2>PHONE</h2>
					<p>909.418.4783</p>
				</div>
				<div class="col-md-6">
					<span class="fa-stack fa-4x">
						<i class="fa fa-circle fa-stack-2x text-primary"></i>
						<i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
					</span>
					<h2>EMAIL</h2>
					<p>ashleychristinehayes@gmail.com</p>
				</div>
			</div>
		</div>
	</section>

<?php require "footer.php"; ?>