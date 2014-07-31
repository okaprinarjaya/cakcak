<?php
include 'Conn.php';
include 'ViewRenderer.php';

$connObj = new Conn();
$conn = $conn->getConnection();

// Insert data
if ($_POST) {
    $conn->save($_POST);
    redirect('post/index');
}

// Render view add page
$view = new ViewRenderer();
$view->render('post/add');