<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    <!-- App title -->
    <title>Administrator | Dashboard</title>
    <link rel="stylesheet" href="plugins/morris/morris.css">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="plugins/switchery/switchery.min.css">
    <script src="assets/js/modernizr.min.js"></script>

</head>
<body class="fixed-left">

    <div id="wrapper">

        <!-- Top Bar -->
        <div class="topbar">
            <!-- Top Header -->
            <?php include('includes/topheader.php');?>
        </div>
        <!-- Top Bar End -->

        <!-- Left Sidebar  -->
        <?php include('includes/leftsidebar.php');?>

        <!-- Start right Content  -->
        <div class="content-page">
            <!-- Content -->
            <div class="content">
                <!-- Container -->
                <div class="container">

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Dashboard</h4>
                                <ol class="breadcrumb p-0 m-0">

                                    <li>
                                        <a href="#">Admin</a>
                                    </li>
                                    <li class="active">
                                        Dashboard
                                    </li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
<a href="manage-student.php">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="card-box widget-box-one">
                                <i class="mdi mdi-chart-areaspline widget-one-icon"></i>
                                <div class="wigdet-one-content">
                                    <p class="m-0 text-uppercase font-600 font-secondary text-overflow">Học sinh</p>
<?php $query=mysqli_query($con,"select * from hocsinh where active=1");
$counths=mysqli_num_rows($query);
?>

                                    <h2><?php echo htmlentities($counths);?> <small></small></h2>
                                
                                </div>
                            </div>
                        </div></a><!-- end col -->
<a href="manage-teacher.php">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="card-box widget-box-one">
                                <i class="mdi mdi-chart-areaspline widget-one-icon"></i>
                                <div class="wigdet-one-content">
                                    <p class="m-0 text-uppercase font-600 font-secondary text-overflow">Giáo viên</p>
<?php $query=mysqli_query($con,"select * from giaovien where active=1");
$countgv=mysqli_num_rows($query);
?>
                                    <h2><?php echo htmlentities($countgv);?> <small></small></h2>
                            
                                </div>
                            </div>
                        </div><!-- end col -->
</a>

    <a href="class.php">                       
    <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="card-box widget-box-one">
                                <i class="mdi mdi-layers widget-one-icon"></i>
                                <div class="wigdet-one-content">
                                    <p class="m-0 text-uppercase font-600 font-secondary text-overflow">Lớp</p>
<?php $query=mysqli_query($con,"select * from lophoc");
$countclass=mysqli_num_rows($query);
?>
                                    <h2><?php echo htmlentities($countclass);?> <small></small></h2>
                            
                                </div>
                            </div>
                        </div><!-- end col -->
</a>
            
                
                    </div>
                    <!-- end row -->

                    <div class="row">
<a href="subject.php">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="card-box widget-box-one">
                                <i class="mdi mdi-layers widget-one-icon"></i>
                                <div class="wigdet-one-content">
                                    <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Bộ môn</p>
<?php $query=mysqli_query($con,"select * from monhoc");
$countsubj=mysqli_num_rows($query);
?>

                                    <h2><?php echo htmlentities($countsubj);?> <small></small></h2>
                                
                                </div>
                            </div>
                        </div></a><!-- end col -->
<a href="manage-news.php">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="card-box widget-box-one">
                                <i class="mdi mdi-layers widget-one-icon"></i>
                                <div class="wigdet-one-content">
                                    <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Tin tức</p>
<?php $query=mysqli_query($con,"select * from news");
$countnews=mysqli_num_rows($query);
?>
                                    <h2><?php echo htmlentities($countnews);?> <small></small></h2>
                            
                                </div>
                            </div>
                        </div><!-- end col -->
</a>

    <a href="timetable.php">                       
    <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="card-box widget-box-one">
                                <i class="mdi mdi-layers widget-one-icon"></i>
                                <div class="wigdet-one-content">
                                    <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Thời khoá biểu</p>
<?php $query=mysqli_query($con,"select * from tblposts where Is_Active=1");
$countposts=mysqli_num_rows($query);
?>
                                    <h2><?php echo htmlentities($countposts);?> <small></small></h2>
                            
                                </div>
                            </div>
                        </div><!-- end col -->
</a>
            
                
                    </div>
                    <!-- end row -->
                </div> <!-- container -->

            </div> <!-- content -->
<?php include('includes/footer.php');?>

        </div>

    </div>
    <!-- END wrapper -->



<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="plugins/switchery/switchery.min.js"></script>

<!-- Counter js  -->
<script src="plugins/waypoints/jquery.waypoints.min.js"></script>
<script src="plugins/counterup/jquery.counterup.min.js"></script>

<!--Morris Chart-->
<script src="plugins/morris/morris.min.js"></script>
<script src="plugins/raphael/raphael-min.js"></script>

<!-- Dashboard init -->
<script src="assets/pages/jquery.dashboard.js"></script>

<!-- App js -->
<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>

</body>
</html>
<?php } ?>