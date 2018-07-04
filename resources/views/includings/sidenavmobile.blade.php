<!-- Off-Canvas Category Menu-->
  <nav class="offcanvas-menu">
    <ul class="menu">
      @foreach($items as $menu_item)
      <li class="has-children"><span><a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a><span class="sub-menu-toggle"></span></span>
        @php
            $submenu = $menu_item->children;
        @endphp
        @if(isset($submenu))
        <ul class="offcanvas-submenu">
        @foreach($submenu as $item)
        <li ><a href="{{$item->url}}">{{$item->title}}</a></li>
        @endforeach
        </ul>
        @endif
      </li>
      @endforeach
    </ul>
  </nav>
