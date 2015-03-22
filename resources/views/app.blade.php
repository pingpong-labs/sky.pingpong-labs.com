<!DOCTYPE html>
<html>
<head>
	<title>Pingpong Sky - The extra Laravel package</title>
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="/assets/materialize/dist/css/materialize.min.css"  media="screen,projection"/>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

  <link rel="stylesheet" type="text/css" href="/css/style.css">

  <link rel="stylesheet" type="text/css" href="/assets/font-awesome/css/font-awesome.css">
</head>

<body>

  @include('partials.header')

  @yield('content')

  @include('partials.footer')

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="/assets/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="/assets/materialize/dist/js/materialize.min.js"></script>
  <script type="text/javascript" src="/js/all.js"></script>
</body>
</html>
