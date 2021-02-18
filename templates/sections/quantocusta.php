<?php
$query = "SELECT * FROM registros WHERE registros_idpg = $template_idpg";
$registros = mysqli_query($config, $query) or die(mysqli_error());
?>
<div class="clear"></div>
<style type="text/css">
#quanto-custa{color: #777; background: url(<?php echo $raiz ?>img/bg-quanto-custa.jpg) center center; overflow: hidden;}
#quanto-custa h1{color: <?php echo $row_cores['cor_1'] ?>;  margin-top:100px; margin-bottom: 30px; text-align: center;}
/*#quanto-custa .nopadding{padding: 0; margin-right: -1px}*/
#quanto-custa .coluna{background: #fff; text-align: center; font-size: 14px; line-height: 18px; border:solid 1px <?php echo $row_cores['cor_2'] ?>; border-radius: 10px;}
#quanto-custa .col-titulo{color: <?php echo $row_cores['cor_2'] ?>; font-size:18px; padding: 15px; font-weight: 1000;}
/*#quanto-custa .col-titulo{background: <?php echo $row_cores['cor_1'] ?>; color: #fff; font-size:20px; padding: 20px; font-weight: 1000; }*/
/*#quanto-custa .nopadding:nth-child(odd) .col-titulo{background: <?php echo $row_cores['cor_2'] ?>; }*/
#quanto-custa .col-texto{border-top:solid 1px #eee; padding: 15px; min-height: 500px; position: relative;}
#quanto-custa .col-texto .btn-padrao4{position: absolute; bottom: 20px; width: 200px; text-align: center; left: 50%; margin-left: -100px;}
#quanto-custa .col-preco{color:<?php echo $row_cores['cor_2']; ?>;}
#quanto-custa .col-preco b{font-size: 25px; font-weight: bold; line-height: 30px;}
#quanto-custa .col-descricao {
  padding: 30px 0;
  margin-bottom: 30px;
  border-bottom: solid 1px #eee;
  height: 120px;
  display: flex;
  justify-content: center;
  flex-direction: column;
}
#quanto-custa .col-texto ul{
  list-style: none;
  overflow: hidden;
  overflow-y: scroll;
  height: 200px;

}
/* width */
#quanto-custa ::-webkit-scrollbar {
  width: 5px;
}

/* Track */
#quanto-custa ::-webkit-scrollbar-track {
  background: #fff;
}

/* Handle */
#quanto-custa ::-webkit-scrollbar-thumb {
  background: <?php echo $row_cores['cor_2']; ?>;
}

/* Handle on hover */
#quanto-custa ::-webkit-scrollbar-thumb:hover {
  background: <?php echo $row_cores['cor_1']; ?>;
}
#quanto-custa .col-texto ul li{padding: 10px 0; border-bottom: solid 1px #eee;}

@media(max-width: 767px){
	#quanto-custa .col-texto{min-height: 485px;}
	#quanto-custa .nopadding{margin-bottom: 30px; padding: 10px;}
}
</style>
<section class="section-home" id="quanto-custa">

	<h1>Quanto Custa?</h1>

	<div class="container">
		<div class="row">
			<?php while($row_registros = mysqli_fetch_assoc($registros)){ ?>
			<div class="col-sm-3 nopadding">
				<div class="coluna">
					<div class="col-titulo">
						<?php echo $row_registros['registros_titulo'] ?>
					</div>
					<div class="col-texto">
						<div class="col-preco">
							a partir de<br>
							<b><?php echo $row_registros['registros_preco'] ?></b>
						</div>
						<div class="col-descricao">
							<?php echo $row_registros['registros_descricao'] ?>
						</div>
						<?php echo $row_registros['registros_texto'] ?>
						<div class="clear30"></div>
						<a class="btn btn-padrao4 transition" href="planos">Saiba mais</a>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</section>
