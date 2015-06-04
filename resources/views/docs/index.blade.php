<!DOCTYPE html>
<html>
<head>
	<title>Pingpong Sky - Documentation</title>
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

        {{-- button --}}

        <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
         <a style="display: none;" class="btn-floating scrollTop btn-large waves-effect waves-light blue">
          <i class="mdi-hardware-keyboard-arrow-up"></i>
          </a>
         </div>
      </div>
      </div>
    </section>
  </main>
  @include('partials.footer')
  <script type="text/javascript">
  $('pre').addClass('prettyprint');
  </script>
  <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
  <script>
    /* scroll top */
    $(window).scroll(function(){
      if ($(window).scrollTop() > 100) {
        $('.scrollTop').show();
      }else{
        $('.scrollTop').hide();
      }
    });

    $('.scrollTop').on('click', function(){
      $("html, body").animate({ scrollTop: 0 });
    });
  </script>

</body>
</html>