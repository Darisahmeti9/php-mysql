<?php

include_once("config.php");

$id = 1;

$sql = "DELETE FROM users WHERE id=id";
$deleteUsers = $conn ->prepare