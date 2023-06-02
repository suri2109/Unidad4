<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>INSERTAR</title>

</head>
<body>

   <form action="agregar.php" target="" method="POST">
            <TABLE BORDER="5" ALIGN="CENTER">
                <TR>
                    <TD><strong>Nombre</strong> </TD>
                    <td><input type=text size=40 name="Nombre"></td>
                </TR>
               
                <TR>
                    <TD><strong>Direccion</strong> </TD>
                    <td><input type=text size=40 name="Direccion"></td>
                </TR>
                <TR>
                    <TD><strong>Telefono</strong> </TD>
                    <td><input type=text size=40 name="Telefono"></td>
                </TR>
                <TR>
                    <TD><strong>Email</strong> </TD>
                    <td><input type=text size=40 name="Email"></td>
                </TR>
                
                
            </TABLE>
            <BR>
            <BR>
        <center> 

        <input type=submit value="AGREGAR A BD" >
        <span id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
        <span id="span4"></span>
        </input>
        
    <br>

      <a href="index.php" >
      <span id="span1"></span>
      <span id="span2"></span>
      <span id="span3"></span>
      <span id="span4"></span>
      INICIO
  </a>
  </center>
    </form>

</body>
</html>