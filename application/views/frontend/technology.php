
					<!-- Nội dung web  -->
                    <div class="col-md-8">
		<?php
if(isset($records) && count($records))
{
foreach($records as $reco)
{?>
	<div class="row margin">
	<div class="col-md-4">
					<img src="<?php echo $reco['image']; ?>">			
	</div>
	<div class="col-md-8">
			<div class="col-md-12">
			<a href="index.php?c=controlnews&m=techdetail&idnews=<?php echo $reco['idnews'];?>"><?php echo $reco['title']; ?></a>
			</div>
			<div class="col-md-12">
					<?php echo $reco['summary']; ?>				
			</div>
	</div>
	</div>
	<?php
	
}

}
?>
 						
					
					</div>
					<div class="col-md-12 col-md-offset-10 ">
					<?php 
						echo $listpage;

						?> 
					</div>
								
                </div>

                <!-- Phần Footer -->
                <div id="footer" class="row">
                    <div class="col-md-12">                    
                        Copyright 2016 - UIT
                    </div>
                </div>        
            </div>
        </body>
    </html>
</body>
</html>
			