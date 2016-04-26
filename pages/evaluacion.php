<?php

require '../lib/Connection.simple.php';

session_start();
$u=$_SESSION['no_control'];
$c=$_SESSION['pass'];

if($u == "" || $c == ""){
header('Location: ../index.php');
}
else {    
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Evaluaci&oacute;n Online</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="img/favicon.ico" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<style>
	.pregunta {
		background: orange;
		color: white;
		padding: 15px;
	}
</style>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="#">Evaluaci&oacute;n Online</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../lib/salir.php">Salir</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <br><br><br>
    <!-- Page Content -->
    <div class="container" style="clear:both">
    <!-- div izquierda 
    <div class="izquierda">
        <br>
        <center>
            <img src="img/avatar.png" class="img-responsive circular" />
            <br><br><label><h3 class="title"><i>Bienvenido</i></h3></label><br><br>
            <div class="inf">
                <p><strong>N&uacute;mero de Control</strong></p>
                <p><?php //echo $u  ?></p>
            </div><br>
            <div class="inf">
                <p><strong>N&uacute;mero de Control</strong></p>
                <p><?php //echo $u  ?></p>
            </div><br>
            <div class="inf">
                <p><strong>N&uacute;mero de Control</strong></p>
                <p><?php //echo $u  ?></p>
            </div>
        </center>
    </div>
    <!-- ./ izquierda -->  
    
    <!-- div derecha -->
    <div>
    <form method="post" action="../lib/guardarEncuesta.php">
        <div class="row preguntas-scroll" style="margin-top:0px;">
                 <div class="form-group" style="background:#F8F8F8;padding:20px;">
                    <label style="font-size: 25px; color: #585858;">Explica claramente en que consiste el programa de tutor&iacute;as</label><br>
                    <label class="radio-inline"><input name="p1" type="radio" value="Siempre" checked>Siempre</label>
                    <label class="radio-inline"><input name="p1" type="radio" value="Casi Siempre">Casi Siempre</label>
                    <label class="radio-inline"><input name="p1" type="radio" value="Aveces">Aveces</label>
                    <label class="radio-inline"><input name="p1" type="radio" value="Nunca">Nunca</label>
									  <label class="radio-inline"><input name="p1" type="radio" value="Casi Nunca">Casi Nunca</label>
                </div>
                <div class="form-group" style="background:#F8F8F8;padding:20px;">
                    <label style="font-size: 25px; color: #585858;">Genera confianza y buena comunicaci&oacute;n con todo el grupo</label><br>
                    <label class="radio-inline"><input name="p2" type="radio" value="Siempre" checked>Siempre</label>
                    <label class="radio-inline"><input name="p2" type="radio" value="Casi Siempre">Casi Siempre</label>
                    <label class="radio-inline"><input name="p2" type="radio" value="Aveces">Aveces</label>
                    <label class="radio-inline"><input name="p2" type="radio" value="Casi Nunca">Nunca</label>
										<label class="radio-inline"><input name="p2" type="radio" value="Nunca">Casi Nunca</label>
                </div>
                <div class="form-group" style="background:#F8F8F8;padding:20px;">
                    <label style="font-size: 25px; color: #585858;">Hace agradable la sesi&oacute;n de Tutoría</label><br>
                    <label class="radio-inline"><input name="p3" type="radio" value="Siempre" checked>Siempre</label>
                    <label class="radio-inline"><input name="p3" type="radio" value="Casi Siempre">Casi Siempre</label>
                    <label class="radio-inline"><input name="p3" type="radio" value="Aveces">Aveces</label>
                    <label class="radio-inline"><input name="p3" type="radio" value="Casi Nunca">Nunca</label>
										<label class="radio-inline"><input name="p3" type="radio" value="Casi Nunca">Casi Nunca</label>
                </div>
                <div class="form-group" style="background:#F8F8F8;padding:20px;">
                    <label style="font-size: 25px; color: #585858;">Escucha con atenci&oacute;n todo lo que se le solicita</label><br>
                    <label class="radio-inline"><input name="p4" type="radio" value="Siempre" checked>Siempre</label>
                    <label class="radio-inline"><input name="p4" type="radio" value="Casi Siempre">Casi Siempre</label>
                    <label class="radio-inline"><input name="p4" type="radio" value="Aveces">Aveces</label>
                    <label class="radio-inline"><input name="p4" type="radio" value="Casi Nunca">Nunca</label>
										<label class="radio-inline"><input name="p4" type="radio" value="Casi Nunca">Casi Nunca</label>
                </div>
                <div class="form-group" style="background:#F8F8F8;padding:20px;">
                    <label style="font-size: 25px; color: #585858;">Se muestra emp&aacute;tico con las consultas que se le hacen</label><br>
                    <label class="radio-inline"><input name="p5" type="radio" value="Siempre" checked>Siempre</label>
                    <label class="radio-inline"><input name="p5" type="radio" value="Casi Siempre">Casi Siempre</label>
                    <label class="radio-inline"><input name="p5" type="radio" value="Aveces">Aveces</label>
                    <label class="radio-inline"><input name="p5" type="radio" value="Casi Nunca">Nunca</label>
										<label class="radio-inline"><input name="p5" type="radio" value="Casi Nunca">Casi Nunca</label>
                </div>
                <div class="form-group" style="background:#F8F8F8;padding:20px;">
                    <label style="font-size: 25px; color: #585858;">Da informaci&oacute;n necesaria sobre el programa de tutoría</label><br>
                    <label class="radio-inline"><input name="p6" type="radio" value="Siempre" checked>Siempre</label>
                    <label class="radio-inline"><input name="p6" type="radio" value="Casi Siempre">Casi Siempre</label>
                    <label class="radio-inline"><input name="p6" type="radio" value="Aveces">Aveces</label>
                    <label class="radio-inline"><input name="p6" type="radio" value="Casi Nunca">Nunca</label>
					<label class="radio-inline"><input name="p6" type="radio" value="Casi Nunca">Casi Nunca</label>
                </div>
                <div class="form-group" style="background:#F8F8F8;padding:20px;">
                    <label style="font-size: 25px; color: #585858;">Provee de la informaci&oacute;n adecuada para realizar trámites escolares</label><br>
                    <label class="radio-inline"><input name="p7" type="radio" value="Siempre" checked>Siempre</label>
                    <label class="radio-inline"><input name="p7" type="radio" value="Casi Siempre">Casi Siempre</label>
                    <label class="radio-inline"><input name="p7" type="radio" value="Aveces">Aveces</label>
                    <label class="radio-inline"><input name="p7" type="radio" value="Casi Nunca">Nunca</label>
										<label class="radio-inline"><input name="p7" type="radio" value="Casi Nunca">Casi Nunca</label>
                </div>
				<div class="form-group" style="background:#F8F8F8;padding:20px;">
					<label style="font-size: 25px; color: #585858;">Proporciona informaci&oacute;n suficiente sobre los apoyos que requiere el estudiante </label><br>
					<label class="radio-inline"><input name="p8" type="radio" value="Siempre" checked>Siempre</label>
					<label class="radio-inline"><input name="p8" type="radio" value="Casi Siempre">Casi Siempre</label>
					<label class="radio-inline"><input name="p8" type="radio" value="Aveces">Aveces</label>
					<label class="radio-inline"><input name="p8" type="radio" value="Casi Nunca">Nunca</label>
					<label class="radio-inline"><input name="p8" type="radio" value="Casi Nunca">Casi Nunca</label>
				</div>
				<div class="form-group" style="background:#F8F8F8;padding:20px;">
					<label style="font-size: 25px; color: #585858;">Da informaci&oacute;n y orientaci&oacute;n importante que apoye el &aacute;rea personal del tutorado </label><br>
					<label class="radio-inline"><input name="p9" type="radio" value="Siempre" checked>Siempre</label>
					<label class="radio-inline"><input name="p9" type="radio" value="Casi Siempre">Casi Siempre</label>
					<label class="radio-inline"><input name="p9" type="radio" value="Aveces">Aveces</label>
					<label class="radio-inline"><input name="p9" type="radio" value="Casi Nunca">Nunca</label>
					<label class="radio-inline"><input name="p9" type="radio" value="Casi Nunca">Casi Nunca</label>
				</div>
				<div class="form-group" style="background:#F8F8F8;padding:20px;">
					<label style="font-size: 25px; color: #585858;">Informa con precisi&oacute;n sobre las asesor&iacute;as acad&eacute;micas que ofrecerla instituci&oacute;n </label><br>
					<label class="radio-inline"><input name="p10" type="radio" value="Siempre" checked>Siempre</label>
					<label class="radio-inline"><input name="p10" type="radio" value="Casi Siempre">Casi Siempre</label>
					<label class="radio-inline"><input name="p10" type="radio" value="Aveces">Aveces</label>
					<label class="radio-inline"><input name="p10" type="radio" value="Casi Nunca">Nunca</label>
					<label class="radio-inline"><input name="p10" type="radio" value="Casi Nunca">Casi Nunca</label>
					</div>
				<div class="form-group" style="background:#F8F8F8;padding:20px;">
                    <label style="font-size: 25px; color: #585858;">Explica claramente la realizaci&oacute;n de las actividades correspondientes de tutor&iacute;a </label><br>
                    <label class="radio-inline"><input name="p11" type="radio" value="Siempre" checked>Siempre</label>
                    <label class="radio-inline"><input name="p11" type="radio" value="Casi Siempre">Casi Siempre</label>
                    <label class="radio-inline"><input name="p11" type="radio" value="Aveces">Aveces</label>
                    <label class="radio-inline"><input name="p11" type="radio" value="Casi Nunca">Nunca</label>
										<label class="radio-inline"><input name="p11" type="radio" value="Casi Nunca">Casi Nunca</label>
                </div>
                <div class="form-group" style="background:#F8F8F8;padding:20px;">
                    <label style="font-size: 25px; color: #585858;">Muestra habilidades para relacionarse con los estudiantes</label><br>
                    <label class="radio-inline"><input name="p12" type="radio" value="Siempre" checked>Siempre</label>
                    <label class="radio-inline"><input name="p12" type="radio" value="Casi Siempre">Casi Siempre</label>
                    <label class="radio-inline"><input name="p12" type="radio" value="Aveces">Aveces</label>
                    <label class="radio-inline"><input name="p12" type="radio" value="Casi Nunca">Nunca</label>
										<label class="radio-inline"><input name="p12" type="radio" value="Casi Nunca">Casi Nunca</label>
                </div>
                <div class="form-group" style="background:#F8F8F8;padding:20px;">
                    <label style="font-size: 25px; color: #585858;">Atiende con amabilidad cada que se le necesita </label><br>
                    <label class="radio-inline"><input name="p13" type="radio" value="Siempre" checked>Siempre</label>
                    <label class="radio-inline"><input name="p13" type="radio" value="Casi Siempre">Casi Siempre</label>
                    <label class="radio-inline"><input name="p13" type="radio" value="Aveces">Aveces</label>
                    <label class="radio-inline"><input name="p13" type="radio" value="Casi Nunca">Nunca</label>
										<label class="radio-inline"><input name="p13" type="radio" value="Casi Nunca">Casi Nunca</label>
                </div>
				<div class="form-group" style="background:#F8F8F8;padding:20px;">
                    <label style="font-size: 25px; color: #585858;">Entreg&oacute; su horario y localizaci&oacute;n desde el inicio del semestre</label><br>
                    <label class="radio-inline"><input name="p14" type="radio" value="Siempre" checked>Siempre</label>
                    <label class="radio-inline"><input name="p14" type="radio" value="Casi Siempre">Casi Siempre</label>
                    <label class="radio-inline"><input name="p14" type="radio" value="Aveces">Aveces</label>
                    <label class="radio-inline"><input name="p14" type="radio" value="Casi Nunca">Nunca</label>
										<label class="radio-inline"><input name="p14" type="radio" value="Casi Nunca">Casi Nunca</label>
                </div>
				<div class="form-group" style="background:#F8F8F8;padding:20px;">
                    <label style="font-size: 25px; color: #585858;">Realiza su funci&oacute;n tutorial con disponibilidad y calidad</label><br>
                    <label class="radio-inline"><input name="p15" type="radio" value="Siempre" checked>Siempre</label>
                    <label class="radio-inline"><input name="p15" type="radio" value="Casi Siempre">Casi Siempre</label>
                    <label class="radio-inline"><input name="p15" type="radio" value="Aveces">Aveces</label>
                    <label class="radio-inline"><input name="p15" type="radio" value="Casi Nunca">Nunca</label>
										<label class="radio-inline"><input name="p15" type="radio" value="Casi Nunca">Casi Nunca</label>
                </div>
				<div class="form-group" style="background:#F8F8F8;padding:20px;">
                    <label style="font-size: 25px; color: #585858;">Le da seguimiento a los tutorados que ha canalizado</label><br>
                    <label class="radio-inline"><input name="p16" type="radio" value="Siempre" checked>Siempre</label>
                    <label class="radio-inline"><input name="p16" type="radio" value="Casi Siempre">Casi Siempre</label>
                    <label class="radio-inline"><input name="p16" type="radio" value="Aveces">Aveces</label>
                    <label class="radio-inline"><input name="p16" type="radio" value="Casi Nunca">Nunca</label>
										<label class="radio-inline"><input name="p16" type="radio" value="Casi Nunca">Casi Nunca</label>
                </div>
				<div class="form-group" style="background:#F8F8F8;padding:20px;">
                    <label style="font-size: 25px; color: #585858;">Desde un principio da a conocer sus horarios y localizaci&oacute;n</label><br>
                    <label class="radio-inline"><input name="p17" type="radio" value="Siempre" checked>Siempre</label>
                    <label class="radio-inline"><input name="p17" type="radio" value="Casi Siempre">Casi Siempre</label>
                    <label class="radio-inline"><input name="p17" type="radio" value="Aveces">Aveces</label>
                    <label class="radio-inline"><input name="p17" type="radio" value="Casi Nunca">Nunca</label>
										<label class="radio-inline"><input name="p17" type="radio" value="Casi Nunca">Casi Nunca</label>
                </div>
				<div class="form-group" style="background:#F8F8F8;padding:20px;">
                    <label style="font-size: 25px; color: #585858;">Se le puede localizar en cualquier momento</label><br>
                    <label class="radio-inline"><input name="p18" type="radio" value="Siempre" checked>Siempre</label>
                    <label class="radio-inline"><input name="p18" type="radio" value="Casi Siempre">Casi Siempre</label>
                    <label class="radio-inline"><input name="p18" type="radio" value="Aveces">Aveces</label>
                    <label class="radio-inline"><input name="p18" type="radio" value="Casi Nunca">Nunca</label>
										<label class="radio-inline"><input name="p18" type="radio" value="Casi Nunca">Casi Nunca</label>
                </div>
				<hr>
                <input type="submit" style="width:200px; height: 40px" class="btn btn-default btn-right" value="Aceptar" />
				<br><br><br><br>
        </div>
    </form>
    </div>
    <!-- ./ derecha -->
    </div>
	
    <!-- /.content-section- -->

    <!-- Footer
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="copyright text-muted small">Copyright &copy; Evaluaci&oacute;n Online <?php date('L'); ?>  All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
    -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php
     }
?>