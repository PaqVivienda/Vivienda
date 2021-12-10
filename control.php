<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include("conexion.php");

$table = $_POST['tabla'];
$database_table_array = array("proy_paredes", "proy_techo", "proy_techo_capas", "proy_puertas", "proy_ventanas", "proy_recubrimiento", "proy_cm");

function load_table($table, $connection)
{     
    $fname = $_FILES['sel_file']['name'];
    $chk_ext = explode(".",$fname);
    if(strtolower(end($chk_ext)) == "csv")
    {   
        //si es correcto, entonces damos permisos de lectura para subir
        $filename = $_FILES['sel_file']['tmp_name'];
        $handle = fopen($filename, "r");
        $GET_TABLE_ROWS_QUERY = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='$table' order by ordinal_position;";
        $table_fields_array = mysqli_fetch_all(mysqli_query($connection, $GET_TABLE_ROWS_QUERY));
        $empty_string = "";

        foreach($table_fields_array as $key => $value)
        {
            if ($key <(count($table_fields_array) - 1 ))
            {
                $empty_string .="$value[0], ";
            }	       
            else
            {	
                $empty_string .=$value[0];
            }
        }
        
        while (($data = fgetcsv($handle, 1000, ",")))
        {
            $input_values = "'" . utf8_encode( implode("', '", $data) . "'");
            $sql_input_query = "INSERT INTO $table ($empty_string) VALUES ($input_values);";
            mysqli_query($connection, $sql_input_query) or die('Error: '.mysqli_error(($connection)));
        }

        fclose($handle);
        header("Location: viv_prev_it.php");
    }
}

if (!$con)
    die("No se pudo establecer conexión a la base de datos");

if (in_array($table, $database_table_array))
{
    load_table($table, $con);
}
?>