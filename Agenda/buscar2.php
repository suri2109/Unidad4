<?php
//buscar el registr
$nombreBuscar =$_POST["Nombre"];
$direccionBuscar =$_POST["Direccion"];
$oMysql = new mysqli("localhost", "root", "", "agenda");
$Query="select * from contactos WHERE nombre = '".$nombreBuscar."'AND direccion='".$direccionBuscar."';";
$Result=$oMysql->query($Query);
$row=$Result->fetch_array();
if($row<=0)
printf("No se encuetra el registro");
else{

    $telefono=$row["telefono"];
    $email=$row["email"];
    echo "telefono: ".$telefono."<br>";
    echo "email: ".$email."<br>";

} ?>