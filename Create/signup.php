<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Sign Up</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="StyleSign.css">
</head>
<body>
    <div class="log">
        <div class="border">
            <form action="proses-signup.php" method="post">
                <center>
                    <h3>Sign Up</h3>
                </center>
                <br>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="username" placeholder="name@example.com">
                    <label>Username</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                <label>Password</label>
                <br>
                <center>
                    <button type="submit" class="btn btn-primary">Daftar</button>
                </center>
            </form>
        </div>
    </div>
</body>
</html>
