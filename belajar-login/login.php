<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="wrapper">
        <form action="login-controller.php" method="post">
            <h1>Login</h1>
            <label for="#">username</label>
            <input type="text" name="username" placeholder="masukan username" required="" autofocus="">
            <label for="#">password</label>
            <input type="password" name="password" placeholder="masukan password" required="">
            <button type="submit">SUBMIT</button>
        </form>
    </div>

    <?php
        if (isset($_GET['pesan'])) {?>
            <div class="error">
                <label for="#">Oopps...<?php echo $_GET['pesan'];?></label>
            </div>
    <?php } ?>
</body>
</html>