<?php include_once "includes/connect.php";
//dit stuk haalt de data op
$sql = "SELECT * FROM products";
$stmt = $conn->prepare($sql);
$stmt->execute();
//haal alle data op en knal die in een variabele genaam results
$results = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
  <link rel="stylesheet" href="css/main.css" />
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  </head>
  <body>
    <header class="topnav" id="myTopnav">
        <a href="index.php" class="active">Home</a>
        <a href="menu.php" class="active">Menu</a>
        <a href="login.php" class="active">Login</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
    </header>
    <div class="witregel"></div>
    <div class="flex-container">
      <?php
        foreach($results as $res){
          ?>
          <div>
            <div>
              <img class="afbeeldingen" src="img/<?php echo $res['img']?>"></div>
            <div class="onderkant-afbeelding">
              
            <?php echo $res['titel'];?>
            <br>

            <?php echo $res['price'];?>
              
         
            </div>
          </div>
          <?php
        }
      ?>

    

    </div>
  </body>
</html>
