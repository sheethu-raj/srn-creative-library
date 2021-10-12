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
		<h1>Our Certificate & Online Programs For 2021</h1>
	</section>

	<!----Content Section---->

	<section class="blogcontent">
		<div class="row">
			<div class="leftblog">
				<img src="images/pexels-joshua-mcknight-1139317.jpg">
				<h2>Our Certificate & Online Programs For 2021</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					<br />
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					<br />
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					<br />
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</p>

				<div class="commentbox">
					<h3>Leave a Comment</h3>
					<form class="commentform">
						<input type="text" placeholder="Name">
						<input type="email" placeholder="Email">
						<textarea rows="5" placeholder="Your Comment"></textarea>
						<button type="submit" class="btn redbtn">Submit</button>
					</form>
				</div>

			</div>
			<div class="rightblog">
				<h3>Post Categories</h3>
				
				<div>
					<span>Business Analytics</span>
					<span>30</span>
				</div>

				<div>
					<span>Data Science</span>
					<span>15</span>
				</div>

				<div>
					<span>Machine Learning</span>
					<span>45</span>
				</div>

				<div>
					<span>AutoCAD</span>
					<span>50</span>
				</div>

				<div>
					<span>Journalism</span>
					<span>22</span>
				</div>

				<div>
					<span>Commerce</span>
					<span>18</span>
				</div>
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