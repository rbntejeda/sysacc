<?php

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
	$('#table-empresas').dataTable({".'
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
	'Empresas',
	'Administrar',
);

echo BsHtml::pageHeader('Administración','Empresas') ?>

<table class="table table-hover" id="table-empresas">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>RUT</th>
			<th>Dirección</th>
			<th>Telefono</th>
			<th>Area</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($model as $usu): ?>
			<tr onclick="document.location = '<?php echo Yii::app()->createUrl("empresa/view/$usu->EMP_CORREL"); ?>';">
				<td><?php echo $usu->EMP_NOMBRE ?></td>
				<td><?php echo $usu->EMP_RUT ?></td>
				<td><?php echo $usu->EMP_DIRECCION ?></td>
				<td><?php echo $usu->EMP_TELEFONO ?></td>
				<td><?php echo $usu->EMP_AREA ?></td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>







