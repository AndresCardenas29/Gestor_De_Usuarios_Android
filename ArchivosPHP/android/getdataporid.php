<?php 
$id =$_REQUEST["id"];
$con = mysql_connect("localhost","root","") or die("sin conexion");
mysql_select_db("prueba");
$sql = "SELECT id, usuario, ocupacion, salario, horarioTrabajo FROM usuario WHERE id=$id";
$datos = array();
$rs = mysql_query($sql, $con);
while($row=mysql_fetch_object($rs)){
	$datos[] = $row;
}
echo json_encode($datos);

?>
