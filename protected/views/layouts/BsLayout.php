<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<?php
	$cs        = Yii::app()->clientScript;
	$baseUrl = Yii::app()->request->baseUrl;

	/**
	 * StyleSHeets
	 */
	$cs->registerCssFile($baseUrl . '/css/bootstrap.css');
	$cs->registerCssFile($baseUrl . '/css/themes.css');
	//$cs->registerCssFile($baseUrl . '/css/bootstrap-theme.css');

	/**
	 * JavaScripts
	 */
	$cs->registerCoreScript('jquery', CClientScript::POS_END);
	$cs->registerCoreScript('jquery.ui', CClientScript::POS_END);
	$cs->registerScriptFile($baseUrl . '/js/bootstrap.min.js', CClientScript::POS_END);
	$cs->registerScript('tooltip', "$('[data-toggle=\"tooltip\"]').tooltip();$('[data-toggle=\"popover\"]').tooltip()", CClientScript::POS_READY);
	?>
	<!--[if lt IE 9]><script src="<?php	echo $baseUrl . '/js/html5shiv.js';	?>"></script><script src="<?php	echo $baseUrl . '/js/respond.min.js';?>"></script><![endif]-->

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body >

<div class="container">

	<!--div id="header">
		<h1 id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></h1>
	</div><!-- header -->
	 <?php
		$this->widget('bootstrap.widgets.BsNavbar', array(
			'collapse' => true,
			'brandLabel'=>BsHtml::icon(BsHtml::GLYPHICON_FIRE).' SYSACC',
			'brandUrl' => Yii::app()->homeUrl,
			/*'position' => BsHtml::NAVBAR_POSITION_FIXED_TOP,
			'htmlOptions' => array(
			        'containerOptions' => array(
			            'fluid' => true
			        ),
			    ),*/
//'color' => BsHtml::NAVBAR_COLOR_INVERSE,
			'items' => array(
				//dropdown
				
				array(
					'class' => 'bootstrap.widgets.BsNav',
					'type' => 'navbar',
					'activateParents' => true,
					'items' => array(
						array(
							'visible' => Usuario::model()->permisosAcceso("SUPERADMIN,ADMIN"),
							'label' => 'Administración',
							'url' => array('/Usuario/index'),
							'icon'=> BsHtml::GLYPHICON_COG,
							'items' => array(
								BsHtml::dropDownHeader('Administración de Empresas'),
								array('label' => 'Administrar Empresa','url' => array('/Empresa/admin'),'visible' => Usuario::model()->permisosAcceso("SUPERADMIN,ADMIN")),
								array('label' => 'Agregar Empresa','url' => array('/Empresa/create'),'visible' => Usuario::model()->permisosAcceso("SUPERADMIN,ADMIN")),
								BsHtml::menuDivider(),
								
								BsHtml::dropDownHeader('Administración de Usuarios'),
								array('label' => 'Administrar Usuarios','url' => array('/persona/admin'),'visible' => Usuario::model()->permisosAcceso("SUPERADMIN,ADMIN")),
								array('label' => 'Agregar Persona','url' => array('/persona/create'),'visible' => Usuario::model()->permisosAcceso("SUPERADMIN,ADMIN")),
								)
						)
					)
				),
				array(
					'class' => 'bootstrap.widgets.BsNav',
					'type' => 'navbar',
					'activateParents' => true,
					'items' => array(
						array(
							'visible' => Usuario::model()->permisosAcceso("SUPERADMIN,ADMIN,FUNCIONARIO"),
							'label' => 'Accidentes',
							'url' => array('/Usuario/index'),
							'icon'=> BsHtml::GLYPHICON_SAVED,
							'items' => array(
								BsHtml::dropDownHeader('Accidentabilidad'),
								array('label' => 'Agregar Tasa de accidentes','url' => array('/indicador/create'),'visible' => Usuario::model()->permisosAcceso("SUPERADMIN,ADMIN")),
								BsHtml::menuDivider(),
								BsHtml::dropDownHeader('Accidentes de trabajo'),
								array('label' => 'Agregar Accidente','url' => array('/accidente/ingresarForestal'),'visible' => Usuario::model()->permisosAcceso("SUPERADMIN,ADMIN")),
							)
						)
					)
				),
				array(
					'class' => 'bootstrap.widgets.BsNav',
					'type' => 'navbar',
					'activateParents' => true,
					'items' => array(
						array(
							'label' => 'Generar Estadisticas',
							'url' => array('/Usuario/index'),
							'icon'=> BsHtml::GLYPHICON_SIGNAL,
							'items' => array(
								array('label' => 'Seguridad por empresa','url' => array('/estadistica/seg_emp/'),'visible' => Usuario::model()->permisosAcceso("SUPERADMIN,ADMIN")),
								array('label' => 'Seguridad de empresas por area','url' => array('/estadistica/seg_emp_are/'),'visible' => Usuario::model()->permisosAcceso("SUPERADMIN,ADMIN")),
								array('label' => 'Seguridad planta con areas','url' => array('/estadistica/seg_plan_are/'),'visible' => Usuario::model()->permisosAcceso("SUPERADMIN,ADMIN")),
								array('label' => 'Seguridad de empresas con otras empresas','url' => array('/estadistica/seg_emp_emp/'),'visible' => Usuario::model()->permisosAcceso("SUPERADMIN,ADMIN")),
								array('label' => 'Accidentes mensuales por empresas','url' => array('/estadistica/acc_men_emp/'),'visible' => Usuario::model()->permisosAcceso("SUPERADMIN,ADMIN")),
								array('label' => 'Accidentes Anuales Area Bosque','url' => array('/estadistica/acc_anu_are_bosque/'),'visible' => Usuario::model()->permisosAcceso("SUPERADMIN,ADMIN")),
							)
						)
					)
				),
				/*			
				array(
					'class' => 'bootstrap.widgets.BsNav',
					'type' => 'navbar',
					'activateParents' => true,
					'items' => array(
						array('label' => 'Empresa','url' => array('/Empresa/admin'),'visible' => Usuario::model()->permisosAcceso("SUPERADMIN,ADMIN")),
						array('label' => 'Personas','url' => array('/Persona/admin'),'visible' => Usuario::model()->permisosAcceso("SUPERADMIN,ADMIN")),
						array('label' => 'Usuarios','url' => array('/Usuario/admin'),'visible' => Usuario::model()->permisosAcceso("SUPERADMIN,ADMIN")),
						array('label' => 'Login','url' => array('/site/login'),'pull' => BsHtml::NAVBAR_NAV_PULL_RIGHT,'visible' => Yii::app()->user->isGuest),
						),
					'htmlOptions' => array(
										//'pull' => BsHtml::NAVBAR_NAV_PULL_RIGHT
					)
				),
				*/
				array(
					'class' => 'bootstrap.widgets.BsNav',
					'type' => 'navbar',
					'activateParents' => true,
					'items' => array(
						array(
							'label' => 'Bienvenido '.Yii::app()->user->nombre,
							'url' => array(
								'/site/index'
							),
					'icon'=>BsHtml::GLYPHICON_USER,
							'items' => array(

								array('icon'=>BsHtml::GLYPHICON_USER,'label' => 'Cambiar Contraseña','url' => array('/usuario/changepassword'),'visible' => !Yii::app()->user->isGuest),
								BsHtml::menuDivider(),
								array('icon'=>BsHtml::GLYPHICON_LOG_OUT,'label' => 'Cerrar Sesión','url' => array('/usuario/logout'),'visible' => !Yii::app()->user->isGuest)
						
							)
						)
					),
					'htmlOptions' => array(
						'pull'=> BsHtml::NAVBAR_NAV_PULL_RIGHT
					),
				),
			)
		)
	);?>
	<div class="container-fluid">
		<?php
			$this->widget('bootstrap.widgets.BsBreadCrumb', array(
				'links' => $this->breadcrumbs,
				// will change the container to ul
				'tagName' => 'ul',
				// will generate the clickable breadcrumb links
				'activeLinkTemplate' => '<li><a href="{url}">{label}</a></li>',
				// will generate the current page url : <li>News</li>
				'inactiveLinkTemplate' => '<li>{label}</li>',
				// will generate your homeurl item : <li><a href="/dr/dr/public_html/">Home</a></li>
				'homeLink' => BsHtml::openTag('li') . BsHtml::icon(BsHtml::GLYPHICON_HOME) . BsHtml::closeTag('li')
			));
		?><!-- breadcrumbs -->
		<div class="row">
			<?php echo $content; ?>
		</div>
		

	</div><!--/.fluid-container-->
	<div class="clear"></div>
	<p class="text-center">
			Copyright &copy; <?php echo date('Y'); ?> para la Corporporación Chilena de la Madera.<br/>
			Todos los Derechos Reservados.<br/>
			Usted a ingresado con el Siguiente Rol : <?php echo Yii::app()->user->name ?>
	</p>
	
</div>
</body>
</html>