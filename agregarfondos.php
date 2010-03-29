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
                    <div class="row-top"><h1 class="title">Agregar Fondos</h1></div>
                    <div class="row-center min-height-2">

                        <div class="message-attention"><div class="message">El fondo que adquiera a trav&eacute;s de nuestra web no ser&aacute; reembolsable y el mismo solo puede ser utilizado dentro de los servicios ofrecidos por <b>alquilerestemporarios.org</b></div></div>

                        <form id="form1" action="<?//=site_url('panel/agregarfondos/send/');?>" class="prepend-top" method="post">
                            <div class="prepend-4">
                                <div class="span-5 first">
                                    <label class="label-large">Saldo Disponible</label><br />
                                    <input type="text" class="input-saldo" value="U$S 5000<?//=$this->session->userdata('fondo');?>" onkeypress="return false;" />
                                </div>
                                <div class="span-4 last">
                                    <label class="label-large">Agregar Fondos</label><br />
                                    <label class="label3">Importe&nbsp;</label>
                                    <select name="cboImport" id="cboImport">
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                                <input type="hidden" name="credit" />                                
                            </div>
                            
                            <div class="span-15 last text-center"><br /><a href="javascript:void(Fondo.buy());"><img src="images/btn_buy.jpg" alt="Comprar" /></a></div>

                        </form>

                        <script type="text/javascript">
                        <!--
                            Fondo.initializer();
                        -->
                        </script>

                        <div class="notice">La compra ha sido realizada con &eacute;xito.</div>
                        <div class="notice">La compra ha sido cancelada.</div>

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