<?php
session_start();
if (!isset($_SESSION['authenticated'])) die('forbidden!');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Secret haha</title>
</head>

<body>
    <h4>Welcome, <?= $_SESSION['authenticated']; ?>!</h4>
    <p>Assuming you are doing an xss attack and you have got the cookie.</p>
    <p>Your cookie is: <span id="cookie"></span><button id="gko" type="button" onclick="getcookie();">get cookie!</button></p>
    <p>Open another browser and try to inject the cookie!</p>
    <hr>
</body>
<script>
    function getcookie() {
        document.getElementById("cookie").innerHTML = '"' + document.cookie + '"';
        document.getElementById("gko").style.display = "none";
    }
</script>

</html>
<?= highlight_file(__FILE__); ?>