<?php
/* @var $this PersonaController */
/* @var $model Persona */
$cs = Yii::app()->clientScript;
$baseUrl = Yii::app()->request->baseUrl;
//Datatables
$cs->registerCssFile($baseUrl . '/css/jquery.dataTables.css');
$cs->registerScriptFile($baseUrl . '/js/jquery.dataTables.min.js', CClientScript::POS_END);
//bootstrap
$cs->registerScriptFile($baseUrl . '/js/dataTables.bootstrap.js', CClientScript::POS_END);
//tabletools
$cs->registerScriptFile($baseUrl . '/js/dataTables.tableTools.js', CClientScript::POS_END);
$cs->registerCssFile($baseUrl . '/css/dataTables.tableTools.css');
//Programacion datatables
$cs->registerScript('tablas',"$(document).ready(function(){
	$('#table-usuarios').dataTable({".'
		dom: \'T<"clear">lfrtip\',
		"tableTools": {
            "aButtons": [
                {
                    "sExtends":    "collection",
                    "sButtonText": "Guardar",
                    "aButtons":    
                    	["xls",                 
                    	{
		                    "sExtends": "pdf",
		                    "sPdfOrientation": "landscape",
		                    "sPdfMessage": "Usuarios del sistema de accidentabilidad."
		                },
		                "csv"]
                }
            ],
            "SRowSelect": "single"
        },
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

$this->breadcrumbs=array(
	'Personas',
	'Administrar',
);

echo BsHtml::pageHeader('Administración','Usuarios') ?>

<table class="table table-hover" id="table-usuarios">
	<thead>
		<tr>
			<th>RUT</th>
			<th>Nombre</th>
			<th>Cargo</th>
			<th>Empresa</th>
			<th>Email</th>
			<th>Telefono</th>
			<th>Usuario</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($model as $usu): ?>
			<tr onclick="document.location = '<?php echo Yii::app()->createUrl("persona/view/$usu->PER_CORREL"); ?>';" <?php echo (!$usu->IFUSUARIO)?'class="danger"':'class="success"'; ?>>
				<td><?php echo $usu->PER_RUT ?></td>
				<td><?php echo $usu->nombreCompleto ?></td>
				<td><?php echo $usu->CAR_CORREL ?></td>
				<td><?php echo $usu->EMP_NOMBRE ?></td>
				<td><?php echo $usu->PER_EMAIL ?></td>
				<td><?php echo $usu->PER_TELEFONO ?></td>
				<td><?php echo $usu->USUARIO ?></td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>



