<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sky - The Extra Laravel Packages</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="author" content="Gravitano">
	<meta name="description" content="Sky - The Extra Laravel Packages">
	<meta name="keywords" content="sky, pingpong/sky, laravel, gravitano, pingpong, ping pong, pingpong labs, pingpong-labs, laravel, packages">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="D2ZedtfXH-qgzRPrWLhBUAOctj-X264NbFFhAtiLbgk" />
	<link rel="icon" href="/favicon.png">
	<!--[if lte IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/assets/css/laravel.css">
</head>
<body class="@yield('body-class', 'docs') language-php">

	<span class="overlay"></span>

	<nav class="main">
		<div class="container">
			<a href="/" class="brand">
				<img src="/pingpong-labs-logo.png">
				Sky
			</a>

			<div class="responsive-sidebar-nav">
				<a href="#" class="toggle-slide menu-link btn">&#9776;</a>
			</div>

			@if (Request::is('docs*') && isset($currentVersion))
				@include('partials.switcher')
			@endif

			<ul class="main-nav">
				@include('partials.main-nav')
			</ul>
		</div>
	</nav>

	@yield('content')

	<footer class="main">
		<ul>
			@include('partials.main-nav')
		</ul>
		<p>Sky is a trademark of Gravitano. Copyright &copy; Gravitano.</p>
		<p class="less-significant"><a href="http://jackmcdade.com">Design by Jack McDade</a></p>
	</footer>
	<script src="/assets/js/laravel.js"></script>
	<script src="/assets/js/viewport-units-buggyfill.js"></script>
	<script>window.viewportUnitsBuggyfill.init();</script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-59641519-1', 'auto');
	  ga('send', 'pageview');

	</script>
</body>
</html>
