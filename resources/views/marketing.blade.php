@extends('app')

@section('body-class')
home
@endsection

@section('content')

<nav id="slide-menu" class="slide-menu" role="navigation">

	<div class="brand">
		<a href="/">
			<img src="/assets/img/pingpong-labs-white.png" height="50">
		</a>
	</div>

	<ul class="slide-main-nav">
		@include('partials.main-nav')
	</ul>

</nav>

<section class="panel statement light">
	<div class="content">
		<h1>What is Sky?</h1>
		<p>Sky is an extra Laravel package.</p>		
	</div>
</section>

<section class="panel ecosystem light" id="ecosystem">
	<h1>The Most Popular Packages</h1>
	<p>Here is some of most polular package which is a part of SKY package.</p>

	<div class="tiles">
		<div class="tile">
			<h2><a href="/docs/modules">Modules</a></h2>
			<p>Modules is a package which can separate a large application to a simple module. Module is like a laravel package which can have views, lang, routes and others.</p>
		</div>
		<div class="tile">
			<h2><a href="/docs/menus">Menus</a></h2>
			<p>Menus is a powerful package for creating a static menus website. By default this package support bootstrap multlevel menu system</p>
		</div>
		<div class="tile">
			<h2>Widget</h2>
			<p>Widget is like widget in Wordpress. This package allows you to create a widget system in Laravel Framework.</p>
		</div>
	</div>
</section>
@endsection
