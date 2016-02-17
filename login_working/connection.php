<?php
    $dbCon = mysqli_connect('localhost', 'root', '12345678', "learnlearn");

    echo "checking";

    if (mysqli_connect_errno()) {
        echo "Failed to connect: " . mysqli_connect_error();
    }
?>