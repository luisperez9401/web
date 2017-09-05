<!DOCTYPE html>
<html lang="es_Es" style="height: 100%;">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Ingenieria web</title>
</head>
<style type="text/css">
	button:hover{
		    box-shadow: -1px -2px 10px #143e52 !important;
	}
</style>
<body style="height: 100%;    background-color: #436879;
    color: #dadada;">
<div style="margin-top: 100px;"></div>
<div class="col-md-12">
<h1 style="text-align: center;    text-shadow: 0px 0px 4px black;
    border-bottom: 1px #31708f solid;">Problema Ingenieria Web</h1>
	<form action="recibe.php" method="POST" enctype="multipart/form-data" style="    width: 50%;
    margin: 0 auto;">
		
		<div class="form-group ">
		<label for="codigo">Codigo</label>
			<input type="text" name="codigo" class="form-control" placeholder="codigo..." id="codigo">
		</div>
			<div class="form-group">
		<label for="nombres">Nombres</label>
			<input type="text" name="nombres" class="form-control" placeholder="nombres..." id="nombres">
		</div>
			<div class="form-group">
		<label for="sueldo">Sueldo basico mensual</label>
			<input type="number" name="sueldo" class="form-control" placeholder="sueldo basico mensual..." id="sueldo">
		</div>
		<div class="form-group">
		<label for="ventas">Valor ventas mensuales</label>
			<input type="number" name="ventas" class="form-control" placeholder="Valor ventas mensuales..." id="ventas">
		</div>
		<div class="form-group" style="text-align: right;">
			<button type="submit" class="btn btn-primary" name="submit" style="    box-shadow: 0px 9px 10px #142a35;">Buscar</button>
		</div>
	</form>

</div>
<div class="col-md-12" style="    text-align: center;
    position: relative;
    bottom: -252px;
    background-color: rgb(20, 62, 82);">
	&copy; 2017 Desarrollado para ingenieria web.
</div>
</body> 
</html>