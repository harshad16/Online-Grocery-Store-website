<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GroceryStore</title>
	<!-- Load css styles -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />

</head>
<body>
	<div class="jumbotron home home-fullscreen" id="home">
		<div class="mask"></div>
		<a href="#" class="logo">
			<img src="img/logo.png" alt="GroceryStore.com" style="width:50px;heigth:50px;border-radius: 25px;">
		</a>
		<a href="" class="menu-toggle" id="nav-expander"><i class="fa fa-bars"></i></a>
		<!-- Offsite navigation -->
		<nav class="menu">
			<a href="#" class="close"><i class="fa fa-close"></i></a>
			<h3>Menu</h3>
			<ul class="nav">
				<li><a data-scroll href="#home">Home</a></li>
				<li><a data-scroll href="#eml">Email</a></li>
				<li><a data-scroll href="#adr">Address</a></li>
				<li><a data-scroll href="#call">Contact</a></li>
			</ul>
			<ul class="social-icons">
				<li><a href=""><i class="fa fa-facebook"></i></a></li>
				<li><a href=""><i class="fa fa-twitter"></i></a></li>
				<li><a href=""><i class="fa fa-dribbble"></i></a></li>
				<li><a href=""><i class="fa fa-behance"></i></a></li>
				<li><a href=""><i class="fa fa-pinterest"></i></a></li>
			</ul>
		</nav>
		<div class="container">
			<div class="header-info">
				<div id="back">
				<h2 style="font-family:Copperplate Gothic Light;color:orange;">CUSTOMER LOGIN</h2>
				<form action="cust_check.php" method="POST"> 
     Username:<br> <input type="text" name="username" required="required" style="border-radius: 25px;"/> <br/><br/>
     Password:<br> <input type="password" name="password" required="required" style="border-radius: 25px;" /> <br/><br><br>
     <button type="submit" value="Login" style="font-size:24;font-family:Copperplate Gothic Light;color: #FF6600">LOG-IN</button>
     <a href="reg.php"> <h3 style="font-family:Copperplate Gothic Light">REGISTER HERE!!!</h3> </a>
           <a href="emplog.php"> <h3 style="font-family:Copperplate Gothic Light">ADMIN LOGIN!!!</h3> </a>
            <a href="emplog.php"> <h3 style="font-family:Copperplate Gothic Light">EMPLOYEE LOGIN!!!</h3> </a>
            </div>
            </div>
            </div>
 			</div>
		</div>
	</div>
	<!-- Services section start -->
	<section id="services">
<div class="col-md-12">

                <div class="row carousel-holder" style="margin-left:200;">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    
                                    <img style="cursor:pointer;margin-left:200;" class="slide-image" src="img/rsz_grocery-shopping.jpg" alt="">
                                
                            </div>
                                <div class="item">
                                    <img style="cursor:pointer;margin-left:200;" class="slide-image" src="img/rsz_banner2.png"  alt="">
                                </div>
                                <div class="item">
                                    
                                    <img style="cursor:pointer;margin-left:200;" class="slide-image" src="img/rsz_logo.jpg" alt="">
                                
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

	</section>
	<!-- Services section end -->
	<!-- Contact section start -->
	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<form class="row">
						<div class="form-group col-md-6">
							<input name="name" type="text" placeholder="Your Name" class="form-control" />
						</div>
						<div class="form-group col-md-6">
							<input name="mail" type="email" placeholder="Your Email" class="form-control" />
						</div>
						<div class="form-group col-md-12">
							<input name="subject" type="text" placeholder="Type Message Here..." class="form-control" />
						</div>
						<div class="form-group col-md-12">
							<textarea name="message" class="form-control" rows="10" placeholder="Message"></textarea>
						</div>
						<div class="form-group col-md-12">
							<button class="btn btn-lg btn-primary">Send</button>
						</div>
					</form>
				</div>
				<div class="col-md-3 col-md-offset-1">
					<div id="adr"><address>
						<span>Our Address</span>
						<p>
							5B sem,computer science<br>
							M S Ramaiah Institute Of Technology,Bangalore<br>
							India
						</p>
					</address></div>
					<div id="eml">
					<address>
						<span>Email</span>
						<p><li>harshadreddy16@gmail.com</li>
						   <li>piyush.0966@gmail.com</li></p>
					</address></div>
					<div id="call"><address>
						<span>Phone</span>
						<p><li>+91 8792236484</li>
						   <li>+91 7411850483</li></p>
					</address></div>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact section end -->
	<!-- Footer start -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<p><h3>&copy;Harshad(1ms13cs068) & Piyush(1ms13cs078)</h3></p>
				</div>
				<div class="col-md-4">
					<ul class="social-icons">
						<li><a href=""><i class="fa fa-facebook"></i></a></li>
						<li><a href=""><i class="fa fa-twitter"></i></a></li>
						<li><a href=""><i class="fa fa-dribbble"></i></a></li>
						<li><a href=""><i class="fa fa-behance"></i></a></li>
						<li><a href=""><i class="fa fa-pinterest"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer end  -->

	<!-- Load jQuery -->
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>

	<!-- Load Booststrap -->
	<script type="text/javascript" src="js/bootstrap.js"></script>

	<script type="text/javascript" src="js/smooth-scroll.js"></script>

	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

	<!-- Load custom js for theme -->
	<script type="text/javascript" src="js/app.js"></script>
</body>
</html>