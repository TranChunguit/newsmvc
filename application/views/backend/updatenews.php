<!-- nội dung-->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">CẬP NHẬT TIN TỨC</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                    <div class="view"></div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">

							<div class="dataTable_wrapper">
						
						<form action="index.php?c=controladmin&m=updatenews" method="post" enctype="multipart/form-data">
							  <div class="form-group">
								<?php 
								if(isset($records)&&count($records))
								{
									foreach($records as $reco)
								{?>
								<table class="table">
									<tr>
										<td>Idnews:<input class="form-control" type="text" name="idnews" value="<?php echo $reco['idnews'];?>"/></td>
									</tr>
									<tr>
										<td>Title:<input class="form-control" type="text" name="title" value="<?php echo $reco['title'];?>"/></td>
									</tr>
								<tr>
									<td>Image:<input type="file" name="image"><input type="text" name = "imagetxt" value="<?php echo $reco['image'];?>"></td>
								</tr>
								<tr>								
									<td>Summary:<textarea class="insertarea form-control" name="summary" id="summary"><?php echo $reco['summary'];?></textarea></td>
								</tr>								
								<tr>
									<td>Content:<textarea id="content" name="content"><?php echo $reco['content'];}}?></textarea></td>
								</tr>
								<tr>                          
									<td><input type="submit" name="update" class="btn btn-primary" value="update"/></td>
								</tr>
							</table>
							  <div class="form-group">
						</form>
							<script lang="text/javascript">
							CKEDITOR.replace("content");
							</script>
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
