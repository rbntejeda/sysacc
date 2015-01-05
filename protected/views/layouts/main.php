<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="es" />

	<!-- blueprint CSS framework -->
	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<!--Bootstrap 3-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container">

	<div id="header">
		<h1 id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></h1>
	</div><!-- header -->
	 <?php
        $this->widget('bootstrap.widgets.BsNavbar', array(
            'collapse' => true,
            'brandLabel'=>'',
            'brandUrl' => Yii::app()->homeUrl,
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
        array('label' => 'Beneficio Social','url' => array('/beneficioSocial/admin'),'visible' => !Yii::app()->user->isGuest),
        array('label' => 'Proyectos','url' => array('/Proyecto/admin'),'visible' => !Yii::app()->user->isGuest),
        array('label' => 'Institucion','url' => array('/Institucion/admin'),'visible' => !Yii::app()->user->isGuest),
        array('label' => 'Municipio','url' => array('/Municipio/admin/'),'visible' => !Yii::app()->user->isGuest),
        array('label' => 'Informes','url' => array('/Informe/index'),'visible' => !Yii::app()->user->isGuest),
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
            Copyright &copy; <?php echo date('Y'); ?> para SP Consultores.<br/>
            Todos los Derechos Reservados.<br/>
            <?php echo Yii::powered(); ?>
    </p>
    
</div><!-- page -->

<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.Rut.min.js"></script>

</body>
</html>
