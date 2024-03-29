<html lang="es">
    
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>A.W.</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
  </head>
    
  <body>
    <div class="navbar-wrapper">
      <div class="container">
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">Aplicaciones Web A.W. </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                
				<li class="active"><a href="index.php">Home</a></li>
                  
                  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mostrar<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="mostrar1.php">Mostrar1</a></li>
                    <li><a href="mostrar2.php">Mostrar2</a></li>
                  </ul>
                </li>
                  
                <li><a href="insertar.php">Insertar</a></li>
                  
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Modificar<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="form-nom.php">Nombre</a></li>
                    <li><a href="form-localitat.php">Localidad</a></li>
                    <li><a href="form-web.php">WEB</a></li>
                    <li><a href="form-escut.php">Escudo</a></li>
                  </ul>
                </li>
                  
				<li><a href="eleminar.php">Eliminar</a></li>
                  
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
   
	  <hr class="featurette-divider">
      <div class="container">
		<?php
			$servidor = "localhost";
			$usuari = "root";
			$password = "";
			$db = "futbol";

			$conn = new mysqli($servidor, $usuari, $password, $db);
			$conn->set_charset("utf8");
		
			if ($conn->connect_error) {
				die("Connexió KO: " . $conn->connect_error);
			} 
			else {

				$sql = "SELECT codi, nom, escut, web, localitat FROM equips ORDER BY nom ASC";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					
					echo "<table class=\"table table-striped\">";
					echo "<tr><th>codi</th><th>nom</th><th>localitat</th><th>web</th><th>escut</th></tr>";
					while($row = $result->fetch_assoc()) {
					echo "<tr> <td>". $row["codi"]. "</td> ";	
						 
                         if ($row["nom"]== null){
							echo "<td> <p>No hay nombre</p> </td>";
						}else{
							echo "<td>". $row["nom"]. "</td>";
						}
                        
                        if ($row["localitat"]== null){
							echo "<td> <p>No hay localidad</p> </td>";
						}else{
							echo "<td>". $row["localitat"]. "</td>";
						}
                        
                        if ($row["web"]== null){
							echo "<td> <p>No hay web</p> </td>";
						}else{
							echo "<td> <a target=”_blank” href=\"".$row['web']."\">WEB</a></td>";
						}
							
						if ($row["escut"]== null){
							echo "<td> <p>No hay imagen</p> </td>";
						}else{
							echo "<td> <img src=\"".$row['escut']."\"> </td>";
						}
					
				}
				echo "</table>";
			}
			}
		?>
      </div>
	
    <footer>
        <br></br>
        <p class="pull-right"><a href="#">Volver Ariva</a></p>
        <p>Aplicaciones Web A.W. IES Emili Darder</p>
      </footer>

    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
