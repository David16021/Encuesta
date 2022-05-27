<html>
<head>
<meta charset="UTF-8">
	<title>ICONTEC</title>
    <link rel="stylesheet" href="estilo.css">
	<meta name="theme-color" content="#00369c"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha512-0S+nbAYis87iX26mmj/+fWt1MmaKCv80H+Mbo+Ne7ES4I6rxswpfnC6PxmLiw33Ywj2ghbtTw0FkLbMWqh4F7Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="https://admin.dataella.com/capturador/Icontec/Enc_ICONTEC2021/images/favicon.ico">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha512-bnIvzh6FU75ZKxp0GXLH9bewza/OIw6dLVh9ICg0gogclmYGguQJWl8U30WpbsGTqbIiAwxTsbe76DErLq5EDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js"></script>
    <script src="js/poll.js"></script>
	<meta name="viewport" content="width=500, initial-scale=1">
</head>
<body>
	<div class="headDiv">
		<header>
			<div class="row">
				<div class="col-md-12" align="center">
                <img  src="https://admin.dataella.com/capturador/Icontec/Enc_ICONTEC2021/images/banner-2022.jpg">
				</div>
			</div>
		</header>
	</div>
	<section class="container min-vh-70">
        <div class="alert alert-success text-center" role="alert">
            <h4 class="alert-heading"><i class="fa fa-check mr-2"></i>¡Gracias por tu retroalimentación!</h4>
            <hr>
        </div>
	</section>
	<footer class="fixed-bottom">
    <p>&copy; 2022 Powered By <a href="https://www.icontec.org/" target="_blank"><img src="https://admin.dataella.com/capturador/Icontec/Enc_ICONTEC2021/images/banner-2022.jpg"   width="200"></a></p>
	</footer>
</body>
</html>
<?php
#los datos a recibir

$nombre_empresa = $_POST['nombre_empresa'];
$nombre = $_POST['nombre'];
$cargo = $_POST['cargo'];
$correo = $_POST['correo']; 
$ciudad = $_POST['ciudad']; 
$pregunta1_1 = $_POST['pregunta1_1']; #
$pregunta2 = $_POST['pregunta2']; 
$pregunta3 = $_POST['pregunta3']; 
$pregunta4_1 = $_POST['pregunta4_1']; 
$pregunta4_2 = $_POST['pregunta4_2']; 
$pregunta1_cinco = $_POST['pregunta1_cinco']; #
#$pregunta6 = $_POST['pregunta6']; #(isset($_POST['pregunta6']) && !empty($_POST['pregunta6'])) ? $_POST['pregunta6'] : NULL;
$pregunta6 = (isset($_POST['pregunta6'])) ? $_POST['pregunta6'] : NULL; #variables que pueden ser nulas
#$pregunta6_2 = $_POST['pregunta6_2']; 
#$pregunta6_3 = $_POST['pregunta6_3']; 
#$pregunta6_4 = $_POST['pregunta6_4']; 
#$pregunta6_5 = $_POST['pregunta6_5']; 
#$pregunta6_6 = $_POST['pregunta6_6']; 
$pregunta6_2 = (isset($_POST['pregunta6_2'])) ? $_POST['pregunta6_2'] : NULL;
$pregunta6_3 = (isset($_POST['pregunta6_3'])) ? $_POST['pregunta6_3'] : NULL;
$pregunta6_4 = (isset($_POST['pregunta6_4'])) ? $_POST['pregunta6_4'] : NULL;
$pregunta6_5 = (isset($_POST['pregunta6_5'])) ? $_POST['pregunta6_5'] : NULL;
$pregunta6_6 = (isset($_POST['pregunta6_6'])) ? $_POST['pregunta6_6'] : NULL;

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
$pregunta13 = (isset($_POST['pregunta13'])) ? $_POST['pregunta13'] : NULL; #variables que pueden ser nulas
$pregunta14 = (isset($_POST['pregunta14'])) ? $_POST['pregunta14'] : NULL; #variables que pueden ser nulas
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
$pregunta20 = (isset($_POST['pregunta20'])) ? $_POST['pregunta20'] : NULL; #variables que pueden ser nulas
$pregunta21_1 = (isset($_POST['pregunta21_1'])) ? $_POST['pregunta21_1'] : NULL; #variables que pueden ser nulas
$pregunta21_2 = (isset($_POST['pregunta21_2'])) ? $_POST['pregunta21_2'] : NULL; #variables que pueden ser nulas
$pregunta21_2 = (isset($_POST['pregunta21_2'])) ? $_POST['pregunta21_2'] : NULL; #variables que pueden ser nulas 
$pregunta21_4 = (isset($_POST['pregunta21_4'])) ? $_POST['pregunta21_4'] : NULL; #variables que pueden ser nulas 
$pregunta21_5 = (isset($_POST['pregunta21_5'])) ? $_POST['pregunta21_5'] : NULL; #variables que pueden ser nulas 
$pregunta22 = (isset($_POST['pregunta22'])) ? $_POST['pregunta22'] : NULL; #variables que pueden ser nulas
$pregunta23_1 = (isset($_POST['pregunta23_1'])) ? $_POST['pregunta23_1'] : NULL; #variables que pueden ser nulas 
$pregunta23_2 = (isset($_POST['pregunta23_2'])) ? $_POST['pregunta23_2'] : NULL; #variables que pueden ser nulas 
$pregunta23_3 = (isset($_POST['pregunta23_3'])) ? $_POST['pregunta23_3'] : NULL; #variables que pueden ser nulas 
$pregunta23_4 = (isset($_POST['pregunta23_4'])) ? $_POST['pregunta23_4'] : NULL; #variables que pueden ser nulas 
$pregunta23_5 = (isset($_POST['pregunta23_5'])) ? $_POST['pregunta23_5'] : NULL; #variables que pueden ser nulas 
$pregunta24 = (isset($_POST['pregunta24'])) ? $_POST['pregunta24'] : NULL; #variables que pueden ser nulas
$pregunta25_1 = (isset($_POST['pregunta25_1'])) ? $_POST['pregunta25_1'] : NULL; #variables que pueden ser nulas 
$pregunta25_2 = (isset($_POST['pregunta25_2'])) ? $_POST['pregunta25_2'] : NULL; #variables que pueden ser nulas 
$pregunta25_3 = (isset($_POST['pregunta25_3'])) ? $_POST['pregunta25_3'] : NULL; #variables que pueden ser nulas 
$pregunta25_4 = (isset($_POST['pregunta25_4'])) ? $_POST['pregunta25_4'] : NULL; #variables que pueden ser nulas 
$pregunta25_5 = (isset($_POST['pregunta25_5'])) ? $_POST['pregunta25_5'] : NULL; #variables que pueden ser nulas 
$pregunta26 = (isset($_POST['pregunta26'])) ? $_POST['pregunta26'] : NULL; #variables que pueden ser nulas
$pregunta27_1 = (isset($_POST['pregunta27_1'])) ? $_POST['pregunta27_1'] : NULL; #variables que pueden ser nulas 
$pregunta27_2 = (isset($_POST['pregunta27_2'])) ? $_POST['pregunta27_2'] : NULL; #variables que pueden ser nulas 
$pregunta27_3 = (isset($_POST['pregunta27_3'])) ? $_POST['pregunta27_3'] : NULL; #variables que pueden ser nulas 
$pregunta27_4 = (isset($_POST['pregunta27_4'])) ? $_POST['pregunta27_4'] : NULL; #variables que pueden ser nulas 
$pregunta27_5 = (isset($_POST['pregunta27_5'])) ? $_POST['pregunta27_5'] : NULL; #variables que pueden ser nulas 
$pregunta28 = (isset($_POST['pregunta28'])) ? $_POST['pregunta28'] : NULL; #variables que pueden ser nulas
$pregunta29_1 = (isset($_POST['pregunta29_1'])) ? $_POST['pregunta29_1'] : NULL; #variables que pueden ser nulas 
$pregunta29_2 = (isset($_POST['pregunta29_2'])) ? $_POST['pregunta29_2'] : NULL; #variables que pueden ser nulas 
$pregunta29_3 = (isset($_POST['pregunta29_3'])) ? $_POST['pregunta29_3'] : NULL; #variables que pueden ser nulas 
$pregunta29_4 = (isset($_POST['pregunta29_4'])) ? $_POST['pregunta29_4'] : NULL; #variables que pueden ser nulas 
$pregunta29_5 = (isset($_POST['pregunta29_5'])) ? $_POST['pregunta29_5'] : NULL; #variables que pueden ser nulas
$pregunta30 = $_POST['pregunta30']; 
$pregunta31 = $_POST['pregunta31']; 
$pregunta32_1 = $_POST['pregunta32_1']; 
$pregunta32_2 = $_POST['pregunta32_2']; 
$pregunta33 = $_POST['pregunta33']; 

/*
if (isset($_POST['fecha1']) && !empty($_POST['fecha1']) &&
(isset($_POST['hora1']) && !empty($_POST['hora1'])) &&
(isset($_POST['descripcion']) && !empty($_POST['descripcion'])) &&
(isset($_POST['id_usuario']) && !empty($_POST['id_usuario'])) &&
(isset($_POST['id_departamento']) && !empty($_POST['id_departamento'])) &&
(isset($_POST['id_entrega']) && !empty($_POST['id_entrega']))) {            

$Prestamo1 = $_POST['fecha1'];
$Prestamo2 = $_POST['hora1'];
$Prestamo3 = $_POST['descripcion'];
$Prestamo4 = $_POST['id_usuario'];
$Prestamo5 = $_POST['id_departamento'];
$Prestamo6 = $_POST['id_entrega'];
$Prestamo7 = (isset($_POST['pregunta6']) && !empty($_POST['pregunta6'])) ? $_POST['pregunta6'] : NULL;
$Prestamo8 = (isset($_POST['hora2']) && !empty($_POST['hora2'])) ?  $_POST['hora2'] : NULL;
$Prestamo9 = (isset($_POST['id_ingeniero']) && !empty($_POST['id_ingeniero'])) ? $_POST['id_ingeniero'] : NULL;
$Prestamo10 = (isset($_POST['id_recepcion']) && !empty($_POST['id_recepcion'])) ? $_POST['id_recepcion'] : NULL;

if ($stmt = $mysqli->prepare("INSERT INTO prestamo (fecha1, hora1, descripcion, id_usuario, id_departamento, id_entrega, fecha2, hora2,  id_ingeniero, id_recepcion) values ('$Prestamo1','$Prestamo2', '$Prestamo3', '$Prestamo4', '$Prestamo5', '$Prestamo6', '$Prestamo7', '$Prestamo8', '$Prestamo9', '$Prestamo10')")) {

     if($stmt->execute()) {     
         echo '<script>alert("Datos Ingresados Correctamente")</script> ';
     } else {
                 '<script>alert("Error al ingresar")</script> ';
     }

}
}
*/



if( !empty($nombre_empresa) || !empty($nombre) || !empty($cargo)  || !empty($correo) || !empty($ciudad) ||
!empty($pregunta1_1) || !empty($pregunta2) || !empty($pregunta3) || !empty($pregunta4_1) || !empty($pregunta4_2) || !empty($pregunta1_cinco) || !empty($pregunta6) || !empty($pregunta6_2) || 
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
!empty($pregunta32_2) || !empty($pregunta33))
/*if( 
isset($nombre_empresa) ||isset($nombre) ||isset($cargo)  ||isset($correo) ||isset($ciudad) ||
isset($pregunta1_1) || isset($pregunta2) || isset($pregunta3) || isset($pregunta4_1) || isset($pregunta4_2) || 
isset($pregunta1_cinco) || isset($pregunta6) || isset($pregunta6_2) || 
isset($pregunta6_3) || isset($pregunta6_4) || isset($pregunta6_5) || isset($pregunta6_6) ||
isset($pregunta7_1) || isset($pregunta7_2) || isset($pregunta7_3) || isset($pregunta7_4) ||
isset($pregunta7_5) || isset($pregunta7_6) || isset($pregunta8) || isset($pregunta9) || 
isset($pregunta10) || isset($pregunta11) || isset($pregunta12) || isset($pregunta13) || isset($pregunta14) || 
isset($pregunta15_1) || isset($pregunta15_2) || isset($pregunta16) || isset($pregunta17) || isset($pregunta18_1) ||
isset($pregunta18_2) || isset($pregunta18_3) || isset($pregunta18_4) ||
isset($pregunta18_5)|| isset($pregunta19)|| isset($pregunta20) || isset($pregunta21_1) || isset($pregunta21_2) || 
isset($pregunta21_3) || isset($pregunta21_4) || isset($pregunta21_5) || isset($pregunta22) || isset($pregunta23_1) ||
isset($pregunta23_2) || isset($pregunta23_3) || isset($pregunta23_4) || isset($pregunta23_5) || isset($pregunta24) || 
isset($pregunta25_1) || isset($pregunta25_2)|| isset($pregunta25_3) || isset($pregunta25_4) || isset($pregunta25_5) || 
isset($pregunta26) || isset($pregunta27_1) || isset($pregunta27_2) || isset($pregunta27_3)  || isset($pregunta27_4) || 
isset($pregunta27_5) || isset($pregunta28) || isset($pregunta29_1) || isset($pregunta29_2) || isset($pregunta29_3) || 
isset($pregunta29_4) || isset($pregunta29_5) || isset($pregunta30) || isset($pregunta31) || isset($pregunta32_1) || 
isset($pregunta32_2) || isset($pregunta33))*/
{
    $host = "localhost:3307";#apuntamos al puerto de la base de datos
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "prueba";#

    #enlazamos conexion con los atributos y representados con conn
    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
    if(mysqli_connect_error()){
        die('connect error('.mysqli_connect_error().')'.mysqli_connect_error());
    }
    else{
        #sentencias preparadas 
        $SELECT = "SELECT correo from usuarios where correo = ? limit 1";#DATO QUE NO SE VA A REPETIR -> en caso del formulario seria el correo
        $INSERT = "INSERT INTO usuarios(nombre_empresa , nombre , cargo , 
        correo , ciudad , pregunta1_1 , pregunta2 , pregunta3 , pregunta4_1 , 
        pregunta4_2 , pregunta1_cinco , pregunta6 , pregunta6_2 , pregunta6_3 , 
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
            , $pregunta1_1 , $pregunta2 , $pregunta3 , $pregunta4_1 , $pregunta4_2 , $pregunta1_cinco , $pregunta6 , $pregunta6_2 
            , $pregunta6_3 , $pregunta6_4 , $pregunta6_5 , $pregunta6_6 , $pregunta7_1 , $pregunta7_2 , $pregunta7_3 , $pregunta7_4 
            , $pregunta7_5 , $pregunta7_6 , $pregunta8 , $pregunta9 , $pregunta10 , $pregunta11 , $pregunta12 , $pregunta13 , $pregunta14 
            , $pregunta15_1 , $pregunta15_2 , $pregunta16 , $pregunta17 , $pregunta18_1 , $pregunta18_2 , $pregunta18_3 , $pregunta18_4 
            , $pregunta18_5 , $pregunta19 , $pregunta20 , $pregunta21_1 , $pregunta21_2 , $pregunta21_3 , $pregunta21_4 , $pregunta21_5 
            , $pregunta22 , $pregunta23_1 , $pregunta23_2 , $pregunta23_3 , $pregunta23_4 , $pregunta23_5 , $pregunta24 , $pregunta25_1 
            , $pregunta25_2 , $pregunta25_3 , $pregunta25_4 , $pregunta25_5 , $pregunta26 , $pregunta27_1 , $pregunta27_2 , $pregunta27_3 
            , $pregunta27_4 , $pregunta27_5 , $pregunta28 , $pregunta29_1 , $pregunta29_2 , $pregunta29_3 , $pregunta29_4 , $pregunta29_5 
            , $pregunta30 , $pregunta31 , $pregunta32_1 , $pregunta32_2 , $pregunta33);
            $stmt ->execute();
            #echo "¡Gracias por tu retroalimentación!.";
        }
        else {
            #echo "alguien registro ese correo."; #comentario si se registra otra encuesta con el mismo correo

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

