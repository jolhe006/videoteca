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
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <th colspan="3" scope="col"><img src="baner3.png" width="500" height="150" alt="AGENDA"></th>
  </tr> 
    
    <tr>
    <?php

$servidor= "127.0.0.1";
$user= "root";
$password= "agguelosss_x";
$base= "Agenda";
$conexion = mysql_connect($servidor,$user,$password) or die("Problemas en la conexion");
mysql_select_db($base,$conexion) or die("Problemas en la seleccion de la base de datos");
$sql= "select * from contactos where id_contactos = '".$_POST[idcontactoMod]."'";
$registros = mysql_query($sql,$conexion) or die("Problemas en sql".mysql_error());
$contact = mysql_fetch_array($registros);
?>
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
    <th bgcolor="#000000" scope="row">&nbsp;</th>
    <td height="350" bgcolor="#000000"><form method="post" action="Modificar.php">
      <p>&nbsp;</p>
      <table width="445" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="154"><div align="center">
            <input name="APPAT" type="text"  value="<?php echo $contact['ApPat']?>">
          </div></td>
          <td width="148"><input name="APMAT" type="text" value="<?php echo $contact['ApMat']?>" ></td>
          <td width="144"><input name="NOM" type="text" value="<?php echo $contact['Nombre']?>"></td>
        </tr>
        <tr>
          <td height="19"><div align="center">Apellido Paterno</div></td>
          <td height="19"><div align="center">Apellido Materno</div></td>
          <td height="19"><div align="center">Nombre(s)</div></td>
        </tr>
        <tr>
          <td height="19" colspan="3">&nbsp;</td>
        </tr>
        <tr>
          <td height="19" colspan="3"><input name="DIR" type="text" value="<?php echo $contact['Direccion']?>" size="75"></td>
        </tr>
        <tr>
          <td height="19" colspan="3"><p align="center">Direccion</p></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><input name="TEL" type="text" value="<?php echo $contact['telefono']?>"></td>
          <td><input name="EM" type="text"  value="<?php echo $contact['correo']?>"></td>
          <td><input name="ID" type="text" disabled  value="<?php echo $contact['id_contactos']?>"></td>
          </tr>
        <tr>
          <td><div align="center">
          Telefono</div></td>
          <td><div align="center">
          E-mail</div></td>
          <td><div align="center">
          Id Contacto</div></td>
        </tr>
        <tr>
          <td height="85" colspan="3"><div align="center"> 
		  <input type='submit'  name="modificarbtn" id="modificarbtn" value='Modificar' align='center'>
          
          <?php
		  	if(isset($_POST[modificarbtn]))
			{
				$sqlMod= "Update contactos set ApPat = '".$_POST[APPAT]."', ApMat='".$_POST[APMAT]."', Nombre = '".$_POST[NOM]."', Direccion='".$_POST[DIR]."', telefono='".$_POST[TEL]."', correo='".$_POST[EM]."' where id_contactos = '".$_POST[ID]."'";
				mysql_query($sqlMod,$conexion) or die("Problemas en sql".mysql_error());
				echo "<br><div style='text-align:center; font-family:Verdana, Geneva, sans-serif; font-style:oblique;'>Contacto Modificado Correctamente</div>";
			}
		  ?>
          
</div></td>
          </tr>
  </table>
      <br>
</p>
    </form></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th bgcolor="#000000" scope="row">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
