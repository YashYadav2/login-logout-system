<?php
$login = 0;
$invalid= 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM registration WHERE username='$username' and password='$password'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            // echo "Login Successful";
            $login=1;
            session_start();
            $_SESSION['username']=$username;
            header('location:home.php');
        } else {
            // echo 'Invalid Data ';
            $invalid=1;
        }

    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Login Page</title>
</head>

<body>
<?php
  if ($login) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Login Successfull</strong> You are Successfully Logged in
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  }
  ?>
  <?php
  if ($invalid) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error</strong> Invalid Username Or Password
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  }
  ?>
    <h1 class="text-center mb-5">Login to our website</h1>

    <div class="container mt-5">

        <form action="login.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">User Name</label>
                <input type="text" class="form-control" placeholder="Enter Your User Name " name="username">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" placeholder="Enter Your Password" name="password">
            </div>
            <!-- <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div> -->
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

</body>

</html>