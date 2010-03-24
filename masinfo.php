<?php
$execscript=false;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta content="Boks - 0.3.4" name="generator"/>
    <title>AlquileresTemporarios.org</title>

    <?php require('includes/head_inc.php');?>
</head>

<body>
<div class="container">

    <div class="span-24 last">

        <!-- =============== HEADER =============== -->
        <?php require('includes/header_inc.php');?>
        <!-- =============== END HEADER =============== -->

        <!-- =============== CONTAINER CENTRAL =============== -->
        <div class="clear span-24 main-container">
            <div class="column-left">
                <div class="float-left">
                    <div class="row-top"><h1 class="title">Detalle Propiedad</h1></div>
                    <div class="row-center min-height-2">
                        <div class="more-info">
                            <div class="column-1">
                                <div class="photo-gallery">
                                    <div class="content-photo"><a href="#" id="thumb-preview"><img src="casas/1_casa_iberadria.jpg" alt="" width="316" height="233" /></a></div>
                                </div>
                                <div class="thumbs">
                                    <div class="col-arrow"><a href="javascript:void(ImageGallery.back());"><img src="images/icon_arrow_left.png" alt="Left" onmouseover="this.src='images/icon_arrow_left_over.png'" onmouseout="this.src='images/icon_arrow_left.png'" /></a></div>
                                    <div class="col-middle">
                                        <!--<ul id="container-thumbs">
                                            <li></li>
                                        </ul>-->
                                    </div>
                                    <div class="col-arrow"><a href="javascript:void(ImageGallery.back());"><img src="images/icon_arrow_right.png" alt="Left" onmouseover="this.src='images/icon_arrow_right_over.png'" onmouseout="this.src='images/icon_arrow_right.png'" /></a></div>
                                </div>
                                <div class="description margin-left-1">
                                    <h2>Descripci&oacute;n</h2>
                                    <p>asdasd a d asd a sd as d asd sdfsdfsd fs dfsdf sdf dsfsda asdf a sdf asd fa sdf sa fd sdf</p>
                                </div>
                            </div>

                            <div class="column-2">
                                <div class="slide">
                                    <img src="images/icon_contact2.png" alt="" class="icon-mail" />
                                    <form id="formConsult" action="" method="post" enctype="application/x-www-form-urlencoded">
                                        <div class="error"></div>
                                        <p>
                                            <label class="label2">*Nombre</label><br />
                                            <input type="text" name="txtName" class="input-contact validate" />
                                        </p>
                                        <p>
                                            <label class="label2">*E-mail</label><br />
                                            <input type="text" name="txtEmail" class="input-contact validate" />
                                        </p>
                                        <p>
                                            <label class="label2">*N&uacute;mero de Contacto</label><br />
                                            <input type="text" name="txtPhone" class="input-contact" />
                                        </p>
                                        <p>
                                            <label class="label2">Consulta</label>
                                            <textarea class="textarea-contact validate" name="txtConsult" cols="10" rows="3"></textarea>
                                        </p>
                                        <p class="center-text"><button type="button" class="button-contact" onclick="MoreInfo.send_consult();">Enviar</button></p>
                                    </form>
                                </div>

                                <div class="slide prepend-top">
                                    <img src="images/icon_contact2.png" alt="" class="icon-mail" />
                                    <p><img src="images/icon_web.png" alt="" /><a href="<?//=$data['website'];?>">www.misitio.com.ar<?//=$data['website'];?></a></p>
                                    <p><img src="images/icon_phone.png" alt="" /><span class="text-small">0261-4442192</span><?//=$data['phone'];?></p>
                                    <p><img src="images/icon_map.png" alt="" /><a href="#">Ver mapa</a></p>
                                </div>

                            </div>
                        </div>

                        <div class="more-info-servicios margin-left-1">
                            <h2>Servicios</h2>
                            <ul class="ul-list line-right">
                                <li><span>Servicios 1</span></li>
                                <li><span>Servicios 1</span></li>
                                <li><span>Servicios 1</span></li>
                                <li><span>Servicios 1</span></li>
                            </ul>
                            <ul class="ul-list line-right">
                                <li><span>Servicios 1</span></li>
                                <li><span>Servicios 1</span></li>
                                <li><span>Servicios 1</span></li>
                                <li><span>Servicios 1</span></li>
                            </ul>
                            <ul class="ul-list">
                                <li><span>Servicios 1</span></li>
                                <li><span>Servicios 1</span></li>
                                <li><span>Servicios 1</span></li>
                                <li><span>Servicios 1</span></li>
                            </ul>
                        </div>

                    </div>
                    <div class="row-bottom"></div>
                </div>

            </div>

            <!-- =============== BANNER VERTICAL =============== -->
            <?php require('includes/banner_vertical_inc.php');?>
            <!-- =============== END BANNER VERTICAL =============== -->

        </div>
        <!-- =============== END CONTAINER CENTRAL =============== -->

        <!-- =============== FOOTER =============== -->
        <?php require('includes/footer_inc.php');?>
        <!-- =============== END FOOTER =============== -->

    </div>

</div>
</body>
</html>