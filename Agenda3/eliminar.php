<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ELIMINAR</title>
</head>
<body>
<?php 
include_once 'funciones.php';

$mysql = conectar();
$Query = "select * from contactos";
$row=ejecutarConsulta($mysql,$Query);
$mysql=desconectar($mysql);

if($row<=0){
     echo "<div align='center'>";
     echo "<h2>No se encontraron resultados</h2>";
     echo "</div><hr> ";
   }
else{
	?>
	<table border=5 ALIGN="CENTER">
	 <tr>
	 <td><strong> Nombre</strong></td>
	 <td><strong> Direccion</strong></td>
	 <td><strong> Telefono</strong></td>
	 <td><strong> Email</strong></td>
	 </tr>
	 <?php
		 // count($row) Obtiene una fila de resultado como un array asociativo
     $i=0;
        while($i<count($row)) {
           ?>
		   <tr>
				   <td> <a href="eliminacion.php ? Nombre=<?php print($row[$i][0]); ?>"
				   onclick = "return confirm('¿ESTAS SEGUROOOOO? ')"> 
				   <?php printf($row[$i][0]); ?> </a>  </td>
		       <td> <?php printf($row[$i][1]); ?>   </td>
		       <td> <?php printf($row[$i][2]); ?>   </td>
				   <td> <?php printf($row[$i][3]); ?>   </td>
      </tr>
<?php	$i++;}
}

?>
</table>
<br>
<center>
   <a href="index.php" class="btn-neon">
   <span id="span1"></span>
   <span id="span2"></span>
   <span id="span3"></span>
   <span id="span4"></span>
   INICIO
</a>
<center>
</body>
</html>
