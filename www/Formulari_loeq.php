<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ca" lang="ca">

<head>
	<title>Reguistre de LOEQ</title>
	<link rel="shortcut icon" type="image/jpg" href="LOEQ.jpg" />
	<link href="formulari.css" rel="stylesheet" type="text/css" />
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.22" />
</head>

<body>
    
    <?php
        if (isset($_POST['submit'])) {
        $usuari = $_POST['usuari'];
        $password = $_POST['password'];
        $nom = $_POST['nom'];
        $llinatge1 = $_POST['llinatge1'];
        $llinatge2 = $_POST['llinatge2'];
        echo "nom: $nom llinatge1: $llinatge1<br>";
        $output_form = false;
        
        if (empty($usuari) || empty($password)||empty($nom)||empty($llinatge1)||empty($llinatge2)){
            ?>
            <h2>Informació incompleta</h2>
            
            <?php
        }else{
            $output_form=true;
            }
            
        if ($output_form){
            $dbc = mysqli_connect('172.30.10.172', 'guillem', 'guillem', 'sirius_db')
        or die('Error connecting to MySQL server.');
        $query = "insert into users (usuari,password,nom,llinatge1,llinatge2) 
                    values ('$usuari','$password','$nom','$llinatge1','$llinatge2');";
        echo "___".$query."<br/>";
        $result = mysqli_query($dbc, $query)
        or die('Error querying database.');
        mysqli_close($dbc);
            
            }
    }
        
    ?>

	<h1>Registre pels futurs usuaris de LOEQ</h1>

<form method="post" action="formulari.php">
	<div>
	<fieldset>
	<legend>Datos de Conexion</legend><br>
<label for="usuario">Nombre de usuario:</label>
<input type="text" name="nombre" size="25" maxlength="50"><br><br>
<label for="password">Contraseña:</label>
<input type="password" name="password" value="" maxlength="8"/><br><br>
<label for="password">Repita la contraseña:</label>
<input type="password" name="password" value="" maxlength="8"/>
	</fieldset>
	</div>
	<fieldset>
	<legend>Datos Personales</legend><br>
<label for="nombre">Nombre:</label>
<input type="text" name="nombre" size="25" maxlength="50"><br><br>
<label for="apellido_1">Apellidos 1:</label>
<input type="text" name="apellidos 1" size="20" maxlength="50"><br><br>
<label for="apellidos_2">Apellidos 2:</label>
<input type="text" name="apellidos 2" size="20" maxlength="50"><br><br>
<label for="correo_electronico">Correo electrónico:</label>
<input type="text" value="exemple@correu.com" name="correo" size="25" maxlength="100"><br><br>

<input name="suscribir" type="checkbox" value="suscribir" checked="checked"/> Suscribirme al boletín de novedades
</fieldset>
<div align="center">
<input type="submit" value="Guardar cambios"/>
</div>
<div align="center">
<input type="Reset" value="Borrar los datos introducidos"/>
</div>


</form>

</body>
</html>
