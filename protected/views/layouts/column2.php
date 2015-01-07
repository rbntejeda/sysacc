<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/BsLayout'); ?>
<div class="container">
	<div class="col-xs-12 col-sm-2 col-md-2">
        <p class="lead">Opciones</p>

		<div class="navbar-default navbar-static-side" role="navigation">
	        <div class="sidebar-collapse">
		        <?php 
					echo BsHtml::stackedPills($this->menu);
 				?>		
	        </div>
	        <!-- /.sidebar-collapse -->
		</div>
	</div>
		<div class="col-xs-12 col-sm-10 col-md-10">
			<div id="content">
				<?php echo $content; ?>
			</div><!-- content -->
		</div>
</div>
<?php $this->endContent(); ?>