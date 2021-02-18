<style type="text/css">
/*rodape*/
footer{width: 100%;float: left; height: auto; padding: 100px 0; background: url(<?php echo $raiz ?>img/bg-footer.jpg) top center; color: #333}
footer h3{font-size: 14px; font-weight: 800; color: #222; text-transform: uppercase; margin-top: 40px;}
footer a{color: #222;}
footer a:hover{color: #444}
</style>
<footer>
	<div class="container text-right">
		<div class="row">
            <?php 
            $query = "SELECT * FROM registros WHERE registros_idpg = 22 ORDER BY registros_ordem ASC";
            $registros = mysqli_query($config, $query) or die(mysqli_error());
            ?>
            <?php while($row_registros = mysqli_fetch_assoc($registros)){ ?>
                <h3><?php echo $row_registros['registros_titulo'] ?></h3>
                <?php echo $row_registros['registros_texto'] ?>
            <?php } ?>

            <?php 
            $query = "SELECT * FROM registros WHERE registros_idpg = 24 ORDER BY registros_ordem ASC";
            $registros = mysqli_query($config, $query) or die(mysqli_error());
            $row_registros = mysqli_fetch_assoc($registros);
            $num_rows = mysqli_num_rows($registros);
            if($num_rows > 0){
            ?>
                <h3>Redes sociais</h3>
	            <?php do{ ?>
	                <a href="<?php echo $row_registros['registros_link'] ?>" target="_blank"><?php echo $row_registros['registros_texto'] ?></a>
	            <?php }while($row_registros = mysqli_fetch_assoc($registros)); ?>
            <?php } ?>
        </div>

		<div class="clear40"></div>
		<div class="clear40"></div>
		<div class="clear40"></div>
		<div class="clear40"></div>
		<div class="clear40"></div>
		<div class="clear40"></div>
		<div class="clear40"></div>
		<div class="clear40"></div>
		<div class="clear40"></div>
		<div class="clear40"></div>
		<div class="clear40"></div>
		<div class="clear40"></div>
		<div class="clear40"></div>
		<div class="clear40"></div>
		<div class="text-center">
			<a href="http://webthomaz.com.br" target="_blank"><img src="<?php echo $raiz ?>img/webthomaz.png"></a>
		</div>

	</div>
</footer>