<?php
    include 'header.php';
    ?>
<?php
session_start();
include('include/db.php');

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM users WHERE name='$name' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1){
        $_SESSION['name'] = $name;
        header('Location: index.php');
        exit();
    } else {
        $message = "Invalid login credentials";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
    
    <form action="login.php" method="post">
        <div class="container">
            <h3>Login</h3>
            <label>name</label>
            <input type="text" name="name" required>
            <label>Password</label>
            <input type="password" name="password" required>
            <?php if(isset($message)) { echo "<p>$message</p>"; } ?>
        
        <input type="submit" name="submit">
        <a href="register.php">Don't have account?</a>
        </div>
    </form>
</body>
</html>
