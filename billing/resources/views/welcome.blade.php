<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>LOGIN</h1>
      <form method="post" action="{{ route('login') }}">
      @csrf
        <p><input type="text" id="uname" name="uname" value="" placeholder="Username or Email"></p>
        <p><input type="password" id="password" name="password" value="" placeholder="Password"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
          </label>
        </p>
        <p class="submit"><input type="submit" name="loginsubmit" value="Login"></p>
      </form>

      @if(Session::has('fail'))
        <div class="alert alert-danger">  
            <p>{{ Session::get('fail') }}</p>
        </div>
      @endif
    </div>
  </section>
</body>
</html>