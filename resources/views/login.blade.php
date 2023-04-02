<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
  <title>Login</title>
</head>

<body>
  <div class="login-form">
    <form>
      <h1>Login</h1>
      <div class="content">
        <div class="input-field">
          <input type="email" placeholder="Email" autocomplete="nope">
        </div>
        <div class="input-field">
          <input type="password" placeholder="Password" autocomplete="new-password">
        </div>
        <a href="#" class="link">Forgot Your Password?</a>
      </div>
      <div class="action">
        <button><a href="registration.blade.php">Register</a></button>
        <button>Sign in</button>
      </div>
    </form>
  </div>
</body>

</html>
