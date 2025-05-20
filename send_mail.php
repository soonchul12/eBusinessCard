<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $subject = isset($_POST['subject']) ? trim($_POST['subject']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';

    $to = 'yeyiyeyi@naver.com';
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $body = "보낸 사람: $email\n제목: $subject\n내용:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        header('Location: index.php?success=1');
        exit();
    } else {
        header('Location: index.php?error=1');
        exit();
    }
} else {
    header('Location: index.php');
    exit();
} 