<style type="text/css">

#header2{display: none; position: fixed; background-color: #fff; top:0; left: 0; width: 100%; z-index: 999;}
#header2 img{height: 50px;}
#header2 .navbar-default{background-color: #fff; padding: 10px 0; border: none;}
#header2 .navbar-default a{color: #222; text-transform: uppercase; font-weight: bold;}
#header2 li:hover a{color: <?php echo $row_cores['cor_1'] ?>;}

#header-mobile .logo{padding: 10px 0;}
.navbar{margin-bottom: 0}

#header{color: <?php echo $row_cores['cor_1'] ?>; background: #fff}
#header h3{font-size: 14px; color: #444; font-weight: bold; text-transform: uppercase;}
#header li{list-style: none; display: inline-block;}
#header li a{padding: 20px 30px; color: #fff; float: left; font-size: 14px; font-weight: bold; text-transform: uppercase;}
#header ul{width: 100%; float: left; text-align: center; background: <?php echo $row_cores['cor_1'] ?>;}

</style>
<header id="header" class="hidden-xs hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 text-right">
                <div class="clear80"></div>
                <?php 
                $query = "SELECT * FROM registros WHERE registros_idpg = 21 ORDER BY registros_ordem ASC LIMIT 0,1";
                $registros = mysqli_query($config, $query) or die(mysqli_error());
                ?>
                <?php while($row_registros = mysqli_fetch_assoc($registros)){ ?>
                    <?php echo $row_registros['registros_texto'] ?>
                <?php } ?>
            </div>
            <div class="col-sm-4 text-center">
                <div class="clear20"></div>
                <a href="<?php echo $raiz ?>">
                    <img src="<?php echo $raiz ?>wt_admin/uploads/<?php echo $row_configuracoes['configuracoes_logo'] ?>" class="img-responsive" style="display:inline-block">
                </a>
            </div>
            <div class="col-sm-4">
                <div class="clear60"></div>
                <?php 
                $query = "SELECT * FROM registros WHERE registros_idpg = 21 ORDER BY registros_ordem ASC LIMIT 1,3";
                $registros = mysqli_query($config, $query) or die(mysqli_error());
                ?>
                <?php while($row_registros = mysqli_fetch_assoc($registros)){ ?>
                    <?php echo $row_registros['registros_texto'] ?>
                    <div class="clear10"></div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php 
    $query = "SELECT paginas_id, paginas_titulo, paginas_url FROM paginas WHERE paginas_menu = 1 ORDER BY paginas_ordem_menu ASC";
    $paginas = mysqli_query($config, $query) or die(mysqli_error());
    ?>
    <ul class="menu">
        <?php while($row_paginas = mysqli_fetch_assoc($paginas)){ ?>
        <li><a href="<?php echo $raiz . $row_paginas['paginas_url'] ?>"><?php echo $row_paginas['paginas_titulo'] ?></a></li>
        <?php } ?>
    </ul>
</header> 

<?php include('header2-mobile.php'); ?>
