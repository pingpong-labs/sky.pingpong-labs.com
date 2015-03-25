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
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Pingpong Sky Documentation -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-3727517226159314"
             data-ad-slot="6783375185"
             data-ad-format="auto"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      </div>
      <div class="col s12">
        {!! $content !!}
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