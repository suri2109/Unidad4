<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>EDITANDO</title>
</head>
<body>
<?php
require ("buscar.php");
?>

   <form action="modificacion.php" target="" method="POST">
            <input style="display:none;" type=text size=40 name="NombreBuscar" value="<?php echo $nombreBuscar;?>">
            <TABLE BORDER="5" ALIGN="CENTER">
                <TR>
                    <TD><strong>Nombre</strong> </TD>
					<TD><input  type=text size=40 name="NombreNuevo" value="<?php echo $nombreBuscar;?>"> </TD>
                </TR>
               
                <TR>
                    <TD><strong>Direccion</strong> </TD>
                    <td><input type=text size=40 name="Direccion" value="<?php echo $direccion;?>"></td>
                </TR>
                <TR>
                    <TD><strong>Telefono</strong> </TD>
                    <td><input type=text size=40 name="Telefono" value="<?php echo $telefono;?>"></td>
                </TR>
                <TR>
                    <TD><strong>Email</strong> </TD>
                    <td><input type=text size=40 name="Email" value="<?php echo $email;?>"></td>
                </TR>
                
                
            </TABLE>
<BR>
<BR>
<center> 
    <input type=submit value="Modificar registro BD" class="colo">
        <span id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
        <span id="span4"></span>
        </input>
</center>

<br>

<center>
      <a href="index.php" class="colo">
      <span id="span1"></span>
      <span id="span2"></span>
      <span id="span3"></span>
      <span id="span4"></span>
      ¿INICIO?
  </a>

  <a href="Actualizar.php" class="colo">
      <span id="span1"></span>
      <span id="span2"></span>
      <span id="span3"></span>
      <span id="span4"></span>
      ¿ELEGIR OTRO?
  </a>
<center>       
        </form>
</body>
</html>