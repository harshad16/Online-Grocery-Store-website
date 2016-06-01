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
</style>
</head>
<?php
  session_start(); //starts the session
  if($_SESSION['employee']){ //checks if user is logged in
  }
  else{
    header("location:index.php"); // redirects if user is not logged in
  }
  $emp = $_SESSION['employee']; //assigns user value
  ?>
<body>
 <div class="container">
      <div class="row text-center">
        <form action="cashierquery.php" method="post">
      <label style="color:black">Enter cashier Name:</label><input type="text" name="alp" required="required" style="border-radius: 25px;"/><br/>
       </form>
    <table class="table table-condensed" border="1px" width="100%">
         <tr>
        <th>Emp_Name</th>
        <th>NO_of_products</th>
      </tr>
      <?php 
      if($_SERVER["REQUEST_METHOD"] == "POST"){
        $k=$_POST['alp'];
        mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
        mysql_select_db("dbms") or die("Cannot connect to database"); //connect to database
        $query = mysql_query("Select sum(quan) from cashier where cashier.cashier=$k  ");
        while($row = mysql_fetch_array($query))
        {  {Print "<tr>";
            Print '<td align="center">'. $row['cashier'] . "</td>";
            Print '<td align="center">'. $row['sum(quan)'] . "</td>";
           
            
          Print "</tr>";}}
          }
      ?>
    </table>
   </div>
      </div>
    </body>
</html>