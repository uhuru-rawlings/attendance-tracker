<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Voocar  | Voocar is a platform that provides last mile delivery service and marketing infrastructure for merchants who participate in e-commerce selling on social platforms like Instagram, Facebook & WhatsApp.</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Mr+Dafoe&amp;display=swap" rel="stylesheet">

	<!-- Styles -->
	<link rel="stylesheet" href="css/basic.css" />
	<link rel="stylesheet" href="css/layout.css" />
	<link rel="stylesheet" href="css/magnific-popup.css" />
	<link rel="stylesheet" href="css/animate.css" />
	<link rel="stylesheet" href="css/jarallax.css" />
	<link rel="stylesheet" href="css/owl.carousel.css" />
	<link rel="stylesheet" href="css/swiper.css" />
	<link rel="stylesheet" href="css/fontawesome.css" />

    <!-- Favicon -->
    <!-- <link href="img/favicon.ico" rel="icon"> -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <!-- <link href="css/basic.css" rel="stylesheet"> -->
    <!-- <link href="css/layout.css" rel="stylesheet"> -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/footer.css">
</head>

<body>

    <!-- Navbar Start -->
    <div class="top_header_section">
        <!-- <div class="bg-images">
            <img src="img/nairobisky.jpg" height="100%" width="100%" alt="">
        </div> -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
			<div class="logo" style="height: 25px; width: 120px;">
				<a href="index.php">
					<img class="logo-img" height="100%" width="100%" src="img/voocar_transparent.webp" alt="" />
					<!-- <span class="logo-lnk"> Voocar <br /> Logistics	</span> -->
				</a>
			</div>
			<button type="button" class="navbar-toggler me-4 shadow-none" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<div class="navbar-nav ms-auto p-4 p-lg-0">
					<a href="index.php" class="nav-item nav-link">Home</a>
					<a href="store/index.php" class="nav-item nav-link">Shop</a>
					<div class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Our Company</a>
						<div class="dropdown-menu m-0">
							<a href="about.php" class="dropdown-item">About Us</a>
							<a href="carrier.php" class="dropdown-item">Courier</a>
							<a href="pricing.php" class="dropdown-item">Pricing</a>
							<a href="business&patner.php" class="dropdown-item">Business & Patner</a>
						</div>
					</div>
					<a href="contact.php" class="nav-item nav-link active">Contact</a>
				</div>
			</div>
    	</nav>
        <div class="titles text-center">
            <h1 class="display-6 mb-4">Contact.</h1>
        </div>
    </div>
    <!-- Navbar End -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" style="background-color: rgba(234, 166, 54,.2);" data-wow-delay="0.1s">
                    <div class="contact_links">
                        <div class="rows" style="display: flex; column-gap: 20px; align-items: center;">
                            <div class="">
                                <div class="faicons"><i class="bi bi-envelope"></i></div>
                            </div>
                            <div class="">
                                <div class="name">Email</div>
                                <div class="link">
                                    <a style="color: #27B5F1;" href="mailto:info@vooca.co.ke">info@vooca.co.ke</a>
                                </div>
                            </div>
                        </div>
                        <div class="rows" style="display: flex; column-gap: 20px; align-items: center; padding-bottom: 60px;">
                            <div class="">
                                <div class="faicons"><i class="bi bi-telephone"></i></div>
                            </div>
                            <div class="">
                                <div class="name">Phone</div>
                                <div class="link">
                                    <a style="color: #27B5F1;" href="tel:+254759829346">+254759829346</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 mb-4">Talk To Us</h1>
                        <form action="contact_fun.php" autocomplete="off" method="post" id="form">
                            <div class="form-group">
                                <label for="userename" class="userenames">Name</label>
                                <input type="text" name="userenames" oninput="toogleLabel(this.id)" id="userenames" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="useremail" class="useremails">Email</label>
                                <input type="email" name="useremails" oninput="toogleLabel(this.id)" id="useremails" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="phonenumber" class="phonenumbers">Phone</label>
                                <input type="tel" name="phonenumbers" oninput="toogleLabel(this.id)" id="phonenumbers" class="form-control" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <label for="message" class="messages">Type message here</label>
                                <textarea name="message" oninput="toogleLabel(this.id)" id="messages" cols="30" rows="10" class="form-control" placeholder="Type message here"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" onclick="return validateContactForm()" value="Send Message" name="submit" class="btn btn-primary w-100 text-light bg-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Back to Top -->
    <button onclick="scollToTop()" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top">
        <i class="bi bi-arrow-up"></i>
    </button>

    <script>
        const scollToTop = () =>{
            window.scrollTo(0, 0);
        }
    </script>

    <?php
        include("includes/footer.php");
    ?>
</body>
    <!-- Footer Start -->
    <!-- Footer End -->
     <!-- JavaScript Libraries -->
	<script src="js/validation.js"></script>
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/labelToogle.js"></script>
    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js"></script>
	<script src="js/velocity.min.js"></script>
	<script src="js/jquery.validate.js"></script>
	<script src="js/magnific-popup.js"></script>
	<script src="js/typed.js"></script>
	<script src="js/jarallax.js"></script>
	<script src="js/jarallax-video.js"></script>
	<script src="js/jarallax-element.js"></script>
	<script src="js/imagesloaded.pkgd.js"></script>
	<script src="js/isotope.pkgd.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/swiper.js"></script>
	<script src="js/scripts.min.js"></script>
</html>