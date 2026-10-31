<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // TODO: Add validation, email sending, or database storage.
    header('Location: contact.php');
    exit;
}

header('Location: contact.php');
exit;
