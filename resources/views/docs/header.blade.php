
  <header>
    <nav class="blue">
      <div class="nav-wrapper">        
        <a href="#" class="brand-logo title">Documentation</a> 

        @include('partials.main-nav', compact('currentVersion', 'versions'))
      
        <ul id="slide-out2" class="side-nav fixed">
          <li class="logo"><a href="#">Pingpong Sky</a> </li>
          {!! $index !!}
        </ul>

        <a href="#" data-activates="slide-out" class="button-collapse btn-menu-left">
        	<i class="mdi-action-home"></i>
        </a>
        

      </div>

    </header>