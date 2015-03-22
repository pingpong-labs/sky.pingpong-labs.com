<!DOCTYPE html>
<html>
<head>
	<title>Pingpong Sky - The extra Laravel package</title>
  @include('partials.head')
  <link rel="stylesheet" type="text/css" href="/css/docs.css">
</head>
<body class="docs">
  @include('docs.header', compact('index', 'currentVersion', 'versions'))
  <main>
    <section class="row">
      <div class="col s12">
        {!! $content !!}
      </div>
    </section>
  </main>
  @include('partials.footer')
</body>
</html>