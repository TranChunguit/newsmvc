<!-- nội dung-->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">THÊM TIN TỨC</h1>
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
						
						<form action="index.php?c=controladmin&m=insertnews" method="post" enctype="multipart/form-data">
							  <div class="form-group">
								<table class="table">						
									<tr>
										<td>Title:<input class="form-control" type="text" name="title"/></td>
									</tr>
								<tr>
									<td>Categorynews:
										<select name="categorynews">
											<option value="W">World</option>
											<option value="P">Politics</option>
											<option value="B">Business</option>
											<option value="T">Technology</option>
											<option value="SP">Sports</option>
											<option value="H">Health</option>
											<option value="S">Science</option>
											<option value="SB">Badminton</option>
											<option value="SF">Football</option>
											<option value="SR">Running</option>
										</select>
									</td>
								</tr>
								<tr>
									<td>Image:<input type="file" name="image"/></td>
								</tr>
								<tr>								
									<td>Summary:<textarea class="insertarea form-control" name="summary" id="summary"></textarea></td>
								</tr>								
								<tr>
									<td>Content:<textarea id="content" name="content"></textarea></td>
								</tr>
								<tr>                          
									<td><input type="submit" name="insert" class="btn btn-primary" value="insert"/></td>
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
