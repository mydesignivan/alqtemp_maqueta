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

                        <?php if( @$status=="ok" ){?>
                        <!--<form id="form3" action="<?//=site_url('/login/account_access/');?>" method="post">
                            <p>
                                Muy Bien! Su contrase&ntilde;a ha sido cambiada!<br />
                                Por favor asegurese de memorizarla o anotarla en un lugar seguro.
                            </p>
                            <br />
                            <a href="javascript:$('form3').submit();" class="link5">Acceder a su cuenta</a>
                            
                            <input type="hidden" name="p1" value="<?//=$data['username'];?>" />
                            <input type="hidden" name="p2" value="<?//=$data['password'];?>" />
                        </form>-->

                        <?php }else{?>
                        <form id="form2" action="<?//=site_url('/recordarcontrasenia/send_newpass/'.$this->uri->segment(3)."/".$this->uri->segment(4));?>" method="post">
                            <p class="small">
                                Cambie su Contrase&ntilde;a<br />
                                Por favor, elija una contrase&ntilde;a para usar con su cuenta de AlquileresTemporarios.org
                            </p>
                            <p>
                                <div class="span-6 last"><label class="label3">Nueva Contrase&ntilde;a:</label></div>
                                <input type="password" name="txtPass" id="txtPass" class="input-form validate" />
                            </p>
                            <p>
                                <div class="span-6 last"><label class="label3">Verifique Nueva Contrase&ntilde;a:</label></div>
                                <input type="password" name="txtPass2" class="input-form validate" />
                            </p>

                            <div class="span-15 text-center prepend-top"><button type="button" onclick="RememberPass.send();" class="button-small">Cambiar</button></div>

                            <input type="hidden" name="usr" value="<?=@$username;?>" />
                            <input type="hidden" name="token" value="<?=@$token;?>" />
                        </form>
                        <?php }?>

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