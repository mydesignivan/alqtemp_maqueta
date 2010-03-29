<div class="span-24 last">
    <div class="header-col-left">
        <a href="http://www.alquilerestemporarios.org" class="logo"><img src="images/logo_alquilerestemp.png" alt="AlquileresTemporarios.org" /></a>
    </div>

    <div class="header-col-right">
        <div class="header-top">

            <!-- =============== LINKS HEADER TOP =============== -->
            <div class="column span-5 first">
                <a href="<?//=site_url('/index/');?>" class="link1"><img src="images/icon_home.png" alt="" /> Inicio</a>
                <a href="<?//=site_url('/contacto/');?>" class="link1"><img src="images/icon_contact.png" alt="" /> Contacto</a>
            </div>

            <div class="column prepend-1">
                <a href="<?//=site_url('/registro/');?>" onmouseover="this.firstChild.src='images/btn_register_over.png'" onmouseout="this.firstChild.src='images/btn_register.png'"><img src="images/btn_register.png" alt="Registrarse" /></a>
            </div>

            <!--<div class="float-left">
                <label class="label-user">Usuario:&nbsp;</label>
                <span class="text-small">iwmattoni&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <a href="" class="link2">(mi cuenta)</a>
            </div>
            <div class="float-right append-right-small">
                <button type="button" class="button-small">Salir</button>
            </div>-->
            <!-- =============== END LINKS HEADER TOP =============== -->

            <!-- =============== LOGIN =============== -->
            <div class="column span-2 float-right">
                <a href="javascript:Login.open_dialog();" class="link-signin">Login</a>
                <div class="form-login">
                    <a href="javascript:Login.close_dialog();" class="btn-login">Login</a>
                    <form id="formLogin" class="form" action="<?//=site_url('/login/');?>" enctype="application/x-www-form-urlencoded" method="post">
                        <p>
                            <label for="txtLoginUser" class="label-login">Usuario</label><br />
                            <input type="text" name="txtLoginUser" id="txtLoginUser" class="input-login validate" value="" />
                        </p>
                        <p>
                            <label for="txtLoginPass" class="label-login">Contrase&ntilde;a</label><br />
                            <input type="password" name="txtLoginPass" id="txtLoginPass" class="input-login validate" value="" />
                        </p>
                        <p><button type="submit" value="Entrar" class="button-login">Entrar</button></p>
                        <p><a href="<?//=site_url('/recordarcontrasenia/');?>" class="link2">¿Olvido su Contraseña?</a></p>
                    </form>
                    <div id="login-error"></div>
                </div>
            </div>
            <!-- =============== END LOGIN =============== -->
        </div>
    </div>

    <!-- =============== SEARCH =============== -->
    <div class="clear search">
        <form id="formSearch" action="<?//=site_url("/index/result/");?>" method="post" enctype="application/x-www-form-urlencoded">
            <div class="row1">
                <label class="label-search">Buscador&nbsp;</label>
                <div class="cont-input"><img src="images/icon_search.png" alt="" class="float-left" /><input type="text" class="i1" name="txtSearch" value="<?=@$_POST["txtSearch"];?>" onkeypress="if(getKeyCode(event)==13) $('#formSearch').submit();" /></div>
                <button type="submit" class="button-small">Buscar</button>
            </div>
            <div class="row2">
                <div class="span-4">
                    <select class="select-search"><option>Paises</option></select><br />
                    <select class="select-search"><option>Estados / Provincias</option></select>
                </div>
                <div class="span-4 last">
                    <select class="select-search"><option>Ciudades</option></select><br />
                    <select class="select-search"><option>Categorias</option></select>
                </div>
            </div>
        </form>
    </div>
    <!-- =============== END SEARCH =============== -->


    <!-- =============== MENU =============== -->
    <div class="menu-container">
        <ul class="menu">
            <li><a class="menu-option" href="<?//=site_url("/index/casas/");?>">Casas</a></li>
            <li><a class="menu-option" href="<?//=site_url("/index/departamentos/");?>">Departamentos</a></li>
            <li><a class="menu-option" href="<?//=site_url("/index/cabanias/");?>">Cabañas</a></li>
            <li><a class="menu-option" href="<?//=site_url("/index/otros/");?>">Otros</a></li>
        </ul>
    </div>
    <!-- =============== END MENU =============== -->

    <!-- =============== BANNER HORIZONTAL =============== -->
    <?php require('includes/banner_horizontal_inc.php');?>
    <!-- =============== END BANNER HORIZONTAL =============== -->
    <div class="header-publique">
        <a href="<?//=$url;?>"><img src="images/btn_publique_gratis.png" alt="publique gratis" onmouseover="this.src='images/btn_publique_gratis_over.png'" onmouseout="this.src='images/btn_publique_gratis.png'" /></a>
    </div>
</div>
