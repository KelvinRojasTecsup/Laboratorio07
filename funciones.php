<?php 
function conectar(){
    $xc = mysqli_connect("localhost","root","","laboratorio");
    return $xc;
    die();
}
function desconectar($xc){
mysqli_close($xc);
}
?>
