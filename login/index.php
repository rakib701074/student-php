<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <form action="database.php" method="post">
            <h1>Login Form</h1>
            <div class="input-box">
                <input type="text" placeholder="name" id="name"
                required>
                <i class="bx bxs-user"></i>
                </div>
                <div class="input-box">
                    <input type="password" id="password"
                    placeholder ="password" required>
                    <i class="bx bxs-lock-alt"></i>
                </div>
                <div class="remember-forget">
                   <label><input type="checkbox">Remember Me</label>
                </div>
                <button type="submit" value="login" class="btn">Login</button>

                <div class="register-link">
                    <p>Dont have  an account? <a
                    href="#">Register</a></p>
                </div>
        </form>
    </div>





        
    </textarea>
</body>
</html>