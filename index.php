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
                    <div class="row-top"><h1 class="title">Alquileres Destacados</h1></div>
                    <div class="row-center min-height-2">

                        <div class="prop-row">
                            <div class="column-1"><img src="casas/1_1_galeria_+1_thumb.jpg" alt="" /></div>
                            <div class="column-2">
                                <?php //$url=site_url('/masinfo/index/'.$row['prop_id']);?>

                                <h2><a href="<?//=$url;?>" class="link4">Propiedad 1</a></h2>
                                <p>fdfsd fsdfsdfsdgdsfgsdf g sdfgsdfgsdfg sdfgsd fgsdfg sdfgsdf g sdfgsdfgsdklfjgs dfgsd fgsdfgsd fgsdf g sdfgds df sdf s df sdf s df sdf</p>
                                <label class="label1">Categor&iacute;a:&nbsp;</label><span>Casas</span><br />
                                <label class="label1">Ciudad:&nbsp;</label><span>Mendoza</span><br />
                                <?php //if( !empty($row['price']) ){?><div class="float-left"><label class="label1">Precio:&nbsp;</label><span>$ 2500</span></div><?php //}?>
                                <div class="float-right"><button class="button-small">M&aacute;s info</button></div>
                            </div>
                        </div>
                        <div class="prop-row">
                            <div class="column-1"><img src="casas/1_1_galeria_+1_thumb.jpg" alt="" /></div>
                            <div class="column-2">
                                <?php //$url=site_url('/masinfo/index/'.$row['prop_id']);?>

                                <h2><a href="<?//=$url;?>" class="link4">Propiedad 1</a></h2>
                                <p>fdfsd fsdfsdfsdgdsfgsdf g sdfgsdfgsdfg sdfgsd fgsdfg sdfgsdf g sdfgsdfgsdklfjgs dfgsd fgsdfgsd fgsdf g sdfgds df sdf s df sdf s df sdf</p>
                                <label class="label1">Categor&iacute;a:&nbsp;</label><span>Casas</span><br />
                                <label class="label1">Ciudad:&nbsp;</label><span>Mendoza</span><br />
                                <?php //if( !empty($row['price']) ){?><div class="float-left"><label class="label1">Precio:&nbsp;</label><span>$ 2500</span></div><?php //}?>
                                <div class="float-right"><button class="button-small">M&aacute;s info</button></div>
                            </div>
                        </div>

                    </div>
                    <div class="row-bottom"></div>
                </div>

                <div class="float-left">
                    <div class="row-top"><h1 class="title">Destinos mas Buscados</h1></div>
                    <div class="row-center min-height-1">
                        <ul class="ul-list line-right">
                            <li><a href="#" class="link1"><span>Mendoza</span></a></li>
                            <li><a href="#" class="link1"><span>Mendoza</span></a></li>
                            <li><a href="#" class="link1"><span>Mendoza</span></a></li>
                        </ul>
                        <ul class="ul-list line-right">
                            <li><a href="#" class="link1"><span>Mendoza</span></a></li>
                            <li><a href="#" class="link1"><span>Mendoza</span></a></li>
                            <li><a href="#" class="link1"><span>Mendoza</span></a></li>
                        </ul>
                        <ul class="ul-list">
                            <li><a href="#" class="link1"><span>Mendoza</span></a></li>
                            <li><a href="#" class="link1"><span>Mendoza</span></a></li>
                            <li><a href="#" class="link1"><span>Mendoza</span></a></li>
                        </ul>
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