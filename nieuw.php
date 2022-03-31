<?php 
include_once "includes/connect.php";
 
$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":username", $_POST['username']);
$stmt->bindParam(":password", $_POST['password']);
$stmt->execute();
$result = $stmt->fetchAll();
var_dump($result);
if(count($result) > 0){
    echo "username gevonden";
} else {
    echo "username niet gevonden";
}
//var_dump($_POST);
 
 ;
 
?>
 
<form action="login.php" method="post">
    username <input type="text" name="username" value="" /><br />
    password <input type="text" name="password" value=""><br />
    <input type="submit" value="login" />
 
</form>