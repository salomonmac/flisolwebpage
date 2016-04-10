<meta charset="utf-8">
<?php
include("conexion.php");

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$taller = $_POST["taller"];

$insertar = mysqli_query($conectar,"INSERT INTO participante (nombre, apellido, correo, idtaller)
VALUES ('$nombre', '$apellido', '$correo', '$taller')");
$idparticipante = mysqli_insert_id($conectar);

$consulta = mysqli_query($conectar, "select *from talleres where idtaller = '$taller';");
$algo = mysqli_fetch_array($consulta);
$tallersito = $algo["nombre"]; 
if(!$insertar){
    die("Fallo".mysql_error());
}
else{
    ?>
    <script>
        alert("Gracias por registrarte <?php echo $nombre; ?> al taller: <?php echo $tallersito; ?>");
    location.href = "index.php";
</script>
    <?php
}

?>