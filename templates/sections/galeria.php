<style type="text/css">

#galeria{padding: 100px 0 0;background: #fff;}
#galeria h1{color:<?php echo $row_cores['cor_1'] ?>; font-size: 50px; text-transform: uppercase;}
#carousel li{border: none; padding: 0}
#carousel img:hover{transform:scale(1.2);}
</style>
<section id="galeria">
    <center>
        <h1><?php echo $row_templates['templates_home_titulo'] ?></h1>
        <div class="clear40"></div>
        <?php
		$query = "SELECT * FROM registros WHERE registros_idpg = $template_idpg";
		$clientes = mysqli_query($config, $query) or die(mysqli_error());
		$row_clientes = mysqli_fetch_assoc($clientes);

		$registro_id = $row_clientes['registros_id'];
		$pasta = "wt_admin/uploads/fotos/".$registro_id."/";
		if(is_dir($pasta)){
		    $diretorio = scandir("wt_admin/uploads/fotos/".$registro_id."/");

		    $files = glob($pasta.'/*');
		    natsort($files);
		?>

		<ul id="carousel">
			<?php foreach ($files as $key => $value) {
		        $foto = explode('/', $value);
		        $foto = end($foto);
		        ?>
		    <li data-src="<?php echo $raiz.$pasta.$foto ?>" class="text-center"><img src="<?php echo $raiz ?>timthumb.php?src=<?php echo $raiz.$pasta.$foto ?>&zc=1&w=800&h=700" class="img-responsive transition"></li>
		    <?php } ?>
		</ul>

		<?php } ?>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#carousel').lightSlider({
				    // gallery:true,
				    item:4,
				    thumbItem:0,
				    slideMargin: 0,
				    speed:500,
				    pause:5000,
				    pager:false,
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


    </center>
</section>
