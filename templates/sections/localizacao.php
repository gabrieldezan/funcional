<style type="text/css">
	#localizacao{width: 100%; float: left; position: relative; padding: 0; color: #fff; font-size: 20px;}
	#localizacao .pelicula{width: 100%; height: 100%; position: absolute; top: 0; left: 0; background: rgba(9,21,33,0.87);}
	#localizacao img{margin-top: -40px;}
	#localizacao h2{margin-top: 100px; color:<?php echo $row_cores['cor_1'] ?>; font-style: italic; font-weight: bold; text-transform: uppercase; z-index: 999; font-size:35px; }
</style>

<?php 
$query = "SELECT * FROM registros WHERE registros_idpg = $template_idpg ORDER BY registros_ordem ASC LIMIT 1";
$registros = mysqli_query($config, $query) or die(mysqli_error());
$row_registros = mysqli_fetch_assoc($registros);
?>
<section id="localizacao">
	<div class="pelicula">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-2">
					<img src="<?php echo $raiz ?>img/map.png" class="img-responsive">
				</div>
				<div class="col-sm-6">
					<h2><?php echo $row_registros['registros_titulo'] ?></h2>
					<?php echo $row_registros['registros_texto'] ?>
					<div class="clear20"></div>
					<a class="btn-padrao btn btn-map">Clique aqui</a>
				</div>
			</div>
		</div>
	</div>
	<?php echo $row_configuracoes['configuracoes_mapa']; ?>
</section>


<script type="text/javascript">
    $('.btn-map').click(function(){
        $('.pelicula').fadeOut();
    });
</script>