<?php include_once "includes/connect.php";

$idvaneten = $_GET['id'];
echo $idvaneten;

$sth = $conn->prepare("DELETE FROM products WHERE id=:id");
$sth->bindParam('id', $idvaneten);
  // use exec() because no results are returned
  $sth->execute();
  header("Location: adminMenu.php");
?>