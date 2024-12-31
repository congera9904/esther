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
    $data = $db->afficher();
    ?>
    <table>
        <thead>
            <th>Matricule</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Telephone</th>
        </thead>
        <tr>
            <tbody>
            <?php while ($row=$data->fetch_assoc()){
                ?>
           <tr>
           <td><?php echo $row['matricule'];?></td>
           <td><?php echo $row['nom'];?></td>
           <td><?php echo $row['prenom'];?></td>
           <td><?php echo $row['email'];?></td>
           <td><?php echo $row['telephone'];?></td>
           <td><a href="update.php?id=<?php echo $row['id'];?>">Update</a></td>
           <td><a href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
           
           </tr>
        
            </tbody>
        </tr>
        <?php } ?>
    </table>
    <a href="create.php"><button>ajouter</button></a>
    
</body>
</html>