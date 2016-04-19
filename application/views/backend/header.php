<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Quản lý Tin Tức</title>

    <!-- Bootstrap Core CSS -->
    <link href="public/backend/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="public/backend/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="public/backend/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="public/backend/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="public/backend/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="public/css/backend.css" rel="stylesheet" type="text/css">
	<link href="public/backend/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="public/backend/bower_components/jquery/dist/jquery.min.js"></script>
	 <script language="javascript" type="text/javascript" src="public/ckeditor/ckeditor.js"></script>
	 <script language="javascript" type="text/javascript" src="public/ckfinder/ckfinder.js"></script>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
         <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">TRANG QUẢN TRỊ</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">             
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                       
                        <li class="divider"></li>
                        <li><a href="index.php?c=controlnews&m=logout"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

             <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
							
                    <ul class="nav" id="side-menu">                      
								<li>
									<a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Quản lý Tài Khoản  <span class="fa arrow"></span></a>
										<ul class="nav nav-second-level">
                               
											<li>
												<a href="index.php?c=controladmin&m=loadaccountmember">Tài khoản Người Dùng <span class="fa arrow"></span></a>                                                                    
											</li>
											
											 <li>
												<a href="index.php?c=controladmin&m=loadaccountadmin">Tài khoản Admin <span class="fa arrow"></span></a>                                                                    
											</li>                               
								
                                        
										</ul>
                                    
                                    <!-- /.nav-third-level -->
                                </li>
						
								 <li>
									<a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Quản Lý Tin Tức <span class="fa arrow"></span></a>
										<ul class="nav nav-second-level">
                               
											<li>
												<a href="index.php?c=controladmin&m=loadcategorynews">Thể Loại Tin Tức<span class="fa arrow"></span></a>                                                                    
											</li>
											
											 <li>
												<a href="index.php?c=controladmin&m=loadnews">Tin Tức <span class="fa arrow"></span></a>                                                                    
											</li>                               
											
                                        
										</ul>
                                    
                                    <!-- /.nav-third-level -->
                                </li>
                             
                            </ul>                   
								
                   
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
		
		<!--them sau index-->
		
		