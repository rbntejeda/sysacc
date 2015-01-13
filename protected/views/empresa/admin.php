<?php

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

echo BsHtml::pageHeader('Administración','Empresas') ?>

<table class="table table-striped" id="table-empresas">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>RUT</th>
			<th>Dirección</th>
			<th>Telefono</th>
			<th>Area</th>
			<th>Opciones</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($model as $usu): ?>
			<tr>
				<td><?php echo $usu->EMP_NOMBRE ?></td>
				<td><?php echo $usu->EMP_RUT ?></td>
				<td><?php echo $usu->EMP_DIRECCION ?></td>
				<td><?php echo $usu->EMP_TELEFONO ?></td>
				<td><?php echo $usu->EMP_AREA ?></td>
				<td>
				  <center>
					<?php
						$this->widget('bootstrap.widgets.BsModal', array(
						    'id' => 'myModal'.$usu->EMP_CORREL,
						    'header' => '¿Seguro que desea eliminar a '.$usu->EMP_NOMBRE." ?",
						    'content' => 'Sí, desea eliminar a '.$usu->EMP_NOMBRE.', presiona el boton rojo.',
						    'footer' => array(
						        BsHtml::linkButton('Eliminar de todas maneras', array(
						        	'url'=>"deleted/$usu->EMP_CORREL",
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
						        'label' => 'Agregar Planta',
						        'url' => array('/planta/crear/'.$usu->EMP_CORREL)
						    ),
						    array(
						        'label' => 'Ver Persona',
						        'url' => 'view/'.$usu->EMP_CORREL
						    ),
						    array(
						        'label' => 'Modificar Persona',
						        'url' => 'update/'.$usu->EMP_CORREL
						    ),
						    array(
						    	'url'=>'#',
						        'label' => 'Eliminar Persona',
						        'visible'=>Usuario::model()->permisosAcceso("SUPERADMIN,ADMIN"),
						        'htmlOptions'=>array(
						        	'data-toggle'=>"modal",
						        	'data-target'=>"#myModal".$usu->EMP_CORREL
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







