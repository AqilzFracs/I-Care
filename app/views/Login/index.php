<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="<?php echo BASEURL; ?>/img/I-Care.png" rel="icon">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    
    <div class="wrapper">
        <form action="<?= BASEURL; ?>/Login/loginUser" method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" id="username" name="username" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" id="password" name="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="register-link pb-10 text-white">
                <p><a href="<?= BASEURL ?>/Register">Don't have an account yet? Register here</a></p>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
    </div>
</body>
</html>
