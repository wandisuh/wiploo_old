<?php $__env->startSection('content'); ?>

<div class="right_col" role="main" style="min-height: 3576px;">
  <div class="">
	<div class="clearfix"></div>
	
	<div class="row">
	  <!--<div class="col-md-12 col-xs-12">-->
		<div class="x_panel">
		  <div class="x_title">
			<h2>Kategori</h2>
			<ul class="nav navbar-right panel_toolbox">
			  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
			  </li>
			  <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
				<ul class="dropdown-menu" role="menu">
				  <li><a href="#">Settings 1</a>
				  </li>
				  <li><a href="#">Settings 2</a>
				  </li>
				</ul>
			  </li>
			  <li><a class="close-link"><i class="fa fa-close"></i></a>
			  </li>
			</ul>
			<div class="clearfix"></div>
		  </div>
		  <div class="x_content">
			<br>
			<?php if(count($errors) > 0): ?>
				<div class="alert alert-danger">
					<ul>
						<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li><?php echo e($error); ?></li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
				</div>
			<?php endif; ?>
	
			<form class="form-horizontal form-label-left" method="POST" action="<?php echo e(route('store-category')); ?>">
				<?php echo e(csrf_field()); ?>

			  <div class="form-group">
				<label class="control-label col-md-2 col-sm-3 col-xs-12">Nama Kategori</label>
				<div class="col-md-5 col-sm-9 col-xs-12">
				  <input type="text" class="form-control" value="<?php echo e(old('name')); ?>" name="name" required>
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-md-2 col-sm-3 col-xs-12">Status</label>
				<div class="col-md-4 col-sm-9 col-xs-12">
				  <select class="form-control" name="published" required>
					<option value="">Choose Status</option>
					<option value="1">Publish</option>
					<option value="0">Unpublish</option>
				  </select>
				</div>
			  </div>
			  
			  <div class="ln_solid"></div>
			  <div class="form-group">
				<div class="col-md-9 col-sm-10 col-xs-12 col-md-offset-3">
				  <a type="button" class="btn btn-primary" href="<?php echo e(route('data-categories')); ?>">Cancel</a>
				  <button type="reset" class="btn btn-primary">Reset</button>
				  <button type="submit" class="btn btn-success">Submit</button>
				</div>
			  </div>

			</form>
		  </div>
		<!--</div>-->
	  </div>
	
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('/assets/backend//vendors/validator/validator.js')); ?>"></script>
<script>
	initSample();
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>