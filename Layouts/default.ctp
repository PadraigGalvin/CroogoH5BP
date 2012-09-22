<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php echo $title_for_layout . ' | ' . Configure::read('Site.title'); ?></title>
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width">
		<?php
			echo $this->Layout->meta();
			echo $this->Layout->feed();
			echo $this->Html->css(array(
				'normalize.min'
				'main'
			));
			echo $this->Layout->js();
			echo $this->Html->script('vendor/modernizr-2.6.1-respond-1.1.0.min');
		?>
	</head>

	<body>
		
		<!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
		
		<header>
			<h1>
				<?php echo Configure::read('Site.title'); ?>
			</h1>
			<nav>
				<?php echo $this->Layout->menu('main'); ?>
			</nav>
		</header>
		
		<div role="main">
			<div id="content">
				<?php echo $content_for_layout; ?>
			</div>
			<aside id="sidebar">
				<?php echo $this->Layout->blocks('right'); ?>
			</aside>
		</div>
		
		<footer>
			<?php echo $this->Layout->menu('footer'); ?>
		</footer>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
		<script>window.jQuery || document.write(unescape(<?php echo json_encode($this->Html->script('vendor/vendor/jquery-1.8.1.min')); ?>))</script>
		
		<?php
			echo $this->Html->script(array(
				'plugins',
				'main'
			));
			echo $this->Js->writeBuffer();
		?>
		
		<script>
			var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s)}(document,'script'));
		</script>
		
	</body>
	
</html>