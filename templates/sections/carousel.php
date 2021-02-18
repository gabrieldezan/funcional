<style type="text/css">
#clientes{width: 100%; float: left; }
#clientes h1{color: <?php echo $row_cores['cor_1'] ?>}
</style>

<section id="clientes">
    <center>
        <h1><?php echo $row_templates['templates_home_titulo'] ?></h1>
    </center>
    <div class="clear40"></div>
    <div class="container">
        <?php
        $query = "SELECT * FROM registros WHERE registros_idpg = $template_idpg";
        $clientes = mysqli_query($config, $query) or die(mysqli_error());
        ?>
        <ul id="carousel">
            <?php while($row_clientes = mysqli_fetch_assoc($clientes)){ ?>
            <li class="text-center"><img src="<?php echo $raiz ?>timthumb.php?src=<?php echo $raiz_admin ?>uploads/<?php echo $row_clientes['registros_imagem'] ?>&zc=2&w=285&h=150" class="img-responsive"></li>
            <?php } ?>
        </ul>
    </div>
</section>

<script type="text/javascript">
$(document).ready(function(){
	$('#carousel').lightSlider({
	    // gallery:true,
	    item:4,
	    thumbItem:0,
	    slideMargin: 0,
	    speed:500,
	    pause:5000,
	    pauseOnHover:true,
	    auto:true,
	    loop:true,
	    responsive : [
            {
                breakpoint:800,
                settings: {
                    item:3,
                    slideMove:1,
                    slideMargin:6,
                  }
            },
            {
                breakpoint:480,
                settings: {
                    item:2,
                    slideMove:1
                  }
            }
        ]
	});
});
</script>
