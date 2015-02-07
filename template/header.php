<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="./">AEFEUP</a>
	</div>
	<!-- Top Menu Items -->
	<ul class="nav navbar-left top-nav">
		<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
			<ul class="dropdown-menu alert-dropdown">
				<li><a href="#">Alert Name <span class="label label-default">Alert Badge</span></a></li>
				<li><a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a></li>
				<li><a href="#">Alert Name <span class="label label-success">Alert Badge</span></a></li>
				<li><a href="#">Alert Name <span class="label label-info">Alert Badge</span></a></li>
				<li><a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a></li>
				<li><a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a></li>
				<li class="divider"></li>
				<li><a href="#">View All</a></li>
			</ul></li>
		<form class="navbar-form navbar-left" role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
	</ul>
	<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav side-nav">
			<li class="active"><a href="./"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a></li>
			<li><a href="javascript:;" data-toggle="collapse" data-target="#enc"><i class="glyphicon glyphicon-th-list"></i> Encomendas <i
					class="glyphicon glyphicon-triangle-bottom"></i></a>
				<ul id="enc" class="collapse">
					<li><a href="./?pagina=addEncomenda">Adicionar Encomenda</a></li>
					<li><a href="./?pagina=listEncomenda">Consultar Encomendas</a></li>
					<li><a href="./?pagina=delEncomenda">Eliminar Encomenda</a></li>
				</ul></li>
			<li><a href="javascript:;" data-toggle="collapse" data-target="#inv"><i class="glyphicon glyphicon-th-list"></i> Inventário <i
					class="glyphicon glyphicon-triangle-bottom"></i></a> 
				<ul id="inv" class="collapse">
					<li><a href="./?pagina=inventario">Consultar Inventario</a></li>
					<li><a href="./?pagina=historico">Historico</a></li>
				</ul></li>
			<li><a href="javascript:;" data-toggle="collapse" data-target="#cont"><i class="glyphicon glyphicon-phone-alt"></i> Contactos <i
					class="glyphicon glyphicon-triangle-bottom"></i></a> 
				<ul id="cont" class="collapse">
					<li><a href="./?pagina=contactos">Pesquisar Contactos</a></li>
					<li><a href="./?pagina=criar_contacto">Criar Contacto</a></li>
				</ul></li>
			<li><a href="./?pagina=calendario"><i class="glyphicon glyphicon-calendar"></i> Calendário</a></li>
		</ul>
	</div>
	<!-- /.navbar-collapse -->
</nav>