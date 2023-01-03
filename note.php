<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="esquisse.css">
<title>note</title>

</head>
<body>

        <div class="div1">
          <a href="https://getbootstrap.com/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
          <span class="fs-4">Activite</span>
          </a>
          <hr>
          <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
          <a href="index.php" class="nav-link link-dark">
					<svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
					Inscription
				</a>
          </li>
          <li>
				<a href="student.php" class="nav-link link-dark">
					<svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
					Etudiant
				</a>
				</li>
          <li>
          <a href="note.php" class="nav-link active" aria-current="page">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="insription"></use></svg>
            Note
            </a>
          </li>
          <li>
            <a href="generate.php" class="nav-link link-dark">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
            releve
            </a>
          </li>
          <li>
            <a href="matiere.php" class="nav-link link-dark">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
            Matiere
            </a>
          </li>
          <li>
            <a href="etudiant.php" class="nav-link link-dark">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
            classe
            </a>
          </li>
          </ul>
          <hr>
                
        </div>
        <div class="div2">

        

        <form action="give.php" method="post">
          <label>matricule</label>
          <input type="text" name="etudiant">


          <?php 
          //connect to database
          $cser=mysqli_connect("localhost","root","","ecole") or die("connection failed:".mysqli_error());

          $result = mysqli_query($cser,"SELECT * FROM matiere") or die(mysql_error());
          if (mysqli_num_rows($result)!=0)
          {
          echo 'matiere : <select name="matiere">';
            while($drop_2 = mysqli_fetch_array( $result ))
          {
            echo '<option value="'.$drop_2['code_mat'].'">'.$drop_2['nom_mat'].'</option>';
          }
          echo '</select>';
          }
          echo'<br>';
          $query = mysqli_query($cser,"SELECT * FROM controle") or die(mysql_error());

          if (mysqli_num_rows($query)!=0)
          {
          echo 'test : <select name="controle">';
            while($drop_2 = mysqli_fetch_array( $query ))
          {
            echo '<option value="'.$drop_2['id_cont'].'">'.$drop_2['session'].'</option>';
          }
          echo '</select>';
          }
          ?> 
          <br><label>note</label>
          <input type="text" name="note">
          <input type="submit" name="submit" value="enregistrer">
        </form>
            
        </div>

</body>


</html>