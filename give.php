<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecole";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(isset($_POST['submit'])){
    if(!empty($_POST['etudiant']) ){
        $etudiant = $_POST['etudiant'];
        $matiere = $_POST['matiere'];
        $controle= $_POST['controle'];
        $note = $_POST['note'];

        $query = "INSERT INTO avoir(matricule,id_cont,code_mat,note) VALUES('$etudiant','$controle','$matiere','$note')";

        $run = mysqli_query($conn,$query) or die(mysli_error());

        if($run){
            echo"form successfully submit";
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