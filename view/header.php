<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        <?php
            $path = basename($_SERVER['PHP_SELF']);
            $file = substr(basename($path), 0, -3); // $file is set to "index.php" $file = basename($path, ".php"); // $file is set to "index" 
            echo "Abraham - $file";
        ?>
    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="vCard template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../assets/styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="../assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../assets/plugins/mCustomScrollbar/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="../assets/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="../assets/styles/responsive.css">
</head>

<body>

    <div class="super_container" style="padding:0px;">

        <!-- Header -->
        <br><br><br><br><br>
        <header class="header">
            <div class="header_content d-flex flex-row align-items-center justify-content-start">
                <div class="logo">Abraham<span>CV</span></div>
                <div class="main_nav d-flex flex-row align-items-end justify-content-start">
                    <ul class="d-flex flex-row align-items-center justify-content-start">
                        <li class="active"><a href="index.php">Inicio</a></li>
                        <li><a href="Habilidades.php">Habilidades</a></li>
                        <li><a href="Servicios.php">Servicios</a></li>
                        <li><a href="Experiencia.php">Experiencia</a></li>
                        <li><a href="Educacion.php">Educacion</a></li>
                        <li><a href="portafolio.php">Portafolio</a></li>
                        <li><a href="contacto.php">Contacto</a></li>
                    </ul>
                    <div class="header_button ml-auto">
                        <a href="#">Descarga mi CV</a>
                        <div class="d-flex flex-column align-items-center justify-content-center"><img src="../assets/images/download.png" alt=""></div>
                    </div>
                </div>
                <!-- Menu -->
                <div class="menu">
                    <div class="menu_content d-flex flex-row align-items-start justify-content-end">
                        <div class="hamburger ml-auto">menu</div>
                        <div class="menu_nav text-right">
                            <ul>
                                <li><a href="index.php">Inicio</a></li>
                                <li><a href="Habilidades.php">Habilidades</a></li>
                                <li><a href="Servicios.php">Servicios</a></li>
                                <li><a href="Experiencia.php">Experiencia</a></li>
                                <li><a href="Educacion.php">Educacion</a></li>
                                <li><a href="portafolio.php">Portafolio</a></li>
                                <li><a href="contacto.php">Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <div class="content_container">
            <div class="main_content_outer d-flex flex-xl-row flex-column align-items-start justify-content-start">

                <!-- General Information -->
                <div class="general_info d-flex flex-xl-column flex-md-row flex-column">
                    <div>
                        <div class="general_info_image">
                            <div class="background_image" style="background-image:url(../assets/images/smith.jpg)"></div>
                            <div class="header_button_2">
                                <a href="#">Available for freelance work</a>
                                <div class="d-flex flex-column align-items-center justify-content-center"><img src="../assets/images/download.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="general_info_content">
                        <div class="general_info_content_inner mCustomScrollbar" data-mcs-theme="minimal-dark">
                            <div class="general_info_title">Información general</div>
                            <ul class="general_info_list">
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="../assets/images/icon_1.png" alt=""></div>
                                    <div class="general_info_text">Nombre: <span>Abraham Rivera</span></div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"></div>
                                    <div class="general_info_text">Ubicación: <span>Mexico CDMX</span></div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="../assets/images/icon_2.png" alt=""></div>
                                    <div class="general_info_text">Fecha de nacimiento: <span>Septiembre 24, 1999</span></div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="../assets/images/icon_3.png" alt=""></div>
                                    <div class="general_info_text"><a href="mailto:contact@linque.com?subject=Job_Inquiry">contactme@templatename.com</a></div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="../assets/images/icon_4.png" alt=""></div>
                                    <div class="general_info_text">+52 55 15753479</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="general_info_icon d-flex flex-column align-items-start justify-content-center"><img src="../assets/images/icon_5.png" alt=""></div>
                                    <div class="general_info_text"><a href="mailto:contact@linque.com">www.mytemplatename.com</a></div>
                                </li>
                            </ul>

                            <!-- Social -->
                            <div class="social_container">
                                <ul class="d-flex flex-row align-items-start justify-content-start">
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>