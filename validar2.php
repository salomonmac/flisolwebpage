<meta charset="utf-8">
<?php
include("conexion.php");

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["email"];
$taller = $_POST["taller"];
$i=0;
echo $nombre."<br>";
echo $apellido."<br>";
echo $correo."<br>";
echo $taller."<br>";


$ids = explode(",", $taller);
foreach ($ids as $id){
    $insertar = mysqli_query($conectar,"INSERT INTO participante (nombre, apellido, correo, idtaller)
VALUES ('$nombre', '$apellido', '$correo', '$id')");
$idparticipante = mysqli_insert_id($conectar);
    /*
$query = "select *from talleres where idtaller = '$id'";
$consulta = mysqli_query($conectar, "$query");   
$algo = mysqli_fetch_array($consulta);
echo $algo["nombre"]."<br>";*/
}
    

/*
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
*/
?>