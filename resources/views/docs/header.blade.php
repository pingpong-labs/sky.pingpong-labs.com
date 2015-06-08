
  <header>
    <nav class="blue">
      <div class="nav-wrapper">        
        <a href="#" class="brand-logo title">Documentation</a> 

        @include('partials.main-nav', compact('currentVersion', 'versions'))
      
        {!! $index !!}

        <a href="#" data-activates="slide-out2" class="button-collapse btn-menu-left">
        	<i class="mdi-navigation-apps"></i>
        </a>
        

      </div>

    </header>