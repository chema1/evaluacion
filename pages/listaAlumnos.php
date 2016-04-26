<?php
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
    <link rel="shortcut icon" href="img/favicon.ico" />

    <title>Evaluaci&oacute;n Online Registrar Tutor</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link src="css/styles.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

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
                <a class="navbar-brand topnav" href="registrar.php">Registrar Tutor</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="listaTutores.php">Lista Tutores</a>
                    </li>
                    <li>
                        <a href="listaAlumnos.php">Lista Alumnos</a>
                    </li>
                    <li>
                        <a href="resultados.php">Resultados</a>
                    </li>
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
    <div class="container" style="clear:both"><br>
       <?php
            mysql_connect('localhost','root','')or die ('Ha fallado la conexión: '.mysql_error());
            mysql_select_db('evaluacion')or die ('Error al seleccionar la Base de Datos: '.mysql_error()); 
            $result4 = mysql_query("select nombre,apellido_paterno,apellido_materno,no_control,carrera,semestre,correo from alumno;");
            $row4 = mysql_fetch_array($result4,MYSQL_NUM);
            $id=$row4[0];
            if($row4[0] != null) {
            echo "<table class='table'>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>No.Control</th>
                    <th>Carrera</th>
                    <th>Semestre</th>
                    <th>Correo</th>
                </tr>
            ";
            do{
            echo "<tr>"; 
            for($i=0; $i<count($row4);$i++){ 
                echo "<td class='active'>".$row4[$i]."</td>";
             }
                 echo '</tr>';
             }while ($row4 = mysql_fetch_array($result4,MYSQL_NUM));
               echo '</table>';
            }
        ?>
    </div>
    
	
    <!-- /.content-section- -->

  
    </center>
    <!-- jQuery -->
    <script src="/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>

</body>

</html>

<?php
}
?>