
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
<div class="resultados col-md-12">
	<h1 class="text-center">Resultado del formulario</h1>
	<?php 
$codigo = $_POST['codigo'];
$nombres = $_POST['nombres'];
$sueldo = $_POST['sueldo'];
$ventas = $_POST['ventas'];
$sal_minimo = 515000;
$mensaje = "";
if($ventas <= 1000000){
$comision = $ventas * 0.05;
	$mensaje ="¡UD ES UN VENDEDOR DEFICIENTE!";
}else if($ventas > 1000000 && $ventas <= 2000000){
	$comision = $ventas * 0.08;
	$mensaje ="¡UD ES UN VENDEDOR REGULAR!";
}else if($ventas > 2000000 && $ventas <= 3000000){
$comision = $ventas * 0.1;
	$mensaje ="¡UD ES UN VENDEDOR EFICIENTE!";
}else if($ventas > 3000000 && $ventas <= 4000000){
	$comision = $ventas * 0.12;
	$mensaje ="¡UD ES UN VENDEDOR MUY EFICIENTE!";
}else if($ventas >  4000000){
	$comision = $ventas * 0.14;
	$mensaje ="¡UD ES VENDEDOR EXCELENTE!";
}else{
	$comision = $ventas * 0;
	$mensaje = "Null!";
}
$total = $sueldo + $comision;
if($total <= $sal_minimo){
$retencion = $total * 0;
}else if($total > $sal_minimo && $total <= ($sal_minimo * 2)){
$retencion = $total * 0.04;
}else if($total > ($sal_minimo * 2) && $total <= ($sal_minimo * 3) ){
$retencion = $total * 0.06;
}else if($total > ($sal_minimo * 3)){
$retencion = $total * 0.08;
}else {
	$retencion = 0;
}
 ?>

 <table class="table table-bordered">
  <thead>
    <tr style="background-color: #19313c;">
      <th>Codigo</th>
      <th>Nombres</th>
      <th>Valor comision</th>
      <th>Sueldo total mensual</th>
      <th>Valor retencion</th>
      <th>Salario neto</th>
      <th>Mensaje de ventas</th>
    </tr>
  </thead>
  <tbody>
    <tr style="    background-color: rgb(0, 0, 0);">
      <th scope="row"><?php echo $codigo; ?></th>
      <td><?php echo $nombres; ?></td>
      <td>$ <?php echo number_format($comision,2,".",","); ?></td>
      <td>$ <?php echo number_format(($sueldo + $comision),2,".",","); ?></td>
      <td>$ <?php echo number_format($retencion,2,".",","); ?></td>
      <td>$
      <?php echo number_format(($sueldo + $comision - $retencion),2,".",",");  ?></td>
      <td><?php echo $mensaje; ?></td>
    </tr>
    
  </tbody>
</table>
</div>
<div class="col-md-12" style="    text-align: center;
    position: relative;
    bottom: -252px;
    background-color: rgb(20, 62, 82);">
	&copy; 2017 Desarrollado para ingenieria web.
</div>
</body> 
</html>
