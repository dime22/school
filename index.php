<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="esquisse.css">
	
	<title>Inscription</title>
</head>
<body>

<div class="parent">
<div class="div1" >
  <a href="https://getbootstrap.com/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
	<svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
	<span class="fs-4">Activite</span>
  </a>
  <hr>
  <ul class="nav nav-pills flex-column mb-auto">
	<li class="nav-item">
	  <a href="index.php" class="nav-link active" aria-current="page">
		<svg class="bi me-2" width="16" height="16"><use xlink:href="insription"></use></svg>
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
	  <a href="note.php" class="nav-link link-dark">
		<svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
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
 
<div class="div2" >
					<section class="bg-dark">
						<div class="container py-5 h-100">
						<div class="row d-flex justify-content-center align-items-center h-100">
							<div class="col">
							<div class="card card-registration my-4">
								<div class="row g-0">
								<div class="col-xl-6 d-none d-xl-block">
									<img src="student.PNG"
									alt="Sample photo" class="img-fluid"
									style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
								</div>
								<div class="col-xl-6">
									<div class="card-body p-md-5 text-black">
									<h3 class="mb-5 text-uppercase">INSCRIPTION ETUDIANT</h3>
									
									<form action="data.php" method="post">
									<div class="row">
										<div class="col-md-6 mb-4">
										<div class="form-outline">
											<input name="lname" type="text" id="form3Example1m" class="form-control form-control-lg" />
											<label class="form-label" for="form3Example1m">nom</label>
										</div>
										</div>
										<div class="col-md-6 mb-4">
										<div class="form-outline">
											<input name="fname" type="text" id="form3Example1n" class="form-control form-control-lg" />
											<label class="form-label" for="form3Example1n">prenom</label>
										</div>
										</div>
									</div>
					
									<div class="row">
										<div class="col-md-6 mb-4">
										<div class="form-outline">
											<input name="birthday" type="date" id="form3Example1m1" class="form-control form-control-lg" />
											<label class="form-label" for="form3Example1m1">Date de naissance</label>
										</div>
										</div>
										
									</div>
					
									<div class="form-outline mb-4">
										<input name="location" type="text" id="form3Example8" class="form-control form-control-lg" />
										<label  class="form-label" for="form3Example8">Adresse</label>
									</div>

									<div class="form-outline mb-4">
										<input name="email" type="text" id="form3Example8" class="form-control form-control-lg" />
										<label  class="form-label" for="form3Example8">Email</label>
									</div>
					
									<div class="row">
										<div class="col-md-6 mb-4">
									<?php 
							//connect to database
							$cser=mysqli_connect("localhost","root","","ecole") or die("connection failed:".mysqli_error());

							$result = mysqli_query($cser,"SELECT * FROM classe") or die(mysql_error());
							if (mysqli_num_rows($result)!=0)
							{
							echo ' <select name="classe">';
							while($drop_2 = mysqli_fetch_array( $result ))
							{
							echo '<option value="'.$drop_2['id_cla'].'">'.$drop_2['id_cla'].'</option>';
							}
							echo '</select>';
							}
							?>
										<label class="form-label" for="form3Example8">Classe</label>
						</div>
						</div>
										
									</div>
									<div class="d-flex justify-content-end pt-3">
										<button type="button" class="btn btn-light btn-lg">Reset all</button>
										<button type="submit" name="submit" class="btn btn-warning btn-lg ms-2">S'inscrire</button>
									</div>
									</form>
					
									</div>
								</div>
								</div>
							</div>
							</div>
						</div>
						</div>

						
					</section>

	
	  
			
		<!--
		<form action="data.php" method="post">
			<label>nom</label> <input type="text" name="lname"><br>
			<label>prenom</label> <input type="text" name="fname"><br>
			<label>email</label> <input type="text" name="email"><br>
			<label>adresse</label> <input type="text" name="location"><br>
			<label>naissance</label><input type="date" name="birthday"><br>
			<label>classe</label>
			<?php 
			//connect to database
			$cser=mysqli_connect("localhost","root","","ecole") or die("connection failed:".mysqli_error());

			$result = mysqli_query($cser,"SELECT * FROM classe") or die(mysql_error());
			if (mysqli_num_rows($result)!=0)
			{
			echo ' <select name="classe">';
			while($drop_2 = mysqli_fetch_array( $result ))
			{
			echo '<option value="'.$drop_2['id_cla'].'">'.$drop_2['id_cla'].'</option>';
			}
			echo '</select>';
			}
			?>
			<br>

			<button type="submit" name="submit">submit</button>

		</form>

	
	

!-->

</div> 
<div>


	

</body>
<script type="text/javascript" src="bootstrap.min.js"></script>
</html>