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
                    <div class="row-top"><h1 class="title">Propiedades</h1></div>
                    <div class="row-center min-height-2">

                        <form id="formProp" action="" method="post" enctype="application/x-www-form-urlencoded">
                            <p class="span-10">
                                <label class="label3 float-left">*Direcci&oacute;n:</label>
                                <input type="text" name="txtAddress" id="txtAddress" class="input-form float-right validate" tabindex="1" value="<?=@$data['address'];?>" />
                            </p>

                            <?php
                                $html = '
                                <div class="row-photo">
                                    <label class="label3 float-left">*Foto:</label>
                                    <div class="float-right">
                                        <div class="ajaxloader2"><img src="images/ajax-loader.gif" alt="" />&nbsp;&nbsp;Subiendo Im&aacute;gen...</div>
                                        <a href="#" class="float-left previewthumb" rel="group"><img src="" alt="" width="69" height="60" /></a>
                                        <input type="text" class="input-form ajaxupload-input float-left" value="" />
                                        <button class="button-small float-left btnexamin">Examinar</button>
                                    </div>
                                </div>';

                                $images = @$data['images'];
                                if( empty($images) ) echo $html;
                                else{
                                    /*$n=0;
                                    foreach( $images->result_array() as $image ){
                                        $n++;

                                        echo '<div class="row">';
                                        if( $n==1 ) echo '<span class="cell">*Foto:</span>';
                                        echo '<div class="col">';
                                        echo '  <div class="ajaxloader2"><img src="images/ajax-loader.gif" alt="" />&nbsp;&nbsp;Subiendo Im&aacute;gen...</div>';
                                        echo '  <a href="'.$image['name'].'" class="previewthumb" rel="group"><img src="'. $image['name_thumb'] .'" alt="" width="69" height="60" /></a>';
                                        echo '  <input type="text" name="" class="input style_input float-left ajaxupload-input" value="'.$image['name_original'].'" />';
                                        echo '  <div id="b'.$image['image_id'].'" class="button2 float-left btnexamin">Examinar</div>';
                                        if( $n>1 ) echo '<a class="button2 float-left" onclick="Prop.remove_row_file(this,'. $image['image_id'] .'); return false;">Eliminar</a>';
                                        echo '</div>'; //end col
                                        echo '</div>'; //end row
                                    }*/
                                }
                           ?>

                            <div class="clear span-10 append-bottom">
                                <div class="float-right">
                                    <a href="#" class="link-attachments" onclick="Prop.append_row_file(this); return false;">Adjuntar otro archivo</a>
                                    <p id="au-leyend" class="text-small">Archivos (jpg | gif | png) 2MB max &emsp; &emsp;</p>
                                </div>
                            </div>

                            <p class="clear span-10">
                                <label class="label3 float-left">*Descripci&oacute;n:</label>
                                <textarea name="txtDesc" id="txtDesc" class="textarea-form float-right validate" cols="22" rows="5"><?=@$data['description'];?></textarea>
                            </p>
                            <p class="clear span-10">
                                <label class="label3 float-left">*Categor&iacute;a:</label>
                                <?//=form_dropdown('cboCategory', $comboCategory, @$data["category_id"], 'class="select-form float-right" id="cboCategory"');?>
                            </p>

                            <div class="clear span-10">
                                <label class="label3 float-left">*Servicios:</label>

                                <div class="list-servicios">
                                    <ul>
                                        <li <?//=$class;?>>
                                            <input type="checkbox" name="checkbox" class="checkbox" value="<?//=$row['service_id'];?>" <?//=$checked;?> />
                                            <span>Servicio 1<?//=$row['name'];?></span>
                                        </li>
                                        <li class="row-par" <?//=$class;?>>
                                            <input type="checkbox" name="checkbox" class="checkbox" value="<?//=$row['service_id'];?>" <?//=$checked;?> />
                                            <span>Servicio 2<?//=$row['name'];?></span>
                                        </li>
                                        <li <?//=$class;?>>
                                            <input type="checkbox" name="checkbox" class="checkbox" value="<?//=$row['service_id'];?>" <?//=$checked;?> />
                                            <span>Servicio 3<?//=$row['name'];?></span>
                                        </li>
                                        <li class="row-par" <?//=$class;?>>
                                            <input type="checkbox" name="checkbox" class="checkbox" value="<?//=$row['service_id'];?>" <?//=$checked;?> />
                                            <span>Servicio 4<?//=$row['name'];?></span>
                                        </li>
                                        <li <?//=$class;?>>
                                            <input type="checkbox" name="checkbox" class="checkbox" value="<?//=$row['service_id'];?>" <?//=$checked;?> />
                                            <span>Servicio 5<?//=$row['name'];?></span>
                                        </li>
                                        <li class="row-par" <?//=$class;?>>
                                            <input type="checkbox" name="checkbox" class="checkbox" value="<?//=$row['service_id'];?>" <?//=$checked;?> />
                                            <span>Servicio 6<?//=$row['name'];?></span>
                                        </li>
                                    </ul>
                                </div>                                
                            </div>

                            <p class="clear span-10">
                                <label class="label3 float-left">*Pa&iacute;s:</label>
                                <?//=form_dropdown('cboCountry', $comboCountry, @$data["country_id"], 'id="cboCountry" class="select-form float-right validate" onchange="Prop.show_states(this);"');?>
                            </p>
                            <p class="clear span-10">
                                <label class="label3 float-left">*Provincia:</label>
                                <?//=form_dropdown('cboStates', $comboStates, @$data['state_id'], 'id="cboStates" class="select-form float-right validate"');?>
                            </p>
                            <p class="clear span-10">
                                <label class="label3 float-left">*Ciudad:</label>
                                <input type="text" name="txtCity" id="txtCity" class="input-form float-right validate" onblur="$(this).ucFirst();" value="<?=@$data['city'];?>" />
                            </p>
                            <p class="clear span-10">
                                <label class="label3 float-left">Telefono:</label>
                                <input type="text" name="txtPhone" class="input-form float-right" value="<?=@$data['phone'];?>" />
                            </p>
                            <p class="clear span-10">
                                <label class="label3 float-left">P&aacute;gina Web::</label>
                                <input type="text" name="txtWebsite" class="input-form float-right" onblur="$(this).formatURL();" value="<?=(@$data['website']==FALSE || @$data['website']=='') ? "http://" : @$data['website'];?>" />
                            </p>
                            <p class="clear span-10">
                                <label class="label3 float-left">Precio:</label>
                                <input type="text" name="txtPrice" class="input-form float-right" value="<?=@$data['price'];?>" />
                            </p>

                            <div class="span-10 clear"><label class="label-legend">(*) Campo obligatorios</label></div>

                            <div class="clear span-15 text-center prepend-top">
                                <button type="button" class="button-large" onclick="Prop.save();">Guardar</button>&nbsp;&nbsp;
                                <button type="button" class="button-large" onclick="location.href='<?//=site_url('/panel/propiedades/cancel');?>';">Cancelar</button>
                            </div>

                            <input type="hidden" name="services" value="" />
                            <input type="hidden" name="images_new" value="" />
                            <input type="hidden" name="images_deletes" value="" />
                            <input type="hidden" name="images_modified_id" value="" />
                            <input type="hidden" name="images_modified_name" value="" />
                            <input type="hidden" name="prop_id" value="<?=@$data['prop_id'];?>" />
                        </form>
                        <script type="text/javascript">
                        <!--
                            Prop.initializer();
                        -->
                        </script>
                        
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