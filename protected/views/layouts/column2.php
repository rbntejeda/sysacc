<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/BsLayout'); ?>
<div class="container">
<div class="col-xs-12 col-sm-9 col-md-9">
	
	<div class="span-19">
		<div id="content">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
</div>
<div class="col-xs-12 col-sm-3 col-md-3">
	<div class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
	        <p>Opciones</p>
	        <?php 
	        		$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'htmlOptions'=>array('class'=>'nav'),
			)); ?>
        </div>
        <!-- /.sidebar-collapse -->
	</div>
</div>
</div>
<?php $this->endContent(); ?>