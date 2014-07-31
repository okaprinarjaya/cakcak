<?php
include 'Conn.php';
include 'ViewRenderer.php';

$connObj = new Conn();
$conn = $connObj->getConnection();

// Insert data
if ($_POST) {
    $conn->update($_POST);
    redirect('post/index');
}

$post = $conn->fetch("SELECT * FROM post WHERE id = {$_GET['post_id']}");

// Render view add page
$view = new ViewRenderer();
$view->render('post/add', $post);