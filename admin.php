<!doctype html>

<html>
<head>
  <!--  App Title  -->
  <title>Grocery Store</title>
  <!--  App Description  -->
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="css/animate.css"/>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>

  
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/wow.js"></script>
  <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>


<style type="text/css">
.scrollTo_top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    display: none;
}
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

#left:hover,nav:hover,#syntax:hover,p:hover{
  background-color: #383838;
  font-size: 16pt;
  transition: 0.50s;
  color: plum;
  /*width: 500px;*/
}
a:hover{

  font-size: 20pt;
  transition: 0.3s;
  color: white;
  color: aqua;
  font-style: italic;
}
  #left{margin-left: 0px;
  width: 250px;
  position: relative;
  background-color: #383838; 
  color: black;
  float: left;
  font-size: 16pt;
  height: 920px;
transition: 1s;
}
#syntax{
  float: left;
width: 800px;
transition: 0.50s;
color:#41c17d;
text-align: center;
height:920px;
}
</style>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script>
$(document).ready(function(){
    $("#a1").hide();
    $("#a2").hide();
    $("#a3").hide();
    $("#a4").hide();
    $("#a5").hide();
    $("#a6").hide();
    $("#a7").hide();
    $("#b1").click(function(){
        $("#a1").show();
        $("#a2").hide();
        $("#a3").hide();
        $("#a4").hide();
        $("#a5").hide();
        $("#a6").hide();
        $("#a7").hide();
    });
     $("#b2").click(function(){
        $("#a2").show();
        $("#a1").hide();
        $("#a3").hide();
        $("#a4").hide();
        $("#a5").hide();
        $("#a6").hide();
        $("#a7").hide();
    });
      $("#b3").click(function(){
        $("#a3").show();
        $("#a2").hide();
        $("#a1").hide();
        $("#a4").hide();
        $("#a5").hide();
        $("#a6").hide();
        $("#a7").hide();
    });

      $("#b4").click(function(){
        $("#a4").show();
        $("#a2").hide();
        $("#a1").hide();
        $("#a3").hide();
        $("#a6").hide();
        $("#a5").hide();
        $("#a7").hide();
    });

      $("#b5").click(function(){
        $("#a5").show();
        $("#a2").hide();
        $("#a1").hide();
        $("#a4").hide();
        $("#a3").hide();
        $("#a6").hide();
        $("#a7").hide();
    });

      $("#b6").click(function(){
        $("#a6").show();
        $("#a2").hide();
        $("#a1").hide();
        $("#a4").hide();
        $("#a3").hide();
        $("#a5").hide();
        $("#a7").hide();
    });


      $("#b7").click(function(){
        $("#a7").show();
        $("#a2").hide();
        $("#a1").hide();
        $("#a4").hide();
        $("#a3").hide();
        $("#a5").hide();
        $("#a6").hide();
        
    });
});
</script>
</head>
<?php
  session_start(); //starts the session
  if($_SESSION['employee']){ //checks if user is logged in
  }
  else{
    header("location:index.php"); // redirects if user is not logged in
  }
  $emp= $_SESSION['employee']; //assigns user value
  ?>
  <body>

      <!--  Header Section  -->
  <header>
    <div class="container">
      <div class="heading pull-left animated wow bounceInLeft">
        <h1>Grocery Store</h1>
      </div> 
    </div>
  </header>
  <!--  End Header Section  -->
<div class="scrollTo_top" style="display:block;">
 <a title="Scroll to top" href="#">
<img src="img/up.png" alt="Scroll to top">
</a>   
</div>
<a href="emplogout.php"> <button  style="font-size:24;font-family:Copperplate Gothic Light;color: #FF6600;position:fixed;bottom:0px;right:0px;">LOG-out</button></a
>  
<div class="container">
  
      <div class="text-center animated wow bounceInLeft" style="float:left;">
        

<div id="left">
  <h1>Options</h1>
  <ol style="">
    <li id="string"><a href="#" id="b1">Customer Details</a> </li>
    <li id="string" ><a href="#" id="b2">Employee Details</a> </li>
    <li id="string" ><a href="#" id="b3">Category Details</a> </li>
    <li id="string" ><a href="#" id="b4">Product Details</a> </li>
    <li id="string" ><a href="#" id="b5"> Search Product by first letter</a> </li>
    <li id="string" ><a href="#" id="b6"> Search Avg Price of products by category</a> </li>
    <li id="string"><a href="#" id="b7"> Check for Expired products</a></li>
    <li id="string"><a data-scroll href="#a8" id="b8"> Search Employee  by first letter</a></li>
    <li id="string"><a data-scroll  href="#a9"  id="b9"> check  for recent expiring product</a></li>
    <li id="string"><a href="http://localhost/phpmyadmin/#PMAURL-1:db_structure.php?db=dbms" id="b10"> Update DATABASE</a></li>

  </ol>


</div>

<div id="syntax"><h1>Query output</h1>
<span id="code">
<iframe src="customerdetail.php" style="width:900px;height:800px;" id="a1"></iframe>
<iframe src="employeedetail.php" style="width:900px;height:800px;" id="a2"></iframe>
<iframe src="categorydetail.php" style="width:900px;height:800px;" id="a3"></iframe>
<iframe src="product1.php" style="width:900px;height:800px;" id="a4"></iframe>
<iframe src="product.php" style="width:900px;height:800px;" id="a5"></iframe>
<iframe src="catquery.php" style="width:900px;height:800px;" id="a6"></iframe>
<iframe src="product2.php" style="width:900px;height:800px;" id="a7"></iframe>
<iframe src="employ.php" style="width:900px;height:800px;" id="a8"></iframe>
<iframe src="product3.php" style="width:900px;height:800px;" id="a9"></iframe>
</span>
</div>

</body>
</html>

  