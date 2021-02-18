<!-- include summernote css/js-->
<link href="js/summernote/summernote.css" rel="stylesheet">
<script src="js/summernote/summernote.js"></script>

<?php 
$id = $_GET['id'];
$query = "SELECT * FROM paginas WHERE paginas_id = $id";
$paginas = mysqli_query($config, $query) or die(mysqli_error());
$row_paginas = mysqli_fetch_assoc($paginas);
?>
<!-- Page Heading -->
<div class="row">
    <div class="col-sm-9">
        <h1 class="page-header">
            Cadastrar registro para <?php echo $row_paginas['paginas_titulo'] ?>
        </h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
            </li>
            <li>
                <a href="index.php?page=registros&id=<?php echo $id ?>"><?php echo $row_paginas['paginas_titulo'] ?></a>
            </li>
            <li class="active">
               Cadastrar registro
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <form id="registros_cadastrar" method="post" enctype="multipart/form-data" class="form">
            <input name="registros_idpg" class="form-control" type="hidden" value="<?php echo $_GET['id'] ?>">
            <div class="form-group">
                <label>Titulo</label>
                <input name="registros_titulo" class="form-control texto-titulo" type="text">
            </div>

            <?php if($row_paginas['paginas_email'] == '1'){ ?>
            <div class="form-group">
                <label>E-mail</label>
                <input name="registros_email" class="form-control" type="text">
            </div>
            <?php } ?>

            <?php if($row_paginas['paginas_id'] == '49'){ ?>
            <div class="form-group">
                <label>Preço</label>
                <input name="registros_preco" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label>Descrição</label>
                <input name="registros_descricao" class="form-control" type="text">
            </div>
            <?php } ?>

            <?php if($row_paginas['paginas_imagem'] == '1'){ ?>
            <div class="form-group">
                <label>Imagem destaque</label>
                <input name="registros_imagem" class="form-control" type="file">
            </div>
            <?php } ?>

            <?php if($row_paginas['paginas_imagem2'] == '1'){ ?>
            <div class="form-group">
                <label>Imagem 2</label>
                <input name="registros_imagem2" class="form-control" type="file">
            </div>
            <?php } ?>

            <?php if($row_paginas['paginas_categoria'] == '1'){ ?>
            <div class="clear10"></div>
            <div class="form-group">
                <a class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalCategoria" style="float:right"><i class="fa fa-plus-circle"></i> Cadastrar categoria rápida</a>
                <label>Categoria</label>
                <?php 
                $query = "SELECT * FROM categorias WHERE categorias_idpg = $id and categorias_pai = 0";
                $categorias = mysqli_query($config, $query) or die(mysqli_error());
                ?>
                <select class="form-control" id="multiescolha">
                    <option selected="selected" disabled="disabled"><div>Selecione uma categoria</div></option>
                    <?php while($row_categorias = mysqli_fetch_assoc($categorias)){ ?>
                        <option style="font-size:14px; color:#222;" value="<?php echo $row_categorias['categorias_id'] ?>" titulo="<?php echo $row_categorias['categorias_titulo'] ?>"><?php echo $row_categorias['categorias_titulo'] ?></option>
                        <?php 
                        $idpai = $row_categorias['categorias_id'];
                        $query_sub = "SELECT * FROM categorias WHERE categorias_idpg = $id and categorias_pai = $idpai";
                        $subcategorias = mysqli_query($config, $query_sub) or die(mysqli_error());
                        ?>
                        <?php while($row_subcategorias = mysqli_fetch_assoc($subcategorias)){ ?>
                        <option style="font-size:12px; color:#555; font-style:italic" value="<?php echo $row_subcategorias['categorias_id'] ?>" titulo="<?php echo $row_subcategorias['categorias_titulo'] ?>"> - <?php echo $row_subcategorias['categorias_titulo'] ?></option>
                        <?php } ?>
                    <?php } ?>
                </select>
                <div class="clear10"></div>
                <div id="multiescolhas"></div>
                <div class="clear10"></div>
                
            </div>
            <?php } ?>

            <?php if($row_paginas['paginas_data'] == '1'){ ?>
            <div class="form-group">
                <label>Data</label>
                <input name="registros_data" class="form-control registrodata" >
            </div>
            <?php } ?>

            <?php if($row_paginas['paginas_link'] == '1'){ ?>
            <div class="form-group">
                <label>Link</label>
                <input name="registros_link" class="form-control" type="text">
            </div>
            <?php } ?>

            <?php if($row_paginas['paginas_texto'] == '1'){ ?>
            <div class="form-group">
                <label>Texto</label>
                <div class="panel panel-default">
                    <div class="panel-heading">Icones</div>
                    <div class="panel-body">  
                        <i onclick="copyToClipboard('#icon-phone')" class="fa fa-phone btn btn-default"></i>
                        <div id="icon-phone" class="hidden">&lt;i class="fa fa-phone" &gt;&lt;/i&gt;</div>
                        
                        <i onclick="copyToClipboard('#icon-whatsapp')" class="fa fa-whatsapp btn btn-default"></i>
                        <div id="icon-whatsapp" class="hidden">&lt;i class="fa fa-whatsapp" &gt;&lt;/i&gt;</div>
                        
                        <i onclick="copyToClipboard('#icon-map')" class="fa fa-map-marker btn btn-default"></i>
                        <div id="icon-map" class="hidden">&lt;i class="fa fa-map-marker" &gt;&lt;/i&gt;</div>
                        
                        <i onclick="copyToClipboard('#icon-envelope')" class="fa fa-envelope btn btn-default"></i>
                        <div id="icon-envelope" class="hidden">&lt;i class="fa fa-envelope" &gt;&lt;/i&gt;</div>
                        
                        <i onclick="copyToClipboard('#icon-facebook')" class="fa fa-facebook-official btn btn-default"></i>
                        <div id="icon-facebook" class="hidden">&lt;i class="fa fa-facebook-official" &gt;&lt;/i&gt;</div>
                        
                        <i onclick="copyToClipboard('#icon-instagram')" class="fa fa-instagram btn btn-default"></i>
                        <div id="icon-instagram" class="hidden">&lt;i class="fa fa-instagram" &gt;&lt;/i&gt;</div>
                        
                        <i onclick="copyToClipboard('#icon-youtube')" class="fa fa-youtube-play btn btn-default"></i>
                        <div id="icon-youtube" class="hidden">&lt;i class="fa fa-youtube-play" &gt;&lt;/i&gt;</div>
                    </div>
                </div>
                <textarea name="registros_texto" id="registros_texto" style="height:250px !important;"></textarea>
            </div>
            <?php } ?>

            <div class="form-group">
                <label>Url amigável</label>
                 <p style="font-size:12px; color:#999"><i class="fa fa-info-circle"></i> Caso não digitar nada a url será criada automaticamente.</p>
                <input name="registros_url" class="form-control texto-url" type="text">
            </div>

            <div class="form-group">
                <label>Ordem</label>
                <input name="registros_ordem" class="form-control" type="text">
            </div>

            <div class="form-group">
                <label>Meta Descrição</label>
                <input name="registros_metadescription" class="form-control" type="text">
            </div>

            <div class="clear20"></div>
            <input type="submit" class="btn btn-primary" value="Cadastrar">
        </form>
    </div>
</div>
<div class="clear10"></div>

<!-- Modal -->
<div class="modal fade" id="modalCategoria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cadastrar categoria</h4>
      </div>
      <div class="modal-body">
         <form id="categoria_rapida_cadastrar" method="post" enctype="multipart/form-data" class="form">
            <input name="categorias_idpg" class="form-control" type="hidden" value="<?php echo $id ?>">
            <div class="form-group">
                <label>Titulo</label>
                <input name="categorias_titulo" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label>Subcategoria de</label>
                <?php 
                $query = "SELECT * FROM categorias WHERE categorias_idpg = $id and categorias_pai = 0";
                $categorias = mysqli_query($config, $query) or die(mysqli_error());
                ?>
                <select class="form-control" name="categorias_pai" >
                    <option selected="selected"><div>Está é a categoria pai</div></option>
                    <?php while($row_categorias = mysqli_fetch_assoc($categorias)){ ?>
                        <option value="<?php echo $row_categorias['categorias_id'] ?>" titulo="<?php echo $row_categorias['categorias_titulo'] ?>"><?php echo $row_categorias['categorias_titulo'] ?></option>
                    <?php } ?>
                </select>
            
            </div>
            <div class="form-group">
                <label>Imagem</label>
                <input name="categorias_imagem" class="form-control" type="file">
            </div>

            <div class="clear10"></div>
            
            <label class="paginas-opcoes">
                <input name="categorias_menu" value="1" type="checkbox"> Aparecer no menu
            </label>
            <div class="clear10"></div>
            
            <div class="form-group">
                <label>Ordem</label>
                <input name="categorias_ordem" class="form-control" type="text">
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary bt-text-cadastrar">Cadastrar</button>
        <div class="clear20"></div>
        <div id="errocadastro"></div>
      </div>
         </form>
    </div>
  </div>
</div>

<div id="retorno"></div>

<script>
    $(document).ready(function(){  
       $('#registros_texto').summernote({
            height: 300,
            callbacks: {
                onImageUpload : function(files, editor, welEditable) {

                     for(var i = files.length - 1; i >= 0; i--) {
                             sendFile(files[i], this);
                    }
                }
            }
        });

        function sendFile(file, el) {
            var form_data = new FormData();
            form_data.append('file', file);
            $.ajax({
                data: form_data,
                type: "POST",
                url: 'php/uploader.php',
                cache: false,
                contentType: false,
                processData: false,
                success: function(url) {
                    $(el).summernote('editor.insertImage', url);
                }
            });
        }
    });
    function copyToClipboard(element) {
      var $temp = $("<input>");
      $("body").append($temp);
      $temp.val($(element).text()).select();
      document.execCommand("copy");
      $temp.remove();
    }
</script>