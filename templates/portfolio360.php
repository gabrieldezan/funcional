<style type="text/css">
	#portfolio section{background: #eee; width: 100%; float: left; padding: 58px 0; color: #777; font-weight: 500}
	#portfolio section:nth-child(odd){background: #fff;}
	#portfolio img{display: inline-block; margin-top: 10%}
	#portfolio h3{font-size: 40px; text-transform: uppercase; margin-bottom: 20px; font-weight: bold; color:<?php echo $row_cores['cor_1']; ?>}
</style>
<article id="portfolio">
	<?php $cont=0; while($row_registros = mysqli_fetch_assoc($registros)){ ?>
	<section data-anime="top">
		<div class="container">
			<div class="row">
				<?php if($cont==0){ ?>
					<?php if(empty($row_registros['registros_imagem'])){ ?>
						<div class="col-sm-12">
							<h3 style="color:<?php echo $row_cores['cor_2'] ?>"><?php echo $row_registros['registros_titulo'] ?></h3>
							<?php echo $row_registros['registros_texto'] ?>
						</div>
					<?php }else{ ?>
						<div class="col-sm-4 text-center">
							<img src="<?php echo $raiz_admin ?>uploads/<?php echo $row_registros['registros_imagem'] ?>" class="img-responsive">
						</div>
						<div class="col-sm-8">
							<h3><?php echo $row_registros['registros_titulo'] ?></h3>
							<?php echo $row_registros['registros_texto'] ?>
						</div>
					<?php } ?>
				<?php }else{ ?>
					<div class="col-sm-8">
						<h3><?php echo $row_registros['registros_titulo'] ?></h3>
						<?php echo $row_registros['registros_texto'] ?>
					</div>
					<div class="col-sm-4 text-center">
						<img src="<?php echo $raiz_admin ?>uploads/<?php echo $row_registros['registros_imagem'] ?>" class="img-responsive">
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<?php $cont++; 
		if($cont==2){$cont=0;} 
	} ?>
</article>
