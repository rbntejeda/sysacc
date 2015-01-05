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
<style type="text/css">
	body { padding-top: 70px; }
</style>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container">

	<!--div id="header">
		<h1 id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></h1>
	</div><!-- header -->
	 <?php
		$this->widget('bootstrap.widgets.BsNavbar', array(
			'collapse' => true,
			'brandLabel'=>'SYSACC',
			'brandUrl' => Yii::app()->homeUrl,
			'position' => BsHtml::NAVBAR_POSITION_FIXED_TOP,
			'htmlOptions' => array(
			        'containerOptions' => array(
			            'fluid' => true
			        ),
			    ),

			//'color'=>'#99cc32',
			'items' => array(
				//dropdown
				/*
				array(
					'class' => 'bootstrap.widgets.BsNav',
					'type' => 'navbar',
					'activateParents' => true,
					'items' => array(
						array(
							'label' => 'dropdown',
							'url' => array(
								'/site/index'
							),
							'items' => array(
								BsHtml::menuHeader(BsHtml::icon(BsHtml::GLYPHICON_BOOKMARK), array(
									'class' => 'text-center',
									'style' => 'color:#99cc32;font-size:32px;'
								)),
								array(
									'label' => 'Login',
									'url' => array(
										'/site/login'
									),
									'visible' => Yii::app()->user->isGuest,
									'icon' => BsHtml::GLYPHICON_LOG_IN
								),
								array(
									'label' => 'Logout (' . Yii::app()->user->name . ')',
									'url' => array(
										'/site/logout'
									),
									'visible' => !Yii::app()->user->isGuest
								),
								array(
									'label' => 'Home',
									'url' => array(
										'/site/index'
									),
									'icon' => BsHtml::GLYPHICON_HOME
								),
								array(
									'label' => 'About',
									'url' => array(
										'/site/page',
										'view' => 'about'
									),
									'icon' => BsHtml::GLYPHICON_PAPERCLIP
								),
								array(
									'label' => 'Contact',
									'url' => array(
										'/site/contact'
									),
									'icon' => BsHtml::GLYPHICON_FLOPPY_OPEN
								)
							)
						)
					)
				),
				*/
				array(
					'class' => 'bootstrap.widgets.BsNav',
					'type' => 'navbar',
					'activateParents' => true,
					'items' => array(
						array('label' => 'Personas','url' => array('/Persona/admin'),'visible' => !Yii::app()->user->isGuest),
						array('label' => 'Usuarios','url' => array('/Usuario/admin'),'visible' => !Yii::app()->user->isGuest),
						array('label' => 'Login','url' => array('/site/login'),'pull' => BsHtml::NAVBAR_NAV_PULL_RIGHT,'visible' => Yii::app()->user->isGuest),
						array('label' => 'Logout (' . Yii::app()->user->name . ')','pull' => BsHtml::NAVBAR_NAV_PULL_RIGHT,'url' => array('/site/logout'),'visible' => !Yii::app()->user->isGuest)
						),
					'htmlOptions' => array(
										//'pull' => BsHtml::NAVBAR_NAV_PULL_RIGHT
					)
				)

			)
));
?>
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
	<?php echo $content; ?>

	</div><!--/.fluid-container-->
	<div class="clear"></div>
	<p class="text-center">
			Copyright &copy; <?php echo date('Y'); ?> para Corporporación de la Madera.<br/>
			Todos los Derechos Reservados.<br/>
	</p>
	
</div><!-- page -->
<!--script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.Rut.min.js"></script-->

</body>
</html>