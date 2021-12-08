<?php

$conn = new mysqli('localhost', 'root', '', 'tmhs');

if (!$conn) {
    die(mysqli_error($conn));
}
