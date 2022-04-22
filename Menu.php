<?php include_once "includes/connect.php";
//dit stuk haalt de data op


if(isset($_GET['search']) && !empty($_GET['search'])){
  $sql = "SELECT * FROM `products` WHERE `titel` LIKE CONCAT('%', :titel, '%')";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':titel', $_GET['search']);
}else {
  $sql = "SELECT * FROM products";
  $stmt = $conn->prepare($sql);
}
$stmt->execute();
$result =$stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/main.css" />

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

</head>

<body>
  <header class="topnav" id="myTopnav">

  <a href="index.php">Home</a>
  <a href="menu.php">Menu</a>
  <a href="login.php">Login</a>
  <div class="search-container">
    <form action="menu.php">
      <input type="text" placeholder="search" name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>

</div>
  </header>
  <div class="witregel"></div>
  <div class="flex-container">
    <?php
        foreach($result as $res){
          ?>
    <div>
      <div>
        <img class="afbeeldingen" src="img/<?php echo $res['img']?>"></div>
      <div class="onderkant-afbeelding">

        <?php echo $res['titel'];?>
        <br>

        €<?php echo $res['price'];?>


      </div>
    </div>
    <?php
        }
      ?>



  </div>
</body>

</html>