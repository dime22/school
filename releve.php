<?php
require('fpdf/fpdf.php');

$servername = "localhost";
$user="root";
$password="";
$db = "ecole";

$con = mysqli_connect($servername,$user,$password,$db);



    $matricule = $_GET["matricule"];

    $query1 = mysqli_query($con,"select * from etudiant where matricule='".$matricule."'");

    $etudiant = mysqli_fetch_array($query1);

    $query2 = mysqli_query($con,"select etudiant.id_cla,niveau,filiere,cycle  from etudiant,classe
     where etudiant.id_cla=classe.id_cla and matricule='".$matricule."'");
    $classe = mysqli_fetch_array($query2);

    $pdf = new FPDF('P','mm','A4');

    $pdf->AddPage();
    //font arial bold 14
    $pdf->SetFont('Arial','B',14);

    //cell(width,height,text,border,endline,[align])

    $pdf->Cell(130,5,'Etudiant',0,0);

    $pdf->Cell(59,5,'Departement',0,1);

    $pdf->SetFont('Arial','',12);

    $pdf->Cell(130,5,$etudiant['matricule'],0,0);
    $pdf->Cell(25,5,$classe['id_cla'],0,0);
    $pdf->Cell(59,5,'',0,1);

    $pdf->Cell(130,5,$etudiant['nom'],0,0);
    $pdf->Cell(25,5,'niveau',0,0);
    $pdf->Cell(34,5,$classe['niveau'],0,1);//end line

    $pdf->Cell(130,5,$etudiant['prenom'],0,0);
    $pdf->Cell(25,5,'filiere',0,0);
    $pdf->Cell(34,5,$classe['filiere'],0,1);


    $pdf->Cell(130,5,$etudiant['addresse'],0,0);
    $pdf->Cell(25,5,'cycle',0,0);
    $pdf->Cell(34,5,$classe['cycle'],0,1);

    $pdf->Cell(189,10,'',0,1);//verticale espacement

    


    //dummy
    $pdf->Cell(189,10,'',0,1);

    //invoice contents
    $pdf->SetFont('Arial','B',12);

    $pdf->Cell(60,5,'matiere',1,0);
    $pdf->Cell(60,5,'coefficient',1,0);
    $pdf->Cell(25,5,'note',1,0);
    $pdf->Cell(34,5,'note*coef',1,1);//end of line

    $pdf->SetFont('Arial','',12);

    //numbers are right-aligned so we give 'R' after new lin parameter

    $request = "SELECT nom_mat,coeff,max(note)AS marks,max(note)*coeff AS note
    FROM avoir,matiere,etudiant,controle WHERE etudiant.matricule=avoir.matricule
    AND controle.id_cont=avoir.id_cont AND matiere.code_mat=avoir.code_mat
    AND etudiant.matricule=".$matricule." GROUP BY matiere.code_mat";
    $query3 = mysqli_query($con,$request);

    $somt = 0;
    $nt = 0;
    $avg =0;
    while($line=mysqli_fetch_array($query3)){
        $pdf->Cell(60,5,$line['nom_mat'],1,0);
        $pdf->Cell(60,5,$line['coeff'],1,0);
        $pdf->Cell(25,5,$line['marks'],1,0);
        $pdf->Cell(34,5,$line['note'],1,1,'R');
        $somt += $line['note'];
        $nt += $line['coeff'];

    }
    //items $query 
    //end of line
    $avg = $somt/$nt;
    $avg = round($avg,2);
    
    //summary
    $pdf->Cell(120,5,'',0,0);
    $pdf->Cell(25,5,'Somme',0,0);
    
    $pdf->Cell(34,5,$somt,1,1,'R');//end of line
    
    $pdf->Cell(120,5,'',0,0);
    $pdf->Cell(25,5,'nombre',0,0);
    
    $pdf->Cell(34,5,$nt,1,1,'R');//end of line
    
    
    $pdf->Cell(120,5,'',0,0);
    $pdf->Cell(25,5,'Moyenne',0,0);
    
    $pdf->Cell(34,5,$avg,1,1,'R');//end of line
    
    $pdf->Cell(189,10,'',0,1);

    $pdf->SetFont('Arial','B',16);
    // Couleur du texte en gris
    $pdf->SetTextColor(226,20,20);
    $pdf->Cell(130,5,'',0,0);
    if($avg<10){
        $pdf->Cell(34,5,'REDOUBLANT',0,0,'R');
    }
    else{
        $pdf->Cell(34,5,'PASSANT',0,0,'R');
    }


    $pdf->Output();

?>