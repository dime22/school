<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecole";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(isset($_POST['submit'])){
    if(!empty($_POST['identifiant']) && !empty($_POST['niveau']) && !empty($_POST['filiere'])){
        $id = $_POST['identifiant'];
        $niv = $_POST['niveau'];
        $filiere = $_POST['filiere'];
        $cycle = $_POST['cycle'];
        

        $query = "insert into classe(id_cla,niveau,filiere,cycle) value('$id','$niv','$filiere','$cycle')";

        $run = mysqli_query($conn,$query) or die(mysli_error());

        if($run){
            
            require_once("etudiant.php");
        }
        else{
            echo "form not submitted";
        }
    }
    else{

        echo"all fields required";
        
     }


}




?>