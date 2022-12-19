<?php


session_start();
session_unset();
session_destroy();

header("location: ../mojmir_stranka/index.php");
    exit();
