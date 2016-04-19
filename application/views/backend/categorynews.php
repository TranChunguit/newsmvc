<!-- nội dung-->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Bảng Quản Lý Loại Tin Tức</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                    <div class="view"></div>
                        <div class="panel-heading">
                            Bảng Thư Mục Tin Tức
						 
					   </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">

                            <div class="dataTable_wrapper">
                            <form method="post">
                                <table width="98%" height="50px" class="table table-striped table-bordered table-hover" id="dataTables-example">


                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>CATEGORYNEWS</th>
                                            <th>CATEGORYNAME</th>										
                                        </tr>
                                    </thead>
                                    <tbody>
									   <!-- load categorynews -->
	<?php
if(isset($records) && count($records))
{
	$stt=1;
foreach($records as $reco)
{?>																
	<tr class="odd gradeA">
	<td style="text-align:center"><?php echo $stt?></td>
	<td style="text-align:center"><?php echo $reco['categorynews']; ?></td>
	<td style="text-align:center"><?php echo $reco['categoryname']; ?></td>
	</tr>
<?php
	$stt++;	
}
?>

<?php    
									
}
?>      		
<!-- Ket thuc load dl-->              
                                    </tbody>
                                </table>
                                </form>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <!-- /.row -->
            <!-- /.row -->
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="public/backend/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="public/backend/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="public/backend/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="public/backend/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="public/backend/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="public/backend/dist/js/sb-admin-2.js"></script>

</body>

</html>
