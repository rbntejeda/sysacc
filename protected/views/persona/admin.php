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

echo BsHtml::pageHeader('Administración','Personas') ?>

<table class="table table-striped" id="table-usuarios">
	<thead>
		<tr>
			<th>RUT</th>
			<th>Nombre</th>
			<th>Cargo</th>
			<th>Empresa</th>
			<th>Email</th>
			<th>Telefono</th>
			<th>Usuario</th>
			<th>Opciones</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($model as $usu): ?>
			<tr <?php if(!$usu->IFUSUARIO)echo 'class="danger"'; ?>>
				<td><?php echo $usu->PER_RUT ?></td>
				<td><?php echo $usu->nombreCompleto ?></td>
				<td><?php echo $usu->CAR_CORREL ?></td>
				<td><?php echo $usu->EMP_NOMBRE ?></td>
				<td><?php echo $usu->PER_EMAIL ?></td>
				<td><?php echo $usu->PER_TELEFONO ?></td>
				<td><?php echo $usu->USUARIO ?></td>
				<td>
				  <center>
					<?php
						$this->widget('bootstrap.widgets.BsModal', array(
						    'id' => 'myModal'.$usu->PER_CORREL,
						    'header' => '¿Seguro que desea eliminar a '.$usu->nombreCompleto." ?",
						    'content' => 'Sí, desea eliminar a '.$usu->nombreCompleto.', presiona el boton rojo.',
						    'footer' => array(
						        BsHtml::linkButton('Eliminar de todas maneras', array(
						        	'url'=>"deleted/$usu->PER_CORREL",
						            'color' => BsHtml::BUTTON_COLOR_DANGER
						        )),
						        BsHtml::button('cerrar', array(
						            'data-dismiss' => 'modal'
						        ))
						    )
						));
					?>
					 <?php
						echo BsHtml::buttonDropdown(BsHtml::icon(BsHtml::GLYPHICON_COG), array(
						    array(
						        'label' => 'Agregar Usuario',
						        'url' => array('/usuario/crear/'.$usu->PER_CORREL),
						        'visible'=>!$usu->IFUSUARIO,
						    ),
						    array(
						        'label' => 'Quitar Usuario',
						        'url' => array('/usuario/deleted/'.$usu->PER_CORREL),
						        'visible'=>$usu->IFUSUARIO,
						    ),
						    array(
						        'label' => 'Ver Persona',
						        'url' => 'view/'.$usu->PER_CORREL
						    ),
						    array(
						        'label' => 'Modificar Persona',
						        'url' => 'update/'.$usu->PER_CORREL
						    ),
						    array(
						    	'url'=>'#',
						        'label' => 'Eliminar Persona',
						        'visible'=>Usuario::model()->permisosAcceso("SUPERADMIN,ADMIN"),
						        'htmlOptions'=>array(
						        	'data-toggle'=>"modal",
						        	'data-target'=>"#myModal".$usu->PER_CORREL
						        )

						    )
						), array(
						    'size' => BsHtml::BUTTON_SIZE_SMALL,
						    'color' => BsHtml::BUTTON_COLOR_INFO
						));
					?>
				  </center>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>



