<?php 
include('../cn/config.php');

$id = $_POST['id'];
$busca = $_POST['busca'];

$query = "SELECT paginas_titulo, paginas_fotos, paginas_categoria, paginas_ordem FROM paginas WHERE paginas_id = $id";
$paginas = mysqli_query($config, $query) or die(mysqli_error());
$row_paginas = mysqli_fetch_assoc($paginas);
$registros_ordem = $row_paginas['paginas_ordem'];

$query = "SELECT registros_id, registros_titulo, registros_imagem FROM registros WHERE registros_idpg = $id and registros_titulo LIKE '%$busca%' ORDER BY $registros_ordem";
$registros = mysqli_query($config, $query) or die(mysqli_error());
$row_registros = mysqli_fetch_assoc($registros);
?>

<table class="table table-hover table-registros">
    <tr>
      <th>Nome</th>
      <th><?php if($row_registros['registros_imagem']){ ?>Imagem<?php } ?></th>
      <th><?php if($row_paginas['paginas_categoria'] == 1){ ?>Categoria<?php } ?></th>
      <th></th>
    </tr>
        <?php if(isset($row_registros['registros_id'])){ do{ ?>
        <tr style="width:100%">
            <td>
                <?php echo $row_registros['registros_titulo'] ?>
            </td>
            <td>
            <?php if($row_registros['registros_imagem']){ ?>
              <img src="<?php echo $raiz_admin ?>timthumb.php?src=<?php echo $raiz_admin ?>uploads/<?php echo $row_registros['registros_imagem'] ?>&zc=2&w=100&h=100" class="thumbnail">
            <?php } ?>
            </td>

            <?php if($row_paginas['paginas_categoria'] == 1){ ?>
            <td>
                <?php 
                $query = "SELECT (select c.categorias_titulo from categorias as c where r.categorias_id = c.categorias_id) as categorias_titulo, categorias_id FROM registros_categorias as r WHERE r.registros_id = {$row_registros['registros_id']}";
                $multiescolhas = mysqli_query($config, $query) or die(mysqli_error());
                ?>
                <div id="multiescolhas">
                    <?php while($row_multiescolhas = mysqli_fetch_assoc($multiescolhas)){ ?>
                        <a href="?page=registros&id=<?php echo $id ?>&cat=<?php echo $row_multiescolhas['categorias_id'] ?>" class="label label-default"><?php echo $row_multiescolhas['categorias_titulo'] ?></a>
                    <?php  } ?>
                </div>
            </td>
            <?php } ?>

            <td class="text-right">
            <?php if($row_paginas['paginas_fotos'] == 1){ ?>       
                <a href="?page=registros_fotos&id=<?php echo $row_registros['registros_id'] ?>"><button type="button" class="btn btn-default"><i class="fa fa-camera"></i> Fotos</button></a>       
            <?php } ?>
                <a href="?page=registros_editar&id=<?php echo $row_registros['registros_id'] ?>"><button type="button" class="btn btn-warning"><i class="fa fa-pencil-square-o"></i> Editar</button></a>         
                <a arquivo="registros_deletar" tabela="registros" idreg="<?php echo $row_registros['registros_id'] ?>" class="btn btn-danger bt-deletar"><i class="fa fa-trash-o"></i> Excluir</a>           
            </td>
        </tr>
        <?php }while($row_registros = mysqli_fetch_assoc($registros)); }else{echo "Nada encontrado.";} ?>
</table>