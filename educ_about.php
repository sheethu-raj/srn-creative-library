<!DOCTYPE html>
<html>
<head>
	<title>Education Website</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">

	<!----Custom CSS---->

	<link rel="stylesheet" type="text/css" href="educ_home.css">
	<link rel="stylesheet" type="text/css" href="educ_about.css">

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
		<h1>ABOUT US</h1>
	</section>

	<!----Content Section---->

	<section class="aboutus">
		<div class="row">
			<div class="abtcol">
				<h1>We are the World's Largest University</h1>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>
				<a href="educ_course.php" class="btn redbtn">Explore More</a>
			</div>
			<div class="abtcol">
				<img src="images/about.jpg">
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