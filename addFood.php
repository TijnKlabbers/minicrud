<?php include_once "includes/connect.php";

if ($_SESSION['login'] == true){
    echo "welcome" . $_SESSION['username'];
}else{
    header("location adminMenu.php");
}
if(isset($_POST["titel"])){
    
    $sql = "INSERT INTO products
            (titel, price, img)
                VALUES
                (:titel, :price, :img)";
            
$stmt = $conn->prepare($sql);
$stmt ->bindParam(':titel', $_POST['titel']);
$stmt ->bindParam(':price', $_POST['price']);
$stmt ->bindParam(':img', $_POST['img']);
$stmt->execute();
//$stmt->debugDumpParams();
header("location: adminMenu.php");

}
?>

<form action="" method="post">
    afbeelding<input type="text" name="img" id="">
    naam<input type="text" name="titel" id="">
    prijs<input type="text" name="price" id="">
    <input type="submit" value="toevoegen">
</form>