

<?php $__env->startSection('content'); ?>
<div class="right_col" role="main">
  <div class="">
	<div class="page-title">
	  <div class="title_left">
		<h3><marquee>welcome...</marquee></h3>
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
			<table id="datatable-fixed-header" class="table table-striped table-bordered">
			  <thead>
				<tr>
				  <th>Name</th>
				  <th>Email</th>
				  <th>Point</th>
				  <th>Create At</th>
				</tr>
			  </thead>
			  <tbody>
				<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
					  <td><?php echo e($user->name); ?></td>
					  <td><?php echo e($user->email); ?></td>
					  <td><?php echo e($user->point); ?></td>
					  <td><?php echo e($user->created_at); ?></td>
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
<!--
<script type="text/javascript">
$(function() {
	$.ajax({
		url: "<?php echo e(route('api-data-users')); ?>",
		type: 'get',
		dataType: 'json',
		//beforeSend: function(){$("#overlay2").show();},
		success: function(data){ 
			console.log(data);
			let html = data.map(function (item, key) { 

			data += `<tr>
					  <td>${item.name}</td>
					  <td>${item.email}</td>
					  <td>${item.point}</td>
					  <td>${item.created_at}</td>
					</tr>`

			return data         

		}).reduce((carry, item) => carry + item, '')
		$("#member").html(html);
		}
	});		
});
</script>
 -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.dataTables', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>