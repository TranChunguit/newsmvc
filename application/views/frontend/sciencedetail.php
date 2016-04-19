
					<!-- Nội dung web  -->
                    <div class="col-md-8">
						<div class="contentdetail">
		<?php
if(isset($records) && count($records))
{
foreach($records as $reco)
{?>
	<div class="col-md-12 title">
	<?php echo $reco['title']; ?>
	</div>
	<div class="col-md-12">
	<?php echo $reco['content']; ?>
	</div>
	<div class="col-md-12 col-md-offset-10 user">
	<?php echo $reco['username']; ?>
	</div>
	<div class="col-md-12 col-md-offset-10 ">
	<?php echo $reco['datepost']; ?>
	</div>
	<?php
}
}
?>  
	<div class="fb-comments" data-href="http://localhost/newsmvc/index.php?c=controlnews&amp;m=sciencedetail" data-numposts="5"></div>				
					</div>
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
			