<!DOCTYPE html> 
<html lang="en"> 

<head> 
	<meta charset="UTF-8"> 
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0"> 
	<title>My Portfolio</title> 
	<link rel="stylesheet"
		href= 
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
		integrity= 
"sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
			crossorigin="anonymous" referrerpolicy="no-referrer" /> 
	<link rel="stylesheet" href="style.css"> 
	<link rel="stylesheet" href="responsive.css"> 
</head> 

<body> 
	<!-- Navbar header section -->
	<header class="header"> 
		<nav class="navbar"> 
			<div class="logo"> 
				<h2 class="logo-heading">Rajluxmi Singh</h2> 
			</div> 
			<div class="hamburger" id="hamburger"> 
				<i class="fas fa-bars hamburger-icon"></i> 
				<i class="fas fa-times cross-icon"></i> 
			</div> 
			<div class="menu"> 
				<ul class="menu-list"> 
					<li class="menu-list-items"> 
						<a class="links" href="#home"> 
							Home 
						</a> 
					</li> 
					<li class="menu-list-items"> 
						<a class="links" href="#about"> 
							About 
						</a> 
					</li> 
					<li class="menu-list-items"> 
						<a class="links" href="#portfolio"> 
							Activities 
						</a> 
					</li> 
					<li class="menu-list-items"> 
						<a class="links" href="#contact"> 
							Contact Me 
						</a> 
					</li> 
				</ul> 
			</div> 
		</nav> 
	</header> 

	<!-- Main hero banner -->
	<section id="home" class="hero"> 
		<div class="intro"> 
			<div class="headings"> 
				<h3 class="greet-heading">Hello, I'm</h3> 
				<h1 class="my-heading">Rajluxmi Singh</h1> 
				<h4 class="sub-heading"> 
					A Student at Jaypee University of Information Technology 
				</h4> 
			</div> 
			<div class="intro-buttons"> 
                				<a href="./resume.pdf" target="_blank"><button class="btn ghost-btn">Get Resume</button> </a>
			</div> 
		</div> 
	</section> 

	<!-- About Section -->
	<section id="about" class="about"> 
		<div class="about-text"> 
			<h1 class="my-heading">About Me</h1> 
			<p class="lead-para"> 
				I am currently studying at JUIT, Waknaghat in second year.
                I am pursuing a B.Tech degree in Information Technology.
                My family and I live in Faridabad, Haryana wher I did my schooling at Aravali International School for a span of 14 years since 2008.
                My hobbies include Dancing, Sketching and Designing.
            </p>  
		</div> 
		<div class="about-image"> 
			<img src="./WhatsApp Image 2024-05-12 at 20.22.55_58da86a3.jpg" alt="About Image"> 
		</div> 
	</section> 

	<!-- Portfolio Section -->
	<section class="portfolio" id="portfolio"> 
		<div class="portfolio-heading"> 
			<h1 class="my-heading text-center">My Activities</h1> 
		</div> 
		<div class="portfolio-content">  
			<div class="my-row"> 
				<div class="my-col"> 
					<div class="my-card"> 
						<div class="icon"> 
							<i class="fa-solid fa-palette"></i> 
						</div> 
						<h3 class="greet-heading blue-text">ART</h3> 
						<p class="small-para"> 
							Art is a profound expression of 
							human creativity and imagination, it transcends 
							 cultural and temporal boundaries, 
							 offering insights into the human 
							 experience and evoking emotions 
							 that words alone cannot capture. 
							 I create art in form of sketches and painting. 
						</p> 
					</div> 
				</div> 
				<div class="my-col"> 
					<div class="my-card"> 
						<div class="icon"> 
							<i class="fas fa-quote-left"></i> 						</div> 
						<h3 class="greet-heading blue-text">COGNIZANCE</h3> 
						<p class="small-para"> 
							Earlier this year I took part in the great teach 
							fest of IIT Roorkee: COGNIZANCE held from 15th 
							to 17th March 2024, where we attended
							a workshop on Data Structures and Algorithms
							undertaken by non other than GeeksForGeeks.
							This proved to be a fun learning journey for me.
						</p> 
					</div> 
				</div> 
				<div class="my-col"> 
					<div class="my-card"> 
						<div class="icon"> 
							<i class="fa-solid fa-object-group"></i>						</div> 
						<h3 class="greet-heading blue-text">ENACTUS</h3> 
						<p class="small-para"> 
							Enactus and NIFT Delhi provided an excellent 
							way of stepping into the graphic designing world
							by providing a two day Graphic Designing workshop
							on 30th and 31st March 2024. It provided me a start
							on basics for graphic designing.
						</p> 
					</div> 
				</div> 
			</div> 
		</div> 
	</section> 

	<!-- Contact me section -->
	<section class="contact" id="contact"> 
		<div class="contact-heading"> 
			<h1 class="my-heading text-center">Contact Me</h1> 
		</div> 
		<div class="contact-content"> 
			<div class="contact-form-container"> 
				<h1 class="greet-heading">Get In Touch</h1> 
				<form action="insert_data.php" class="contact-form"> 
					<input class="form-controls" type="text" name="sname"
						placeholder="Your Name"> 
					<input class="form-controls" type="email" name="email"
						placeholder="Your Email"> 
					<input class="form-controls" type="text" name="phone"
						placeholder="Your Phone"> 
					<textarea class="form-controls"
							placeholder="Write your message"
							name="msg" id="" cols="30"
							rows="10"> 
					</textarea> 
					<input class="form-btn btn common-btn"
						type="submit" value="Send Message"> 
				</form> 
			</div> 
			<div class="contact-details"> 
				<h1 class="greet-heading">My Contact Details</h1> 
				<div class="details"> 
					<h5 class="contact-heading">EMAIL</h5> 
					<p class="contact-text">rajluxmi.224@gmail.com</p> 
				</div> 
				<div class="details"> 
					<h5 class="contact-heading">ADDRESS</h5> 
					<p class="contact-text">Jaypee University of Information Technology</p> 
					<p>Waknaghat</p> 
					<p>Solan, Himachal Pradesh</p> 
				</div> 
			</div> 
		</div> 
	</section> 

	<!-- Footer section -->
	<footer class="footer"> 
		<div class="footer-content text-center"> 
			<h4> 
				Copyright © 2024 Rajluxmi Singh 
			</h4> 
			<div class="social-links"> 
				<div class="footer-menu"> 
					<ul class="footer-menu-list"> 
						<li class="footer-list-items"> 
							<a class="footer-links" href="https://github.com/Rajluxmi-Singh" target="_blank"> 
								<i class="fa-brands fa-github"></i>							</a> 
						</li> 
						<li class="footer-list-items"> 
							<a class="footer-links" href="https://www.instagram.com/rls.art_22/?igsh=MXA1b2x4MHRwZWI0bQ%3D%3D" target="_blank"> 
								<i class="fab fa-instagram"></i> 
							</a> 
						</li> 
						<li class="footer-list-items"> 
							<a class="footer-links" href="https://www.linkedin.com/in/rajluxmi-singh/" target="_blank"> 
								<i class="fab fa-linkedin-in"></i> 
							</a> 
						</li> 
					</ul> 
				</div> 
			</div> 
		</div> 
	</footer> 

	<script src= 
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"
		integrity= 
"sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer"> 
	</script> 
	<script src="script.js"></script> 
</body> 

</html>
