<?php
session_start();

$_SESSION = array();

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Evaluaci&oacute;n Online</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="pages/css/bootstrap.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="pages/img/favicon.ico" />
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="pages/css/styles.css" rel="stylesheet">
	</head>
	<body>
<!--login modal-->
<div id="loginModal" class="show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>-->
          <label class="title-1"><img src="pages/img/tutorias.png" width="50px" height="50px">&nbsp;   - Instituto Tecnol&oacute;gico Superior de Lagos de Moreno -</label>
          <center><h6><i style="color:gray;">"El toque de un maestro transforma vidas, y estas vidas transforman naciones"</i></h6></center>
      </div>
      <div class="modal-body">
          <form class="form col-md-12 center-block" method="post" action="lib/validar.php">
            <div class="form-group">
              <input type="text" class="form-control input-lg" name="usuario" minlength=5 placeholder="N&uacute;mero de Control:" required />
            </div>
            <div class="form-group">
              <input type="password" class="form-control input-lg" name="pass" minlength=8 placeholder="Contrase&ntilde;a:" required />
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary btn-lg btn-block btn-border" value="Aceptar"><br>
              <button type="button" class="btn btn-default btn-border" data-toggle="modal" data-target="#myModal">Registrase</button>
            </div>
          </form>
      </div>
      
      <div class="modal-footer">
          <div class="col-md-12">
          <!--<button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>-->
		  </div>	
      </div>
  </div>
  </div>
    <br><br><br>
    <!-- Footer -->
    <center>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="copyright text-muted small">Copyright &copy; Evaluaci&oacute;n Online ITSD <br>
                        All Rights Reserved<br>
                        <a href="#"><i>Manuel Cervantes</i></a></p>
                    
                </div>
            </div>
        </div>
    </footer>
    </center>
      
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reg&iacute;strate</h4>
      </div>
      <div class="modal-body">
          
          <form method="post" action="lib/guardarAlumno.php">
          <div class="form-group">
            <input type="text" class="form-control" name="nombre" placeholder="Nombre:" required />
          </div>
          <div class="form-group">
              <input type="text" class="form-control" name="apellido_paterno" placeholder="Apellido Paterno:" required /> 
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="apellido_materno" placeholder="Apellido Materno:" required />
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="numero_control" placeholder="N&uacute;mero de Control:" required />    
          </div>
          <div class="form-group">
            <select class="form-control" name="carrera">
              <option disable selected>Carrera</option>
              <option name="carrera" value="ing electromecanica">Ing. en Electromec&aacute;nica</option>
              <option name="carrera" value="ing industrial">Ing. Industrial</option>
              <option name="carrera" value="ing sistemas">Ing. en Sistemas Computacionales</option>
              <option name="carrera" value="ing gestion">Ing. en Gesti&oacute;n Empresarial</option>
              <option name="carrera" value="ing civil">Ing. Civil</option>
              <option name="carrera" value="ing automotriz">Ing. en Sistemas Automotrices</option>
            </select>    
          </div>
          <div class="form-group">
            <select class="form-control" name="semestre">
                <option disabled selected>Grado</option>
                <option name="semestre" value="1">1</option>
                <option name="semestre" value="2">2</option>
                <option name="semestre" value="3">3</option>
                <option name="semestre" value="4">4</option>
                <option name="semestre" value="5">5</option>
                <option name="semestre" value="6">6</option>
                <option name="semestre" value="7">7</option>
                <option name="semestre" value="8">8</option>
                <option name="semestre" value="9">9</option>
                <option name="semestre" value="10">10</option>
              </select> 
            </div>
						<!-- added grupo-->
            <div class="form-group">
            <select class="form-control" name="grupo">
                <option disabled selected>Grupo</option>
								<option name="grupo" value="A">A</option>
								<option name="grupo" value="B">B</option>
								<option name="grupo" value="C">C</option>
								<option name="grupo" value="D">D</option>
								<option name="grupo" value="E">E</option>
								<option name="grupo" value="F">F</option>
            </select>
          	</div>
						<!-- ./ grupo-->
          <div class="form-group">
            <input type="email" class="form-control" name="correo" placeholder="Correo:" required /> 
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="pass" minlength=8 placeholder="Contrase&ntilde;a:" required />    
          </div>
              <input type="submit" class="btn btn-primary" value="Aceptar" />
          </form>
      
      </div>
      <div class="modal-footer">
        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
      </div>
    </div>
      <!-- ./end modal -->
  </div>
</div>
    <!-- End Modal -->
    
</div>
        
      
        
        
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="pages/js/bootstrap.min.js"></script>
	</body>
</html>