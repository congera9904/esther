<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="file:///C:/Users/Eric%20Congera/Downloads/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.min.css">
<script src="file:///C:/Users/Eric%20Congera/Downloads/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>

</head>
<body>
    
<?php

include 'connected.php';

$db = new Burundi();
$data =$db-> afficherone($_GET ['id']);

if(isset($_POST['update'])){
    $matricule = $_POST['matricule'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $update = $db -> update($_GET['id'],$matricule,$nom,$prenom,$email,$telephone);
    if($update)
    {
        echo("La super mise a jour est bien effectuee");
        header('location:afficher.php');
    }
    else
    {
        echo("la mise a jour echoue!!");
    }
}
?>
<form method="post" action="">
<p>Formulaire</p>
	<fieldset>
	<div class="b">
	<label>Matricule</label>
	<input class="ab" type="text" required="required" name = "matricule" value="<?php echo $data['matricule'];?>"><br>
	<label>Nom</label>
	<input class="ab" type="text" required="required" name ="nom" value="<?php echo $data['nom'];?>"><br>
	<label>Prenom</label>
	<input class="ab" type="text" name="prenom" required="required" value="<?php echo $data['prenom'];?>"><br>
    <label>Email</label>
	<input class="ab" type="text" name="email" required="required" value="<?php echo $data['email'];?>"><br>
    <label>Telephone</label>
	<input class="ab" type="text" name="telephone" required="required" value="<?php echo $data['telephone'];?>"><br>
	<input id="btn" type="submit" name="update" value="update"> 
	</div>
</fieldset>
</form>
</body>
</html>