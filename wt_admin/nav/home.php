<h1>Dashboard</h1>

<ol class="breadcrumb">
  <li><a href="<?php echo $raiz_admin ?>">Home</a></li>
  <li><a href="<?php echo $raiz_admin ?>">Dashboard</a></li>
</ol>


<div class="row">
	<!-- contatos -->
	<div class="col-lg-2 home-item">
		<a href="?page=contatos">
			<div class="item-home transition">
				<i class="fa fa-envelope"></i>
				<h3>Mensagens</h3>
			</div>
		</a>
	</div>
	<!-- contatos -->

	<!-- configuracoes -->
	<div class="col-lg-2 home-item">
		<a href="https://analytics.google.com" target="_blank">
			<div class="item-home transition">
				<i class="fa fa-bar-chart" ></i>
				<h3>Google Analytics</h3>
			</div>
		</a>
	</div>
	<!-- configuracoes -->

	<!-- configuracoes -->
	<div class="col-lg-2 home-item">
		<a href="?page=configuracoes">
			<div class="item-home transition">
				<i class="fa fa-cog"></i>
				<h3>Configurações</h3>
			</div>
		</a>
	</div>
	<!-- configuracoes -->

	<?php if($admin == 1) { ?>
	<!-- usuarios -->
	<div class="col-lg-2 home-item">
		<a href="?page=usuarios">
			<div class="item-home transition">
				<i class="fa fa-user"></i>
				<h3>Usuarios</h3>
			</div>
		</a>
	</div>
	<!-- usuarios -->
	<?php } ?>
</div>