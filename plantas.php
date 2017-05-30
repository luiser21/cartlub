
	<?php include_once "menu.php"; 	?>	
		<!-- BEGIN PAGE -->
		<div class="page-content">
			
			<!-- BEGIN PAGE CONTAINER-->			
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
						
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
						<h3 class="page-title">
							Editar Plantas		
							<small>Tablas</small>
						</h3>
						<ul class="breadcrumb">							
							<li>
								<a href="#">Data Tables</a>
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="#">Plantas</a></li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<h4><i class="icon-edit"></i>Edicion Plantas</h4>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body">
								<div class="clearfix">
									<div class="btn-group">
										<button id="sample_editable_1_new" class="btn green">
										Adicionar Nuevo <i class="icon-plus"></i>
										</button>
									</div>
									<div class="btn-group pull-right">
										<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
										</button>
										<ul class="dropdown-menu">
											<li><a href="#">Imprimir</a></li>
											<li><a href="#">Save as PDF</a></li>
											<li><a href="#">Export a Excel</a></li>
										</ul>
									</div>
								</div>
								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
									<thead>
										<tr>

											<th>Codigo Planta</th>
											<th>Nombre Planta</th>
											<th>Codigo Empresa</th>
											<th>Consecutivo</th>
											<th>Editar</th>
											<th>Eliminar</th>
										</tr>
									</thead>
									<tbody>									
										<?php 
											$sql="SELECT CODPLANTA,NOMPLANTA,CODIGOEMPRESA,CONSECUTIVO FROM PLANTA";
											$DBGestion->ConsultaArray($sql);
											$plantas=$DBGestion->datos;
											foreach($plantas as $datos){ 
										?>
											<tr class="">
											<td><?php echo $datos['CODPLANTA'] ?></td>
											<td><?php echo $datos['NOMPLANTA'] ?></td>
											<td class="center"><?php echo $datos['CODIGOEMPRESA'] ?></td>
											<td class="center"><?php echo $datos['CONSECUTIVO'] ?></td>
											<td><a class="edit" href="javascript:;" id="<?php echo $datos['CODPLANTA'] ?>">Editar</a></td>
											<td><a class="delete" href="javascript:;" id="<?php echo $datos['CODPLANTA'] ?>">Eliminar</a></td>
											</tr>
										<?php }	?>																			
									</tbody>
								</table>
							</div>
						</div>
						<span id="capa">
							
							</span>
						<!-- END EXAMPLE TABLE PORTLET-->
					</div>
				</div>
				<!-- END PAGE CONTENT -->
			</div>
			<!-- END PAGE CONTAINER-->
		</div>
		<!-- END PAGE -->
	<?php include_once "bottom.php"; ?>	