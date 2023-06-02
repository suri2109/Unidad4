<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>INSERTADO</title>
</head>

<body>
<?php 
$oMysql = new mysqli("localhost:3307","root","","agenda");

$Query= "INSERT INTO contactos VALUES ('".$_POST["Nombre"]."','".$_POST["Direccion"]."','".$_POST["Telefono"]."','".$_POST["Email"]."')";
          
		  //$oMysql->query    seria como Objeto.metodo
$Result = $oMysql->query( $Query );  // se lanza la consulta

if($Result!=null){
    echo '<center>';
	print('<h1>Se Agrego</h1>');
 	echo '</center>';
}else{
	echo '<center>';
   	print('<h1>NO SE AGREGO</h1>');
	echo '</center>';
}	
?>

<center>
<a href="index.php" class="colo">
      <span id="span1"></span>
      <span id="span2"></span>
      <span id="span3"></span>
      <span id="span4"></span>
      ¿INICIO?
  </a>
  <a href="insertar.php" class="colo">
      <span id="span1"></span>
      <span id="span2"></span>
      <span id="span3"></span>
      <span id="span4"></span>
      ¿AGREGAR MAS?
  </a>
</center>
</body>
</html>