<!DOCTYPE html>
<html>
<head>
	<title>Education Website</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">

	<!----Custom CSS---->

	<link rel="stylesheet" type="text/css" href="educ_home.css">
	<link rel="stylesheet" type="text/css" href="educ_about.css">
	<link rel="stylesheet" type="text/css" href="educ_course.css">
	<link rel="stylesheet" type="text/css" href="educ_blog.css">
	<link rel="stylesheet" type="text/css" href="educ_contact.css">

	<!----Font Awesome CSS---->

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
</head>
<body>

	<!----Header Section---->

	<section class="subheader">
		<nav>
			<a href="educ_home.php"><img src="images/logo3.png"></a>
			<div class="navlinks" id="navLinks">
				<i class="fas fa-times" onclick="hidemenu()"></i>
				<ul>
					<li><a href="educ_home.php">Home</a></li>
					<li><a href="educ_about.php">About</a></li>
					<li><a href="educ_course.php">Course</a></li>
					<li><a href="educ_blog.php">Blog</a></li>
					<li><a href="educ_contact.php">Contact</a></li>
				</ul>
			</div>
			<i class="fas fa-bars" onclick="showmenu()"></i>
		</nav>
		<h1>CONTACT US</h1>
	</section>

	<!----Content Section---->

	<section class="location">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497699.6983259305!2d77.63093949999997!3d12.953997400000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1623694260365!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</section>

	<section class="contact">
		<div class="row">
			<div class="contactcol">

				<div>
					<i class="fas fa-home"></i>
					<span>
						<h5>XYZ Building, ABC Road</h5>
						<p>Bangalore, Karnataka</p>
					</span>
				</div>

				<div>
					<i class="fas fa-phone"></i>
					<span>
						<h5>+91 1234567890</h5>
						<p>Monday - Friday, 9AM - 5PM</p>
					</span>
				</div>

				<div>
					<i class="fas fa-envelope"></i>
					<span>
						<h5>info@xxx.com</h5>
						<p>Email us your query</p>
					</span>
				</div>

			</div>
			<div class="contactcol">
				<form>
					<input type="text" placeholder="Name" name="name" required>
					<input type="email" placeholder="Email" name="email" required>
					<input type="text" placeholder="Subject" name="subject" required>
					<textarea rows="8" placeholder="Message" name="message" required></textarea>
					<button type="submit" class="btn redbtn">Send</button>
				</form>
			</div>
		</div>
	</section>

	<!----Footer Section---->

	<section class="footer">
		<h4>About Us</h4>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore <br /> et dolore magna aliqua. Ut enim ad minim veniam.
		</p>
		<div class="icons">
			<i class="fab fa-facebook"></i>
			<i class="fab fa-instagram"></i>
			<i class="fab fa-twitter"></i>
			<i class="fab fa-linkedin"></i>
		</div>
		<p>Made with <i class="fas fa-heart"></i> ---XXX---</p>
	</section>

	<!----JS Section---->

	<script type="text/javascript">
		var navLinks = document.getElementById("navLinks");

		function showmenu()
		{
			navLinks.style.right = "0";
		}

		function hidemenu()
		{
			navLinks.style.right = "-200px";
		}
	</script>

</body>
</html>