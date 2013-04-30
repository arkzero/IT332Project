<?php

$name = $_POST["username"];
$pass = $_POST["password"];

$con = mysqli_connect("sql.njit.edu", "djm28_proj", "6l28pgnN", "djm28_proj");

$info = mysqli_query($con, "SELECT * FROM synergy_web_services");

?>