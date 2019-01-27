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
<br></br><br></br><br></br><br></br>
		
	
        
    <div class="container">    
            
    <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Eleminar</div>
            </div>  
            <div class="panel-body" >
                <form method="post" action="mod/delete.php">
                    <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />
                            

                    <form  class="form-horizontal" name="formulari1" method="get" action="mod/delete.php">
                        <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />
                        
                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField">Codigo<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_username" maxlength="30" name="codi" value="" placeholder="Inserte nombre" style="margin-bottom: 10px" type="text" />
                            </div>
                            <div class="form-group"> 
                            
                            <div class="controls col-md-8 ">
							<button type="submit" class="btn btn-default">Eleminar</button>
                            </div>
                        </div> 
                        </div>
                </div>
            </div>
        </div>
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