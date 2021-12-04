<?php
require("conexion.php");
$prove = mysqli_real_escape_string($con, $_POST["idregion"]);
$query = 'SELECT * FROM proy_cm WHERE proy_pais = "'.$prove.'"';
$result = mysqli_query($con, $query);
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
    echo '<option value="' .$row["id"]. '">' .$row["proy_region"]. ' - ' .$row["cm_mes"]. '</option>';
}
mysqli_close($con);
?>