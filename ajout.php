<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecole";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(isset($_POST['submit'])){
    if(!empty($_POST['code']) && !empty($_POST['matiere']) && !empty($_POST['proffesseur']) && !empty($_POST['coefficient']) ){
        $code = $_POST['code'];
        $matiere = $_POST['matiere'];
        $proffesseur = $_POST['proffesseur'];
        $coefficient = $_POST['coefficient'];
   

        $query = "insert into matiere(code_mat,nom_mat,prof,coeff) value('$code','$matiere','$proffesseur','$coefficient')";

        $run = mysqli_query($conn,$query) or die(mysli_error());

        if($run){
            echo "success";
            require_once("matiere.php");
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