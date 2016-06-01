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
 <div class="container">
      <div class="row text-center">
              <div class="col-sm-12 col-md-12 details animated wow bounceInLeft" data-wow-delay="0s" style="border-radius:25px;">
          <h2 align="center">Your BILL</h2>
          
    
        <table border="1px" width="100%">
      <tr>
        <th>ProductId</th>
        <th>Product name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Total price</th>
      
      </tr>
      <?php 
        mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
        mysql_select_db("dbms") or die("Cannot connect to database"); //connect to database
        $query = mysql_query("Select * from cashier");
        $t=""; 
        $w="";// SQL Query
        while($row = mysql_fetch_array($query))
        { if($emp==$row['cashier'])
            {Print "<tr>";
            Print '<td align="center">'. $row['pro_id'] . "</td>";
            Print '<td align="center">'. $row['pro_name'] . "</td>";
            Print '<td align="center">'. $row['quan']. "</td>";
            Print '<td align="center">'. $row['price']."</td>";
            //Print '<td align="center"><a href="edit.php?id='. $row['sno'] .'">edit</a> </td>';
            //Print '<td align="center"><a href="#" onclick="myFunction('.$row['sno'].')">delete</a> </td>';
            $t=($row['quan'])*($row['price']);
            $w=$w+$t;
            Print '<td align="center">'. $t."</td>";
          Print "</tr>";}}
          Print  "<tr>";
          Print '<td align="center" colspan=5>'.'Total Bill'."</td>";
          Print '<td align="center">'. $w."</td>";
          Print "</tr>";
        
      ?>
    </table>
    <script>
      function myFunction(id)
      {
      var r=confirm("Are you sure you want to delete this record?");
      if (r==true)
        {
          window.location.assign("delete.php?id=" + sno);
        }
      }
    </script>
        </div>
<a href="emplogout.php"> <button  style="font-size:24;font-family:Copperplate Gothic Light;color: #FF6600;position:fixed;bottom:0px;right:0px;">LOG-out</button></a
>    </div>
  </body>
</html>
