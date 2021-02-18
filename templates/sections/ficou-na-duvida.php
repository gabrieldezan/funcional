<?php
    $query = "SELECT * FROM registros WHERE registros_idpg = $template_idpg";
    $registros = mysqli_query($config, $query) or die(mysqli_error());
    $row_registros = mysqli_fetch_assoc($registros)
?>
<style type="text/css">
#ficou-na-duvida{color: <?php echo $row_cores['cor_2'] ?>; font-size: 30px; line-height: 35px;}
#ficou-na-duvida h1{color: <?php echo $row_cores['cor_2'] ?>;  margin-top: 150px; margin-bottom: 30px;}
#ficou-na-duvida h1 span{color:<?php echo $row_cores['cor_1']; ?>}
#ficou-na-duvida .img-selos{display: list-item; margin: auto; margin-bottom: 30px;}
#ficou-na-duvida .info-footer{line-height: 24px; font-size: 16px;}
#ficou-na-duvida .info-footer a{margin-right: 15px; font-size: 22px; color:<?php echo $row_cores['cor_2']; ?>}
#ficou-na-duvida .info-footer a:hover{color:<?php echo $row_cores['cor_1']; ?>}
#ficou-na-duvida .direitos{font-size: 14px; color: #444}

#ficou-na-duvida .btn-padrao2{
  background: #B3FF3C;
  border-radius: 6px;
  box-shadow: 3px 3px 2px rgba(0,0,0,0.5);
  color: #0c0805;
  border: none;
  text-shadow: none!important;
}
#ficou-na-duvida .form-control{border:none !important; box-shadow: none !important}
@media(max-width: 767px){
	#ficou-na-duvida{background-image: none !important;}
	#ficou-na-duvida .img-selos{display: inline-block; margin: 20px; margin-bottom: 30px;}
}
</style>
<section class="section-home" id="ficou-na-duvida" style="background:url('<?php echo $raiz ?>wt_admin/uploads/<?php echo $row_registros['registros_imagem'] ?>') top center">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2 text-center hidden-xs">
				<div class="clear100"></div>
				<div class="clear100"></div>
				<img class="img-selos" src="<?php echo $raiz ?>img/selo-1.png" class="img-responsive">
                <img class="img-selos" src="<?php echo $raiz ?>img/selo-3.png" class="img-responsive">
				<img class="img-selos" src="<?php echo $raiz ?>img/selo-4.png" class="img-responsive">
			</div>
			<div class="col-sm-4 col-sm-offset-4">
				<h1><?php echo $row_registros['registros_titulo'] ?></h1>
				<?php echo $row_registros['registros_texto'] ?>
				<div class="clear30"></div>
				<form id="enviar_contato" name="enviar_contato" enctype="multipart/form-data" role="form" class="form" method="post">
                    <input name="data" type="hidden" value="<?php echo date("Y-m-d H:i:s"); ?>" />
					<div class="row">
						<div class="col-sm-6">
		                    <div class="form-group">
		                        <div class="input-group">
		                            <input required="required" class="form-control" name="nome" placeholder="Nome:" type="text" maxlength="100"/>
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <div class="input-group">
		                            <input required="required" class="form-control" type="email" name="email" placeholder="Email:" maxlength="100"/>
		                        </div>
		                    </div>
						</div>
						<div class="col-sm-6">
		                    <div class="form-group">
		                        <div class="input-group">
		                            <input required="required" class="form-control phone" name="telefone" placeholder="Telefone:" type="text" maxlength="15"/>
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <div class="input-group">
		                        	<select class="form-control" name="voce_e_dono">
		                        		<option value="Sou empresário">Sou empresário</option>
		                        		<option value="Pretendo abrir uma empresa">Pretendo abrir uma empresa</option>
		                        	</select>
		                        </div>
		                    </div>
						</div>
					</div>

                    <div class="g-recaptcha" data-sitekey="<?php echo $row_configuracoes['configuracoes_site_key'] ?>"></div>
                    <div class="clear20"></div>
                    <button type="submit" class="btn btn-padrao2 transition">Agende agora mesmo</button>
                </form>
                <div id="retorno"></div>

				<div class="clear30"></div>
				<?php
	            $query = "SELECT * FROM registros WHERE registros_idpg = 22 ORDER BY registros_ordem ASC";
	            $registros = mysqli_query($config, $query) or die(mysqli_error());
	            ?>
	            <?php while($row_registros = mysqli_fetch_assoc($registros)){ ?>
	            <div class="info-footer">
	                <?php echo $row_registros['registros_texto'] ?>
	            </div>
	            <?php } ?>
	            <div class="clear30"></div>
	            <?php
	            $query = "SELECT * FROM registros WHERE registros_idpg = 24 ORDER BY registros_ordem ASC";
	            $registros = mysqli_query($config, $query) or die(mysqli_error());
	            $row_registros = mysqli_fetch_assoc($registros);
	            $num_rows = mysqli_num_rows($registros);
	            if($num_rows > 0){
	            ?>
	            <div class="info-footer">
		            <?php do{ ?>
		                <a class="transition" href="<?php echo $row_registros['registros_link'] ?>" target="_blank"><?php echo $row_registros['registros_texto'] ?></a>
		            <?php }while($row_registros = mysqli_fetch_assoc($registros)); ?>
	            </div>
	            <?php } ?>
			</div>
		</div>

		<div class="clear100 hidden-xs"></div>
		<div class="clear100"></div>
		<div class="visible-xs text-center">
			<img class="img-selos" src="<?php echo $raiz ?>img/selo-1.png" class="img-responsive">

			<div class="clear"></div>
			<img class="img-selos" src="<?php echo $raiz ?>img/selo-3.png" class="img-responsive">
			<img class="img-selos" src="<?php echo $raiz ?>img/selo-4.png" class="img-responsive">
		</div>
		<div class="clear100"></div>
		<div class="text-center">
			<a href="http://webthomaz.com.br" target="_blank"><img src="<?php echo $raiz ?>img/webthomaz.png"></a>
			<div class="clear20"></div>
			<div class="direitos">
			© <?php echo date(Y) ?> - Todos os Direitos Reservados
			</div>
		</div>
		<div class="clear60"></div>
	</div>
</section>
