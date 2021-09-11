<!DOCTYPE html>
<html>
<head>
	<title>Education Website</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">

	<!----Custom CSS---->

	<link rel="stylesheet" type="text/css" href="educ_home.css">
	<link rel="stylesheet" type="text/css" href="educ_about.css">
	<link rel="stylesheet" type="text/css" href="educ_course.css">

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
		<h1>COURSES</h1>
	</section>

	<!----Content Section---->

	<section class="course">
		<h1>Courses We Offer</h1>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit.
		</p>

		<div class="row">
			<div class="coursecol">
				<h3>Intermediate</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</p>
			</div>

			<div class="coursecol">
				<h3>Degree</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</p>
			</div>

			<div class="coursecol">
				<h3>Post-Graduation</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</p>
			</div>
		</div>
	</section>

	<!----Facilities Section---->

	<section class="facilities">
		<h1>Our Facilities</h1>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit.
		</p>

		<div class="row">
			<div class="facilitiescol">
				<img src="images/library.png">
				<h3>World Class Library</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>
			</div>

			<div class="facilitiescol">
				<img src="images/basketball.png">
				<h3>Largest Play Ground</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>
			</div>

			<div class="facilitiescol">
				<img src="images/cafeteria.png">
				<h3>Tasty and Healthy Food</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>
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

	<script type="text/javascript" src="vanilla-tilt.js"></script>
	<script type="text/javascript">
		VanillaTilt.init(document.querySelectorAll(".facilitiescol"), {
		max: 25,
		speed: 400,
		glare: true,
		"max-glare": 1,
	});
	</script>

</body>
</html>