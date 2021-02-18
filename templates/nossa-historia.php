<style type="text/css">

	#nossa-historia{background: <?php echo $row_cores['cor_2'] ?>; padding: 100px 0; text-align: center;}

	#nossa-historia h1{color: #fff; font-size: 60px; font-weight: bold; text-transform: uppercase;}

	#nossa-historia .ano{cursor: pointer; display: inline-block; color: #fff; font-size: 14px; padding: 0 15px; max-width:250px; vertical-align: top;}

	#nossa-historia .ano .bola{width: 20px; height: 20px; background: #fff; border-radius: 100%; display: inline-block; position: relative;}

	#nossa-historia .ano .bola:before{content: ""; position: absolute; width: 250px; top: 10px; border-top: dashed 1px #fff; right: -250px;}

	#nossa-historia .ano:last-child .bola:before{display: none;}

	#nossa-historia img{opacity: 0; display: inline-block !important; border:solid 3px <?php echo $row_cores['cor_1'] ?>;}

	#nossa-historia .texto{opacity: 0}

	#nossa-historia h3{margin-top: 0}

	#nossa-historia h3.focus{color:<?php echo $row_cores['cor_1']; ?>}

	#nossa-historia .bola.focus{background:<?php echo $row_cores['cor_1']; ?>}

	#nossa-historia .show{opacity:1}



</style>

<div id="nossa-historia" class="container-fluid">

	<h1>Linha do tempo</h1>

	<div class="clear60"></div>

	<?php while($row_registros = mysqli_fetch_assoc($registros)){ ?>

		<div class="ano text-center">

		    <img src="<?php echo $raiz ?>timthumb.php?src=<?php echo $raiz_admin ?>uploads/<?php echo $row_registros['registros_imagem'] ?>&zc=1&w=200&h=200" class="img-responsive img-circle transition">

			<div class="clear10"></div>

			<div class="bola"></div>

			<h3><?php echo $row_registros['registros_titulo'] ?></h3>

			<div class="texto transition"><?php echo $row_registros['registros_texto'] ?></div>

		</div>

	<?php } ?>

	

</div>

<script type="text/javascript">

	$('.ano').hover(function(){

		$('img').removeClass('show');

		$('.texto').removeClass('show');

		$('h3').removeClass('focus');

		$('.bola').removeClass('focus');

		$(this).find('img').addClass('show');

		$(this).find('.texto').addClass('show');

		$(this).find('h3').addClass('focus');

		$(this).find('.bola').addClass('focus');

	});

</script>