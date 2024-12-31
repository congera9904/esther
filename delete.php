<?php
include 'connected.php';

$db = new Burundi();
$delete = $db-> delete($_GET['id']);
if($delete)
{
    echo"Suppression reussi!!";
    header('location:afficher.php');

}else
    echo"Suppression Echoue!!";
?>