<?php
#los datos a recibir

$nombre_empresa = $_POST['nombre_empresa'];
$nombre = $_POST['nombre'];
$cargo = $_POST['cargo'];
$correo = $_POST['correo']; 
$ciudad = $_POST['ciudad']; 
$pregunta1 = $_POST['pregunta1']; 
$pregunta2 = $_POST['pregunta2']; 
$pregunta3 = $_POST['pregunta3']; 
$pregunta4_1 = $_POST['pregunta4_1']; 
$pregunta4_2 = $_POST['pregunta4_2']; 
$pregunta5 = $_POST['pregunta5']; 
$pregunta6_1 = $_POST['pregunta6_1']; 
$pregunta6_2 = $_POST['pregunta6_2']; 
$pregunta6_3 = $_POST['pregunta6_3']; 
$pregunta6_4 = $_POST['pregunta6_4']; 
$pregunta6_5 = $_POST['pregunta6_5']; 
$pregunta6_6 = $_POST['pregunta6_6']; 
$pregunta7_1 = $_POST['pregunta7_1']; 
$pregunta7_2 = $_POST['pregunta7_2']; 
$pregunta7_3 = $_POST['pregunta7_3']; 
$pregunta7_4 = $_POST['pregunta7_4']; 
$pregunta7_5 = $_POST['pregunta7_5']; 
$pregunta7_6 = $_POST['pregunta7_6']; 
$pregunta8 = $_POST['pregunta8']; 
$pregunta9 = $_POST['pregunta9']; 
$pregunta10 = $_POST['pregunta10']; 
$pregunta11 = $_POST['pregunta11']; 
$pregunta12 = $_POST['pregunta12']; 
$pregunta13 = $_POST['pregunta13']; 
$pregunta14 = $_POST['pregunta14']; 
$pregunta15_1 = $_POST['pregunta15_1']; 
$pregunta15_2 = $_POST['pregunta15_2']; 
$pregunta16 = $_POST['pregunta16']; 
$pregunta17 = $_POST['pregunta17']; 
$pregunta18_1 = $_POST['pregunta18_1']; 
$pregunta18_2 = $_POST['pregunta18_2']; 
$pregunta18_3 = $_POST['pregunta18_3']; 
$pregunta18_4 = $_POST['pregunta18_4']; 
$pregunta18_5 = $_POST['pregunta18_5']; 
$pregunta19 = $_POST['pregunta19']; 
$pregunta20 = $_POST['pregunta20']; 
$pregunta21_1 = $_POST['pregunta21_1']; 
$pregunta21_2 = $_POST['pregunta21_2']; 
$pregunta21_3 = $_POST['pregunta21_3']; 
$pregunta21_4 = $_POST['pregunta21_4']; 
$pregunta21_5 = $_POST['pregunta21_5']; 
$pregunta22 = $_POST['pregunta22']; 
$pregunta23_1 = $_POST['pregunta23_1']; 
$pregunta23_2 = $_POST['pregunta23_2']; 
$pregunta23_3 = $_POST['pregunta23_3']; 
$pregunta23_4 = $_POST['pregunta23_4']; 
$pregunta23_5 = $_POST['pregunta23_5']; 
$pregunta24 = $_POST['pregunta24']; 
$pregunta25_1 = $_POST['pregunta25_1']; 
$pregunta25_2 = $_POST['pregunta25_2']; 
$pregunta25_3 = $_POST['pregunta25_3']; 
$pregunta25_4 = $_POST['pregunta25_4']; 
$pregunta25_5 = $_POST['pregunta25_5']; 
$pregunta26 = $_POST['pregunta26']; 
$pregunta27_1 = $_POST['pregunta27_1']; 
$pregunta27_2 = $_POST['pregunta27_2']; 
$pregunta27_3 = $_POST['pregunta27_3']; 
$pregunta27_4 = $_POST['pregunta27_4']; 
$pregunta27_5 = $_POST['pregunta27_5']; 
$pregunta28 = $_POST['pregunta28']; 
$pregunta29_1 = $_POST['pregunta29_1']; 
$pregunta29_2 = $_POST['pregunta29_2']; 
$pregunta29_3 = $_POST['pregunta29_3']; 
$pregunta29_4 = $_POST['pregunta29_4']; 
$pregunta29_5 = $_POST['pregunta29_5']; 
$pregunta30 = $_POST['pregunta30']; 
$pregunta31 = $_POST['pregunta31']; 
$pregunta32_1 = $_POST['pregunta32_1']; 
$pregunta32_2 = $_POST['pregunta32_2']; 
$pregunta33 = $_POST['pregunta33']; 

if( !empty($nombre_empresa) || !empty($nombre) || !empty($cargo)  || !empty($correo) || !empty($ciudad) ||
!empty($pregunta1) || !empty($pregunta2) || !empty($pregunta3) || !empty($pregunta4_1) || !empty($pregunta4_2) || !empty($pregunta5) || !empty($pregunta6_1) || !empty($pregunta6_2) || 
!empty($pregunta6_3) || !empty($pregunta6_4) || !empty($pregunta6_5) || !empty($pregunta6_6) ||
!empty($pregunta7_1) || !empty($pregunta7_2) || !empty($pregunta7_3) || !empty($pregunta7_4) ||
!empty($pregunta7_5) || !empty($pregunta7_6) || !empty($pregunta8) || !empty($pregunta9) || 
!empty($pregunta10) || !empty($pregunta11) || !empty($pregunta12) || !empty($pregunta13) || !empty($pregunta14) || 
!empty($pregunta15_1) || !empty($pregunta15_2) || !empty($pregunta16) || !empty($pregunta17) || !empty($pregunta18_1) ||
!empty($pregunta18_2) || !empty($pregunta18_3) || !empty($pregunta18_4) ||
!empty($pregunta18_5)|| !empty($pregunta19)|| !empty($pregunta20) || !empty($pregunta21_1) || !empty($pregunta21_2) || 
!empty($pregunta21_3) || !empty($pregunta21_4) || !empty($pregunta21_5) || !empty($pregunta22) || !empty($pregunta23_1) ||
!empty($pregunta23_2) || !empty($pregunta23_3) || !empty($pregunta23_4) || !empty($pregunta23_5) || !empty($pregunta24) || 
!empty($pregunta25_1) || !empty($pregunta25_2)|| !empty($pregunta25_3) || !empty($pregunta25_4) || !empty($pregunta25_5) || 
!empty($pregunta26) || !empty($pregunta27_1) || !empty($pregunta27_2) || !empty($pregunta27_3)  || !empty($pregunta27_4) || 
!empty($pregunta27_5) || !empty($pregunta28) || !empty($pregunta29_1) || !empty($pregunta29_2) || !empty($pregunta29_3) || 
!empty($pregunta29_4) || !empty($pregunta29_5) || !empty($pregunta30) || !empty($pregunta31) || !empty($pregunta32_1) || 
!empty($pregunta32_2) || !empty($pregunta33) )
{
    $host = "localhost:3307";#apuntamos al puerto de la base de datos
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "encuesta";

    #enlazamos conexion con los atributos y representados con conn
    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
    if(mysqli_connect_error()){
        die('connect error('.mysqli_connect_error().')'.mysqli_connect_error());
    }
    else{
        #sentencias preparadas 
        $SELECT = "SELECT correo from usuarios where correo = ? limit 1";#DATO QUE NO SE VA A REPETIR -> en caso del formulario seria el correo
        $INSERT = "INSERT INTO usuarios(nombre_empresa , nombre , cargo , 
        correo , ciudad , pregunta1 , pregunta2 , pregunta3 , pregunta4_1 , 
        pregunta4_2 , pregunta5 , pregunta6_1 , pregunta6_2 , pregunta6_3 , 
        pregunta6_4 , pregunta6_5 , pregunta6_6 , pregunta7_1 , pregunta7_2 , 
        pregunta7_3 , pregunta7_4 , pregunta7_5 , pregunta7_6 , pregunta8 , 
        pregunta9 , pregunta10 , pregunta11 , pregunta12 , pregunta13 , pregunta14 , 
        pregunta15_1 , pregunta15_2 , pregunta16 , pregunta17 , pregunta18_1 , 
        pregunta18_2 , pregunta18_3 , pregunta18_4 , pregunta18_5 , pregunta19 , 
        pregunta20 , pregunta21_1 , pregunta21_2 , pregunta21_3 , pregunta21_4 , 
        pregunta21_5 , pregunta22 , pregunta23_1 , pregunta23_2 , pregunta23_3 , 
        pregunta23_4 , pregunta23_5 , pregunta24 , pregunta25_1 , pregunta25_2 , 
        pregunta25_3 , pregunta25_4 , pregunta25_5 , pregunta26 , pregunta27_1 , 
        pregunta27_2 , pregunta27_3 , pregunta27_4 , pregunta27_5 , pregunta28 , 
        pregunta29_1 , pregunta29_2 , pregunta29_3 , pregunta29_4 , pregunta29_5 , 
        pregunta30 , pregunta31 , pregunta32_1 , pregunta32_2 , pregunta33) 
        values(? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ?) ";

        $stmt = $conn->prepare($SELECT);#stmt identificador 
        $stmt ->bind_param("s" ,$correo);
        $stmt ->execute();
        $stmt ->bind_result($correo);
        $stmt ->store_result();
        $rnum = $stmt->num_rows;
        if($rnum == 0){
            $stmt ->close();
            $stmt = $conn->prepare($INSERT);
            $stmt ->bind_param("sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss" , $nombre_empresa , $nombre , $cargo , $correo , $ciudad 
            , $pregunta1 , $pregunta2 , $pregunta3 , $pregunta4_1 , $pregunta4_2 , $pregunta5 , $pregunta6_1 , $pregunta6_2 
            , $pregunta6_3 , $pregunta6_4 , $pregunta6_5 , $pregunta6_6 , $pregunta7_1 , $pregunta7_2 , $pregunta7_3 , $pregunta7_4 
            , $pregunta7_5 , $pregunta7_6 , $pregunta8 , $pregunta9 , $pregunta10 , $pregunta11 , $pregunta12 , $pregunta13 , $pregunta14 
            , $pregunta15_1 , $pregunta15_2 , $pregunta16 , $pregunta17 , $pregunta18_1 , $pregunta18_2 , $pregunta18_3 , $pregunta18_4 
            , $pregunta18_5 , $pregunta19 , $pregunta20 , $pregunta21_1 , $pregunta21_2 , $pregunta21_3 , $pregunta21_4 , $pregunta21_5 
            , $pregunta22 , $pregunta23_1 , $pregunta23_2 , $pregunta23_3 , $pregunta23_4 , $pregunta23_5 , $pregunta24 , $pregunta25_1 
            , $pregunta25_2 , $pregunta25_3 , $pregunta25_4 , $pregunta25_5 , $pregunta26 , $pregunta27_1 , $pregunta27_2 , $pregunta27_3 
            , $pregunta27_4 , $pregunta27_5 , $pregunta28 , $pregunta29_1 , $pregunta29_2 , $pregunta29_3 , $pregunta29_4 , $pregunta29_5 
            , $pregunta30 , $pregunta31 , $pregunta32_1 , $pregunta32_2 , $pregunta33);
            $stmt ->execute();
            echo "¡Gracias por tu retroalimentación!.";
        }
        else {
            echo "alguien registro ese correo.";

        }
        $stmt->close();
        $conn->close();


    }

}
else{
    echo "todos los datos son OBLIGARTORIOS";
    die();
}

?>