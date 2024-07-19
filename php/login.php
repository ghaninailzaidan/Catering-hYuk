<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <div class="main">
        <div class="login-box">
            <h2>LOGIN</h2>
            <form action="proseslogin.php" method="post">
                <div class="input-group">
                    <div class="icon">
                        <i class="bi bi-person-fill"></i>
                    </div>
                    <div class="input-area">
                        <input type="text" name="username"  id="username" class="form-control" placeholder="username" autocomplete="off" required>
                    </div>
                </div>

                <div class="input-group">
                    <div class="icon">
                        <i class="bi bi-lock-fill"></i>
                    </div>
                    <div class="input-area">
                        <input type="password" name="password"  id="password" class="form-control" placeholder="password" required>
                    </div>
                </div>

                <div>
                    <input type="submit" class="submit-button">
                </div>

                <div>
                    <span class="register-line">Tidak punya Akun ? <a href="register.php">Register</a></span>
                </div>
            </form>
        </div>
    </div>
</body>
</html>