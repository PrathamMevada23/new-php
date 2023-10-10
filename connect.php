<?php

    $con= mysqli_connect('localhost', 'root','','new_db');

    if(!$con){
        die(mysqli_error($con));
    }
?>