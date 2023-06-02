
<?php

//*************************************************

function conectar(){

try{
   //  $oConexion = new PDO("pgsql:dbname=ejhospdb; host=localhost; user=hospital; password=hospital1");
   $oConexion = new PDO("mysql:host=localhost;dbname=agenda;port=3307","root","",  array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));

}catch(Exception $e){
  throw $e;
}
return $oConexion;
}

//*************************************************
/*Realiza la desconexión de la base de datos*/
  function desconectar($oConexion){
$bRet = true;
  if ($oConexion != null)
    $oConexion=null;

  return $bRet;
}

//*************************************************

/*Ejecuta en la base de datos la consulta que recibió por parámetro.
Regresa   Nulo si no hubo datos   Un arreglo bidimensional de n filas y tantas columnas como campos se hayan
  solicitado en la consulta*/
function ejecutarConsulta($oConexion,$psConsulta){
$arrRS = null;
$rst = null;
$oLinea = null;
$sValCol = "";
$i=0;
$j=0;
  if ($psConsulta == "")
       throw new Exception("AccesoDatos->ejecutarConsulta: falta indicar la consulta");
  if ($oConexion == null)
    throw new Exception("AccesoDatos->ejecutarConsulta: falta conectar la base");
  try{
    $rst = $oConexion->query($psConsulta); //un objeto PDOStatement o falso en caso de error
  }catch(Exception $e){
    throw $e;
  }

  if ($rst){
    foreach($rst as $oLinea){
      foreach($oLinea as $llave=>$sValCol){
        if (is_string($llave)){
          $arrRS[$i][$j] = $sValCol;
          $j++;
        }
      }
      $j=0;
      $i++;
    }
  }
  return $arrRS;
}
//************************************************************
/*Ejecuta en la base de datos el comando que recibió por parámetro
Regresa  el número de registros afectados por el comando*/
function ejecutarComando($oConexion,$psComando){
$nAfectados = -1;
     if ($psComando == "")
       throw new Exception("AccesoDatos->ejecutarComando: falta indicar el comando");
    if ($oConexion == null)
            throw new Exception("AccesoDatos->ejecutarComando: falta conectar la base");
    try{
         $nAfectados =$oConexion->exec($psComando);
      }
    catch(Exception $e){
         throw $e;
      }
  return $nAfectados;
}
?>
