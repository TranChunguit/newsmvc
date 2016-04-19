<!-- nội dung-->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">BẢNG QUẢN LÝ TIN TỨC</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div >
                    <div class="panel panel-default">
                    <div class="view"></div>
                        <div class="panel-heading">
                            Bảng Tin Tức
						 <a href="index.php?c=controladmin&m=loadinsertnews">
							<button type="button" class="btn btn-primary themmonan" style="margin-left: 850px"  >Thêm Mới</button></a></br></br>						
					   </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">

                            <div class="dataTable_wrapper">
                            <form method="post">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Id News</th>
                                            <th>Title</th>								
                                            <th>Images</th>
                                            <th>Category News</th>
                                            <th>Username</th>
                                            <th>PostDate<br></th> 																															
											<th>Chỉnh sửa<br></th>
											<th>Xóa</th>
                                        </tr>
                                    </thead>
					<?php
if(isset($records) && count($records))
{
foreach($records as $reco)
{?>													
	<tr>
		<td><?php echo $reco['idnews']; ?></td>
		<td><?php echo $reco['title']; ?></td>
		<td><img src="<?php echo $reco['image']; ?>"></td>
		<td><?php echo $reco['categoryname']; ?></td>
		<td><?php echo $reco['username']; ?></td>
		<td><?php echo $reco['datepost']; ?></td>
		<td><a href="index.php?c=controladmin&m=loadupdatenews&idnews=<?php echo $reco['idnews'];?>"><img src="public/backend/images/edit.png"></a></td>
		<td> <a href="index.php?c=controladmin&m=deletenews&id=<?php echo $reco['idnews'];?>"><img src="public/backend/images/delete.png"></a></td>
	</tr>
<?php
}							
}
?>  
    	
<!-- Ket thuc load dl-->              
                                </table>
                                </form>
								<?php 
echo $listpage;

?> 
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
