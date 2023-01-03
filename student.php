<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="esquisse.css">
    <style>
        html,
body,
.intro {
  height: 100%;
}

table td,
table th {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
}

.card {
  border-radius: .5rem;
}

.table-scroll {
  border-radius: .5rem;
}
    </style>
    <title>liste des étudiants</title>
</head>
<body>

    <div class="parent">
        <div class="div1">
        
            <a href="https://getbootstrap.com/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                <span class="fs-4">Activite</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                <a href="index.php" class="nav-link link-dark">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                    Inscription
                </a>
                </li>
                <li class="nav-item">
                <a href="student.php" class="nav-link active" aria-current="page">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="insription"></use></svg>
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
        <div class="div2">

        <section class="intro">
        <div class="bg-image h-100" style="background-color: #f5f7fa;">
          <div class="mask d-flex align-items-center h-100">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-12">
                  <div class="card shadow-2-strong">
                    <div class="card-body p-0">
                      <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height: 700px">
                <?php
                    $link = mysqli_connect("localhost", "root", "", "ecole");

                    if ($link == false) {
                    die("ERROR: Could not connect. "
                                .mysqli_connect_error());
                    }

                    $sql = "SELECT * FROM etudiant";//to do
                    if ($res = mysqli_query($link, $sql)) {
                    if (mysqli_num_rows($res) > 0) {
                        echo "<table>";
                        echo "<tr>";
                        echo "<th>Matricule</th>";
                        echo "<th>Firstname</th>";
                        echo "<th>Lastname</th>";
                        echo "<th>addresse</th>";
                        echo "<th>naissance</th>";
                        echo "<th>email</th>";
                        echo "<th>classe</th>";
                        echo "</tr>";
                        while ($row = mysqli_fetch_array($res)) {
                            
                            echo "<tr>";
                            echo "<td>".$row['matricule']."</td>";
                            echo "<td>".$row['nom']."</td>";
                            echo "<td>".$row['prenom']."</td>";
                            echo "<td>".$row['addresse']."</td>";
                            echo "<td>".$row['anniv']."</td>";
                            echo "<td>".$row['email']."</td>";
                            echo "<td>".$row['id_cla']."</td>";

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
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
        </div>
    </div>
    <script type="text/javascript" src="bootstrap.min.js"></script>

</body>
</html>