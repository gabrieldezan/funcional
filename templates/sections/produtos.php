<style type="text/css">
	#produtos-destaque h1{color: <?php echo $row_cores['cor_1'] ?>}
	.grid-item{padding: 30px; border: solid 3px <?php echo $row_cores['cor_1'] ?>; margin-bottom: 30px; min-height: 420px; background: #fff; overflow: hidden;}
	.grid-item h3{color: <?php echo $row_cores['cor_1'] ?>; font-size: 14px; margin:40px 0}
	.grid-item:hover{border-color: <?php echo $row_cores['cor_2'] ?>;}
	.grid-item:hover .btn-produtos{border-color: <?php echo $row_cores['cor_2'] ?>; color: <?php echo $row_cores['cor_1'] ?>}
	.grid-item:hover img{
		transform: scale(1.2) translate(0px);
		-webkit-transform: scale(1.2) translate(0px);
		-moz-transform: scale(1.2) translate(0px);
		-o-transform: scale(1.2) translate(0px);
		-ms-transform: scale(1.2) translate(0px);
	}

	.btn-produtos{border-color: <?php echo $row_cores['cor_1'] ?>; color: <?php echo $row_cores['cor_1'] ?>; border-radius: 0; background: transparent;}
	.btn-produtos:hover{background:<?php echo $row_cores['cor_1'] ?>; color: #fff !important; border-color: <?php echo $row_cores['cor_1'] ?> !important}

	#produto h2{font-size: 30px; font-weight: 100; margin-top: 0; margin-bottom: 30px;}
	#produto .img-produto{padding: 50px; border: solid 1px #eee; cursor: pointer; overflow: hidden;}
	#produto .img-produto:hover img{
		transform: scale(1.2) translate(0px);
		-webkit-transform: scale(1.2) translate(0px);
		-moz-transform: scale(1.2) translate(0px);
		-o-transform: scale(1.2) translate(0px);
		-ms-transform: scale(1.2) translate(0px);
	}

</style>

<section id="produtos-destaque">
	<center>
		<h1><?php echo $row_templates['templates_home_titulo'] ?></h1>
	</center>
	<div class="clear40"></div>
	<div class="container">
	<?php
	$query = "SELECT * FROM registros WHERE registros_idpg = $template_idpg LIMIT 8";
	$registros = mysqli_query($config, $query) or die(mysqli_error());
	while ($row_registros = mysqli_fetch_assoc($registros)) { ?>
		<div class="col-lg-3 col-md-6 text-center">
			<a href="<?php echo $raiz . $row_templates['paginas_url'] ?>/<?php echo $row_registros['registros_url'] ?>">
				<div class="grid-item transition">
					<img src="<?php echo $raiz ?>timthumb.php?src=<?php echo $raiz_admin ?>uploads/<?php echo $row_registros['registros_imagem'] ?>&zc=2&w=530&h=540" class="img-responsive transition" >
					<h3><?php echo $row_registros['registros_titulo'] ?></h3>
					<button class="btn btn-produtos transition">Mais detalhes</button>
				</div>
			</a>
		</div>
	<?php } ?>
	</div>
</section>