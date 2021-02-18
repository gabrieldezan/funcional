<style type="text/css">
	#condominios section{background: #fff; width: 100%; float: left; padding: 58px 0; color: #777; font-weight: 500}
	#condominios section:nth-child(odd){background: #eee;}
	#condominios img{display: inline-block; margin-top: 10%}
	#condominios h3{font-size: 40px; text-transform: uppercase; margin-bottom: 20px; font-weight: bold; color:<?php echo $row_cores['cor_1']; ?>}
</style>
<article id="condominios">
	<?php while($row_registros = mysqli_fetch_assoc($registros)){ ?>
	<section data-anime="top">
		<div class="container">
			<h3><?php echo $row_registros['registros_titulo'] ?></h3>
			<?php echo $row_registros['registros_texto'] ?>	
		</div>
	</section>
	<?php } ?>
	<section data-anime="top">
		<div class="container">
			<h3>Ficou na dúvida?</h3>
			Agende  já uma consultoria de 30 minutos com um de nossos especialistas e tire todas as suas dúvidas
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
		</div>
	</section>
</article>
