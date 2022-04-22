<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/login.css" />
</head>

<body>
  <header>
    <div class="topnav" id="myTopnav">
      <a href="index.php" class="active">Home</a>
      <a href="menu.php" class="active">Menu</a>
      <a href="login.php" class="active">Login</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
  </header>
  <div class="container">
    <form id="form" action="php/checkLogin.php" method="post">
      <h1>Registration</h1>
      <div class="input-control">
        <label class="login-tekst" for="username">Username</label>
        <input id="username" class="field_class" name="login_txt" type="text" placeholder="username" autofocus />
        <div class="error"></div>
      </div>
      <div class="input-control">
        <label class="login-tekst" for="password">Password</label>
        <input id="password" class="field_class" name="password_txt" type="password" placeholder="wachtwoord" />
        <div class="error"></div>
      </div>

      <button class="submit_class" type="submit">Sign Up</button>
    </form>
  </div>
  <script src="./index.js"></script>
</body>

</html>