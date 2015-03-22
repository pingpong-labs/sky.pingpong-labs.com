
  <header>
    <nav class="blue">
      <div class="nav-wrapper">        
        <a href="#" class="brand-logo title">Documentation</a> 

        @include('partials.main-nav', compact('currentVersion', 'versions'))
      
        {!! $index !!}

        <a href="#" data-activates="slide-out2" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
        

      </div>

    </header>