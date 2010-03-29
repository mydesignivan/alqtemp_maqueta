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
                    <div class="row-top"><h1 class="title">Recordar Contrase&ntilde;a</h1></div>
                    <div class="row-center min-height-2">

                        <form id="form1" action="<?//=site_url('/recordarcontrasenia/send/');?>" method="post">
                        <?php if( @$status=="ok" ){?>
                            <p>Muy bien, le hemos enviado las instrucciones a su email. Reviselo!</p>
                            <p>Usted puede mantener esta pagina abierta mientras chequea su email. Si usted no recibe las instrucciones en el transcurso de un minuto o dos pruebe <a href="javascript:$('#form1').submit();">Reenviar las instrucciones</a></p>
                            <input type="hidden" name="txtField" value="<?=$field;?>" />

                        <?php }else{?>
                            <h2>¿Olvido su Contraseña?</h2>
                            <p>AlquileresTemporarios.org le enviara las instrucciones para resetear su contrase&ntilde;a a la direcci&oacute;n de correo asociada a su cuenta.</p>
                            <p>Por favor escriba su direcci&oacute;n de <b>email</b> o su <b>usuario</b> a continuaci&oacute;n.</p>
                            <br />
                            <p>
                                <label class="label3 float-left">Email/Usuario&nbsp;</label>
                                <input type="text" name="txtField" class="input-form float-left validate" />
                            </p>

                            <div class="span-15 text-center prepend-top">
                                <button type="button" class="button-small" onclick="RememberPass.send()">Enviar</button>
                            </div>
                        <?php }?>
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