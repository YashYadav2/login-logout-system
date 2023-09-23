<?php
session_start();
if (!isset($_SESSION['username'])) {
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Welcome</title>
</head>
<body>
    <h1 class="text-center mt-5 text-primary">Welcome To Website
        <?php echo $_SESSION['username'];?> 
    </h1>

    <div class="container">
        <a href="logout.php" class="btn btn-primary mt-5 ">Logout</a>
    </div>
</body>
</html>