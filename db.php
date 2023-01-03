<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecole";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(isset($_POST['submit'])){
    if(!empty($_POST['lname']) && !empty($_POST['fname']) && !empty($_POST['email']) && !empty($_POST['location']) && !empty($_POST['birthday']) && !empty($_POST['classe'])){
        $lastname = $_POST['lname'];
        $firstname = $_POST['fname'];
        $email = $_POST['email'];
        $adress = $_POST['location'];
        $dob = $_POST['birthday'];
        $classe = $_POST['classe'];

        $query = "insert into info(nom,prenom,addresse,anniv,email,id_cla) value('$lastname','$firstname','$adress','$dob','$email','$classe')";

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