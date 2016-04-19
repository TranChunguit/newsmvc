
        <div id="page-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">Quản Lý Chung</h1>
                </div>
            </div>          
            
			<div class="row">
                <div class="col-md-12">
					<div class="panel panel-primary">
					<div class="panel-heading"> Top 10 Tin Mới Mỗi Ngày</div>
					<div class="panel-body">
							<form>
                                <table class="table table-border">
                                    <thead>
                                        <tr>
                                            <th>Title</th>								
                                            <th>Category Name</th>
                                            <th>Username</th>
                                            <th>PostDate<br></th> 																					
											<th>Summary<br></th>
                                        </tr>
                                    </thead>
									
					<?php
if(isset($records) && count($records))
{
foreach($records as $reco)
{?>													
	<tr class="odd gradeA">
		<td><?php echo $reco['title']; ?></td>
		<td><?php echo $reco['categoryname']; ?></td>
		<td><?php echo $reco['username']; ?></td>
		<td><?php echo $reco['datepost']; ?></td>
		<td><?php echo $reco['summary']; ?></td>		
	</tr>
<?php
}							
}
?>      	
<!-- Ket thuc load dl-->              
                                </table>
                                </form>
					</div>
					</div>
                </div>
            </div> 
        </div>
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

  
    <!-- Custom Theme JavaScript -->
    <script src="public/backend/dist/js/sb-admin-2.js"></script>

</body>

</html>
