<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Pépinières Bachès</title>
<link rel='stylesheet' href='css/woocommerce-layout.css' type='text/css' media='all'/>
<link rel='stylesheet' href='css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)'/>
<link rel='stylesheet' href='css/woocommerce.css' type='text/css' media='all'/>
<link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all'/>
<link rel='stylesheet' href='style.css' type='text/css' media='all'/>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500,700%7CHerr+Von+Muellerhoff:400,500,700%7CQuattrocento+Sans:400,500,700' type='text/css' media='all'/>
<link rel='stylesheet' href='css/easy-responsive-shortcodes.css' type='text/css' media='all'/>
</head>
<body class="home page page-template page-template-template-portfolio page-template-template-portfolio-php">
<div id="page">
	<div class="container">
		<header id="masthead" class="site-header">
		<div class="site-branding">
			<h1 class="site-title"><a href="index.html" rel="home">Pépinières Bachès</a></h1>
			<h2 class="site-description">Pépinière d'agrumes</h2>
		</div>
		<nav id="site-navigation" class="main-navigation">
		<button class="menu-toggle">Menu</button>
		<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
		<div class="menu-menu-1-container">
			<ul id="menu-menu-1" class="menu">
				<li><a href="index.html">Home</a></li>
				<ul class="sub-menu">
					<li><a href="portfolio-item.html">Portfolio Item</a></li>
					<li><a href="blog-single.html">Blog Article</a></li>
					<li><a href="shop-single.html">Shop Item</a></li>
					<li><a href="portfolio-category.html">Portfolio Category</a></li>
				</ul>
				</li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</div>
		</nav>
		</header>
		<!-- #masthead -->
		<div id="content" class="site-content">
			<div id="primary" class="content-area column full">
				<main id="main" class="site-main">
				<div class="grid portfoliogrid">
				
					<article class="hentry">
					<header class="entry-header">
					<div class="entry-thumbnail">
						<a href="portfolio-item.php?id=<?= $row['ID'] ?>"><img src="https://picsum.photos/300/300?random=<?= $num ?>"></a>
					</div>
					<h2 class="entry-title"><a href="portfolio-item.html" rel="bookmark">Sunset Beach</a></h2>
					<a class='portfoliotype' href='portfolio-category.html'>summer</a>
					<a class='portfoliotype' href='portfolio-category.html'>woman</a>
					<a class='portfoliotype' href='portfolio-category.html'>yellow</a>
					</header>
					</article>
					
					
					
				</div>
				<!-- .grid -->
				
				
				<br/>
				
				</main>
				<!-- #main -->
			</div>
			<!-- #primary -->
		</div>
		<!-- #content -->
	</div>
	<!-- .container -->
	<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="site-info">
			<h1 style="font-family: 'Herr Von Muellerhoff';color: #ccc;font-weight:300;text-align: center;margin-bottom:0;margin-top:0;line-height:1.4;font-size: 46px;">Moschino</h1>
			 <a target="blank" href="https://www.wowthemes.net/">&copy; Moschino - Free HTML Template by WowThemes.net</a>
		</div>
	</div>	
	</footer>
	<a href="#top" class="smoothup" title="Back to top"><span class="genericon genericon-collapse"></span></a>
</div>
<!-- #page -->
<script src='js/jquery.js'></script>
<script src='js/plugins.js'></script>
<script src='js/scripts.js'></script>
<script src='js/masonry.pkgd.min.js'></script>
</body>
</html>