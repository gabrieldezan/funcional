<style type="text/css">
	#nos-ajudamos section{background: #fff; width: 100%; float: left; padding: 58px 0; color: #777; font-weight: 500}
	#nos-ajudamos section:nth-child(odd){background: #eee;}
	#nos-ajudamos .icone{display: inline-block; margin-top: 10%}
	#nos-ajudamos h3{
		font-size: 25px;
		font-weight: bold;
		color: <?php echo $row_cores['cor_1']; ?>;
	}

	#clientes-aprovam{position: relative; width: 100%; float: left; background: url(<?php echo $raiz ?>img/bg-clientes-aprovam.jpg) top center !important; padding: 50px 0 !important;}
	#clientes-aprovam h1{font-size: 60px; font-weight: bold; color: #fff; margin-top: 0}
	#clientes-aprovam .box{
		padding:60px 20px;
		background: #fff;
		float: left;
		width: 100%;
		font-size: 25px;
		position: relative;
	}
	#clientes-aprovam .box h3{
		color: <?php echo $row_cores['cor_1']; ?>;
		font-size: 16px;
		position: absolute;
		bottom: 0;
		left: 0;
		width: 100%;
		padding: 0 10px;
		margin: 0;
		height: 60px;
		display: flex;
		justify-content: center;
		flex-direction: column;

	}
	#carousel li{padding: 0; border:0;}

	@media(max-width: 1600px){
		#clientes-aprovam .box{font-size: 16px;}
	}
	#clientes-aprovam .box{
		height: 285px;
	}
	.lSAction a {
		background-color: #fff;
		border-radius: 100%;
	}
</style>
<article id="nos-ajudamos">
	<?php $cont=0; while($row_registros = mysqli_fetch_assoc($registros)){ ?>
	<section data-anime="top">
		<div class="container">
			<div class="row">
				<?php if($cont==0){ ?>
					<div class="col-sm-4 text-center">
						<img src="<?php echo $raiz_admin ?>uploads/<?php echo $row_registros['registros_imagem'] ?>" class="img-responsive icone">
					</div>
					<div class="col-sm-8">
						<h3><?php echo $row_registros['registros_titulo'] ?></h3>
						<?php echo $row_registros['registros_texto'] ?>
					</div>
				<?php }else{ ?>
					<div class="col-sm-8">
						<h3><?php echo $row_registros['registros_titulo'] ?></h3>
						<?php echo $row_registros['registros_texto'] ?>
					</div>
					<div class="col-sm-4 text-center">
						<img src="<?php echo $raiz_admin ?>uploads/<?php echo $row_registros['registros_imagem'] ?>" class="img-responsive icone">
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<?php $cont++;
		if($cont==2){$cont=0;}
	} ?>
	<!-- <section id="clientes-aprovam">
		<div class="container">
			<h1>95% dos nossos<br>clientes nos indicam.</h1>
			<a class="btn btn-padrao transition" href="<?php echo $raiz ?>#ficou-na-duvida">Fale com um especialista</a>
		</div>
	</section> -->
	<section id="clientes-aprovam">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-7 col-sm-offset-5">
					<h1>95% dos nossos<br>clientes nos indicam.</h1>
					<div class="clear30"></div>
					<?php
			        $query = "SELECT * FROM registros WHERE registros_idpg = 57";
			        $clientes = mysqli_query($config, $query) or die(mysqli_error());
			        ?>
			        <ul id="carousel">
			            <?php while($row_clientes = mysqli_fetch_assoc($clientes)){ ?>
			            <li class="text-center">
			            	<div class="box">
			            		<?php if(!empty($row_clientes['registros_imagem'])){ ?>
			            		<img src="<?php echo $raiz ?>timthumb.php?src=<?php echo $raiz ?>wt_admin/uploads/<?php echo $row_clientes['registros_imagem'] ?>&zc=2&w=150&h=60">
			            		<?php }else{ ?>
			            		<img src="<?php echo $raiz ?>timthumb.php?src=<?php echo $raiz ?>wt_admin/uploads/<?php echo $row_configuracoes['configuracoes_logo'] ?>&zc=2&w=150&h=60">
			            		<?php } ?>
			            		<div class="clear10"></div>
			            		"<?php echo $row_clientes['registros_texto'] ?>"
			            		<h3><?php echo $row_clientes['registros_titulo'] ?></h3>
			            	</div>
			            </li>
			            <?php } ?>
			        </ul>
				</div>
			</div>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#carousel').lightSlider({
				    // gallery:true,
				    item:3,
				    thumbItem:0,
				    slideMargin: 5,
				    speed:500,
				    pause:5000,
				    pauseOnHover:true,
				    auto:true,
				    loop:true,
				    pager:false,
				    responsive : [
			            {
			                breakpoint:800,
			                settings: {
			                    item:2,
			                    slideMove:1,
			                    slideMargin:6,
			                  }
			            },
			            {
			                breakpoint:480,
			                settings: {
			                    item:1,
			                    slideMove:1
			                  }
			            }
			        ]
				});
			});
			</script>
		</div>
	</section>
</article>
