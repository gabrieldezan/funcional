<style type="text/css">

#header2{display: none; position: fixed; background-color: #fff; top:0; left: 0; width: 100%; z-index: 999;}
#header2 img{height: 50px;}
#header2 .navbar-default{background-color: #fff; padding: 10px 0; border: none;}
#header2 .navbar-default a{color: #222; text-transform: uppercase; font-weight: bold;}
#header2 li:hover a{color: <?php echo $row_cores['cor_1'] ?>;}

#header-mobile .logo{padding: 10px 0;}
.navbar{margin-bottom: 0}

#header i{font-size: 25px; color:<?php echo $row_cores['cor_2'] ?> }
#header{position: absolute; z-index: 90; width: 100%; left: 0; top: 0}
#header .menu-escondido{
    margin-top: -35px;
    transition-duration: 0.2s;
    cursor: pointer;
    z-index: 30;
    position: relative;
}

#header .menu-escondido.efeito:hover{
    margin-top: -30px;
    transform: rotate(-3deg) scale(1.1) skew(1deg) translate(0px);
    -webkit-transform: rotate(-3deg) scale(1.1) skew(1deg) translate(0px);
    -moz-transform: rotate(-3deg) scale(1.1) skew(1deg) translate(0px);
    -o-transform: rotate(-3deg) scale(1.1) skew(1deg) translate(0px);
    -ms-transform: rotate(-3deg) scale(1.1) skew(1deg) translate(0px);
}

#header .btn{
    border-color: #fff;
    color: #fff;
    margin: 20px 0;
    cursor: pointer;
}

#header ul{
    padding-bottom: 20px;
}

#header ul li {
    list-style: none;
    display: inline-block;
    width: 100%;
    
}
#header li a {
    position:relative;
    display: inline-block;
    padding: 5px 15px;
    text-transform: uppercase;
    text-decoration: none;
    color: #777;
    font-size: 14px;
    font-weight: bold;
    color: #fff;
    transition-duration: 0.3s;
}

#header ul li a img{
    position: absolute; left: -18px; top: 2px; opacity: 0;
}
#header li a:hover{
    color: #eee;
}
#header li a:hover img{
    opacity: 1; top: 5px;

}

#header .mostra{
    height: auto;
    background: <?php echo $row_cores['cor_1'] ?>;
    z-index: 20;
    width: 100%;
    padding:20px 0;  
    position: relative;
}

.info-topo{font-size: 12px; color: #777}

</style>

<header id="header" class="hidden-xs hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 text-center">
                <center>
                    <div style="display: none;" class="mostra">
                        <nav>
                            <?php 
                                $query = "SELECT paginas_id, paginas_titulo, paginas_url FROM paginas WHERE paginas_menu = 1 ORDER BY paginas_ordem_menu ASC";
                                $paginas = mysqli_query($config, $query) or die(mysqli_error());
                            ?>
                            <ul class="menu">
                                <?php while($row_paginas = mysqli_fetch_assoc($paginas)){ ?>
                                    <li>
                                        <a href="<?php echo $raiz . $row_paginas['paginas_url'] ?>">
                                            <img src="<?php echo $raiz ?>img/menu-hover.png" class="menu-hover transition">
                                            <?php echo $row_paginas['paginas_titulo'] ?>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </nav>
                    </div>
                    <img class="menu-escondido efeito" src="<?php echo $raiz;?>img/menu.png">
                </center>
            </div>
            <div class="col-sm-6 text-center">
                <div class="clear80"></div>
                <a href="<?php echo $raiz ?>">
                    <img src="<?php echo $raiz ?>wt_admin/uploads/<?php echo $row_configuracoes['configuracoes_logo'] ?>" class="img-responsive" style="display:inline-block">
                </a>
                <div class="clear30"></div>
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
</header> 
<?php include('header2-mobile.php'); ?>


<script type="text/javascript">
$(document).ready(function(){
    $('.menu-escondido').click(function() {
        $('.mostra').slideToggle();
        $(this).toggleClass('efeito');
    });
});
</script>