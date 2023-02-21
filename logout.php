<?php


session_start();
session_unset();
session_destroy();






header("location: ../den_historie/index.php");
    exit();