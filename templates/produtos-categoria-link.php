<style type="text/css">
.categoria-pai{border-color:#fff; background: #fff; color:<?php echo $row_cores['cor_2']; ?>; font-size: 14px; font-weight: bold;}
.categoria-pai:hover{background: #eee !important;  }
.categoria-pai img{margin-right: 15px;}

#portfolio{font-size: 14px;}
#portfolio b{color:<?php echo $row_cores['cor_2']; ?>}
#portfolio h3{color:<?php echo $row_cores['cor_1']; ?>; margin-top: 0}
</style>

<div class="clear40"></div>
<div id="portfolio" class="container">
    <div class="clear40"></div>

	<div class="row">
		<div class="col-sm-4">
			<div class="list-group">
				<?php 
				$query = "SELECT categorias_id, categorias_imagem, categorias_titulo, categorias_url FROM categorias WHERE categorias_idpg = $paginas_id and categorias_pai = 0";
				$categorias = mysqli_query($config, $query) or die(mysqli_error());
			    while($row_categorias = mysqli_fetch_assoc($categorias)){
				?>
					<a class="list-group-item categoria-pai" href="<?php echo $raiz.$url[0]."/".$row_categorias['categorias_url'] ?>">
						<img src="<?php echo $raiz ?>timthumb.php?src=<?php echo $raiz ?>wt_admin/uploads/<?php echo $row_categorias['categorias_imagem'] ?>&zc=2&w=24&h=24" >
						<?php echo $row_categorias['categorias_titulo'] ?>
					</a>
					<?php 
					$catpai = $row_categorias['categorias_id'];
					$query = "SELECT categorias_titulo, categorias_url FROM categorias WHERE categorias_idpg = $paginas_id and categorias_pai = $catpai";
					$subcategorias = mysqli_query($config, $query) or die(mysqli_error());
				    while($row_subcategorias = mysqli_fetch_assoc($subcategorias)){
					?>
					<a class="list-group-item subcategoria" href="<?php echo $raiz.$url[0]."/".$row_subcategorias['categorias_url'] ?>"> - <?php echo $row_subcategorias['categorias_titulo'] ?></a>
					<?php } ?>
				<?php } ?>
			</div>
		</div>
		<div class="col-sm-8">
			<?php while($row_registros = mysqli_fetch_assoc($registros)){ ?>
				<h3><?php echo $row_registros['registros_titulo'] ?></h3>
				<?php echo $row_registros['registros_texto'] ?>
			<?php } ?>
		</div>
	</div>
</div>
<div class="clear100"></div>