<?php 
    include '../lib/session.php';
     Session::checkSession();
 ?>

<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000");
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" media="screen" />
    <link href="css/table/demo_page.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN: load jquery -->
    <script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.mouse.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.sortable.min.js" type="text/javascript"></script>
    <!-- tìm kiếm phân trang -->
    <script src="js/table/jquery.dataTables.min.js" type="text/javascript"></script>
    <!-- tìm kiếm phân trang -->
    <!-- END: load jquery -->
    <script type="text/javascript" src="js/table/table.js"></script>
    <script src="js/setup.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        setupLeftMenu();
        setSidebarHeight();
    });
    </script>

</head>

<body>
    <div class="container_12">
        <div class="grid_12">
            <ul class="nav main">
                <li class="ic-charts"><a href="index.php"><span>Dashboard</span></a> </li>
               
                <li class="ic-form-style"><a href="contact.php"><span>Phản hồi từ khách hàng</span></a></li>
                <!-- <li class="ic-typography"><a href="changepassword.php"><span>Thay đổi mật khẩu</span></a></li> -->
                <li class="ic-dashboard"><a href="info.php"><span>Đơn Hàng</span></a></li>
                <li class="ic-charts"><a href="../index.php" target="_blank"><span>Website</span></a></li>
                <?php 
                                if(isset($_GET['action']) && $_GET['action']=='logout'){
                                    Session::destroy();
                                }
                             ?>

                <li class="ic-grid-tables" style="float:right;"><a href=" ?action=logout"><span>Logout</span></a></li>
            </ul>
        </div>