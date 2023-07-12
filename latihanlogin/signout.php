<?php
    session_start();
    session_unset();
    session_destroy();
    header("Location : http://localhost/matkul_repo/matkul_webprog/latihanlogin/index.php");
?>