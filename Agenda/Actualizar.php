<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ACTULIZAR</title>

</head>
<body>
<?php 

$mysql = new mysqli("localhost", "root", "", "agenda");

$Query = "select * from contactos";
$Result = $mysql->query( $Query );


	 $numeroRegistros=$Result->num_rows;   
	 if($numeroRegistros<=0) 
   { 
     echo "<div align='center'>"; 
     echo "<h2>No se encontraron registros</h2>"; 
     echo "</div><hr> "; 
   }else{
   ?>
       <table border=5 ALIGN=CENTER>
        <tr>
		<td><strong> Nombre</strong></td>
		<td><strong> Direccion</strong></td>
		<td><strong> Telefono</strong></td>
		<td><strong> Email</strong></td>
		</tr>
		<?php
        while($row =$Result->fetch_array()) {	  
		$nom=$row["nombre"];
           ?>
		   <tr>
		   <td> <a href="capturarNuevos.php ? Nombre=<?php print($nom); ?>"> <?php print($nom); ?> </a>  </td>
		  
		   <td> <?php printf($row["direccion"]); ?>   </td>
		  
		   <td> <?php printf($row["telefono"]); ?>   </td>
		   <td> <?php printf($row["email"]); ?>   </td>
           </tr>
<?php	
}
}
?>
</table>
<br>
<center>
      <a href="index.php" class="colo">
      <span id="span1"></span>
      <span id="span2"></span>
      <span id="span3"></span>
      <span id="span4"></span>
      INICIO
  </a>
<center>
</body>
</html>