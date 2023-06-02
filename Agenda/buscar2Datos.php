<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>CONSULTANDO</title>
</head>
<body>
<?php 
//Consultar registros a traves del nombre y direccion capturado
$nombreBuscar = $_POST["Nombre"];
$direccionBuscar = $_POST["Direccion"];
$oMysql = new mysqli ("localhost", "root", "", "agenda");
$Query = "SELECT * FROM contactos WHERE nombre = '".$nombreBuscar."' AND direccion='".$direccionBuscar."';";
$Result = $oMysql -> query($Query);

$row = $Result->fetch_array();

if($row <= 0){
    echo '<center>';
    print('<h1>No se encuentra el registro.</h1>');
    echo '</center>';
}else{
    $telefono = $row["telefono"];
    $email = $row["email"];

    echo '<center>';
    print('<h4>TELEFONO: '.$telefono.'</h4>');
    print('<h4>EMAIL: '.$email.'</h4>');
    echo '</center>';

}
?>
<CENTER>
<br>
      <a href="index.php" class="colo">
      <span id="span1"></span>
      <span id="span2"></span>
      <span id="span3"></span>
      <span id="span4"></span>
      ¿INICIO?
  </a>
<br>
<br>
      <a href="consultaindividual.php" class="colo">
      <span id="span1"></span>
      <span id="span2"></span>
      <span id="span3"></span>
      <span id="span4"></span>
      ¿VOLVER A BUSCAR?
  </a>
</CENTER>
</body>
</html>