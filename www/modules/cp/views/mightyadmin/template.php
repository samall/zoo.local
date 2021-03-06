<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8" />
        <title>Mighty - Панель управления</title>
        <!-- Optimized mobile viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- CSS -->
        <link rel="stylesheet" href="/assets/cp/default/css/icomoon.css" />
        <link rel="stylesheet" href="/assets/cp/default/css/websymbols.css" />
        <link rel="stylesheet" href="/assets/cp/default/css/formalize.css" />
        <link rel="stylesheet" href="/assets/cp/default/css/style.css" />
        <link rel="stylesheet" href="/assets/cp/default/css/theme-blue.css" />
        <link rel="stylesheet" href="/assets/cp/default/plugins/chosen/chosen.css" />
        <link rel="stylesheet" href="/assets/cp/default/plugins/ui/ui-custom.css" />
        <link rel="stylesheet" href="/assets/cp/default/plugins/tipsy/tipsy.css" />
        <link rel="stylesheet" href="/assets/cp/default/plugins/validationEngine/validationEngine.jquery.css" />
        <link rel="stylesheet" href="/assets/cp/default/plugins/miniColors/jquery.miniColors.css" />
        <link rel="stylesheet" href="/assets/cp/default/plugins/farbtastic/farbtastic.css" />

		<?php foreach($styles as $k=>$style){ ?>
			<link rel="stylesheet" href="/assets/cp/default/<?=$style?>" />
		<?php } ?>
			
		<script src="/assets/cp/default/js/jquery.js"></script>
		
		<?php foreach($scripts as $k=>$script){ ?>
			<script src="/assets/cp/default/<?=$script?>"></script>
		<?php } ?>


        <!-- JAVASCRIPTs -->
        <!--[if lt IE 9]>
            <script language="javascript" type="text/javascript" src="js/html5shiv.js"></script>
        <![endif]-->
  
        <script src="/assets/cp/default/js/browserDetect.js"></script>
        <script src="/assets/cp/default/js/jquery.formalize.min.js"></script>
        <script src="/assets/cp/default/js/less.js"></script>
        <script src="/assets/cp/default/js/jquery.watch.js"></script>
        <script src="/assets/cp/default/js/main.js"></script>
        <script src="/assets/cp/default/js/respond.min.js"></script>
        <script src="/assets/cp/default/plugins/prefixfree.min.js"></script>
        <script src="/assets/cp/default/plugins/jquery.uniform.min.js"></script>
        <script src="/assets/cp/default/plugins/jquery.window-modal.js"></script>
        <script src="/assets/cp/default/plugins/chosen/chosen.jquery.min.js"></script>
        <script src="/assets/cp/default/plugins/ui/ui-custom.js"></script>
        <script src="/assets/cp/default/plugins/ui/multiselect/js/ui.multiselect.js"></script>
        <script src="/assets/cp/default/plugins/feedback.js"></script>
        <script src="/assets/cp/default/plugins/farbtastic/farbtastic.js"></script>
        <script src="/assets/cp/default/plugins/tipsy/jquery.tipsy.js"></script>
        <script src="/assets/cp/default/plugins/jquery.maskedinput-1.3.min.js"></script>
        <script src="/assets/cp/default/plugins/jquery.validate.min.js"></script>
        <script src="/assets/cp/default/plugins/validationEngine/languages/jquery.validationEngine-en.js"></script>
        <script src="/assets/cp/default/plugins/validationEngine/jquery.validationEngine.js"></script>
        <script src="/assets/cp/default/plugins/jquery.elastic.js"></script>

    </head>
    <body class="fixed fixed-topbar"><!-- .fixed or .fluid -->
		<div id="wrapper">
			<section id="top">
				<header>
					<nav id="menu-bar">
						<ul>
							<li>
								<a href="#">Notifications <span class="note">7</span></a>
							</li>
							<li class="with-submenu">
								<a href="#">System settings</a>
								<nav class="submenu">
									<ul>
										<li><a href="#">Maintenance Mode</a></li>
										<li><a href="#">General Settings</a></li>
										<li><a href="#">SEO configurations</a></li>
									</ul>
								</nav>
							</li>
							<!-- .keep makes the element aways visible (even in smaller screens) -->
							<li class="keep"><a href="/admin/logout" class="bold"> Выйти</a></li>
							<li class="keep"><a href="/" class="bt-alt"><span>перейти на сайт »</span></a></li>
						</ul>
					</nav>
				</header>
			</section>
			<section id="page">
				<aside id="sidebar">
					<div id="logo">
						<a href="index.html"><img src="/assets/cp/default/images/logo.png" alt="Mighty Admin" /></a>
					</div>
					<div class="menus">
						<?=$left_menu?>
					</div>
				</aside>
				<section id="content">
					<section id="content-top">
						<div class="search-field-entry">
							<input type="text" placeholder="Search" />
							<input type="submit" class="search-button" value="L" /><!-- L is the glyph for the search icon -->
						</div>
						
						<nav class="quick-actions">
							<ul>
								<li>
									<a href="#">
										<i class="glyph-attachment"></i>
									</a>
								</li>
								<li class="with-submenu">
									<a href="#">
										<i class="glyph-favorite"></i>
									</a>
									<nav class="submenu">
										<ul>
											<li><a href="#">Subitem 1</a></li>
											<li><a href="#">Subitem 2</a></li>
											<li><a href="#">Subitem 6</a></li>
										</ul>
									</nav>
								</li>
								<li>
									<a href="#">
										<i class="glyph-settings"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="glyph-search"></i>
									</a>
								</li>
								<li class="alt with-submenu">
									<nav>
										<ul>
											<li><a href="#">account settings</a></li>
											<li class="active"><a href="#">edit profile</a></li>
											<li><a href="#">balance</a></li>
										</ul>
									</nav>
								</li>
							</ul>
						</nav>
					</section>
					<div class="cf"></div>
					<section id="pane">
						<header>
							<h1><?=$title?></h1>
							<nav class="breadcrumbs">
								<ul>
									<li class="alt"><a href="/cp"><i class="icon-home"></i></a></li>
									<?php
									foreach($breadcrumbs as $item){
									?>
									<li><a href="<?=$item['link']?>"><?=$item['title']?></a></li>
									<?php
									}
									?>
								</ul>
							</nav>
						</header>
						<div id="pane-content">
							<div class="g4 alignleft space-bottom-20">

							<?=$content?>

							
							</div>
							<div class="cf"></div>
						</div>
					</section>
				</section>
			</section>
		</div>
		<a href="#" id="top-scroller" title="back to top of the page">back to top</a>
	</body>

</html>
