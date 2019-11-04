<?php

session_start();

if (isset($_POST['confirm'])) {
    
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $pattern = "/[\x{30A0}-\x{30FF}]/u";

    if (empty($_SESSION['name']) || empty($_SESSION['email'])) {
        header("Location: ../view/index.php?error=emptyfields&name=".$_SESSION['name']."&email=".$_SESSION['email']);
        exit();
    }
    elseif (!preg_match("/^[a-zA-Z0-9@.-_]*$/", $_SESSION['email']) && !preg_match($pattern, $_SESSION['name'])) {
        header("Location: ../view/index.php?error=invalidemailname");
        exit();
    }
    elseif (!preg_match("/^[a-zA-Z0-9@.-_]*$/", $_SESSION['email'])) {
        header("Location: ../view/index.php?error=invalidemail&name=".$_SESSION['name']);
        exit();
    }
    elseif (!preg_match($pattern, $_SESSION['name'])) {
        header("Location: ../view/index.php?error=invalidname&email=".$_SESSION['email']);
        exit();
    }
    else {
        header("Location: ../view/confirm.php");
        exit();
    }

}
else {
    header("Location: ../view/index.php");
    exit();
}
?>