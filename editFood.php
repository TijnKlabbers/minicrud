
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
<form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $results['id'];?>">
    afbeelding<input type="text" name="img" id="" value="<?php echo $results['img'];?>">
    naam<input type="text" name="titel" id="" value="<?php echo $results ['titel'];?>">
    prijs<input type="text" name="price" id="" value=" <?php echo $results ['price'];?>">
    <input type="submit" value="aanpassen" name="aanpassen">
</form>
