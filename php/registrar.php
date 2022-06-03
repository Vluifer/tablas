<?php


// Primer formulario

$codigo = isset($_POST['codigo']) ? $_POST['codigo']: '';
$clave = isset($_POST['clave']) ? $_POST['clave']: '';
$correo = isset($_POST['correo']) ? $_POST['correo']: '' ;
$telefono = isset($_POST['telefono']) ? $_POST['telefono']: '' ;
$buscar = isset($_POST['buscar']) ? $_POST['buscar']: '' ;

echo "<table style: border solid 1px>
        <tr>
        <th>Codigo</th>
        <th>Clave</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>Buscar</th>
        </tr>
        <tr>
        <td>$codigo</td>
        <td>$clave</td>
        <td>$correo</td>
        <td>$telefono</td>
        <td>$buscar</td>
        </tr>
    </table>";

 // Segundo formulario

echo $genero = $_POST['genero'];
echo "<br>";
 $leer = isset($_POST['leer']) ? $_POST['leer']: '';
 $cine = isset($_POST['cine']) ? $_POST['cine']: '';
 $tv = isset($_POST['tv']) ? $_POST['tv']: '';   
 $jugar = isset($_POST['jugar']) ? $_POST['jugar']: ''; 
 echo $leer."<br>".$cine."<br>".$tv."<br>".$jugar;
// Tercer formulario

        $fecha = $_POST['fecha'];
        $fechacompleta= $_POST['fechacompleta'];
        $mes = $_POST['mes'];
        $hora= $_POST['hora'];
        echo $fecha."<br>".$fechacompleta."<br>".$mes."<br>".$hora;

// Cuarto formulario

        $color = $_POST['color_favorito'];
        $estatura = $_POST['estatura'];
        echo $color."<br>".$estatura."<br>";

        copy($_FILES['archivo']['tmp_name'], $_FILES['archivo']['name']);
        echo 'Archivo cargado correctamente'."<br>";
        $nombre =$_FILES['archivo']['name'];
        echo "<img src=\"$nombre\">"."<br>";


// Quiento formulario
    
$estadoCivil = $_POST['estado_civil'];
echo $estadoCivil;
echo "<br>";
$idioma = $_POST['idioma'];
print_r ($idioma);
echo "<br>";

// TextArea
$comentarios = $_POST['comentarios'];
echo $comentarios;
?>