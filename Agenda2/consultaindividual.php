<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CONSULTANDO</title>
</head>

<body>

<center>
	<h1>CONSULTAS</h1>

    <form action = "buscar2Datos.php" target="" method="POST">
		<label> Nombre a Buscar </label>
		<input type=text size=40 name="Nombre" value="">
		<br>
		<label> Direccion a Buscar </label>
		<input type=text size=40 name="Direccion" value="">

		<br>
		<br>
		<br>
		
		<input type=submit value="Buscar un registro BD" class="btn-neon">
        <span id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
        <span id="span4"></span>
        </input>

	</form>

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