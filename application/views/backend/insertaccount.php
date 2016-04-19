<!-- nội dung-->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">THÊM TÀI KHOẢN MEMBER</h1>
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
						
        <section class="itq-view">          
            <section class="insert">
                <form action="index.php?c=controladmin&m=insertaccountmember" method="post">
                    <table  class="table">						
                        <tr>
                            <td>Username</td>
                            <td><input class="form-control" id="inputmember" type="text" name="username"/></td>
                        </tr>
						<tr>
							<td>Password</td>
                            <td><input class="form-control" id="inputmember" type="text" name="pass"/></td>
						</tr>
                        <tr>
                            <td>Email</td>
                            <td><input class="form-control" id="inputmember" type="text" name="email"/></td>
                        </tr>                    
                        <tr>                          
                            <td><input class="btn btn-primary" type="submit" name="insert" value="insert"/></td>
                        </tr>
                    </table>
                </form>              
            </section><!--insert-->
        </section><!--itq-view-->        
  
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
