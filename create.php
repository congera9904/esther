<!DOCTYPE html>
<html>
<head>
    
    <title>Document</title>
    <link rel="stylesheet" href="file:///C:/Users/Eric%20Congera/Downloads/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.min.css">
<script src="file:///C:/Users/Eric%20Congera/Downloads/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</head>
<body>
    <?php

    include 'connected.php';
    $db = new Burundi();
    
    if(isset($_POST['ok'])){
        $matricule = $_POST['matricule'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $kweli =  $db->insert($matricule,$nom,$prenom,$email,$telephone);
        if($kweli)
          {
            echo"les donnees sont bien inserrees!!";
            header('location:afficher.php');
           } else
             echo"Echoue de l'insertion des donnees!!";
         }
        ?>
    <form method="POST" action="">
    <a href="afficher.php">afficher</a>

	<p>Formulaire</p>
	<fieldset>
	<div class="b">
	<label>Matricule</label>
	<input class="ab" type="text" required="required" name="matricule"><br>
	<label>Nom</label>
	<input class="ab" type="text" required="required" name="nom"><br>
	<label>Prenom</label>
	<input class="ab" type="text" name="prenom" required="required"><br>
    <label>Email</label>
	<input class="ab" type="text" name="email" required="required"><br>
    <label>Telephone</label>
	<input class="ab" type="text" name="telephone" required="required"><br>
	<input id="btn" type="submit" name="ok">
	<a href="#" class="buto" >Retour</a>
	</div>
</fieldset>
</form>
</body>
</html>