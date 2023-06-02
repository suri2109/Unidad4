<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>MOSTRAR</title>
</head>
<body>
	<center>
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
		 // fetch_array() Obtiene una fila de resultado como un array asociativo
     $i=0;
        while($i<count($row)) {
           ?>
		   <tr>
		   <td> <?php printf($row[$i][0]); ?>   </td>
		   <td> <?php printf($row[$i][1]); ?>   </td>
		   <td> <?php printf($row[$i][2]); ?>   </td>
		   <td> <?php printf($row[$i][3]); ?>   </td>
           </tr>
<?php	$i++;}
}
?>
</table>
<br>
      <a href="index.php" class="btn-neon">
      <span id="span1"></span>
      <span id="span2"></span>
      <span id="span3"></span>
      <span id="span4"></span>
      INICIO
  </a>
</center>
</body>
</html>

