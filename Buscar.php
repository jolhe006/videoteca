<html>
<head>
<title>Agenda - Buscar</title>
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
<script language="javascript">
function mostrar()
{
	alert("mensaje de prueba");
}


</script>
</head>

<body>
<?php
    
		$servidor= "127.0.0.1";
		$user= "root";
		$password= "toor";
		$base= "videoteca";
		$conexion = mysql_connect($servidor,$user,$password) or die("Problemas en la conexion");
		mysql_select_db($base,$conexion) or die("Problemas en la seleccion de la base de datos");
		$sql= "Select * from movies where titulo like '%$_POST[CAD]%' OR actores like '%$_POST[CAD]%' OR anno like '%$_POST[CAD]%' OR director like '%$_POST[CAD]%' OR estudio like '%$_POST[CAD]%' OR genero like '%$_POST[CAD]%' OR idioma like '%$_POST[CAD]%' OR formato like '%$_POST[CAD]%' OR ubicacion like '%$_POST[CAD]%' OR director like '%$_POST[CAD]%'";
		$coincidencias=mysql_query($sql,$conexion) or die("Problemas en sql: ".mysql_error());
?>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <th colspan="3"><img src="baner3.png" width="500" height="150" alt="VIDEOTECA"></th>
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
    <td onClick="mostrar()" width="15%" bgcolor="#000000">&nbsp;</td>
   <td valign="top" height="150" bgcolor="#000000"><div align="center" style="color:white; font-family:Verdana, Geneva, sans-serif; font-size:14px;">
      <form method="post" action="Buscar.php">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>
          <input name="CAD" type="text" size="50">
          <input type="submit" value="Buscar" align="top" >
          <?php
	  	//Para verificar si el usuario introdujo algún valor o no
          if($_POST[CAD]=="")
		{
			echo "<br><table width='100%' border='0' cellspacing='0' cellpadding='0'  style='font-family:Verdana, Geneva, sans-serif'>";
			echo "<p align='center'>No introdujo ningún criterio de búsqueda.<br>Se muestran todos los registros.</p>";
			echo "</table><br><br>"; 
		}?>
        </p>
      </form>
    </div></td>
    <td width="15%" align="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="15%" bgcolor="#000000">&nbsp;</td>
   <td valign="top" height="150" bgcolor="#000000"><div align="top">
	  <?php
	  	//Para verificar si el usuario introdujo algún valor o no  	

		if(mysql_fetch_array($coincidencias)==null)
		{
			//Si no se encontraron registros
			echo "<div style='text-align:center; font-family:Verdana, Geneva, sans-serif; font-style:oblique;'>No se encontraron datos.</div>";
		}
		else
		{
			//Si se encontraron registros, se procede a imprimirlos
			echo "<table border='1' bordercolor='white' style='font-family:Verdana, Geneva, sans-serif; font-size:12px;'>";
			echo "<th><div align='left'>Pelicula</div></th>";
			echo "<th><div align='left'>Actores</div></th>";
			echo "<th><div align='left'>Año</div></th>";
			echo "<th><div align='left'>Director</div></th>";
			echo "<th><div align='left'>Estudio</div></th>";
			echo "<th><div align='left'>Idioma</div></th>";
			echo "<th><div align='left'>Formato</div></th>";
			echo "<th><div align='left'>Ubicacion</div></th>";
			echo "<th><div align='left'>Categoria</div></th></tr>";
			
			
			//Ciclo de impresión de registros
			$coincidencias=mysql_query($sql,$conexion) or die("Problemas en sql: ".mysql_error());
			echo "";
			while($reg = mysql_fetch_array($coincidencias))
			{
				//Se imprime el registro con los datos del contacto
				echo "<tr onClick='mostrar()'>";
				//"<form name=ficha method=post action=Buscar.php>";				
				echo "<td>".$reg['titulo']."</td>";
				echo "<td>".$reg['actores']."</td>";
				echo "<td>".$reg['anno']."</td>";
				echo "<td>".$reg['director']."</td>";
				echo "<td>".$reg['estudio']."</td>";
				echo "<td>".$reg['idioma']."</td>";
				echo "<td>".$reg['formato']."</td>";
				echo "<td>".$reg['ubicacion']."</td>";
				echo "<td>".$reg['categoria']."</td>";
				//echo "</form>";
				echo "</tr>";
			}
			echo "";
			echo "</form>";
			//Se imprime el final de la tabla
			echo "</table>";
			
		}
	?>
    </div></td>
    <td width="15%" align="top">&nbsp;</td>
  </tr>
  
</table>
<?php mysql_close($conexion);?>
</body>
</html>
