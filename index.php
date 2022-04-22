<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Inline+One&family=Cormorant+Garamond:wght@600;700&family=Permanent+Marker&family=Roboto:wght@500&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="main.css" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" />
  <title>Home</title>
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
  <h1>HEAVEN'S KITCHEN</h1>
  <h2>THE ONLY RESTAURANT WHERE IT TASTE LIKE ITS MADE IN HEAVEN</h2>
  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
  </script>
</body>

</html>