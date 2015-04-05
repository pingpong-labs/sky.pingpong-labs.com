<ul id="slide-out" class="side-nav right">
  <li><a href="{!! url('/') !!}">Home</a></li>
  <li><a href="{!! url('/donate') !!}">Donate</a></li>
  <li><a href="{!! url('/docs') !!}">Documentation</a></li>
  <li class="no-padding">
    <ul class="collapsible collapsible-accordion">
      <li>
        <a class="collapsible-header">Community<i class="mdi-navigation-arrow-drop-down"></i></a>
        <div class="collapsible-body">
          <ul>
            <li><a href="https://github.com/pingpong-labs">Github</a></li>
            <li><a href="https://twitter.com/pingponglabs">Twitter</a></li>
            <li><a href="https://www.facebook.com/pingponglabs">Facebook</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </li>
</ul>
<ul class="right hide-on-med-and-down">
  <li><a href="{!! url('/') !!}">Home</a></li>
  <li><a href="{!! url('/docs') !!}">Documentation</a></li>
  <li><a href="{!! url('/donate') !!}">Donate</a></li>
  <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Community<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
  <ul id='dropdown1' class='dropdown-content'>
    <li><a href="https://github.com/pingpong-labs">Github</a></li>
    <li><a href="https://twitter.com/pingponglabs">Twitter</a></li>
    <li><a href="https://www.facebook.com/pingponglabs">Facebook</a></li>
  </ul>
  @if (Request::is('docs/*'))
  <li><a class="dropdown-button" href="#!" data-activates="dropdown1">
    {{{ $currentVersion or "" }}}
    <i class="mdi-navigation-arrow-drop-down right"></i></a></li>
    <ul id='dropdown1' class='dropdown-content'>
      @foreach ($versions as $version => $name)            
      <li><a href="/docs/{!! $version !!}">{!! $name !!}</a></li>
      @endforeach
    </ul>
    @endif
  </ul>
  <a href="#" data-activates="slide-out" class="button-collapse btn-toggle-right"><i class="mdi-navigation-menu"></i></a>