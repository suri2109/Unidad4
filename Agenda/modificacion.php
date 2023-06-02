<!DOCTYPE html >
>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>MODIFICADO</title>
</head>
<body>
<?php 
$oMysql = new mysqli("localhost", "root", "", "agenda");

$Query="UPDATE contactos SET nombre= '".$_POST["NombreNuevo"]."' ,direccion= '".$_POST["Direccion"]."' ,telefono = '"
.$_POST["Telefono"]."',email = '".$_POST["Email"]."'WHERE nombre = '".$_POST["NombreBuscar"]."'";

echo '<center>';
print('<h4>'.$Query.'</h4>');
echo '</center>';

$Result = $oMysql->query( $Query ); 

if($Result!=null){
	echo '<center>';
	print('<h1>Se modifico.</h1>');
	echo '</center>';
}else{
	echo '<center>';
	print('<h1>No se pudo modicar.</h1>');
	echo '</center>';
}
   ?>
   <center>
<a href="index.php" >
           ¿INICIO?
  </a>
  <a href="eliminar.php" >
     
      ¿MODIFICAR MAS?
  </a>
</center>
</body>
</html>