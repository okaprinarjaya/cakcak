<?php
include 'Conn.php';

$connObj = new Conn();
$conn = $conn->getConnection();

// Insert data
$conn->update($_POST);
redirect('guestbook/index');