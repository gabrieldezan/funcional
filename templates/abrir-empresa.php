<script>
fbq('track', 'Lead');
</script>

<section id="contato">

    <div class="clear40"></div>

    <div class="container">

        <div class="row">

            <div class="col-sm-6">

                <h2>Cadastre-se</h2>

                <h5>Entraremos em contato com você!</h5>

                <div class="clear20"></div>

                <form id="enviar_abrir_empresa" name="enviar_abrir_empresa" enctype="multipart/form-data" role="form" class="form" method="post">

                    <input name="data" type="hidden" value="<?php echo date("Y-m-d H:i:s"); ?>" />

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

                    <div class="form-group">

                        <div class="input-group">

                            <input required="required" class="form-control phone" name="telefone" placeholder="Telefone:" type="text" maxlength="15"/>

                        </div>

                    </div>

                    <div class="form-group">

                        <div class="input-group">

                            <input required="required" class="form-control" name="cidade" placeholder="Cidade:" type="text" />

                        </div>

                    </div>

                    <div class="form-group">

                        <div class="input-group">

                            <select name="segmento" required="required" class="form-control"><option value="">Selecione o segmento</option>

                                <option value="Acessórios">Acessórios</option>

                                <option value="Advocacia">Advocacia</option>

                                <option value="Alimentação e Bebidas">Alimentação e Bebidas</option>

                                <option value="Arquitetura e Urbanismo ">Arquitetura e Urbanismo </option>

                                <option value="Assistência Técnica">Assistência Técnica</option>

                                <option value="Bancário e Financeiro">Bancário e Financeiro</option>

                                <option value="Calçados">Calçados</option>

                                <option value="Comércio e Varejo">Comércio e Varejo</option>

                                <option value="Comunicação e Marketing ">Comunicação e Marketing </option>

                                <option value="Concessionária e Mecânica ">Concessionária e Mecânica </option>

                                <option value="Construção">Construção</option>

                                <option value="Consultoria (Geral) ">Consultoria (Geral) </option>

                                <option value="Corretagem (Imóveis) ">Corretagem (Imóveis) </option>

                                <option value="Cosméticos e Beleza ">Cosméticos e Beleza </option>

                                <option value="Educação e Idiomas">Educação e Idiomas</option>

                                <option value="Esporte e Lazer">Esporte e Lazer</option>

                                <option value="Gráfica e Papelaria">Gráfica e Papelaria</option>

                                <option value="Indústria (Geral)">Indústria (Geral)</option>

                                <option value="Locação">Locação</option>

                                <option value="Metalurgia">Metalurgia</option>

                                <option value="Mobiliário">Mobiliário</option>

                                <option value="Prestação de serviços (Geral) ">Prestação de serviços (Geral) </option>

                                <option value="Roupas e Vestuário">Roupas e Vestuário</option>

                                <option value="Saúde e Bem Estar ">Saúde e Bem Estar </option>

                                <option value="Tecnologia e Informática ">Tecnologia e Informática </option>

                                <option value="Transporte">Transporte</option>

                                <option value="Viagem e Turismo">Viagem e Turismo</option>

                                <option value="Outros">Outros</option>

                            </select>

                        </div>

                    </div>



                    <div class="g-recaptcha" data-sitekey="<?php echo $row_configuracoes['configuracoes_site_key'] ?>"></div>

                    <div class="clear20"></div>

                    <button type="submit" class="btn btn-padrao2" >Enviar formulário</button>

                </form>

                <div class="clear20"></div>

                <div class="clear40"></div>

                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F<?php echo $row_configuracoes['configuracoes_idfacebook']; ?>%2F&tabs&width=500&height=264&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="264" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

            </div>

            <div class="col-sm-5 col-sm-offset-1">

                <div class="clear20"></div>

                <?php while($row_registros = mysqli_fetch_assoc($registros)){ ?>

                    <h4><?php echo $row_registros['registros_titulo'] ?></h4>

                    <?php echo $row_registros['registros_texto'] ?>

                    <div class="clear40"></div>

                <?php } ?>

            </div>

        </div><!-- row -->

    </div><!-- container -->



</section>



<div class="clear40"></div>





<div id="retorno"></div>