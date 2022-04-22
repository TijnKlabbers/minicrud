<?php include_once "includes/connect.php";
if(isset($_SESSION['login']) && $_SESSION['login'] == true){


} else {
  $_SESSION['username'] = $results['username'];
  $_SESSION['login'] = false;
  header("Location: login.php");

}
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
  <link
    href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Inline+One&family=Cormorant+Garamond:wght@600;700&family=Permanent+Marker&display=swap"
    rel="stylesheet" />
</head>

<body>
  <header class="header2">
    <div class="navigatie">
      <nav>
        <a class="active" href="php/logout.php">Log out</a>
      </nav>
    </div>
    <div class="intro">
      <h4>Menu</h4>
    </div>
  </header>
  <div class="witregel"></div>
  <a class="add" href='addFood.php'>add</a>
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
        €<?php echo $res['price'];?>
      </div>

      <a class="edit" href="editFood.php?id=<?php echo $res['id']; ?>">Edit</a>
      <a class="delete" href='deleteFood.php?id=<?php echo $res['id']; ?>'>Delete</a>



    </div>
    <?php
        }
      ?>



  </div>
</body>

</html>