<style type="text/css">

#header{position: absolute; top: 0; left: 0; width: 100%; z-index: 99; height: 100%; min-height:100% }
#header div{height: 100%;}
.back-white{width: 100%; height: 100%; background: rgba(225,225,225,0.8); text-align: center; padding: 20px;}
#header ul a{font-size: 16px; text-transform: uppercase; padding: 5px 40px; color: <?php echo $row_cores['cor_1'] ?>; width: 100%; float: left;}
#header ul a:hover{background: <?php echo $row_cores['cor_1'] ?>; color: #fff;}
#header ul{list-style: none; padding: 0; margin: 50px 0; width: 100%; float: left;}

#header2{display: none; position: fixed; background-color: #fff; top:0; left: 0; width: 100%; z-index: 999;}
#header2 img{height: 50px;}
#header2 .navbar-default{background-color: #fff; padding: 10px 0; border: none;}
#header2 .navbar-default a{color: #222; text-transform: uppercase; font-weight: bold;}
#header2 li:hover a{color: <?php echo $row_cores['cor_1'] ?>;}

#slideshow{text-align: center;}
</style>

<header id="header" class="hidden-xs hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 text-center">
               <div class="back-white">
                    <a href="<?php echo $raiz ?>">
                        <img src="<?php echo $raiz ?>wt_admin/uploads/<?php echo $row_configuracoes['configuracoes_logo'] ?>" class="img-responsive" >
                    </a>
                    <nav>
                        <?php 
                            $query = "SELECT paginas_id, paginas_titulo, paginas_url FROM paginas WHERE paginas_menu = 1 ORDER BY paginas_ordem_menu ASC";
                            $paginas = mysqli_query($config, $query) or die(mysqli_error());
                        ?>
                        <ul class="menu">
                            <?php while($row_paginas = mysqli_fetch_assoc($paginas)){ ?>
                                <li>
                                    <a href="<?php echo $raiz . $row_paginas['paginas_url'] ?>" class="transition">
                                        <?php echo $row_paginas['paginas_titulo'] ?>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </nav>
                     <?php 
                    $query = "SELECT * FROM registros WHERE registros_idpg = 24 ORDER BY registros_ordem ASC";
                    $registros = mysqli_query($config, $query) or die(mysqli_error());
                    $row_registros = mysqli_fetch_assoc($registros);
                    $num_rows = mysqli_num_rows($registros);
                    if($num_rows > 0){
                    ?>
                        <?php do{ ?>
                            <a href="<?php echo $row_registros['registros_link'] ?>" target="_blank"><?php echo $row_registros['registros_texto'] ?></a>
                        <?php }while($row_registros = mysqli_fetch_assoc($registros)); ?>
                    <?php } ?>
               </div> 
            </div>
        </div>
    </div>
</header> 
<?php include('header2-mobile.php'); ?>
