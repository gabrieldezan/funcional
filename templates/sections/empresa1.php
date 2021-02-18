<style type="text/css">
	#empresa{min-height: 774px; background: url(img/bg-empresa.jpg) top center;}
	#empresa h1{margin-top: 150px; font-size: 30px; text-transform: uppercase; margin-bottom: 30px; color: <?php echo $row_cores['cor_1'] ?>;}
</style>

<?php 
$query = "SELECT * FROM registros WHERE registros_idpg = $template_idpg ORDER BY registros_ordem ASC LIMIT 1";
$registros = mysqli_query($config, $query) or die(mysqli_error());
$row_registros = mysqli_fetch_assoc($registros);
?>
<div class="clear"></div>
<section id="empresa">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-6">
				<h1><?php echo $row_templates['templates_home_titulo'] ?></h1>
				<?php echo $row_registros['registros_texto'] ?>
			</div>
		</div>
	</div>
</section>
<div class="clear"></div>