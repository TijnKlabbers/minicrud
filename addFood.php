<?php include_once "includes/connect.php";

if ($_SESSION['login'] == true){
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
header("location: adminMenu.php");

}

?>
<head>
<link rel="stylesheet" href="css/main.css" />
</head>
<form id="form" class="editForm "action="" method="post">
        <h1>adding</h1>
        <div class="input-control">
          <label class="login-tekst" for="image">image</label>
          <input
            id=""
            class="field_class"
            name="img"
            type="text"
            placeholder="image"
            autofocus
          />

        </div>
        <div class="input-control">
          <label class="login-tekst" for="titel">titel</label>
          <input
            id=""
            class="field_class"
            name="titel"
            type="text"
            placeholder="wachtwoord"
          />

        </div>

        <div class="input-control">
          <label class="login-tekst" for="price">price</label>
          <input
            id=""
            class="field_class"
            name="price"
            type="text"
            placeholder="wachtwoord"
          />

        </div>
        

        <button class="submit_class" type="submit">Add</button>
      </form>

