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
                    <div class="row-top"><h1 class="title">Cuenta Plus</h1></div>
                    <div class="row-center min-height-2">

       <?php //if( $this->session->userdata('fondo')==0 ){?>
                        <div class="notice">Usted no posee saldo suficiente para adquirir esta cuenta plus, para realizar esta operaci&oacute;n tiene que agregar fondos a su cuenta.</div>

       <?php //}else{
                /*if( !isset($action) ){
                    if( !$this->session->flashdata('cp_status') ){*/?>

                        <p class="text-destacado">
                            <b>"Canjee fondos</b> y podr&aacute; obtener su <b>CUENTA PLUS</b>
                            <br />permitiendole acceder a servicios adicionales<b>"</b>
                        </p>
                        <div class="message-rectangle">Algunos Beneficios de su CUENTA PLUS</div>
                        
                        <ul class="ul-list-cuentaplus">
                            <li>Cargar hasta <b>10 propiedades.</b></li>
                            <li>Agregar hasta <b>8 fotos por propiedad.</b></li>
                            <li>Ubicar su propiedad en un <b>mapa de google.</b></li>
                            <li class="sintip"><br /><b>y MUCHO M&Aacute;S!!!</b></li>
                        </ul>
                        
                        <div class="text-center">
                            <img src="images/cuenta_plus.png" alt="Obtene tu CUENTA PLUS por solo U$S 100 ANUALES " />
                            <br /><br />
                            <button type="button" class="button-large">Obtener Cuenta</button>
                        </div>

                <?php //}elseif( $this->session->flashdata('cp_status')=="insufficient_amount" ){?>

                        <div class="notice">Usted no posee saldo suficiente para adquirir esta cuenta plus, para realizar esta operaci&oacute;n tiene que agregar fondos a su cuenta.</div>

                <?php //}elseif( $this->session->flashdata('cp_status')=="ok" ){?>
                        <div class="notice">Gracias por adquirir una Cuenta Plus</div>
                        
                <?php /*}
                 }else{
                      if( $action=="confirm_buy" && !$check_cuentaplus['result']){*/?>

                            <div class="text-destacado">
                                <p>Se va realizar una compra de la Cuenta Plus por un valor de U$S 100</p>
                                <p>¿Esta seguro de realizar esta compra?</p>
                                <br />
                                <button type="button" class="button-large" onclick="location.href='<?//=site_url('/panel/cuentaplus/shipping/');?>';">Aceptar</button>&nbsp;&nbsp;&nbsp;
                                <button type="button" class="button-large" onclick="location.href='<?//=site_url('/panel/cuentaplus/cancel/');?>';">Cancelar</button>
                            </div>

                    <?php //}elseif( $action=="confirm_buy" && $check_cuentaplus['result'] ){?>

                        <div class="notice">Usted ya posee el servicio de cuenta plus hasta el <?//=$check_cuentaplus['date'];?>. Si desea extender su plazo haga clic <a href="<?//=site_url('/panel/cuentaplus/shipping/');?>" class="link">aqu&iacute;</a></div>

                    <?php //}elseif( $action=="cancel" ){?>

                            <div class="text-destacado">
                                <p>La compra de la Cuenta Plus ha sido cancelada</p><br />
                                <p><a href="<?//=site_url('/index/');?>" class="link">Volver al Home</a></p>
                            </div>

                    <?php /*}
                 }
            }*/?>


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