<?php 
    session_start();
    include('server.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>

    <link rel="stylesheet" href="styls.css">
</head>
<body>

    <div class="head">
        <h2>Register</h2>
    </div>

    <form action="register_db.php" method="post">
        <?php include('errors.php'); ?>
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <div class="input-group">
            <label for="username">Username</label> <คนที่สมัครต้องกำหนด>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label for="email">Email</label> <คนที่สมัครต้องกำหนด>
            <input type="email" name="email">
        </div>
        <div class="input-group">
            <label for="password_1">password</label> <คนที่สมัครต้องกำหนด>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label for="password_2">confirm password</label> <คนที่สมัครต้องกำหนด>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <button type="submit" name="reg_user" class="btn">Register</button>
        </div>
        <p>Already a member? <a href="login.php">Sign in</a></p>
    </form>

</body>
</html>