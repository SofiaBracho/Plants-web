<?php
    require_once "conexion.php";

    try {
        $sql = "SELECT * FROM articulos LIMIT 10";
        $stmt = $conn->query($sql);

        $respuesta = array();
        while ($row = $stmt->fetch_assoc()) {
            $respuesta[] = $row;
        }

        die (json_encode($respuesta) );
    } catch (\Exception $e) {
        echo "Error: " . $e;
    }

?>