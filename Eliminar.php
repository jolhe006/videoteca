<html>
<head>
<title>Agenda - Eliminar</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
body {
	background-color: #000;
}
body,td,th {
	font-size: 100%;
	color: #FFF;
}
</style>
</head>

<body>
<?php
    
		$servidor= "127.0.0.1";
		$user= "root";
		$password= "agguelosss_x";
		$base= "Agenda";
		$conexion = mysql_connect($servidor,$user,$password) or die("Problemas en la conexion");
		mysql_select_db($base,$conexion) or die("Problemas en la seleccion de la base de datos");
		$sqlEliminar= "Delete from contactos where id_contactos = '$_POST[idcontactoEliminar]'";
?>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <th colspan="3"><img src="baner3.png" width="500" height="150" alt="AGENDA"></th>
  </tr>
  <tr>
    <td colspan="3" bgcolor="#000000" align="center">
    	<input type="submit" value="Inicio" align="center" onClick="window.location='Index.html'">
      	<input type="submit" value="Agregar" align="center" onClick="window.location='Agregar.html'">
      	<input type="submit" value="Buscar" align="center" onClick="window.location='Buscar.html'">
      	<input type="submit" value="Eliminar" align="center"onClick="window.location='Eliminar.html'">
      	<input type="submit" value="Modificar" align="center"onClick="window.location='Modificar.html'">
    	<input type="submit" value="Nosotros" align="center"onClick="window.location='Nosotros.html'">
  	</td>
  </tr>
  <tr>
    <td width="15%" bgcolor="#000000">&nbsp;</td>
    <td width="70%" height="150" bgcolor="#000000" align="top">
    <div align="top">
	  <?php
	  	
		//Se elimina el contacto
		
		if(mysql_query($sqlEliminar,$conexion) or die("Problemas al eliminar el contacto".mysql_error()))
			echo "<div style='text-align:center; font-family:Verdana, Geneva, sans-serif; font-style:oblique;'>Contacto Eliminado Correctamente</div>";
		else
			echo "<div style='text-align:center; font-family:Verdana, Geneva, sans-serif; font-style:oblique;'>No se eliminó el contacto.</div>";
	?>
    <br>
    <br>   
    </div>
    </td>
    <td width="15%" align="top">&nbsp;</td>
  </tr>
</table>
<?php mysql_close($conexion);?>
</body>
</html>
