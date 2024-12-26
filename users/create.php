<?php
include "./config.php";
if (isset($_POST["first_name"])) {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $emial = $_POST["email"];
    $password = $_POST["password"];

    $sql = "insert into users values(null,$first_name, $last_name,  $emial , $password)";

    mysqli_query($link, $sql);
}


?>