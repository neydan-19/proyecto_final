<?php
    include_once("../Config/conexion.php");

    $columns = [
        'orden.id_orden',
        'producto.Nombre_producto AS COD_producto',
        'medios_de_pago.Nombre_metodo AS id_me_pa',
        'departamento.Nombre_departamento AS id_departamento',
        'distrito.Nombre_distrito AS id_distrito',
        'provincia.Nombre_provincia AS id_provincia'
    ];

    $table = "orden";

    $campo = isset($_POST['campo']) ? $conexion->real_escape_string($_POST['campo']) : null;

    $where = "WHERE (id_usuario = '$campo' )";

    $limit = isset($_POST['registros']) ? $conexion->real_escape_string($_POST['registros']) : 3;
    $pagina = isset($_POST['pagina']) ? $conexion->real_escape_string($_POST['pagina']) : 0;

    if(!$pagina){
        $inicio = 0;
        $pagina = 1;
    }else{
        $inicio = ($pagina - 1) * $limit;
    }

    $sLimit = "LIMIT $inicio, $limit";

    $sql = "SELECT " . implode(", ", $columns). "
            FROM $table
            LEFT JOIN producto ON orden.COD_producto = producto.COD_producto
            LEFT JOIN medios_de_pago ON orden.id_me_pa = medios_de_pago.id_me_pa
            LEFT JOIN departamento ON orden.id_departamento = departamento.id_departamento
            LEFT JOIN distrito ON orden.id_distrito = distrito.id_distrito
            LEFT JOIN provincia ON orden.id_provincia = provincia.id_provincia
            $where
            $sLimit ";

    $resultado = $conexion->query($sql);
    $num_rows = $resultado->num_rows;

    $html = '';
    
    if ($num_rows > 0) {
        while($row = $resultado->fetch_assoc()) {
            $html .= '<tr>';
            $html .= '<td>'.$row['id_orden'].'</td>';
            $html .= '<td>'.$row['COD_producto'].'</td>';
            $html .= '<td>'.$row['id_me_pa'].'</td>';
            $html .= '<td>'.$row['id_departamento'].'</td>';
            $html .= '<td>'.$row['id_distrito'].'</td>';
            $html .= '<td>'.$row['id_provincia'].'</td>';
            $html .= '</tr>';
        }
    } else {
        $html .= '<tr>';
        $html .= '<td colspan="7">Sin Resultados</td>';
        $html .= '</td>';
    }

    echo json_encode($html, JSON_UNESCAPED_UNICODE);

?>

