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
                    <div class="row-top"><h1 class="title">Registrarme</h1></div>
                    <div class="row-center min-height-2">

                        <!--<p>
                            <h2>El usuario ha sido creado con &eacute;xito.</h2>
                            <p>Gracias por registrarte, <?//=$this->session->flashdata('username');?>. Un correo ha sido enviado a <?//=$this->session->flashdata('email');?> con detalles de como activar tu cuenta.</p>
                            <p>Recibiras un correo en tu bandeja de entrada. Debes seguir el enlace en ese correo antes de logearte.</p>
                        </p>-->

                        <form id="formAccount" class="margin-left-1" action="<?//=site_url('/panel/micuenta/edit');?>" method="post" enctype="application/x-www-form-urlencoded">
                            <p class="span-10">
                                <label class="label3 float-left">*Nombre:</label>
                                <input type="text" name="txtFirstName" class="input-form float-right validate" tabindex="1" />
                            </p>
                            <p class="span-10 clear">
                                <label class="label3 float-left">*Apellido:</label>
                                <input type="text" name="txtLastName" class="input-form float-right validate" tabindex="2" />
                            </p>
                            <p class="span-10 clear">
                                <label class="label3 float-left">*Email:</label>
                                <input type="text" name="txtEmail" class="input-form float-right validate" tabindex="3" />
                            </p>
                            <p class="span-10 clear">
                                <label class="label3 float-left">Tel&eacute;fono:</label>
                                <input type="text" name="txtPhone" class="input-phone float-right" tabindex="5" />
                                <input type="text" name="txtPhoneArea" class="input-phonearea float-right" tabindex="4" />
                            </p>
                            <p class="span-10 clear">
                                <label class="label3 float-left">*Usuario:</label>
                                <input type="text" name="txtUser" class="input-form float-right validate" tabindex="6" />
                            </p>
                            <p class="span-10 clear">
                                <label class="label3 float-left">*Password:</label>
                                <input type="password" name="txtPass" class="input-form float-right validate" tabindex="7" />
                            </p>
                            <p class="span-10 clear">
                                <label class="label3 float-left">*Repetir Contrase&ntilde;a:</label>
                                <input type="password" name="txtPass2" class="input-form float-right validate" tabindex="8" />
                            </p>

                            <div class="span-10 clear prepend-top">
                                <div class="float-right margin-left-1">
                                    <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="19" height="19" id="SecurImage_as3" align="middle">
                                        <param name="allowScriptAccess" value="sameDomain" />
                                        <param name="allowFullScreen" value="false" />
                                        <param name="movie" value="images/securimage_play.swf?audio=<?//=site_url('/captcha/play/');?>&bgColor1=#777&bgColor2=#fff&iconColor=#000&roundedCorner=5" />
                                        <param name="quality" value="high" />
                                        <param name="bgcolor" value="#ffffff" />
                                        <embed src="images/securimage_play.swf?audio=<?//=site_url('/captcha/play/');?>&bgColor1=#777&bgColor2=#fff&iconColor=#000&roundedCorner=5" quality="high" bgcolor="#ffffff" width="19" height="19" name="SecurImage_as3" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
                                    </object><br />
                                    <a href="javascript:void($('#imgCaptcha').attr('src', '<?//=site_url('/captcha/index/');?>/'+Math.random()));" tabindex="-1" title="Mostrar otro"><img src="images/icon_refresh.gif" alt="Mostrar otro" onclick="this.blur()" align="bottom" /></a>
                                </div>
                                <img id="imgCaptcha" src="images/captcha.png<?//=site_url('/captcha/index/'.md5(time()));?>" align="left" width="180" height="65" alt="" class="float-right" />
                            </div>
                            <p class="span-10 clear">
                                <label class="label3 float-left">*Ingrese C&oacute;digo:</label>
                                <input type="text" name="txtCaptcha" maxlength="6" class="input-captcha validate" tabindex="9" />
                            </p>

                            <div class="clear span-15 text-center prepend-top"><button type="button" class="button2" onclick="Account.save();">Registrarme</button></div>
                        </form>
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