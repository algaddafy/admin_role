<?php require 'includes/header.php'; 

if(isset($_SESSION['ROLE']) &&  $_SESSION['ROLE'] != '1'){
    header('location: personal_info.php');
    die();
}

?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Welcome to the dashbord</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                <p class="mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                        </div>
                    </div>
                </main>

<?php require 'includes/footer.php'; ?>