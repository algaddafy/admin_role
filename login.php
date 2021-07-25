<?php 
session_start();
$error = "";
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        require 'includes/db.php';

        $query = "SELECT * FROM login_check WHERE username='$username' and password='$password'";
        $result = mysqli_query($connection,$query);
        $count = mysqli_num_rows($result);
        if($count > 0){
            $row = mysqli_fetch_assoc($result);

            $_SESSION['ROLE'] = $row['role'];
            $_SESSION['is_login'] = 'yes';

            if($row['role'] == 1){
                header('location: home.php');
            }
            if($row['role'] == 0){
                header('location: personal_info.php');
            }

        }else{
            $error = "Please enter correct login details.";
        }

    }

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Panel</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form action="" method="post">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Username</label>
                                                <input name="username" class="form-control py-4" id="inputEmailAddress" type="username" placeholder="Enter username" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input name="password" class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" />
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                                    <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                                </div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Forgot Password?</a>
                                                <input class="btn btn-primary" type="submit" name="submit" value="Login">
                                            </div>
                                            <center><?php echo $error ?></center>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>

<?php require 'includes/footer.php'; ?>