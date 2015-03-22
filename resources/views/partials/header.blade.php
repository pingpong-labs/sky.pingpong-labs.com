<header>
  <nav class="blue darken-1">
    <div class="nav-wrapper {!! Request::is('docs/*') ? '' : 'container' !!}"> 
      <a href="#" class="brand-logo">Pingpong Sky</a>
      @include('partials.main-nav')
    </div>
  </nav>
</header>