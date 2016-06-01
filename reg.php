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
    <a href="index.php" class="logo">
      <img src="img/logo.png" alt="Grocery store" style="width:50px;heigth:50px;border-radius: 25px;">
    </a>
    <a href="" class="menu-toggle" id="nav-expander"><i class="fa fa-bars"></i></a>
    <!-- Offsite navigation -->
    <nav class="menu">
      <a href="#" class="close"><i class="fa fa-close"></i></a>
      <h3>Menu</h3>
      <ul class="nav">
        <li><a data-scroll href="#home">Home</a></li>
        <li><a data-scroll href="#services">Service</a></li>
        <li><a data-scroll href="#portfolio">Portfolio</a></li>
        <li><a data-scroll href="#contact">Contact</a></li>
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
        <h2 style="font-family:Copperplate Gothic Light;color:orange;">Registration Page</h2>
      <form action="reg.php" method="post">
      Enter Firstname: <input type="text" name="cust_fname" required="required" style="border-radius: 25px;"/><br/>
      Enter Lastname: <input type="text" name="cust_lname" required="required" style="border-radius: 25px;"/><br/>
      Enter EmailId:<input type="email" name="email_id" required="required" style="border-radius: 25px;"/><br/>
      Enter Address: <input type="text" name="address" required="required" style="border-radius: 25px;"/><br/>
      Enter Phone-no:<input type="text" name="phonenum" required="required" style="border-radius: 25px;"/><br/>
      Create Username: <input type="text" name="username" required="required" style="border-radius: 25px;"/> <br/>
      Create Password: <input type="password" name="password" required="required" style="border-radius: 25px;"/><br/>
      Confirm Password:<input type="password" name="cpassword" required="required" style="border-radius: 25px;" /> <br/>
     <br>

      <button type="submit" value="Register" style="font-size:24;font-family:Copperplate Gothic Light;color: #FF6600">SIGN-UP</button>
    </form>
  </div>
      </div>
    </div>
  </div>
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
  <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/smooth-scroll.js"></script>
  <script type="text/javascript" src="js/app.js"></script>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
   $cust_fname = mysql_real_escape_string($_POST['cust_fname']);
   $cust_lname = mysql_real_escape_string($_POST['cust_lname']);
   $email_id = mysql_real_escape_string($_POST['email_id']);
   $address = mysql_real_escape_string($_POST['address']);
   $phonenum = mysql_real_escape_string($_POST['phonenum']);
   $username = mysql_real_escape_string($_POST['username']);
   $password = mysql_real_escape_string($_POST['password']);
   $cpassword = mysql_real_escape_string($_POST['cpassword']);
    $bool = true;
  mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
  mysql_select_db("dbms") or die("Cannot connect to database"); //Connect to database
  $query = mysql_query("Select * from customers"); //Query the users table
  while($row = mysql_fetch_array($query)) //display all rows from query
  {
    $table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
    if($username == $table_users) // checks if there are any matching fields
    {
      $bool = false; // sets bool to false
      Print '<script>alert("Username has been taken!");</script>'; //Prompts the user
      Print '<script>window.location.assign("index.php");</script>'; // redirects to register.php
    }
  }
   if ($cpassword!=$password) {
       Print '<script>alert("Password doesnt match!");</script>'; //Prompts the user
      Print '<script>window.location.assign("reg.php");</script>'; // redirects to register.php
    }
  if($bool) // checks if bool is true
  {
    mysql_query("INSERT INTO customers (cust_fname,cust_lname,address,phonenum,username, password,email_id) VALUES ('$cust_fname','$cust_lname','$address','$phonenum','$username','$password','$email_id')"); //Inserts the value to table users 
    Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
    Print '<script>window.location.assign("index.php");</script>'; // redirects to register.php
  }
}
?>