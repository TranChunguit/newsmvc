<!-- nội dung-->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">CẬP NHẬT TÀI KHOẢN ADMIN</h1>
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
                <form action="index.php?c=controladmin&m=updateaccount" method="post" class="form-horizontal">
				<?php 
					if(isset($records) && count($records)){
						foreach($records as $reco){?>
                    <table class="table">	
						<tr>
                            <td>ID</td>
					<td><input class="form-control" id="inputmember" type="text" name="id" placeholder="id" value="<?php echo $reco['id'];?>"/></td>
                        </tr>					
                        <tr>
                            <td>Username</td>
					<td><input class="form-control" id="inputmember" type="text" name="username" placeholder="username" value="<?php echo $reco['username'];?>"/></td>
                        </tr>
						<tr>
							<td>Password</td>
                            <td><input class="form-control" id="inputmember" type="text" name="pass" placeholder="password" value="<?php echo $reco['pass'];?>"/></td>
						</tr>
                        <tr>
                            <td>Email</td>
					<td><input class="form-control" id="inputmember" type="text" name="email" placeholder="email" value="<?php echo $reco['email'];?>"/></td>
                        </tr>
						<tr>
                            <td>Role</td>
					<td><input class="form-control" id="inputmember" type="text" name="role" placeholder="role" value="<?php echo $reco['role'];}}?>"/></td>
                        </tr>						
                        <tr>                          
                            <td><input type="submit" class="btn btn-primary" name="update" value="update"/></td>
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
