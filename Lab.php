<!DOCTYPE html>
<?php
include('funciones.php');
$xc = conectar();
//////////////Modelosautos//////////////
$sql = "SELECT*FROM header WHERE idheader=1";
$res = mysqli_query($xc,$sql);

$sql_2 = "SELECT*FROM header WHERE idheader=2";
$res_2 = mysqli_query($xc,$sql_2);

//////////////Infoautos//////////////
$sql_info1 = "SELECT*FROM infoauto WHERE idinfoauto=1";
$res_info1 = mysqli_query($xc,$sql_info1);

$sql_info2 = "SELECT*FROM infoauto WHERE idinfoauto=2";
$res_info2 = mysqli_query($xc,$sql_info2);

//////////////Fut//////////////
$sql_comienzo = "SELECT*FROM fut WHERE idfut=1";
$res_comienzo = mysqli_query($xc,$sql_comienzo);

$sql_comienzo2 = "SELECT*FROM fut WHERE idfut=2";
$res_comienzo2 = mysqli_query($xc,$sql_comienzo2);

////////////////Lista///////
$sql_redes = "SELECT*FROM lista WHERE idLista=1";
$res_redes = mysqli_query($xc,$sql_redes);

$sql_redes2 = "SELECT*FROM lista WHERE idLista=2";
$res_redes2 = mysqli_query($xc,$sql_redes2);

$sql_redes3 = "SELECT*FROM lista WHERE idLista=3";
$res_redes3 = mysqli_query($xc,$sql_redes3);
?>
<html>
<head>
    <title>Agencia de Autom&oacuteviles</title>
    <link type="text/css" rel="stylesheet" href="CSS/Lab02.css" >
</head>

<body>
  
  <div id="contenedor">
    <!--Cabeza-------------------------------------------------------------------------------------->
    <header id="cabeza_principal">
      <div class="Logo">
        <img src="Cabecera/logo.png" alt="logo">                                                                                                                                                                                                                                                                                                                                                                                    
      </div>
      <div class="Titulo">
        <img src="Cabecera/portada01.png" alt="logo">
        
      </div>
      <form>
    <a href="Registro.html">
        <input type="button" value="Registro">
    </a>
</form>
      
    </header>


    <!--Cuerpo------------------------------------------------------------------------------------>
    <section >
        <article class="autos">         
            
            <div class="autos_info">
              <div class="img_auto">
                <img src="Autos/auto1.png">
              </div>
              <div class="texto">
                <div class="modelo_auto"><?php while($filas = mysqli_fetch_array($res)){
                  echo $filas['contenido'];
                } ?></div>
                <div class="Cuerpo"><?php while($filas_info1 = mysqli_fetch_array($res_info1)){
                  echo $filas_info1['contenido'];
                } ?>
                </div>
              </div>
            </div>    
        </article>

        <article class="autos">         
            
          <div class="autos_info">
            <div class="img_auto">
              <img src="Autos/auto2.png">
            </div>
            <div class="texto">
              <div class="modelo_auto"><?php while($filas_2 = mysqli_fetch_array($res_2)){
                  echo $filas_2['contenido'];
                } ?></div>
              <div class="Cuerpo"><?php while($filas_info2 = mysqli_fetch_array($res_info2)){
                  echo $filas_info2['contenido'];
                } ?>
              </div>
            </div>
          </div>    
      </article>
    </section>
    
    <!--Anuncios-laterales------------------------------------------------------------------------------------>
    
    <aside >
      
      
        <div class="Publicidad">
          <video src="Anuncios_videos/autoanuncio2.mp4" width="100%" autoplay muted loop></video>
        </div>
        <div class="minipublicidades">
          <article class="minipublicidad1"> 
            <img src="Publicidad/minipublicidad1.png">
          </article>
          <article class="minipublicidad2"> 
            <img src="Publicidad/minipublicidad2.png">
          </article>
          <article class="minipublicidad3"> 
            <img src="Publicidad/minipublicidad3.png">
          </article>
        </div>
        <div class="Publicidad">
          <video src="Anuncios_videos/autoanuncio.mp4" width="100%" autoplay muted loop></video>
        </div>
    </aside>
    
    <!-------------------------------------------------------------------------------------------pie-->
    
    <footer>
      
      
      <div class="fut">
        <h1><div class="Cuerpo"><?php while($filas_comienzofut = mysqli_fetch_array($res_comienzo)){
                  echo $filas_comienzofut['contenido'];
                } ?></h1> 
          <p><?php while($filas_comienzofut2 = mysqli_fetch_array($res_comienzo2)){
                  echo $filas_comienzofut2['contenido'];
                } ?></p>
                      
          <ul id="lista"> <!--Lista-->
            <ul>
                            <img class="iconos" src="Iconos/facebook.png">
                            <a target="_blank" class="Red-Social" ><?php while($filas_redes = mysqli_fetch_array($res_redes)){
                            echo '<a target="_blank" href="'.$filas_redes['link'].'"class="Red-Social" >'.$filas_redes['redsocial'].'</a>';
                          } ?>
                            </a>
            </ul>
            <ul>
                            <img class="iconos" src="Iconos/twitter.png">
                            <a  target="_blank" class="Red-Social"><?php while($filas_redes2 = mysqli_fetch_array($res_redes2)){
                            echo '<a target="_blank" href="'.$filas_redes2['link'].'"class="Red-Social" >'.$filas_redes2['redsocial'].'</a>';
                          } ?>
                            </a>
            </ul>
            <ul>
                          <img class="iconos" src="Iconos/youtube.png">
                          <a  target="_blank" class="Red-Social"><?php while($filas_redes3 = mysqli_fetch_array($res_redes3)){
                            echo '<a target="_blank" href="'.$filas_redes3['link'].'"class="Red-Social" >'.$filas_redes3['redsocial'].'</a>';
                          } ?>
                          </a>
            </ul>
            </ul>
                    
      </div>
                
      <div class="bot">
                    <p>2022 @CARSFORYOU
                    </p>
      </div>
    </footer>

  </div>
  
</body>
</html>