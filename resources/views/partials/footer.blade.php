<footer class="page-footer blue lighten-1">
  <div class="{!! Request::is('/') ? 'container' : '' !!}">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">About</h5>
        <p class="grey-text text-lighten-4">
          Pingpong Sky is a PHP component made specifically for Laravel. Pingpong Sky includes some ready-made components such as Modules, Menus and Widgets.
        </p>
      </div>
      <div class="col l3 s12">
        <h5 class="white-text">Version</h5>
        <ul>
          <li><a class="white-text" href="/docs/master">Develop</a></li>
          <li><a class="white-text" href="/docs/1.0">1.0</a></li>
          <li><a class="white-text" href="/docs/2.0">2.0</a></li>
        </ul>
      </div>
      <div class="col l3 s12">
        <h5 class="white-text">Connect</h5>
        <ul>
          <li><a class="white-text" href="https://github.com/pingpong-labs">Github</a></li>
          <li><a class="white-text" href="https://twitter.com/pingponglabs">Twitter</a></li>
          <li><a class="white-text" href="https://www.facebook.com/pingponglabs">Facebook</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      Made with <i class="fa heart fa-heart"></i> by <a class="blue-text text-lighten-4" href="https://www.pingpong-labs.com">Pingpong Labs</a>

      <div class="right">
        Copyright &copy; 2015. All rights reserved.
      </div>
    </div>
  </div>
</footer>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="/assets/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="/assets/materialize/dist/js/materialize.min.js"></script>
<script type="text/javascript" src="/js/all.js"></script>
<!-- GA -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59641519-1', 'auto');
  ga('send', 'pageview');

</script>