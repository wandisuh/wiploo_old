<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="<?php echo e(asset('/assets/backend')); ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo e(asset('/assets/backend')); ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo e(asset('/assets/backend')); ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo e(asset('/assets/backend')); ?>/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo e(asset('/assets/backend')); ?>/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Tagline!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <?php echo $__env->make('backend.layouts.profile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- /menu profile quick info -->
			
            <br />

            <!-- sidebar menu -->
            <?php echo $__env->make('backend.layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <?php echo $__env->make('backend.layouts.top-menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- /top navigation -->

        <!-- page content -->
        <?php echo $__env->yieldContent('content'); ?>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo e(asset('/assets/backend')); ?>/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo e(asset('/assets/backend')); ?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo e(asset('/assets/backend')); ?>/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo e(asset('/assets/backend')); ?>/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo e(asset('/assets/backend')); ?>/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="<?php echo e(asset('/assets/backend')); ?>/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="<?php echo e(asset('/assets/backend')); ?>/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo e(asset('/assets/backend')); ?>/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo e(asset('/assets/backend')); ?>/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo e(asset('/assets/backend')); ?>/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo e(asset('/assets/backend')); ?>/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo e(asset('/assets/backend')); ?>/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo e(asset('/assets/backend')); ?>/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo e(asset('/assets/backend')); ?>/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo e(asset('/assets/backend')); ?>/vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo e(asset('/assets/backend')); ?>/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo e(asset('/assets/backend')); ?>/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="<?php echo e(asset('/assets/backend')); ?>/build/js/custom.min.js"></script>
	<?php echo $__env->yieldContent('script'); ?>
  </body>
</html>