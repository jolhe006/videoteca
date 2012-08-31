<html>
<head>
<title>Agenda - Agregar</title>
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
<?php

$servidor= "127.0.0.1";
$user= "root";
$password= "toor";
$base= "videoteca";
$conexion = mysql_connect($servidor,$user,$password) or die("Problemas en la conexion");
mysql_select_db($base,$conexion) or die("Problemas en la seleccion de la base de datos");

//$imagen = addslashes(fread(fopen($imagen, "r"), filesize($imagen)));
	
$sql= "insert into movies(titulo, actores, anno, director, estudio, genero, idioma, formato, ubicacion, categoria, portada) values('$_POST[titulo]','$_POST[actores]','$_POST[año]','$_POST[director]','$_POST[estudio]','$_POST[genero]','$_POST[idioma]','$_POST[formato]','$_POST[ubicacion]','$_POST[categoria]','$imagen')";

mysql_query($sql,$conexion) or die("Problemas en sql: ".mysql_error());
mysql_close($conexion);
?>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <th colspan="3" scope="col"><img src="baner3.png" width="500" height="150" alt="VIDEOTECA"></th>
  </tr>
  <tr>
    <th width="25%" bgcolor="#000000" scope="row">&nbsp;</th>
    <td width="50%"><div align="center">
      <p>
        <input type="submit" value="Buscar" align="center" onClick="window.location='Index.html'">
        <input type="submit" value="Modificar" align="center"onClick="window.location='Modificar.html'">
        <input type="submit" value="Agregar" align="center" >
        <input type="submit" value="Eliminar" align="center"onclick="window.location='Eliminar.html'">
      </p>
      <p>&nbsp;</p>
    </div></td>
    <td width="25%">&nbsp;</td>
  </tr>
  <tr><th bgcolor="#000000" scope="row">&nbsp;</th>
    
    <td height="350" bgcolor="#000000"><form method="post" action="Agregar.html">
      <table border="0" width="800" align="left" cellpadding="0" cellspacing="0">        
        <tr>             
        
        <td align="center" width="40%" height="450" rowspan="10">SIN IMAGEN</td>        

<td width="10" align="cente" valign="top"></td>
        <td width="400" align="left" valign="baseline" colspan="2"><h1><strong><em><?php echo $_POST[titulo]?> (<?php echo $_POST[año]?>)</em></strong></h1></td>
        
        </tr>
                
        <tr>
        <td width="10" align="right" valign="top">&nbsp;</td>
        <td width="20">&nbsp;</td>
        <td width="400" align="left" valign="top"><h3><?php echo $_POST[genero]?></h3>
        </td>        
        </tr>        
 
 <tr> 
 <td width="10" align="right" valign="top"></td>
 <td width="400" align="left" valign="top" colspan="2"><strong>Director: </strong> <?php echo $_POST[director]?></tr>
   
 <tr>
   	<td width="10" align="right" valign="top"> </td>    
    <td width="400" align="left" valign="top" colspan="2"><strong>Actores: </strong><?php echo $_POST[actores]?>
    </td>
 </tr>
   
   <tr>
   	<td width="10" align="right" valign="top"> </td>    
    <td width="400" align="left" valign="top" colspan="2"><strong>Estudio: </strong><?php echo $_POST[estudio]?>
    </td>
 </tr>
 
 <tr>
   	<td width="10" align="right" valign="top"> </td>    
    <td width="400" align="left" valign="top" colspan="2">
    </td>
 </tr>
 
 <tr>
   	<td width="10" align="right" valign="top"> </td>    
    <td width="400" align="left" valign="top" colspan="2"><strong>Idioma: </strong><?php echo $_POST[idioma]?>
    </td>
 </tr>
 
 <tr>
   	<td width="10" align="right" valign="top"> </td>    
    <td width="400" align="left" valign="top" colspan="2"><strong>Formato: </strong><?php echo $_POST[formato]?>
    </td>
 </tr>
 
 <tr>
   	<td width="10" align="right" valign="top"> </td>    
    <td width="400" align="left" valign="top" colspan="2"><strong>Ubicacion: </strong><?php echo $_POST[ubicacion]?>
    </td>
 </tr>
 <tr>
   	<td width="10" align="right" valign="top"> </td>    
    <td width="400" align="left" valign="top" colspan="2"><strong><?php echo $_POST[categoria]?></strong>
    </td>
 </tr>
 <tr> <td>&nbsp;</td>
 </tr>
 
            <td height="85" colspan="4"><div align="center"> 
            <div><input type="submit" value="Agregar Otra" align="center"onclick="window.location='Agregar.html'"></div>
              </div></td>
            
          </div>
  </table>
<footer align="center">
	<a href="http://www.w3.org/html/logo/">
	<img src="http://www.w3.org/html/logo/badge/html5-badge-h-css3-device-semantics.png" width="197" height="64" alt="HTML5 Powered with CSS3 / Styling, Device Access, and Semantics" title="HTML5 Powered with CSS3 / Styling, Device Access, and Semantics">
	</a>
</footer> 

</form></td>
  </tr>

</body>

</html>