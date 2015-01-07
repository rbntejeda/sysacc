<?php
/* @var $this PersonaController */
/* @var $model Persona */
$cs = Yii::app()->clientScript;
$baseUrl = Yii::app()->request->baseUrl;
$cs->registerScriptFile($baseUrl . '/js/jquery.dataTables.min.js', CClientScript::POS_END);
$cs->registerScriptFile($baseUrl . '/js/dataTables.bootstrap.js', CClientScript::POS_END);
$cs->registerScript('tablas',"$(document).ready(function(){
	$('#table-usuarios').dataTable({".'
        "language": {
            "lengthMenu": "Ver _MENU_ registros por pagina.",
            "zeroRecords": "No existes registros.",
            "info": "Mostrar pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles.",
		    "infoFiltered":   "(filtrado por _MAX_ entradas en total.)",
            "search":         "Buscar :",
            "paginate": {
		        "first":      "Primera",
		        "last":       "Ultima",
		        "next":       "Siguiente",
		        "previous":   "Anterior"
		    },
        }
	});
});');
$cs->registerCss("Search-derecha","#table-usuarios_filter {float: right;}");

$this->breadcrumbs=array(
	'Personas'=>array('admin'),
	'Administrar',
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Crear Persona', 'url'=>array('create')),
);
echo BsHtml::pageHeader('Administrar','Personas') ?>

<table class="table table-striped" id="table-usuarios">
	<thead>
		<tr>
			<th>RUT</th>
			<th>Nombre</th>
			<th>Cargo</th>
			<th>Empresa</th>
			<th>Email</th>
			<th>Telefono</th>
			<th>Opciones</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($model as $usu): ?>
			<tr>
				<td><?php echo $usu->PER_RUT ?></td>
				<td><?php echo $usu->nombreCompleto ?></td>
				<td><?php echo $usu->CAR_NOMBRE ?></td>
				<td><?php echo $usu->EMP_NOMBRE ?></td>
				<td><?php echo $usu->PER_EMAIL ?></td>
				<td><?php echo $usu->PER_TELEFONO ?></td>
				<td>
				  <center>
					<div class="btn-group">
					  <div class="input-group">
						<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">
						  <span class="glyphicon glyphicon-cog"></span>
						</button>
						<ul class="dropdown-menu pull-right">
							<li><a href="<?php echo Yii::app()->createUrl("Persona/update/$usu->PER_CORREL"); ?>">Editar Usuario</a></li>
							  <!--trigger Modal-->
						  	<li data-toggle="modal" data-target="#questionDelete<?php echo $usu->PER_CORREL?>"><a>Eliminar Usuario</a></li>
						</ul>
					  </div> 
					</div>
				  </center>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>



