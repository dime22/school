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

        <section class="h-100 h-custom" style="background-color: #8fc4b7;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-6">
              <div class="card rounded-3">
                
                <div class="card-body p-4 p-md-5">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Donner note</h3>
      
                  <form class="px-md-2" action="give.php" method="post">
                    <div class="form-outline mb-4">
                      <input type="text" name="etudiant" id="form3Example1q" class="form-control" />
                      <label class="form-label" for="form3Example1q">Matricule</label>
                    </div>

                    <div class="row">
                      <div class="col-md-6 mb-4">
      
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
                        ?>
      
                      </div>
                      
                    </div>
      
                    <div class="mb-4">
      
                    <?php 
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
      
                    </div>
      
                    <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                      <div class="col-md-6">
      
                        <div class="form-outline">
                          <input type="text" name="note" id="form3Example1w" class="form-control" />
                          <label class="form-label" for="form3Example1w">note</label>
                        </div>
      
                      </div>
                    </div>
      
                    <button type="submit" class="btn btn-success btn-lg mb-1">Submit</button>
      
                  </form>
      
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
<!--
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
        !-->
            
        </div>

</body>


</html>