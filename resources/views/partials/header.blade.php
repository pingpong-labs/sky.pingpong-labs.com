<header>
  <nav class="blue darken-1">
    <div class="nav-wrapper {!! Request::is('docs/*') ? '' : 'container' !!}"> 
      <a href="#" class="brand-logo"><span class="hide-on-small-only">Pingpong</span> Sky</a>
      @include('partials.main-nav')
    </div>
  </nav>
</header>