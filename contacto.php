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
                    <div class="row-top"><h1 class="title">Contacto</h1></div>
                    <div class="row-center min-height-2">
                        <!--<div class="form-contact-message">
                            <p>Muchas gracias por comunicarse,</p>
                            <p>En breve estaremos en contacto.</p>
                        </div>-->
                        <div class="form-contact">

                            <form id="formContact" action="<?//=site_url('/contacto/send');?>" method="post" enctype="application/x-www-form-urlencoded">
                                <div class="span-7">
                                    <p>
                                        <label class="label3">*Nombre:</label><br />
                                        <input type="text" class="input-contact2 validate" name="txtName" />
                                    </p>
                                    <p>
                                        <label class="label3">*Email:</label><br />
                                        <input type="text" class="input-contact2 validate" name="txtEmail" />
                                    </p>
                                </div>
                                <div class="span-6">
                                    <p>
                                        <label class="label3">Tel&eacute;fono:</label><br />
                                        <input type="text" class="input-contact2 input" name="txtPhone" />
                                    </p>
                                    <p>
                                        <label class="label3">Area de Consulta:</label><br />
                                        <select name="cboArea" class="select-contact2">
                                            <option value="jbasaez@mydesign.com.ar">Publicidad</option>
                                            <option value="jbasaez@mydesign.com.ar">Consultas</option>
                                        </select>
                                    </p>
                                </div>
                                <div class="clear span-13">
                                    <p>
                                        <label class="label3">*Consulta:</label><br />
                                        <textarea class="textarea-contact2 validate" name="txtConsult" rows="22" cols="6"></textarea>
                                    </p>
                                </div>
                                <div class="clear span-13">
                                    <p class="clear"><label class="label-legend">(*) Campos obligatorios</label></p>
                                </div>

                                <div class="clear span-13 text-center">
                                    <button type="button" class="button-small" onclick="Contact.send();">Enviar</button>
                                </div>
                            </form>
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