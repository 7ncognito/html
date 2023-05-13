<?php
	include 'header.php';
?>
	<?php
	session_start();

	// check if user is logged in
	if(!isset($_SESSION['name'])) {
		header('Location: login.php');
		exit();
	}

	// get user details from database
	include('include/db.php');
	$name = $_SESSION['name'];
	$sql = "SELECT * FROM users WHERE name = '$name'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$email = $row['email'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
	 <div class="container">
  <div class="row">
    <div class="col-lg-3 col-md-4 col-6">
      <div class="product">
        <img src="https://via.placeholder.com/300x200" alt="Product Image">
        <h3>Product 1</h3>
        <p>Description of Product 1</p>
        <div class="col-md-12 col-sm-12 col-12 text-center">
        	<button type="submit" name="buy">Buy</button>
<button type="button">Add to Cart</button>

        </div>
        
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <div class="product">
        <img src="https://via.placeholder.com/300x200" alt="Product Image">
        <h3>Product 2</h3>
        <p>Description of Product 2</p>
         <div class="col-md-12 col-sm-12 col-12 text-center">
        	<button type="submit" name="buy">Buy</button>
<button type="button">Add to Cart</button>

        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <div class="product">
        <img src="https://via.placeholder.com/300x200" alt="Product Image">
        <h3>Product 3</h3>
        <p>Description of Product 3</p>
         <div class="col-md-12 col-sm-12 col-12 text-center">
        	<button type="submit" name="buy">Buy</button>
<button type="button">Add to Cart</button>

        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <div class="product">
        <img src="https://via.placeholder.com/300x200" alt="Product Image">
        <h3>Product 4</h3>
        <p>Description of Product 4</p>
         <div class="col-md-12 col-sm-12 col-12 text-center">
        	<button type="submit" name="buy">Buy</button>
<button type="button">Add to Cart</button>

        </div>
      </div>
    </div>
    <!-- Add more product columns as needed -->
  </div>
</div>

  </div>
</body>
</html>
<style type="text/css">
	
button{
    border: none;
  border-radius: 5px;
  background: #f1f15c;
  height: 30px;
}
</style>