

<?php $__env->startSection('content'); ?>
<script src="<?php echo e(asset('assets/ck_editor/ckeditor.js')); ?>"></script>
<script src="<?php echo e(asset('assets/ck_editor/js/sample.js')); ?>"></script>
<link rel="stylesheet" href="<?php echo e(asset('assets/ck_editor/css/samples.css')); ?>">
<div class="right_col" role="main" style="min-height: 3576px;">
  <div class="">
	<div class="clearfix"></div>
	
	<div class="row">
	  <!--<div class="col-md-12 col-xs-12">-->
		<div class="x_panel">
		  <div class="x_title">
			<h2>Artikel</h2>
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
	
			<form class="form-horizontal form-label-left" method="POST" action="<?php echo e(route('update-article')); ?>" enctype="multipart/form-data">
				<?php echo e(csrf_field()); ?>

				<input type="hidden" class="form-control" value="<?php echo e($article->id); ?>" name="id">

			  <div class="form-group">
				<label class="control-label col-md-2 col-sm-3 col-xs-12">Judul Artikel</label>
				<div class="col-md-5 col-sm-9 col-xs-12">
				  <input type="text" class="form-control" value="<?php echo e($article->title); ?>" name="title" required>
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-md-2 col-sm-3 col-xs-12">Kategori</label>
				<div class="col-md-4 col-sm-9 col-xs-12">
				  <select class="form-control" name="category_id" required>
					<option value="">Choose option</option>
					<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				  </select>
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-md-2 col-sm-3 col-xs-12">Gambar</label>
				<div class="col-md-4 col-sm-9 col-xs-12">
				  <input type="file" class="form-control" value="<?php echo e(old('image')); ?>" name="image">
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-md-2 col-sm-3 col-xs-12">&nbsp;</label>
				<div class="col-md-4 col-sm-9 col-xs-12">
				  <img src="<?php echo e(asset('upload/img_artikel/thumb_').$article->image); ?>" style="height:120px;">
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-md-2 col-sm-3 col-xs-12">Konten Pendek</label>
				<div class="col-sm-10 col-xs-12">
				  <textarea name="short_content" class="form-control" required><?php echo e($article->short_content); ?></textarea>
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-md-2 col-sm-3 col-xs-12">Konten</label>
				<div class="col-sm-10 col-xs-12">
				  <textarea id="editor" name="content" required><?php echo e($article->content); ?></textarea>
				</div>
			  </div>
			  
			  <div class="ln_solid"></div>
			  <div class="form-group">
				<div class="col-md-9 col-sm-10 col-xs-12 col-md-offset-3">
				  <a type="button" class="btn btn-primary" href="<?php echo e(route('data-articles')); ?>">Cancel</a>
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