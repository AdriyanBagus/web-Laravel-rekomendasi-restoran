<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
<div class="login-page">
  <div class="form">
    <h3>Login Admin</h3>
    <form class="login-form" action="{{ url('/login') }}" method="POST">
    @csrf
        <input type="email" placeholder="email" name="email" id="email">
        <input type="password" placeholder="Password" name="password" id="password">
        <button type="submit">Log in</button>
    </form>
  </div>
</div>
</body>
</html>