<?php
    include('header.php');
?>
<?php
include('include/db.php');

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Validate inputs
    if(empty($name) || empty($email) || empty($password)) {
        $message = "Please fill all fields";
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid email format";
    } else {
        $sql = "INSERT INTO users(name, email, password) VALUES ('$name', '$email', '$password')";

        if(mysqli_query($conn, $sql)){
            $message = "Registration successful";
        } else {
            $message = "Registration failed: " . mysqli_error($con);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
    <form action="register.php" method="post">
        <div class="container">
            <h3>Register Here</h3>
            <?php if(isset($message)) { echo "<p>$message</p>"; } ?>
            <label>name</label>
            <input type="text" name="name">
            <label>Email</label>
            <input type="email" name="email">
            <label>Password</label>
            <input type="password" name="password">
        
        <input type="submit" name="submit" value="Register">
        <a href="login.php">already have account!</a>
        </div>
    </form>
</body>
</html>
