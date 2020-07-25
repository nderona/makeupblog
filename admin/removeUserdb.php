<?php
include '../db/dbconnection.php';

    $ID = $_GET['ID'];

    $sql = "DELETE FROM users WHERE ID = $ID;";
    $DB->query($sql);

    header("location: removeUser.php");