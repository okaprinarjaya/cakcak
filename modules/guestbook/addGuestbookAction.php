<?php
include 'Conn.php';

$connObj = new Conn();
$conn = $conn->getConnection();

// Insert data
$conn->save($_POST);
redirect('guestbook/index');