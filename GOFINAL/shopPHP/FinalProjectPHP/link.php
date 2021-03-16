<?php

require_once "php/CreateDb.php";

$conn = new CreateDb("riseup", "users", "localhost", "root","");

$link = $conn->connect();