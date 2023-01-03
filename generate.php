<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="esquisse.css">
    <title>releve</title>
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
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                Inscription
            </a>
            </li>
            <li>
            <a href="note.php" class="nav-link link-dark">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                Note
            </a>
            </li>
            <li>
            <a href="generate.php" class="nav-link active" aria-current="page">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="insription"></use></svg>
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
            <form action="releve.php" method="get">
            <label>matricule<label>
            <input type="text" name="matricule">
            <input type="submit" value="submit" >
          </form>
                    
        </div>
       
</body>


</html>