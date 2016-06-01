
<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GroceryStore</title>
	<!-- Load css styles -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	 <link rel="stylesheet" type="text/css" href="css/animate.css"/>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/wow.js"></script>
  <script type="text/javascript" src="js/parallax.js"></script>
  <script type="text/javascript" src="js/main.js"></script>

</head>
<?php
	session_start(); //starts the session
	if($_SESSION['customers']){ //checks if user is logged in
	}
	else{
		header("location:index.php"); // redirects if user is not logged in
	}
	$user = $_SESSION['customers']; //assigns user value
	?>
	<body>
		  <header>
    <div class="container">
       <div class="heading pull-left animated wow bounceInLeft">
   <h1 class="text-uppercase  animated wow wobble" data-wow-delay="1s" style="font-size:24;font-family:Copperplate Gothic Light;color:black">Grocery Store</h1> 
        <!--<img src="img/minion-4.jpg" style="float:left;heigth:50px;width:30px;">
		Hello <?php Print "$user"?>!-->
      </div>
  </div>

      <div class="container">
      <nav class="pull-left">
        <ul class="list-unstyled">
           <!--Displays user's name-->
          <li class="animated wow bounceInLeft" data-wow-delay="0s"><a href="#veg">Vegetables</a></li>
          <li class="animated wow bounceInLeft" data-wow-delay="0s"><a href="#fru"> Fruits</a></li>
          <li class="animated wow bounceInLeft" data-wow-delay=".4s"><a href="#hea">Health Drinks</a></li>
          <li class="animated wow bounceInLeft" data-wow-delay=".4s"><a href="#gra">Grainsflour</a></li>
          <li class="animated wow bounceInLeft" data-wow-delay=".8s"><a href="#spi"> Spices</a></li>
          <li class="animated wow bounceInLeft" data-wow-delay=".8s"><a href="#pro">Processed foods</a></li>
          <li class="animated wow bounceInLeft" data-wow-delay="1.2s"><a href="#car">HealtCare</a></li>
          <li class="animated wow bounceInLeft" data-wow-delay="1.2s"><a href="#bev">Beverages</a></li>
          <li class="animated wow bounceInLeft" data-wow-delay="1.2s"><a href="bill.php" style="color:red;"><button  style="font-size:24;font-family:Copperplate Gothic Light;color:red;border-radius:10px;">Go FOR BILLING</button></a></li>        
        </ul>
      </nav>

      

      
    </div>

  </header>
  <div class="scrollTo_top" style="display:block;">
 <a title="Scroll to top" href="#">
<img src="img/up.png" alt="Scroll to top">
</a>   
</div>
		

	<div>
		 <a href="logout.php"><button  style="font-size:24;font-family:Copperplate Gothic Light;color: #FF6600;position:absolute;right:0px;">LOG-out</button></a>
		<a href="" class="menu-toggle" id="nav-expander"><i class="fa fa-bars"></i></a>
		<!-- Offsite navigation -->
		<nav class="menu">
			<a href="#" class="close"><i class="fa fa-close"></i></a>
			<h3 style="color:white;">Menu</h3>
			<ul class="nav">
				<li><a data-scroll href="#home">Home</a></li>
				<li><a data-scroll href="#footer">Email</a></li>
				<li><a data-scroll href="#footer">Address</a></li>
				<li><a data-scroll href="#footer">Contact</a></li>
			</ul>
			<ul class="social-icons">
				<li><a href=""><i class="fa fa-facebook"></i></a></li>
				<li><a href=""><i class="fa fa-twitter"></i></a></li>
				<li><a href=""><i class="fa fa-dribbble"></i></a></li>
				<li><a href=""><i class="fa fa-behance"></i></a></li>
				<li><a href=""><i class="fa fa-pinterest"></i></a></li>
			</ul>
		</nav>
		</div>

	<!-- Services section start -->
	<section id="services" style="margin-bottom:0;margin-top:10px;">
	<!--Vegetables-->
		<div class="container" id="veg">
			<div class="row">
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/Potatoes.jpg"></div>
						<h3>Potatoes</h3>
						<h5>1 Kg</h5>
						<p> <h5>20 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="101" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/onions.jpg"></div>
						<h3>Onions</h3>
						<h5>1 Kg</h5>
						<p> <h5>42 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="102" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/tomatoes.jpg"></div>
						<h3>Tomatoes</h3>
						<h5>1 Kg</h5>
						<p> <h5>48 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="103" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/cabbage.jpg"></div>
						<h3>cabbage</h3>
						<h5>1 Kg</h5>
						<p> <h5>20 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="104" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/Beans.jpg"></div>
						<h3>Beans</h3>
						<h5>1 Kg</h5>
						<p> <h5>80 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="105" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/brinjal.jpg"></div>
						<h3>Brinjal</h3>
						<h5>1 Kg</h5>
						<p> <h5>32 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="106" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
			</div>
		</div>
		<!--fruits-->
			<div class="container" id="fru">
			<div class="row">
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/apple.jpg"></div>
						<h3>Apple</h3>
						<h5>1 Kg</h5>
						<p> <h5>160 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="201" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/banana.jpg"></div>
						<h3>Banana</h3>
						<h5>1 Kg</h5>
						<p> <h5>50 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="202" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/papaya.jpg"></div>
						<h3>Papaya</h3>
						<h5>1 Kg</h5>
						<p> <h5>20 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="203" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/oranges.jpg"></div>
						<h3>Orange</h3>
						<h5>1 Kg</h5>
						<p> <h5>124 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="204" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/pineapple.jpg"></div>
						<h3>Pineapple</h3>
						<h5>1 Pc</h5>
						<p> <h5>38 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="205" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/promegranate.jpg"></div>
						<h3>Promegranate</h3>
						<h5>1 Kg</h5>
						<p> <h5>154 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="206" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
			</div>
		</div>
		<!--health drinks-->
			<div class="container" id="hea">
			<div class="row">
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/bru.jpg"></div>
						<h3>Bru coffee</h3>
						<h5>200 gms</h5>
						<p> <h5>279 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="301" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/nescafe.jpg"></div>
						<h3>Nescafe coffee</h3>
						<h5>50 gms</h5>
						<p> <h5>100 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="302" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/Brook.jpg"></div>
						<h3>Brook bond tea</h3>
						<h5>250 gms</h5>
						<p> <h5>134 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="303" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/tajmahal.jpg"></div>
						<h3>Taj mahal tea</h3>
						<h5>100 Tbags</h5>
						<p> <h5>130 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="304" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/bournvita.jpg"></div>
						<h3>Bournvita</h3>
						<h5>500 gms</h5>
						<p> <h5>200 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="305" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/horlicks.jpg"></div>
						<h3>Horlicks</h3>
						<h5>200 gms</h5>
						<p> <h5>100 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="306" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
			</div>
		</div>
		<!--grains & flours-->
			<div class="container" id="gra">
			<div class="row">
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/rice.jpg"></div>
						<h3>Rice</h3>
						<h5>1 Kg</h5>
						<p> <h5>124 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="401" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/wheat.jpg"></div>
						<h3>wheat</h3>
						<h5>1 Kg</h5>
						<p> <h5>46 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="402" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/maida.jpg"></div>
						<h3>Maida</h3>
						<h5>1 Kg</h5>
						<p> <h5>48 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="403" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/sooji.jpg"></div>
						<h3>Sooji</h3>
						<h5>1 Kg</h5>
						<p> <h5>52 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="404" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/ragi.jpg"></div>
						<h3>Ragi</h3>
						<h5>1 Kg</h5>
						<p> <h5>98 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="405" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/brinjal.jpg"></div>
						<h3>Jowar</h3>
						<h5>1 Kg</h5>
						<p> <h5>57 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="406" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
			</div>
		</div>
		<!--spices-->
			<div class="container" id="spi"> 
			<div class="row">
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/chilli.jpg"></div>
						<h3>Chilli powder</h3>
						<h5>100 gms</h5>
						<p> <h5>26 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="501" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/turmeric.jpg"></div>
						<h3>Turmeric powder</h3>
						<h5>100 gms</h5>
						<p> <h5>19 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="502" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/sugar.jpg"></div>
						<h3>sugar</h3>
						<h5>1 Kg</h5>
						<p> <h5>40 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="503" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/salt.jpg"></div>
						<h3>Salt</h3>
						<h5>1 Kg</h5>
						<p> <h5>17 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="504" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
			</div>
		</div>
		<!-- Processed food-->
         	<div class="container" id="pro">
			<div class="row">
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/lays.jpg"></div>
						<h3>Lays</h3>
						<h5>1 pck</h5>
						<p> <h5>10 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="601" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/biscuit.jpg"></div>
						<h3>Biscuit</h3>
						<h5>1 pck</h5>
						<p> <h5>25 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="602" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/chocolate.jpg"></div>
						<h3>Chocolate</h3>
						<h5>1 pck</h5>
						<p> <h5>10 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="603" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/kurkure.jpg"></div>
						<h3>Kurkure</h3>
						<h5>1 pck</h5>
						<p> <h5>10 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="604" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/namkeen.jpg"></div>
						<h3>Namkeen</h3>
						<h5>1 pck</h5>
						<p> <h5>35 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="605" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/popcorn.jpg"></div>
						<h3>Popcorn</h3>
						<h5>1 pck</h5>
						<p> <h5>32 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="606" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
			</div>
		</div>
		<!--healt &care-->
			<div class="container" id="car">
			<div class="row">
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/Toothbrush.jpg"></div>
						<h3>Toothbrush</h3>
						<h5>1 set</h5>
						<p> <h5>50 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="701" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/toothpaste.jpg"></div>
						<h3>Toothpaste</h3>
						<h5>1 pck</h5>
						<p> <h5>82 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="702" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/hairoil.jpg"></div>
						<h3>Hair Oil</h3>
						<h5>1 pck</h5>
						<p> <h5>80 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="703" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/soap.jpg"></div>
						<h3>Soap</h3>
						<h5>1 pck</h5>
						<p> <h5>36 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="704" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/shampoo.jpg"></div>
						<h3>Shampoo</h3>
						<h5>1 pck</h5>
						<p> <h5>130 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="705" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/deo.jpg"></div>
						<h3>Deo</h3>
						<h5>1 pck</h5>
						<p> <h5>225  Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="706" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
			</div>
		</div>
		<!--drinks&beverages-->
		<div class="container" id="bev">
			<div class="row">
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/slice.jpg"></div>
						<h3>slice</h3>
						<h5>1 lts</h5>
						<p> <h5>50 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="801" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/juice.jpg"></div>
						<h3>Juice</h3>
						<h5>1 lts</h5>
						<p> <h5>50 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="802" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/coke.jpg"></div>
						<h3>coke</h3>
						<h5>1.2 lts</h5>
						<p> <h5>51 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="803" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/milk.jpg"></div>
						<h3>Badam MIlk</h3>
						<h5>200 ml</h5>
						<p> <h5>20 Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="804" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="service-item">
						<div class="icon"><img src="img/redbull.jpg"></div>
						<h3>Red Bull</h3>
						<h5>250 ml</h5>
						<p> <h5>99  Rs</h5>
							<form action="home.php" method="post">
                           <input type="checkbox" name="id" value="805" required="required">
                           <input type="number" name="quan" min="0" max="5" step="1" required="required" placeholder="1">
                           <button><span aria-hidden="true" class="glyphicon glyphicon-shopping-cart"></span></button>
                            </form>
						</p>
					</div>
				</div>
			</div>
		</div>

	</section>
		
	<!-- Services section end -->
	<!-- Contact section start -->

	<footer id="footer">
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


<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

	$id = $_POST['id'];
	$q=$_POST['quan'];
	mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
	mysql_select_db("dbms") or die("Cannot connect to database"); 
   	$query = mysql_query("SELECT * from products WHERE pro_id='$id'"); //Query the users table if there are matching rows equal to $username
	$exists = mysql_num_rows($query);
   
    if($exists > 0)
{    while($row = mysql_fetch_assoc($query)) //display all rows from query
		{   if($id == $row['pro_id'])
			{$pro_name=$row['pro_name'];
		      $cid=$row['cat_id'];
		      $price=$row['price'];}
		}
		
	//	$_SESSION['user'] = $username; 
	   mysql_query("INSERT INTO consume(username,pro_name,pro_id,cat_id,quantity,price) values('$user','$pro_name','$id','$cid','$q','$price')");
       
       Print '<script>alert("Item Added to CART");</script>'; //Prompts the user
		// header("location:index.php");
		Print '<script>window.location.assign("home.php");</script>';
 

}}?>

</body>
</html>

