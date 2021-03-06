
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ShuleSoft user manual, ">
    <meta name="author" content="">
     <meta name="keywords" content="exam, accounts, mpesa, nmb, ">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>@yield('title','ShuleSoft Support')</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo url('public/assets/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo url('public/assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')?>" rel="stylesheet">
    <!-- Calendar CSS -->
    <link href="<?php echo url('public/assets/plugins/bower_components/calendar/dist/fullcalendar.css')?>" rel="stylesheet" />
    <!-- animation CSS -->
    <link href="<?php echo url('public/assets/css/animate.css')?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo url('public/assets/css/style.css')?>" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo url('public/assets/css/colors/default.css')?>" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
       @include('layouts.header')
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include('layouts.navigation')
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <!-- <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12"> -->
                        <!-- <h4 class="page-title">Shulesoft</h4> </div> -->
                    <!-- <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button> -->
                        <!-- <a href="javascript: void(0);" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Log into ShuleSoft</a> -->
                        <!-- <ol class="breadcrumb">
                            <li><a href="#"></a></li>
                            <li class="#"></li>
                            <li class="active"></li>
                        </ol> -->
                    <!-- </div> -->
                    <!-- /.col-lg-12 -->
                <!-- </div> -->
                <!-- row -->
               
            
@yield('content')
            
             
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> <?php echo date('Y');?> &copy; ShuleSoft Support </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="<?php echo url('public/assets/plugins/bower_components/jquery/dist/jquery.min.js')?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo url('public/assets/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo url('public/assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')?>"></script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo url('public/assets/js/jquery.slimscroll.js')?>"></script>
    <!-- Calendar JavaScript -->
    <script src="<?php echo url('public/assets/plugins/bower_components/calendar/jquery-ui.min.js')?>"></script>
    <script src="<?php echo url('public/assets/plugins/bower_components/moment/moment.js')?>"></script>
    <script src='<?php echo url('public/assets/plugins/bower_components/calendar/dist/fullcalendar.min.js')?>'></script>
    <script src="<?php echo url('public/assets/plugins/bower_components/calendar/dist/jquery.fullcalendar.js')?>"></script>
    <script src="<?php echo url('public/assets/plugins/bower_components/calendar/dist/cal-init.js')?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo url('public/assets/js/waves.js')?>"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo url('public/assets/js/custom.min.js')?>"></script>
    
    <!--Style Switcher -->
    <script src="<?php echo url('public/assets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js')?>"></script>
</body>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-57911389-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-57911389-1');
</script>

</html>
