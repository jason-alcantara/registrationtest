<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';

if (isset($_POST['done'])) {
    
    require 'dbh.inc.php';

    $name = $_POST['name'];
    $email = $_POST['email'];

    if (!empty($name) || !empty($email)) {
        $sql = "INSERT INTO users (name, email) VALUES (?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../view/index.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "ss", $name, $email);
            mysqli_stmt_execute($stmt);

            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->SMTPDebug = 1;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = '587';
            $mail->isHTML();
            $mail->Username = 'sampleprogramtest@gmail.com';
            $mail->Password = 'programtest01';
            $mail->setFrom('no-reply@mail.com');
            $mail->Subject = 'Registration Complete';
            $mail->Body = '登録ありがとうございます。';
            $mail->addAddress($email);

            $mail->send();

            header("Location: ../view/submit.php");
            exit();
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}

?>