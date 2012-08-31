<html>
<head>
<title>Agenda - Modificar</title>
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
		$password= "toor";
		$base= "Videoteca";
		$conexion = mysql_connect($servidor,$user,$password) or die("Problemas en la conexion");
		mysql_select_db($base,$conexion) or die("Problemas en la seleccion de la base de datos");
		$sql= "Select * from movies where Nombre like '%".$_GET[criterioBusqueda]."%' OR ApPat like '%".$_GET[criterioBusqueda]."%' OR ApMat like '%".$_GET[criterioBusqueda]."%' OR correo like '%".$_GET[criterioBusqueda]."%'";
		$coincidencias=mysql_query($sql,$conexion) or die("Problemas en sql".mysql_error());
?>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <th colspan="3"><img src="baner3.png" width="500" height="150" alt="AGENDA"></th>
  </tr>
 <tr>
    <td colspan="3" bgcolor="#000000" align="center">
    	<p>
        <input type="submit" value="Buscar" align="center" onClick="window.location='Index.html'">
        <input type="submit" value="Modificar" align="center"onClick="window.location='Modificar.html'">
        <input type="submit" value="Agregar" align="center" onClick="window.location='Agregar.html'">
        <input type="submit" value="Eliminar" align="center"onclick="window.location='Eliminar.html'">
      </p>
  	</td>
  </tr>
  <tr>
    <td width="15%" bgcolor="#000000">&nbsp;</td>
    <td width="70%" height="150" bgcolor="#000000" align="top">
    <div align="top" style="color:white; font-family:Verdana, Geneva, sans-serif; font-size:14px; text-align:center;">
	  <?php
	  	//Para verificar si el usuario introdujo algún valor o no
	  	if($_GET[criterioBusqueda]=="")
		{
			echo "<br><table width='100%' border='0' cellspacing='0' cellpadding='0'  style='font-family:Verdana, Geneva, sans-serif'>";
			echo "<tr><td><p align='center'>No introdujo ningún criterio de búsqueda.<br>Se muestran todos los registros.</p></td></tr>";
			echo "</table><br><br>";
		}

		if(mysql_fetch_array($coincidencias)==null)
		{
			//Si no se encontraron registros
			echo "<div style='text-align:center; font-family:Verdana, Geneva, sans-serif; font-style:oblique;'>No se encontraron datos.</div>";
		}
		else
		{
			//Si se encontraron registros, se procede a imprimirlos
			echo "<br><br><table width='100%' border='1' bordercolor='white' style='font-family:Verdana, Geneva, sans-serif; font-size:12px;'>";
			echo "<tr><th width='10%'><div align='left'>Id</div></th>";
			echo "<th width='30%'><div align='left'>Nombre</div></th>";
			echo "<th width='30%'><div align='left'>Direccion</div></th>";
			echo "<th width='15%'><div align='left'>Telefono</div></th>";
			echo "<th width='15%'><div align='left'>Correo</div></th></tr>";
			
			
			//Ciclo de impresión de registros
			$coincidencias=mysql_query($sql,$conexion) or die("Problemas en sql".mysql_error());
			while($reg = mysql_fetch_array($coincidencias))
			{
				//Se imprime el registro con los datos del contacto
				echo "<tr>";
				echo "<td>".$reg['id_contactos']."</td>";
				echo "<td>".$reg['Nombre']." ".$reg['ApPat']." ".$reg['ApMat']."</td>";
				echo "<td>".$reg['Direccion']."</td>";
				echo "<td>".$reg['telefono']."</td>";
				echo "<td>".$reg['correo']."</td>";
				echo "</tr>";
			}
			
			//Se imprime el final de la tabla
			echo "</table>";
			
			//Se imprime un combo con los registros encontrados para que el usuario seleccione el que desea eliminar y un botón de 
			//confirmación, todo dentro de un formulario
			echo "<form method='post' action='Modificar.php'>";
			echo "Seleccione el Conacto a Modificar<br><br><select name='idcontactoMod'>";
			
				//Se manda a llamar otra vez la consulta a la BD
				$coincidencias=mysql_query($sql,$conexion) or die("Problemas en sql".mysql_error());
				
				while($reg = mysql_fetch_array($coincidencias))
				{
					echo "<option value=".$reg['id_contactos'].">".$reg['id_contactos'].".- ".$reg['Nombre']." ".$reg['ApPat']." ".$reg['ApMat'];
				}
				
			echo "</select><br><br>";
			echo "<input type='submit' value='Modificar' align='center'>";
			echo "</form>";
			
		}
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
