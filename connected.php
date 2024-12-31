<?php

class Burundi
{
    private $servername = 'localhost';
    private $username = 'root';
    private $password ='';
    private $dbname = 'esther';
    private $conn = null;

    function __construct()
      {
          $this -> conn = mysqli_connect($this->servername,$this->username,$this->password,$this->dbname);
          // if($conn)
          // {
          //  echo"Connection reussi!";
          // } else
          //   echo"connection echoue!!";
      }

      function insert($matricule,$nom,$prenom,$email,$telephone)
      {
        $sql = "INSERT INTO personnel (matricule,nom,prenom,email,telephone) VALUES ('$matricule','$nom','$prenom','$email','$telephone')";
        $data = $this->conn-> query($sql);
        return $data;
      }
      function delete($id)
      {
        $sql= "DELETE  from personnel where id = '$id'";
        $data = $this->conn->query($sql);
        return $data;
      }
      function afficher()
      {
        $sql = "SELECT * FROM personnel ";
        $data = $this->conn-> query($sql);
        return $data;
      }

      function afficherone($id)
      {
        $sql ="SELECT * from personnel where id = '$id'";
        $data = $this->conn -> query($sql);
        $row = $data -> fetch_assoc();
        return $row;
      }

      function update($id,$matricule,$nom,$prenom,$email,$telephone)
      {
        $sql ="UPDATE personnel set matricule= '$matricule', nom= '$nom',prenom= '$prenom',email= '$email',telephone= '$telephone' where id= '$id'";
        $data =$this->conn->query($sql);
        return $data;
      }
}

?> 