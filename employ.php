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
        <form action="employ.php" method="post">
      <label style="color:black">Enter Starting Alphabate:</label><input type="text" name="alp" required="required" style="border-radius: 25px;"/><br/>
      <button type="submit" value="Register" style="font-size:24;font-family:Copperplate Gothic Light;color: #FF6600">Ok</button>
       </form>
    <table class="table table-condensed" border="1px" width="100%">
         <tr>
      <th>EmployeeId</th>
        <th>Employee FName</th>
        <th>Employee LName</th>
        <th>Username</th>
        <th>Address</th>
        <th>PhoneNumber</th>
        <th>Email_id</th>
        <th>salary</th>
      </tr>
      <?php 
      if($_SERVER["REQUEST_METHOD"] == "POST"){
        $k=$_POST['alp'];
        mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
        mysql_select_db("dbms") or die("Cannot connect to database"); //connect to database
        $query = mysql_query("Select * from employee where emp_fname like '$k%' ");
        while($row = mysql_fetch_array($query))
        {  {Print "<tr>";
            Print '<td align="center">'. $row['emp_id'] . "</td>";
            Print '<td align="center">'. $row['emp_fname'] . "</td>";
            Print '<td align="center">'. $row['emp_lname']. "</td>";
            Print '<td align="center">'. $row['username']."</td>";
            Print '<td align="center">'. $row['address']."</td>";
            Print '<td align="center">'. $row['phone']."</td>";
            Print '<td align="center">'. $row['email_id']."</td>";
            Print '<td align="center">'. $row['salary']."</td>";
          Print "</tr>";}}
          }
      ?>
    </table>
   </div>
      </div>
    </body>
</html>