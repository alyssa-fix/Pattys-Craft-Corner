<?php session_start(); ?>
    <?php
    //Open connection to database
    $con=mysqli_connect("localhost", "root", "root", "pattyscraftcorner");
    //check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    };
    ?>