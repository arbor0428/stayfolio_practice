<?php 
    include "inc/db_connect.php";

    $id = $_POST["id"]; 
    $pw = $_POST["password"];
    $name = $_POST["name"];

    $sql = "INSERT INTO join_members (id,password,name) VALUES ('$id','$pw','$name')";

    mysqli_query($conn,$sql);
    header("Location:login_view.php");
?>