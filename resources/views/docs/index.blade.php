<!DOCTYPE html>
<html>
<head>
	<title>Pingpong Sky - An Extra Laravel Component</title>
  @include('partials.head')
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/prettify/r298/prettify.min.css">
  <link rel="stylesheet" type="text/css" href="/css/docs.css">
  <link rel="stylesheet" type="text/css" href="/css/prettyprint.css">
</head>
<body class="docs">
  @include('docs.header', compact('index', 'currentVersion', 'versions'))
  <main>
    <section class="row">
      <div class="col s12">
        {!! $content !!}
      </div>
      <div class="col s12" align="center" style="margin-top: 20px;">
      <!-- Begin: KlikSaya.com -->
      <script src="http://scr.kliksaya.com/js-ad.php?zid=169057" type="text/javascript">
      </script>
      <!-- End: KlikSaya.com -->
      </div>
    </section>
  </main>
  @include('partials.footer')
  <script type="text/javascript">
  $('pre').addClass('prettyprint');
  </script>
  <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>

</body>
</html>