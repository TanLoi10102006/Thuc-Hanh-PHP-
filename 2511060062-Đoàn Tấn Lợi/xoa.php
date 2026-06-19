<?php

include("config.php");

$id = $_GET['id'];

$sql = "DELETE FROM SuKien
        WHERE mask=$id";

mysqli_query($conn, $sql);

header("Location:index.php");
