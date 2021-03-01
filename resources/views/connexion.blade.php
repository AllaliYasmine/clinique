<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="style1.css">
  </head>
  <body style="background-image:url('images/bg-banner.jpg');">
  
  <div class="wrapper">
      <div class="title">Welcome To Lifecare</div>
      <form action="/connexion" method="post">

      {{ csrf_field() }}
        
      <div class="field">
          <input type="text" required class="input"  type="email" name="email">
          <label>Email Address</label>
        </div>

        <div class="field">
          <input type="password" required class="input"  type="password" name="password">
          <label>Password</label>
        </div>
        <div class="field">
          <input type="text" required class="input"  type="text" name="role">
          <label>Role</label>
        </div>

        <div class="content">
          <div class="checkbox">
            <input type="checkbox" id="remember-me">
            <label for="remember-me">Remember me</label>
          </div>
          <div class="pass-link"><a href="#">Forgot password?</a></div>
        </div>
        <div class="field">
          <input type="submit" value="Login">
        </div>
        <div class="signup-link">Not a member? <a href="{{ url('inscription')}}">Signup now</a></div>
      </form>
      </div>

</body>
</html>
