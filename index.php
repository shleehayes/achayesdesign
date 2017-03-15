<?php
require "header.php";

// if (isset($_POST["submit"])) {
// 	$name = $_POST['name'];
// 	$email = $_POST['email'];
// 	$message = $_POST['message'];
// 	$from = 'Contact Form';
// 	$to = 'ashleychristinehayes@gmail.com';
// 	$subject = 'Message from Contact Form';
//
// 	$body = "From: $name\n E-Mail: $email\n Message:\n $message";
//
// 	// Check if name has been entered
// 	if (!$_POST['name']) {
// 		$errName = 'Please enter your name';
// 	}
//
// 	// Check if email has been entered and is valid
// 	if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
// 		$errEmail = 'Please enter a valid email address';
// 	}
//
// 	//Check if message has been entered
// 	if (!$_POST['message']) {
// 		$errMessage = 'Please enter your message';
// 	}
//
//
// // If there are no errors, send the email
// if (!$errName && !$errEmail && !$errMessage) {
// if (mail ($to, $subject, $body, $from)) {
// 	$result='<div class="alert alert-success">Thank You! I will be in touch.</div>';
// } else {
// 	$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again.</div>';
// 	}
// }
// 	}
?>

<body>
	<nav class="nav_closed">
		<div id="ham-menu">
			<div class="menu">
			  <span class="menu-global menu-top"></span>
			  <span class="menu-global menu-middle"></span>
			  <span class="menu-global menu-bottom"></span>
			</div>
		</div>
		<ul id="navlist">
			<li><a href="#page-header">HOME</a></li>
			<li><a href="#about">ABOUT</a></li>
			<li><a href="#skills">SKILLS</a></li>
			<li><a href="#portfolio">PORTFOLIO</a></li>
			<li><a href="#contact">CONTACT</a></li>
		</ul>
	</nav>
	<section id="page-header">
		<a href="#page-header"></a>
	</section>

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
					<h3 class="aboutinfo">ASHLEY CHRISTINE HAYES</h3>
					<h2 class="aboutinfo">Web Developer / Visual Designer</h2>
				</div>
				<div class="col-sm-6">
					<div id ="about-me">
						<div class="col-lg-10">
							<p class="aboutparagraph">I have always been the <strong>creative</strong> type, constantly doodling on a notepad or spacing out about what I can create <strong>next</strong>. Fast foward to my twenties when I <strong>discovered</strong> I could make a career out of what I am most passionate about,<strong> ART</strong>. I am currently a student nearing graduation for my bachelors in Media Arts & Design. My <strong>goal</strong> is to utilize my design and problem solving skills within an environment that <strong>encourages</strong> and <strong>promotes</strong> creativity and professionalism.</p>
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
						<h1>AT YOUR SERVICE</h1>
						<hr id="skills_underline">
					</div>
				</div>
			</div>
			<div class="skillsbox">
				<div id ="box" class="col-lg-6">
					<i class="fa fa-code fa-5x" aria-hidden="true"></i>
						<h3>Web Design</h3>
						<hr>
						<p>I design and develop websites for a memorable experience with user friendly interfaces.</p>
				</div>
				<div id="box" class="col-lg-6">
					<i class="fa fa-laptop fa-5x" aria-hidden="true"></i>
						<h3>Visual Design</h3>
						<hr>
						<p>With an understanding of both graphic/ web design and user experience/ interface, problem solving is what I do. Come to me for your illustration, vector art, and logo / company branding needs! </p>
				</div>
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

	<!-- <section id="portfolio">
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
	</section> -->

	<section class="no-padding" id="portfolio">
		<div class="container-fluid">
			<div class="row no-gutter popup-gallery">
				<div class="col-lg-4 col-sm-6">
					<a href="img/portfolio/fullsize/1.jpg" class="portfolio-box">
						<img src="img/portfolio/thumbnails/1.jpg" class="img-fluid" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Category
								</div>
								<div class="project-name">
									Project Name
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a href="img/portfolio/fullsize/2.jpg" class="portfolio-box">
						<img src="img/portfolio/thumbnails/2.jpg" class="img-fluid" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Category
								</div>
								<div class="project-name">
									Project Name
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a href="img/portfolio/fullsize/3.jpg" class="portfolio-box">
						<img src="img/portfolio/thumbnails/3.jpg" class="img-fluid" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Category
								</div>
								<div class="project-name">
									Project Name
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a href="img/portfolio/fullsize/4.jpg" class="portfolio-box">
						<img src="img/portfolio/thumbnails/4.jpg" class="img-fluid" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Category
								</div>
								<div class="project-name">
									Project Name
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a href="img/portfolio/fullsize/5.jpg" class="portfolio-box">
						<img src="img/portfolio/thumbnails/5.jpg" class="img-fluid" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Category
								</div>
								<div class="project-name">
									Project Name
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a href="img/portfolio/fullsize/6.jpg" class="portfolio-box">
						<img src="img/portfolio/thumbnails/6.jpg" class="img-fluid" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Category
								</div>
								<div class="project-name">
									Project Name
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1>LET'S GET IN TOUCH !</h1>
						<hr id="contact_underline">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="col-sm-3">
						<div class="contact_icon">
							<span class="fa-stack fa-4x">
								<i class="fa fa-circle fa-stack-2x text-primary"></i>
								<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
							</span>
						</div>
						<h2 class="bold">PHONE</h2>
						<p>909.418.4783</p>
					</div>
					<div class="col-sm-3">
						<div class="contact_icon">
							<span class="fa-stack fa-4x">
								<i class="fa fa-circle fa-stack-2x text-primary"></i>
								<i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
							</span>
						</div>
						<h2 class="bold">EMAIL</h2>
						<p>ashleychristinehayes@gmail.com</p>
					</div>
				</div>
				<div class="col-md-6">
					<form class="form-hortizonal" role="form" action="index.php" method="post">
						<div class="form-group">
							<label for="name" class="col-sm-2 control-label">Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="col-sm-2 control-label">Email</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
							</div>
						</div>
						<div class="form-group">
							<label for="message" class="col-sm-2 control-label">Message</label>
							<div class="col-sm-10">
								<textarea class="form-control" rows="4" id="message" name="message" placeholder="Type your message here..."></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-10 col-sm-offset-2">
								<input id="submit" name="submit" type="submit" value="Send" class="btn">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

<?php require "footer.php"; ?>