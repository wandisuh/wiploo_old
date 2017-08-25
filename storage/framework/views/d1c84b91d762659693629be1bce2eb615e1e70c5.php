<?php $__env->startSection('content'); ?>
<div class="right_col" role="main">
  <div class="">
	<div class="page-title">
	  <div class="title_left">
		<h3>&nbsp;</h3>
	  </div>

	  <div class="title_right">
		<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
		  <div class="input-group">
			<input type="text" class="form-control" placeholder="Search for...">
			<span class="input-group-btn">
			  <button class="btn btn-default" type="button">Go!</button>
			</span>
		  </div>
		</div>
	  </div>
	</div>

	<div class="clearfix"></div>

	<div class="row">
	  
		<div class="x_panel">
			<div class="col-md-1">
			  <a type="button" class="btn btn-primary" href="<?php echo e(route('add-article')); ?>">Tambah Artikel</a>
			</div>
		  <div class="x_title">
			<h2>&nbsp; <small>&nbsp;</small></h2>
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
			<table id="datatable-fixed-header" class="table table-striped table-bordered articles">
			  <thead>
				<tr>
				  <th>Title</th>
				  <th>Author</th>
				  <th>Kategori</th>
				  <th>Gambar</th>
				  <th>Tanggal Pembuatan</th>
				  <th>Konten</th>
				  <th>Action</th>
				</tr>
			  </thead>
			  <tbody>
				<?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
					  <td><?php echo e($article->title); ?></td>
					  <td><?php echo e($article->author); ?></td>
					  <td><?php echo e($article->category_id); ?></td>
					  <td><img src="<?php echo e(asset('/upload/img_artikel/thumb_'.$article->image)); ?>" style="width:80px;"/></td>
					  <td><?php echo e(str_limit($article->content,25)); ?></td>
					  <td><?php echo e(date('d F Y', strtotime($article->created_at))); ?></td>
					  <td>
						<a href="<?php echo e(route('edit-article', ['id'=> $article->id])); ?>" type="button" class="btn btn-success btn-sm">Edit</a>
						<button type="button" class="btn btn-sm btn-warning" onclick="sw_alert(<?php echo e($article->id); ?>)">Delete</button>
					  </td>
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
			  </tbody>
			</table>
		  </div>
		</div>

	</div>
  </div>
</div>

<!-- jQuery -->
<script src="<?php echo e(asset('/assets/backend')); ?>/vendors/jquery/dist/jquery.min.js"></script>
<script src="<?php echo e(asset('assets/sw_alert/dist/sweetalert-dev.js')); ?>"></script>
<link rel="stylesheet" href="<?php echo e(asset('assets/sw_alert/dist/sweetalert.css')); ?>">
<script type="text/javascript">
	function sw_alert(id) {
		swal({
		  title: "",//"Apakah anda ingin menghapus data ini?",
		  text: "Apakah anda ingin menghapus data ini?",
		  type: "warning",
		  showCancelButton: true,
		  confirmButtonColor: "#DD6B55",
		  confirmButtonText: "Yes",
		  cancelButtonText: "No",
		  closeOnConfirm: false,
		  closeOnCancel: false
		},
		function(isConfirm){
		  if (isConfirm) {  
			window.location = 'article/'+id+'/delete';
		  } else {
			swal("Cancelled", "", "error");
		  }
		});
	}

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.dataTables', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>