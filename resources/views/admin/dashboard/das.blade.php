<?php
session_start();
if(isset($_SESSION['id'])==null){
    header("Location: index.php");
}

require_once '../vendor/autoload.php';
$login = new App\classes\Login();

if(isset($_GET["logout"])){
    $login->adminLogout();
}
?>

    <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">


</head>

<body>


<?php include 'includes/menu.php'?>



<!-- Footer -->
<footer class="py-3 bg-dark fixed-bottom">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Shuvo 2020</p>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="../assets/js/jquery-3.3.1.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>

</body>

</html>
