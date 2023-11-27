<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/login.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="borderLine"></div>
        <div class="borderLine"></div>
        <div class="borderLine"></div>
        <div class="borderLine"></div>
        <form action="/Auth/Login" method="POST">
            <h2>Sign in</h2>
            <?php if(isset($_SESSION['message'])): ?>
              <div style="width: 100%; text-align: center;  font-style:italic; font-size: 16px;" class="alert alert-danger"><?php echo $_SESSION['message']; ?></div>
                <?php unset($_SESSION['message']); ?>
            <?php endif; ?>
            <div class="inputBox">
                <input name="username" type="text" required>
                <span>Username</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input name="password" type="password" required>
                <span>Password</span>
                <i></i>
            </div>
            <input style="margin-top: 35px;" type="submit" value="Login">
        </form>
    </div>
</body>

</html>