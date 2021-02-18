<style type="text/css">

    #header-bar{background:<?php echo $row_cores['cor_1'] ?>; color: #fff;}
    #header{color: #444;}
    #header i{color: #fff; margin-right: 5px;}
    #header li{list-style: none; display: inline-block;}
    #header li a{padding: 20px 30px; color: #444; float: left; font-size: 14px; font-weight: bold; text-transform: uppercase;}
    #header ul{width: 100%; float: left; margin-top: 35px}
    #header li a:hover{color: <?php echo $row_cores['cor_1'] ?>}
    .info-topo{font-size: 14px; color: #fff; padding: 20px 0; float: left; margin-right:40px;}
    #header .line{width: 100%; border-bottom: solid 1px #082524; float: left; margin-top: -6px}


    #header2{display: none; position: fixed; background-color: <?php echo $row_cores['cor_1'] ?>; top:0; left: 0; width: 100%; z-index: 999;}
    #header2 img{height: 50px;}
    #header2 .navbar-default{background-color: <?php echo $row_cores['cor_1'] ?>; padding: 10px 0; border: none;}
    #header2 .navbar-default a{color: #fff; text-transform: uppercase; font-weight: bold;}
    #header2 li:hover a{color: <?php echo $row_cores['cor_2'] ?>;}

    #header-mobile .logo{padding: 10px 0;}
    .navbar{margin-bottom: 0}

    #headercategorias{background: <?php echo $row_cores['cor_1'] ?>; color: #fff; text-align: center;}
    #headercategorias .categoria-icon{padding: 20px; min-width: 180px; display: inline-block;}
    #headercategorias .categoria-icon:hover{background: <?php echo $row_cores['cor_2'] ?>}
    #headercategorias .categoria-icon img{height:80px; display: inline-block;}
    #headercategorias .categoria-icon h3{color: #fff; font-size: 14px; font-weight: bold; text-transform: uppercase;}

</style>
<header id="header" class="hidden-xs hidden-sm">
    <div id="header-bar">
        <div class="container">
            <?php 
            $query = "SELECT * FROM registros WHERE registros_idpg = 21 ORDER BY registros_ordem ASC";
            $registros = mysqli_query($config, $query) or die(mysqli_error());
            ?>
            <?php while($row_registros = mysqli_fetch_assoc($registros)){ ?>
            <div class="info-topo">
                <?php echo $row_registros['registros_texto'] ?>
            </div>
            <?php } ?>
            <?php 
            $query = "SELECT * FROM registros WHERE registros_idpg = 24 ORDER BY registros_ordem ASC";
            $registros = mysqli_query($config, $query) or die(mysqli_error());
            $row_registros = mysqli_fetch_assoc($registros);
            $num_rows = mysqli_num_rows($registros);
            if($num_rows > 0){
            ?>
            <div class="info-topo" style="float:right; margin-right:0">
                <?php do{ ?>
                    <a href="<?php echo $row_registros['registros_link'] ?>" target="_blank"><?php echo $row_registros['registros_texto'] ?></a>
                <?php }while($row_registros = mysqli_fetch_assoc($registros)); ?>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="clear20"></div>
                <a href="<?php echo $raiz ?>">
                    <img src="<?php echo $raiz ?>wt_admin/uploads/<?php echo $row_configuracoes['configuracoes_logo'] ?>" class="img-responsive">
                </a>
            </div>
            <div class="col-sm-9">
                <?php 
                $query = "SELECT paginas_id, paginas_titulo, paginas_url FROM paginas WHERE paginas_menu = 1 ORDER BY paginas_ordem_menu ASC";
                $paginas = mysqli_query($config, $query) or die(mysqli_error());
                ?>
                <ul class="menu">
                    <?php while($row_paginas = mysqli_fetch_assoc($paginas)){ ?>
                    <li><a href="<?php echo $raiz . $row_paginas['paginas_url'] ?>"><?php echo $row_paginas['paginas_titulo'] ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</header> 

<div id="headercategorias">
    <?php 
    $query = "SELECT * FROM categorias WHERE categorias_idpg = 19";
    $categorias = mysqli_query($config, $query) or die(mysqli_error());
    ?>
    <div class="clear"></div>
    <?php while ($row_categorias = mysqli_fetch_assoc($categorias)) { ?>
        <a class="categoria-icon" href="<?php echo $raiz ?>produtos/<?php echo $row_categorias['categorias_url'] ?>">
            <img src="<?php echo $raiz ?>wt_admin/uploads/<?php echo $row_categorias['categorias_imagem'] ?>">
            <h3><?php echo $row_categorias['categorias_titulo'] ?></h3>
        </a>
    <?php } ?>
</div>

<?php include('header2-mobile.php'); ?>