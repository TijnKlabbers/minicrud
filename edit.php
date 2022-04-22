<?php
var_dump($_GET['id']);
$stmt = $conn->prepare("SELECT * FROM products WHERE ID = id");
$stmt ->execute(['id'=> $_GET['id']]);
$data = $stmt->fetch();

?>
<?php include_once "includes/connect.php";

if ($_SESSION['login'] == true){
    echo "welcome" . $_SESSION['username'];
}else{
    header("location adminMenu.php");
}



<form action="" method="post">
    afbeelding<input type="text" name="img" id="" value="<?php echo $data[products]"><br />
    naam<input type="text" name="titel" id=""><br />
    prijs<input type="text" name="price" id=""><br />
    <input type="submit" value="toevoegen">
</form>