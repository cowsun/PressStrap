<!DOCTYPE html>
<html>
	<!-- head start -->
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<?php wp_head();?>
		 
		<!-- SiteTitle -->
		<title><?php bloginfo( $show='name' );?></title>

	</head>
	<!-- head end -->
	<body>
		<div id = "main_wrap" class="container">
		<!-- Heder Container -->
			<div class="container">

				<!-- Brand/Logo -->
				<div class="container text-center">
					<div class="row">
						<div class="span2">
							<a href="<?php echo site_url();?>" title="<?php bloginfo( $show='name' );?>"><img src="">
							</a>
						</div>
						<div class="span8">
					 		 <a href="#">
					 		 	<img src= ""> 
					 		 </a>
				 		</div>
					</div>
				</div>
				<!-- End Brand/Logo -->

					<!-- Nav Bar -->
				<div class="navbar navbar-fixed navbar-inverse">
					<div class="navbar-inner">
						<div class ="container">
							<!-- Nav button for mobile/tablet -->
							<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
								<!-- <span class="icon-th-list"></span> -->
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</a>
							
							<!-- Nav menu -->
							<div class="nav-collapse collapse">


								<div class = "container">
									<ul class="nav">
										
										<?php wp_list_pages(array('title_li' => '')); ?>


									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Nav Bar -->
			</div>
			<!-- End Header Container -->
		<!-- container closed in footer -->