<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
include_once("includes/pagination.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <!DOCTYPE html>
    <!--
    To change this license header, choose License Headers in Project Properties.
    To change this template file, choose Tools | Templates
    and open the template in the editor.
    -->
    <html>
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">         

            <!-- Bootstrap -->
            <link href="public/boostrap332/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>          
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="public/jquery/jquery1_11_2.min.js" type="text/javascript"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="public/boostrap332/js/bootstrap.min.js" type="text/javascript"></script>
            <link href="public/boostrap332/css/mystyle.css" rel="stylesheet" type="text/css"/>
			 <link href="public/css/topmenu.css" rel="stylesheet" type="text/css"/>
		<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        </head>
        <body>
            <div class="container-fluid">
                <?php
                
                ?>
                <!-- Phần Header -->
                <div id="header" class="row">
                    <div class="col-md-12">                    
                    </div>                
                </div>
                <div id="topmenu" class="row">
                    <div class="col-md-12">
                        <!DOCTYPE html>
                        <!--
                        To change this license header, choose License Headers in Project Properties.
                        To change this template file, choose Tools | Templates
                        and open the template in the editor.
                        -->
                        <html>
                            <head>
                                <meta charset="UTF-8">
                                <title></title>
                            </head>
                            <body>
                                <div id='cssmenu' class="align-center">
                                    <ul>
                                        <li><a href="index.php?c=controlnews&m=loadhome"><span>HOME</span></a></li>
                                        <li><a href="index.php?c=controlnews&m=loadworld"><span>WORLD</span></a></li>
										<li><a href="index.php?c=controlnews&m=loadpolitics"><span>POLITICS</span></a></li>
                                        <li><a href="index.php?c=controlnews&m=loadbusiness"><span>BUSINESS</span></a></li>
										<li><a href="index.php?c=controlnews&m=loadtech"><span>TECHNOLOGY</span></a></li>
										<li class='active has-sub'><a href="index.php?c=controlnews&m=loadsport"><span>SPORTS</span></a>
											 <ul>
                                                <li class='has-sub'><a href="index.php?c=controlnews&m=loadsportft"><span>FOOTBALL</span></a>
                                                   
                                                </li>
                                                <li class='has-sub'><a href="index.php?c=controlnews&m=loadsportbd"><span>BADMINTON</span></a>
                                                   
                                                </li>
                                                <li class='has-sub'><a href="index.php?c=controlnews&m=loadsportrun"><span>RUNNING</span></a>
                                                  
                                                </li>
                                            </ul>																
											
										</li>
                                        <li><a href="index.php?c=controlnews&m=loadhealth"><span>HEALTH</span></a>
										<li><a href="index.php?c=controlnews&m=loadscience"><span>SCIENCE</span></a>										
                                    </ul>
                                </div>
                            </body>
                        </html>
                    </div>                
                </div>        
	 <!-- đăng nhập, nội dung web, tìm kiếm -->
                <div id="main" class="row">              
                    <div class="col-md-4">
					<!-- form search-->
                        <div id="formsearch">
							<form action="index.php?c=controlnews&m=search" method="post">
								<input class="textfield" type="text" name="search">
								<input class="button" type="submit" value="search" name="submit">
							</form>
						</div>
					<!-- login-->
					<?php 
					if(isset($_SESSION['data']['username']))
					{
						
						loadheader("frontend/hlogout.php");
					}
					else
						
						{						
								loadheader("frontend/hlogin.php");				
						}?>
			
                    </div>