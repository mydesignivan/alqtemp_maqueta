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
        <?php require('includes/header_paneluser_inc.php');?>
        <!-- =============== END HEADER =============== -->

        <!-- =============== CONTAINER CENTRAL =============== -->
        <div class="clear span-24 main-container">
            <div class="column-left">
                <div class="float-left">
                    <div class="row-top"><h1 class="title">Mi Cuenta</h1></div>
                    <div class="row-center min-height-2">

                        <div class="span-10 prepend-left-small">
                            <form id="formAccount" action="<?//=site_url('/panel/micuenta/edit');?>" method="post" enctype="application/x-www-form-urlencoded">
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

                                <div class="clear span-15 text-center prepend-top">
                                    <button type="button" class="button-large" onclick="Account.save();">Guardar</button>
                                </div>

                                <div class="span-10 clear"><label class="label-legend">(*) Campo obligatorios</label></div>
                            </form>
                        </div>
                        
                        <div class="span-4 last prepend-1">
                            <br /><br /><br />
                            <label class="label-large">Saldo Disponible</label><br />
                            <input type="text" class="input-saldo" value="U$S 5000<?//=$this->session->userdata('fondo');?>" onkeypress="return false;" />
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