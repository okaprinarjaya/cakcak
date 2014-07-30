<?php
include 'Conn.php';
include 'ViewRenderer.php';
include 'Security/Captcha.php';

$connObj = new Conn();
$conn = $conn->getConnection();

// Render view add page
$view = new ViewRenderer();
$view->render('guestbook/add');

// Insert data
if ($_POST) {
    $captcha = new Captcha();
	if ($captcha->verify($_POST['captcha'])) {
        $conn->save($_POST);
        redirect('guestbook/index');
	}
}