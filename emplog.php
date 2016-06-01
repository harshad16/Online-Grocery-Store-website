<!doctype html>

<html>
<head>
  <!--  App Title  -->
  <title>Grocery store</title>
  <!--  App Description  -->
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="css/animate.css"/>
  <link rel="stylesheet" type="text/css" href="css/main.css"/>

  
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/wow.js"></script>
  <script type="text/javascript" src="js/main.js"></script>


<style type="text/css">
body{
  background-color: #FF6600;
  padding: 0px;
  margin: 0px;
}
 table{border-radius: 25px;
              background-color: rgb(51, 51, 255);}
        th{border-radius: 25px;
           background-color:rgb(102, 102, 255);
           color: white; }      
         td{border-radius: 25px;
            background-color:#CCFFFF; }
            h1{font-size:24;font-family:Copperplate Gothic Light;color: #3333FF}
header{
  width: 100%;
  height: 90px;
  z-index: 99;
  background-color: #41c17d;
}

header .heading{
  margin: 20px 100px 0 0;
}
</style>

</head>
  <body>
      <!--  Header Section  -->
  <header>
    <div class="container">  
      <!--<button><span aria-hidden="true" class="glyphicon glyphicon-home" style="right:0;bottom:0;"></span></button>-->
      <div class="heading pull-left animated wow bounceInLeft">
        <h1>Grocery Store</h1>
      </div> 
    </div>
  </header>
  <div class="container">
      <div class="header-info">
        <div id="back">
        <h2 style="font-family:Copperplate Gothic Light;color:orange;">EMPLOYEE LOGIN</h2>
        <form action="emp_check.php" method="POST"> 
     Username:<br> <input type="text" name="username" required="required" style="border-radius: 25px;"/> <br/><br/>
     Password:<br> <input type="password" name="password" required="required" style="border-radius: 25px;" /> <br/><br><br>
     <button type="submit" value="Login" style="font-size:24;font-family:Copperplate Gothic Light;color: #FF6600">LOG-IN</button>
     <a href="empreg.php"> <h3 style="font-family:Copperplate Gothic Light">REGISTER HERE!!!</h3> </a>
      <a href="index.php"> <h3 style="font-family:Copperplate Gothic Light">HOME!!!</h3> </a>
            </div>
      </div>
    </div>
    </div>
  </body>
</html>
