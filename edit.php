<html>
	<head>
		<title>Grocery Store</title>
	</head>
	<?php
	session_start(); //starts the session
	if($_SESSION['employee']){ //checks if user is logged in
	}
	else{
		header("location:index.php"); // redirects if user is not logged in
	}
	$user = $_SESSION['employee']; //assigns user value
	$id_exists = false;
	?>
	<body>
		<h2>Home Page</h2>
		<p>Hello <?php Print "$user"?>!</p> <!--Displays user's name-->
		<a href="logout.php">Click here to logout</a><br/><br/>
		<a href="home.php">Return to Home page</a>
		<h2 align="center">Currently Selected</h2>
		<table border="1px" width="100%">
			<tr>
        <th>ProductId</th>
        <th>Product name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Edit</th>
        <th>Delete</th>
        <th>Total price</th>
      
      </tr>
			<?php
				if(!empty($_GET['sno']))
				{
					$id = $_GET['sno'];
					$_SESSION['employee'] = $id;
					$id_exists = true;
					mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
					mysql_select_db("dbms") or die("Cannot connect to database"); //connect to database
					$query = mysql_query("Select * from cashier Where sno='$id'"); // SQL Query
					$count = mysql_num_rows($query);
					if($count > 0)
					{
						while($row = mysql_fetch_array($query))
						{if($user==$row['cashier'])
            {Print "<tr>";
            Print '<td align="center">'. $row['pro_id'] . "</td>";
            Print '<td align="center">'. $row['pro_name'] . "</td>";
            Print '<td align="center">'. $row['quantity']. "</td>";
            Print '<td align="center">'. $row['price']."</td>";
            Print '<td align="center"><a href="edit.php?id='. $row['id'] .'">edit</a> </td>';
            Print '<td align="center"><a href="#" onclick="myFunction('.$row['id'].')">delete</a> </td>';
            $t=($row['quantity'])*($row['price']);
            $w=$w+$t;
            Print '<td align="center">'. $t."</td>";
          Print "</tr>";}}
          Print  "<tr>";
          Print '<td align="center" colspan=4>'.'Total Bill'."</td>";
          Print '<td align="center">'. $w."</td>";
          Print "</tr>";
						
					}
					else
					{
						$id_exists = false;
					}
				}
			?>
		</table>
		<br/>
		<?php
		if($id_exists)
		{
		Print '
		<form action="edit.php" method="POST">
			Enter product id: <input type="number" name="pid"/><br/>
			Enter product name: <input type="text" name="pname"/><br/>
            Enter category: <input type="number" name="cid"/><br/>
       		Enter price: <input type="number" name="price"/><br/>
       		Enter quantity: <input type="number" name="quan"/><br/>
			<br/>
			<input type="submit" value="Update List"/>
		</form>
		';
		}
		else
		{
			Print '<h2 align="center">There is no data to be edited.</h2>';
		}
		?>
	</body>
</html>

<?php
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
		mysql_select_db("dbms") or die("Cannot connect to database"); //Connect to database
		$pid = mysql_real_escape_string($_POST['pid']);
		$pname = mysql_real_escape_string($_POST['pname']);
		$cid = mysql_real_escape_string($_POST['cid']);
		$price = mysql_real_escape_string($_POST['price']);
		$quan = mysql_real_escape_string($_POST['quan']);
		$id = $_SESSION['sno'];
		mysql_query("UPDATE cashier SET pro_id='$pid',pro_name='$pname',cat_id='$cid',price='$price',quan='$quan' WHERE sno='$id'") ;
		header("location: empbill.php");
	}
?>