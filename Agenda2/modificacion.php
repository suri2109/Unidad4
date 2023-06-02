<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>MODIFICADO</title>
<link rel="stylesheet" href="css/botoneS.css">
</head>
<body>
<?php 
$oMysql = new mysqli("localhost", "root", "", "agenda");
 // $conexion = pg_connect("host=localhost port=5432 user=nombreUsuario password=passwordUsuario dbname=nomBD", PGSQL_CONNECT_FORCE_NEW);
// $conexion = pg_connect("host=localhost dbname=BASE_DE_DATOS user=USUARIO password=CONTRASEÑA");		

$Query="UPDATE contactos 
					SET nombre= '".$_POST["NombreNuevo"]."' , 
					direccion= '".$_POST["Direccion"]."' , 
					telefono = '".$_POST["Telefono"]."', 
					email = '".$_POST["Email"]."'
					WHERE nombre = '".$_POST["NombreBuscar"]."'";
					
					
					echo '<center>';
					print('<h4>'.$Query.'</h4>');
					echo '</center>';			
		  //$oMysql->query    seria como Objeto.metodo
$Result = $oMysql->query( $Query );  // se lanza la consulta

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
<a href="index.php" class="btn-neon">
      <span id="span1"></span>
      <span id="span2"></span>
      <span id="span3"></span>
      <span id="span4"></span>
      ¿INICIO?
  </a>
  <a href="eliminar.php" class="btn-neon">
      <span id="span1"></span>
      <span id="span2"></span>
      <span id="span3"></span>
      <span id="span4"></span>
      ¿MODIFICAR MAS?
  </a>
</center>
</body>
</html>
