<?php require "../config/config.php";
require "../libs/App.php";
require "../includes/header.php";

if (!isset($_SERVER['HTTP_REFERER'])) {
    // redirect them to your desired location
    echo "<script>window.location.href='" . APPURL . "'</script>";
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM cart WHERE id='$id'";
    $app = new App;
    $path = "cart.php";
    $app->delete($query, $path);
} else {
    echo "<script>window.location.href='" . APPURL . "/404.php'</script>";

}
