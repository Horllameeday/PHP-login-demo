<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>LOGIN PAGE</h1>
    <form name="myForm" method="post" action="validation.php">
        <label for="username">Userame:</label><br>
        <input type="text" name="username" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" name="password" required><br><br>
        <button type="submit" name="submit" value="submit">LOGIN</button>
    </form>
    <h1>SIGN UP PAGE</h1>
    <form name="myForm" method="post" action="signup.php">
        <label for="username">Userame:</label><br>
        <input type="text" name="username" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" name="password" required><br><br>
        <button type="submit" name="submit" value="submit">SIGNUP</button>
    </form>
</body>
</html>