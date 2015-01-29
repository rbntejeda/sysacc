<?php
/* @var $this EmpresaController */
/* @var $model Empresa */
?>

<?php
$this->breadcrumbs=array(
	'Empresas'=>array('index'),
	$model->EMP_CORREL,
);

echo BsHtml::pageHeader('Información','Empresa '.$model->EMP_NOMBRE) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'EMP_NOMBRE',
		'EMP_AREA',
		'EMP_RUT',
		'COM_NOMBRE',
		'EMP_DIRECCION',
		'EMP_TELEFONO',
	),
)); ?>

<?php
echo BsHtml::buttonGroup(
	array(
	    array(
	        'label' => 'Agregar Planta',
	        'url' => array('/planta/crear/'.$model->EMP_CORREL),
	        'type' => BsHtml::BUTTON_TYPE_LINK,
	        'color' => BsHtml::BUTTON_COLOR_PRIMARY,
	    ),
	    array(
	        'label' => 'Eliminar Empresa',
	        'url' => array('/Empresa/deleted/'.$model->EMP_CORREL),
	        'type' => BsHtml::BUTTON_TYPE_LINK,
	        'color' => BsHtml::BUTTON_COLOR_DANGER,
	    ),
	)
);?>
<?php if($model->IFPLANTA):?>
<?php
		$planta=Planta::model()->findAllByAttributes(array('EMP_CORREL'=>$model->EMP_CORREL));

		$cs = Yii::app()->clientScript;
		$baseUrl = Yii::app()->request->baseUrl;
		$cs->registerScriptFile($baseUrl . '/js/jquery.dataTables.min.js', CClientScript::POS_END);
		$cs->registerScriptFile($baseUrl . '/js/dataTables.bootstrap.js', CClientScript::POS_END);
		$cs->registerScript('tablas',"$(document).ready(function(){
			$('#table-empresas').dataTable({".'
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
		$cs->registerCss("Search-derecha","#table-empresas_filter {float: right;}");

		$this->breadcrumbs=array(
			'Empresas',
			'Administrar',
		);

		echo BsHtml::pageHeader('Administración','planta') ?>

		<table class="table table-striped" id="table-empresas">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>RUT</th>
					<th>Dirección</th>
					<th>Telefono</th>
					<th>Opciones</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($planta as $usu): ?>
					<tr>
						<td><?php echo $usu->PLA_NOMBRE ?></td>
						<td><?php echo $usu->PLA_RUT ?></td>
						<td><?php echo $usu->PLA_DIRECCION ?></td>
						<td><?php echo $usu->PLA_TELEFONO ?></td>
						<td>
						  <center>
							<?php
								$this->widget('bootstrap.widgets.BsModal', array(
								    'id' => 'myModal'.$usu->PLA_CORREL,
								    'header' => '¿Seguro que desea eliminar a '.$usu->PLA_NOMBRE." ?",
								    'content' => 'Sí, desea eliminar a '.$usu->PLA_NOMBRE.', presiona el boton rojo.',
								    'footer' => array(
								        BsHtml::linkButton('Eliminar de todas maneras', array(
								        	'url'=>array("/planta/deleted/$usu->PLA_CORREL"),
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
								        'label' => 'Ver planta',
								        'url' =>array ('/planta/view/'.$usu->PLA_CORREL)
								    ),
								    array(
								        'label' => 'Modificar planta',
								        'url' => array('/planta/update/'.$usu->PLA_CORREL)
								    ),
								    array(
								    	'url'=>'#',
								        'label' => 'Eliminar Persona',
								        'visible'=>Usuario::model()->permisosAcceso("SUPERADMIN,ADMIN"),
								        'htmlOptions'=>array(
								        	'data-toggle'=>"modal",
								        	'data-target'=>"#myModal".$usu->PLA_CORREL
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
	<?php endif?>