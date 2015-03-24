<!DOCTYPE html>
<html>
<head>
	<title>Pingpong Sky - The extra Laravel package</title>
  @include('partials.head')
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/prettify/r298/prettify.min.css">
  <link rel="stylesheet" type="text/css" href="/css/docs.css">
</head>
<body class="docs prettyprint">
  @include('docs.header', compact('index', 'currentVersion', 'versions'))
  <main>
    <section class="row">
      <div class="col s12">
        {!! $content !!}
      </div>
    </section>
  </main>
  @include('partials.footer')
  <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=php&skin=sunburst"></script>

</body>
</html>