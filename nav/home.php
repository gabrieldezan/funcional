<?php 

$query = "SELECT 

    th.templates_home_titulo, 

    th.templates_home_idpg, 

    (select t.templates_arquivo from templates as t where t.templates_id = th.templates_home_templatesid) as templates_home_arquivo,

    (select p.paginas_url from paginas as p where th.templates_home_idpg = p.paginas_id) as paginas_url

    FROM templates_home as th 

    ORDER BY templates_home_ordem";

$templates = mysqli_query($config, $query) or die(mysqli_error());

while($row_templates = mysqli_fetch_assoc($templates)){

	$template_idpg = $row_templates['templates_home_idpg'];

	include('templates/sections/'.$row_templates['templates_home_arquivo']);

	echo "<div class='clear'></div>";

} 

?>

