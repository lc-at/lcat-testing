<?php
session_start();

if (isset($_POST['username'])) {
    $_SESSION['authenticated'] = $_POST['username'];
}

if (isset($_SESSION['authenticated'])) {
    header('Location: secret.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in</title>
</head>

<body>
    <form method="post">
        <label>Username:</label>
        <input type="text" name="username">
        <button type="submit">log in</button>
    </form>
    <hr>
</body>

</html>
<?= highlight_file(__FILE__); ?>