<?php 
session_start();
 ?>
<!DOCTYPE html>

<!--
 // WEBSITE: https://
 // TWITTER: https://
 // FACEBOOK: https://
 // GITHUB: https://
-->

<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Ola's Enterprise</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
  <link rel="stylesheet" href="plugins/counto/animate.css">
  <link rel="stylesheet" href="plugins/aos/aos.css">
  <link rel="stylesheet" href="plugins/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="plugins/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.css">
  <link rel="stylesheet" href="plugins/animated-text/animated-text.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>
 <nav class="navbar navbar-expand-lg bg-dark main-nav " id="navbar">
	<div class="container">
	  <a class="navbar-brand" href="index.html">
	  	<img src="C:\Users\User\Desktop\Group E html\bootstrap\pic1.jpeg" alt="" class="img-fluid py-0">
	  </a>

	  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
		<span class="ti-align-justify"></span>
	  </button>
  
		  <div class="collapse navbar-collapse" id="navbarsExample09">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item  active"><a class="nav-link text-light" href="home.php">Home</a></li>
			  

			  <li class="nav-item dropdown text-light">
					<a class="nav-link dropdown-toggle text-light" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
					<ul class="dropdown-menu" aria-labelledby="dropdown01">
						<li><a class="dropdown-item" href="home.php">About Me</a></li>
						
					</ul>
			  </li>

			  <li class="nav-item dropdown text-light">
					<a class="nav-link dropdown-toggle text-light" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">account</a>
					<ul class="dropdown-menu" aria-labelledby="dropdown01">
						<li><a class="dropdown-item" href="login.php">login</a></li>
						<li><a class="dropdown-item" href="profile.php">profile</a></li>
						<!-- <li><a class="dropdown-item" href="resetPassword.php">Change account</a></li> -->
						<li><a class="dropdown-item" href="delete.php">Delete account</a></li>
						<li class="nav-item"><a class="nav-link text-light" href="logout.php">Logout</a></li>
					</ul>
			  </li>
			  <li class="nav-item  active"><a class="nav-link text-light" href="signUp.php">sign up</a></li>

			</ul>
		</div>
	</div> 
</nav>

<!-- Header Close --> 


<!-- Navigation ENd -->


<?php 
if (isset($_SESSION['error'])) {
   echo("<p style='color:red;'>".$_SESSION['error']. "</p>\n");
   unset($_SESSION['error']);
}
if (isset($_SESSION['success'])) {
	echo("<p style='color:green'>". $_SESSION['success']. "</p>\n");
  
  unset($_SESSION['success']);
}

if ( ! isset($_SESSION['account'])) { ?>
	<!-- <p>Please <a href="login.php">Login </a> to start</p> -->
<?php 
}else{ ?>
<!-- <p>This is where cool app would be</p> -->
<?php 
include('connect.php');
$sql="SELECT * FROM tutorial WHERE email=:account";
$stmt=$pdo->prepare($sql);
$stmt->execute(array(':account'=>$_SESSION['account']));

$row=$stmt->fetch(PDO::FETCH_ASSOC);
 // echo "Welcome " .$row['name'];
?>
<br>
<!-- <a href="edit.php">Edit profile</a> -->
<!-- <p>Please <a href="logout.php">Log out</a>When you are done</p> -->
<!-- <a href="delete.php">delete account</a> -->
<!-- Banner start -->
<section class="section banner bg-dark">
	<div class="container">
		<div class="row">
			<div class="col-lg-10">
				 <h3 class=" clip is-full-width mb-1 text-warning ">
				 	Welcome <?= $row['name']; ?></h3><br>
            <h2 class="cd-headline clip is-full-width mb-4 text-warning ">           
						<span class="cd-words-wrapper text-light">
            <b class="is-visible">Ola's Enterprise...</b>
						<b>always there for you.</b>
            </span>
            </h2>
                
			</div>
		</div>
	</div>
</section>
<!-- Banner End -->

<?php
};
?>
  

<!-- Banner Start -->

<!-- Navigation Start -->
<!-- Header Start --> 

 



<!-- POrtfolio start -->
<section class="portfolio ">
	<div class="container">
		<div class="row mb-5">
	      	<div class="col-10">
		        <div class="btn-group btn-group-toggle " data-toggle="buttons">
		          <label class="btn active text-primary">
		            <input type="radio" name="shuffle-filter" value="all" checked="checked" />Projects
		          </label>
		          <label class="btn text-primary">
		            <input type="radio" name="shuffle-filter" value="design" />UI/UX Design
		          </label>
		          <label class="btn text-primary">
		            <input type="radio" name="shuffle-filter" value="branding" />branding
		          </label>
		          <label class="btn text-primary">
		            <input type="radio" name="shuffle-filter" value="illustration" />Web Development
		          </label>
		           <label class="btn text-primary">
		            <input type="radio" name="shuffle-filter" value="photo" />Grapic Design
		          </label>
		        </div>
	      	</div>
    	</div>	

		<div class="row shuffle-wrapper portfolio-gallery">
	      <div class="col-lg-4 col-6 mb-4 shuffle-item"  data-groups="[&quot;design&quot;,&quot;illustration&quot;]">
		      	<div class="position-relative inner-box">
		          <div class="image position-relative ">
	               <img src="port2.PNG" height="700px" alt="portfolio-image" class="img-fluid w-100 d-block">
	                <div class="overlay-box">
	                  <div class="overlay-inner">
	                    <a class="overlay-content" href="portfolio-single.html">
	                      <h5 class="mb-0">Graphics</h5>
	                      <p>Design</p>
	                    </a>
	                  </div>
	                </div> 
	            </div>
		      </div>
	      </div>

	      <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;branding&quot;]">
	        <div class="position-relative inner-box" >
	            <div class="image position-relative ">
	               <img src="portfolio.PNG" width="710px"  height="1000px" alt="portfolio-image" class="img-fluid w-100 d-block">
	                <div class="overlay-box">
	                  <div class="overlay-inner">
		                    <a class="overlay-content" href="portfolio-b.html">
		                      <h5 class="mb-0">Web app</h5>
		                      <p>Development</p>
		                    </a>
	                	</div> 
		            </div>
		        </div>
		      </div>
	      </div>

	      <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;illustration&quot;]">
	        <div class="position-relative inner-box">
	            <div class="image position-relative ">
	               <img src="port3.JPG" alt="portfolio-image" class="img-fluid w-100 d-block">
	                <div class="overlay-box">
	                  <div class="overlay-inner">
	                    <a class="overlay-content" href="portfolio-single2.html">
	                      <h5 class="mb-0">Business </h5>
	                      <p>marketing</p>
	                    </a>
	                  </div>
	                </div> 
	            </div>
	        </div>
	      </div>

	      <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;branding&quot;]">
	        <div class="position-relative inner-box">
	            <div class="image position-relative ">
	               <img src="port7.PNG" alt="portfolio-image" class="img-fluid w-100 d-block">
	                <div class="overlay-box">
	                  <div class="overlay-inner">
	                    <a class="overlay-content" href="portfolio-7.html">
	                      <h5 class="mb-0">Portfolio</h5>
	                      <p>Design</p>
	                    </a>
	                  </div>
	                </div> 
	            </div>
	        </div>
	      </div>

	      <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;illustration&quot;]">
	        <div class="position-relative inner-box">
	            <div class="image position-relative ">
	               <img src="port1.PNG" alt="portfolio-image" class="img-fluid w-100 d-block">
	                <div class="overlay-box">
	                  <div class="overlay-inner">
	                    <a class="overlay-content" href="portfolio-single4.html">
	                       <h5 class="mb-0 ">Modern web</h5>
	                      	<p>Seo</p>
	                    </a>
	                  </div>
	                </div> 
	            </div>
	        </div>
	      </div>

	      <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;photo&quot;]">
	        <div class="position-relative inner-box">
	            <div class="image position-relative ">
	               <img src="porta.PNG" alt="portfolio-image" class="img-fluid w-100 d-block">
	                <div class="overlay-box">
	                  <div class="overlay-inner">
	                    <a class="overlay-content" href="portfolio-5.html">
	                       <h5 class="mb-0">Agency web</h5>
	                      	<p>Design</p>
	                    </a>
	                  </div>
	                </div> 
	            </div>
	        </div>
	      </div>
	    </div>
	</div>
</section>
<!-- Portfolio End -->

<!-- Service start -->
<section class="section service-home border-top">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h2 class="mb-2 ">Core Services.</h2>
				
			</div>
		</div>
		
		<div class="row">
			<div class="col-lg-4">
				<div class="service-item mb-5" data-aos="fade-left" >
					<i class="ti-layout"></i>
					<h4 class="my-3">Web Development</h4>
					
				</div>
			</div>
			<div class="col-lg-4">
				<div class="service-item mb-5" data-aos="fade-left"  data-aos-delay="450">
					<i class="ti-announcement"></i>
					<h4 class="my-3">Digital Marketing</h4>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="service-item mb-5 mb-lg-0" data-aos="fade-left"  data-aos-delay="750">
					<i class="ti-layers"></i>
					<h4 class="my-3">Graphics Design</h4>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="service-item" data-aos="fade-left"  data-aos-delay="750">
					<i class="ti-anchor"></i>
					<h4 class="my-3">Branding Design</h4>
					
				</div>
			</div>
			<div class="col-lg-4">
				<div class="service-item mb-5" data-aos="fade-left"  data-aos-delay="950">
					<i class="ti-video-camera"></i>
					<h4 class="my-3">Video Marketing</h4>
				
				</div>
			</div>
			<div class="col-lg-4">
				<div class="service-item mb-5 mb-lg-0" data-aos="fade-left"  data-aos-delay="1050">
					<i class="ti-android"></i>
					<h4 class="my-3">App Design</h4>
					
				</div>
			</div>
		</div>
	</div>
</section>
<!-- service end -->
<section class="footer">
	<div class="container">
		<div class="row ">
			<div class="col-lg-6">
				<p class="mb-0">Copyrights © 2022. Designed & Developed by <a href="themefisher.com" class="text-white">Ola's Enterprise</a></p>
			</div>
			<div class="col-lg-6">
				<div class="widget footer-widget text-lg-right mt-5 mt-lg-0">
					<ul class="list-inline mb-0">
						<li class="list-inline-item"><a href="https://www.facebook.com" target="_blank"><i class="ti-facebook mr-3"></i></a>
						</li>
						<li class="list-inline-item"><a href="https://twitter.com" target="_blank"><i class="ti-twitter mr-3"></i></a>
						</li>
						<li class="list-inline-item"><a href="https://github.com" target="_blank"><i class="ti-github mr-3"></i></a></li>
						<li class="list-inline-item"><a href="https://www.pinterest.com" target="_blank"><i class="ti-pinterest mr-3"></i></a></li>
						<li class="list-inline-item"><a href="https://linkedin.com" target="_blank"><i class="ti-linkedin mr-3"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script src="plugins/aos/aos.js"></script>
<script src="plugins/owl-carousel/owl.carousel.min.js"></script>
<script src="plugins/shuffle/shuffle.min.js"></script>
<script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="plugins/animated-text/animated-text.js"></script>
<script src="plugins/counto/apear.js"></script>
<script src="plugins/counto/counTo.js"></script>

 <!-- Google Map -->
<script src="plugins/google-map/map.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script> 
<!-- Main Script -->
<script src="js/script.js"></script>

</html>