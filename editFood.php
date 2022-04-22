
<?php include_once "includes/connect.php";

//$_POST['titel'];
//$_POST['titel'];
//$_GET['id'];
//dit stuk haalt de data op
$sql = "SELECT * FROM products WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
$stmt->execute();
//haal alle data op en knal die in een variabele genaam results
$results = $stmt->fetch();
if(isset($_POST['aanpassen'])){
    $sql = 'UPDATE products SET 
            titel = :titel,
            img = :img,
            price = :price
            WHERE id = :id';

    // prepare statement
    $statement = $conn->prepare($sql);

    // bind params
    
    $statement->bindParam(':titel', $_POST['titel']);
    $statement->bindParam(':price', $_POST['price']);
    $statement->bindParam('img', $_POST['img']);
    $statement->bindParam(':id', $results['id'], PDO::PARAM_INT);
    // execute the UPDATE statment
    if ($statement->execute()) {
        //$statement->debugDumpParams();
        //echo 'The publisher has been updated successfully!';
        header("Location: adminMenu.php");
    }
}
?>
<head>
<link rel="stylesheet" href="css/main.css" />
</head>
<form id="form" class='editForm' action="" method="post">
        <h1>Edit</h1>
        <div class="input-control">
          <input
            value="<?php echo $results['id'];?>"
            class="field_class"
            name="id"
            type="hidden"
            placeholder="image"
            autofocus
          />

        </div>
        <div class="input-control">
          <label class="login-tekst" for="image">image</label>
          <input
            value="<?php echo $results['img'];?>"
            class="field_class"
            name="img"
            type="text"
            placeholder="image"
            autofocus
          />

        </div>
        <div class="input-control">
          <label class="login-tekst" for="password">titel</label>
          <input
            value="<?php echo $results['titel'];?>"
            class="field_class"
            name="titel"
            type="text"
            placeholder="titel"
          />

        </div>

        <div class="input-control">
          <label class="login-tekst" for="password">price</label>
          <input
            value="<?php echo $results['price'];?>"
            class="field_class"
            name="price"
            type="text"
            placeholder="wachtwoord"
          />

        </div>
        

        <button class="submit_class" value="aanpassen" name="aanpassen" type="submit">Add</button>
      </form>
