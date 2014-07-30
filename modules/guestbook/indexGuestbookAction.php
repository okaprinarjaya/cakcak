<?php
include 'Conn.php';
include 'ViewRenderer.php';

$connObj = new Conn();
$conn = $conn->getConnection();

// Fetch data
$data = $conn->fetchAll("SELECT * FROM awesome_table");

// Render view
$view = new ViewRenderer();
$view->render('guestbook/index', $data);