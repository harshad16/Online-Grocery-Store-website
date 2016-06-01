<!doctype html>

<html>
<head>
  <!--  App Title  -->
  <title>Grocerry store</title>
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

 #back{background-color: rgba(204, 255, 255,0.8);//#CCFFFF;
          border-radius: 25px;
          width: 600px;
          padding: 25px;
          margin: 25px auto;
          margin-top: 250px;
          float: center;}

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
       <a href="emplog.php" class="logo">
      <img src="img/logo.png" alt="Grocery store" style="width:50px;heigth:50px;border-radius: 25px;">
    </a>
      <div class="heading pull-left animated wow bounceInLeft">
        <h1>Grocery Store</h1>
      </div> 
    </div>
  </header>

  <div class="container">
      <div class="header-info">
         <div id="back">
        <h2 style="font-family:Copperplate Gothic Light;color:orange;">Registration Page</h2>
      <form action="empreg.php" method="post">
      Enter Firstname: <input type="text" name="emp_fname" required="required" style="border-radius: 25px;"/><br/>
      Enter Lastname: <input type="text" name="emp_lname" required="required" style="border-radius: 25px;"/><br/>
      Enter EmailId:<input type="email" name="email_id" required="required" style="border-radius: 25px;"/><br/>
      Enter Address: <input type="text" name="address" required="required" style="border-radius: 25px;"/><br/>
      Enter Phone-no:<input type="text" name="phone" required="required" style="border-radius: 25px;"/><br/>
      Create Username: <input type="text" name="username" required="required" style="border-radius: 25px;"/> <br/>
      Create Password: <input type="password" name="password" required="required" style="border-radius: 25px;"/> <br/>
      Confirm Password: <input type="password" name="cpassword" required="required" style="border-radius: 25px;" /> <br/>
     <br><br>

      <button type="submit" value="Register" style="font-size:24;font-family:Copperplate Gothic Light;color: #FF6600">SIGN-UP</button>
    </form>
  </div>
 
</div>
  </body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
   $emp_fname = mysql_real_escape_string($_POST['emp_fname']);
   $emp_lname = mysql_real_escape_string($_POST['emp_lname']);
   $email_id = mysql_real_escape_string($_POST['email_id']);
   $address = mysql_real_escape_string($_POST['address']);
   $phone = mysql_real_escape_string($_POST['phone']);
   $username = mysql_real_escape_string($_POST['username']);
   $password = mysql_real_escape_string($_POST['password']);
   $cpassword = mysql_real_escape_string($_POST['cpassword']);
    $bool = true;
  mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
  mysql_select_db("dbms") or die("Cannot connect to database"); //Connect to database
  $query = mysql_query("Select * from employee"); //Query the users table
  while($row = mysql_fetch_array($query)) //display all rows from query
  {
    $table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
    if($username == $table_users) // checks if there are any matching fields
    {
      $bool = false; // sets bool to false
      Print '<script>alert("Username has been taken!");</script>'; //Prompts the user
      Print '<script>window.location.assign("emplog.php");</script>'; // redirects to register.php
    }
  }
   if ($cpassword!=$password) {
       Print '<script>alert("Password doesnt match!");</script>'; //Prompts the user
      Print '<script>window.location.assign("empreg.php");</script>'; // redirects to register.php
    }
  if($bool) // checks if bool is true
  {
    mysql_query("INSERT INTO employee (emp_fname,emp_lname,address,phone,username, password,email_id) VALUES ('$emp_fname','$emp_lname','$address','$phone','$username','$password','$email_id')"); //Inserts the value to table users 
    Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
    Print '<script>window.location.assign("emplog.php");</script>'; // redirects to register.php
  }
}
?>