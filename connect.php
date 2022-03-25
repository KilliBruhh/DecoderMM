<?php
        $host = "localhost";
        $user = "root";
        $password = "123";
        $database = "murdermystery";

        $link = mysqli_connect($host, $user, $password) or die("Error: No connection to host could be made");
        mysqli_select_db($link, $database) or die("Error: No connection to database could be made");
?>
