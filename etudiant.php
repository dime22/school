<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="esquisse.css">
	<style>
		.center {
			
			text-align: center;
			}
	</style>
    <title>creer matiere</title>
<head>
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
			<a href="etudiant.php" class="nav-link active" aria-current="page">
				<svg class="bi me-2" width="16" height="16"><use xlink:href="insription"></use></svg>
				Classe
			</a>
			</li>
		</ul>
		<hr>
	</div>
	
	<div class="div2">
	<h1>Entrer une classe</h1>
		<div class="center">
		<form action="insert.php" method="post"> 
			
			<label>identifiant</label> <input type="text" name="identifiant"><br>
			<label>niveau</label> <input type="text" name="niveau"><br>
			<label>filiere</label> <input type="text" name="filiere"><br>
			<label>cycle</label>
			<select name="cycle" >
				<option value="Licence">licence</option>
				<option value="Master">master</option>
				
			</select><br>
			

			<button type="submit" name="submit">submit</button>

		</form>
		</div>

		<?php
		$link = mysqli_connect("localhost", "root", "", "ecole");

		if ($link == false) {
			die("ERROR: Could not connect. "
						.mysqli_connect_error());
		}

		$sql = "SELECT * FROM classe";
		if ($res = mysqli_query($link, $sql)) {
			if (mysqli_num_rows($res) > 0) {
				echo '<table class="table table-dark" >';
				echo "<thead>";
				echo "<tr>";

				echo '<th scope="col">Code</th>';
				echo '<th scope="col">niveau</th>';
				echo '<th scope="col">filiere</th>';
				echo '<th scope="col">cycle</th>';
			
				echo "</tr>";
				echo "</thead>";
				while ($row = mysqli_fetch_array($res)) {
					echo "<tr>";
					echo "<td>".$row['id_cla']."</td>";
					echo "<td>".$row['niveau']."</td>";
					echo "<td>".$row['filiere']."</td>";
					echo "<td>".$row['cycle']."</td>";
				

					echo "</tr>";
				}
				echo "</table>";
				mysqli_free_result($res);
			}
			else {
				echo "No matching records are found.";
			}
		}
		else {
			echo "ERROR: Could not able to execute $sql. "
										.mysqli_error($link);
		}
		mysqli_close($link);
		?>


	</div>

<br>



<body>
</html>