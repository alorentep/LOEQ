<html> 
<head> 

  <title>Calendario de pruebas</title> 

  <!--Hoja de estilos del calendario --> 
  <link rel="stylesheet" type="text/css" media="all" href="css/calendar-green.css" title="win2k-cold-1" /> 

  <!-- librería principal del calendario --> 
 <script type="text/javascript" src="js/calendar.js"></script> 

 <!-- librería para cargar el lenguaje deseado --> 
  <script type="text/javascript" src="js/calendar-es.js"></script> 

  <!-- librería que declara la función Calendar.setup, que ayuda a generar un calendario en unas pocas líneas de código --> 
  <script type="text/javascript" src="js/calendar-setup.js"></script> 

</head> 

<body> 

<!-- formulario con el campo de texto y el botón para lanzar el calendario--> 
<form action="#" method="get"> 
<input type="text" name="date" id="campo_fecha" /> 
<input type="button" id="lanzador" value="..." /> 
</form> 

<!-- script que define y configura el calendario--> 
<script type="text/javascript"> 
   Calendar.setup({ 
    inputField     :    "campo_fecha",     // id del campo de texto 
     ifFormat     :     "%d/%m/%Y",     // formato de la fecha que se escriba en el campo de texto 
     button     :    "lanzador"     // el id del botón que lanzará el calendario 
}); 
</script> 

</body> 
</html>
