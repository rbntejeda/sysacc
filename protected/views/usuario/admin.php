<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
$cs        = Yii::app()->clientScript;
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
            "search":         "Buscar:",
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
	'Usuarios'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Crear Usuario', 'url'=>array('create')),
);

?>
<?php echo BsHtml::pageHeader('Administración','Usuarios') ?>
	<table class="table table-striped" id="table-usuarios">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>RUT</th>
				<th>Creado</th>
				<th>Modificado</th>
				<th>Cargo</th>
				<th>Empresa</th>
				<th>Rol</th>
				<th>Opciones</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($model as $usu): ?>
				<tr>
					<td><?php echo $usu->PER_NOMBRE ?></td>
					<td><?php echo $usu->PER_RUT ?></td>
					<td><?php echo $usu->USU_CREATE ?></td>
					<td><?php echo $usu->USU_MODIFIED ?></td>
					<td><?php echo $usu->PER_CARGO ?></td>
					<td><?php echo $usu->PER_EMPRESA ?></td>
					<td><?php echo $usu->USU_ROLE ?></td>
					<td>
					  <center>
						<div class="btn-group">
						  <div class="input-group">
							<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">
							  <span class="glyphicon glyphicon-cog"></span>
							</button>
							<ul class="dropdown-menu pull-right">
								<li><a href="<?php echo Yii::app()->createUrl("Usuario/update/$usu->PER_CORREL"); ?>">Editar Usuario</a></li>
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
		<!-- search-form -->

		<?php /*$this->widget('bootstrap.widgets.BsGridView',array(
			'id'=>'usuario-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
				'Rut',
				'Cargo',
				'Empresa'
				'USU_ROLE',
				'USU_ESTADO',
				'USU_MODIFIED',
				'USU_CREATE',
				'USU_TIPO',
				array(
					'class'=>'bootstrap.widgets.BsButtonColumn',
				),
			),
		)); */?>




