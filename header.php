<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css"> 
  <title>Responsive Navbar</title>
</head>

<body>
  <nav class="navbar navbar-expand-md">
    <a class="navbar-brand" href="#"><img src="llll.png" style="height: 150px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
      aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
      </ul>
    </div>
  </nav>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <div class="lists">
    <ul class="links">
        <li>mens</li>
      <li>women</li>
      <li>cups</li>
      <li>new arrivals</li>
    </ul>
  </div>
</body>

</html>
<style type="text/css">
    .lists {
  text-align: center;
}

.links {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  justify-content: center;
}

.links li {
  display: inline-block;
  margin: 0 10px;
  font-family: cursive;
  padding: 5px;
  cursor: pointer;
}
.links li:hover {
  display: inline-block;
  margin: 0 10px;
  font-family: cursive;
  letter-spacing: 1px;
  transition-duration: 0.3s;
  padding: 10px;
  background: rgb(241 241 241);
  border-radius: 5px;
}


</style>
