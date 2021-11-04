<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="StyleLog.css">
</head>
<body>
    <div class="log">
        <div class="border">
            <form action="post-login.php" method="post">
                <center>
                    <h3>Login</h3>
                </center>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="username" placeholder="name@example.com">
                    <label>Username</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                <label>Password</label>
                <p>Belum mempunyai akun ? <a href="signup.php">Sign Up</a></p>
                <center>
                    <button type="submit" class="btn btn-primary">Login</button>
                </center>
            </form>
        </div>
    </div>
</body>
</html>