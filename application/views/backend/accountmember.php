<!-- nội dung-->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">BẢNG QUẢN LÝ TÀI KHOẢN</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                    <div class="view"></div>
                        <div class="panel-heading">
                            Bảng Dữ Liệu Tài Khoản
						 <a href="index.php?c=controladmin&m=loadinsertaccount">
							<button type="button" class="btn btn-primary themmonan" style="margin-left: 850px" >Thêm Mới</button></a></br></br>							
						
					   </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">

                            <div class="dataTable_wrapper">
                            <form method="post">
                                <table width="98%" height="50px" class="table table-striped table-bordered table-hover" id="dataTables-example">


                                    <thead>
                                        <tr>
                                            <th>STT</th>
											<th>ID</td>
                                            <th>Username</th>
                                            <th>Pass</th>
                                            <th>Email</th> 									
								
                                        </tr>
                                    </thead>
                                    <tbody>
									   <!-- load khoa hoc -->
						<?php
if(isset($records) && count($records))
{
	$stt=1;
foreach($records as $reco)
{?>								
	<tr class="odd gradeA">
	<td><?php echo $stt?></td>
	<td><?php echo $reco['id']; ?></td>
	<td><?php echo $reco['username']; ?></td>
	<td><?php echo $reco['pass']; ?></td>
	<td><?php echo $reco['email']; ?></td>
	<td> <a href="index.php?c=controladmin&m=loadupdateaccount&id=<?php echo $reco['id'];?>"><img src="public/backend/images/edit.png"></a></td>
	<td> <a href="index.php?c=controladmin&m=deleteaccount&id=<?php echo $reco['id'];?>"><img src="public/backend/images/delete.png"></a></td>
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
