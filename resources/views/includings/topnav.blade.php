<!-- Main Naviagtion -->
  <nav class="site-menu">
    <ul>
      @foreach($items as $menu_item)
      <li class="has-megamenu">
        <a href="{{ $menu_item->link() }}">
          <span>{{ $menu_item->title }}</span>
        </a>
      </li>
      @endforeach
    </ul>
  </nav>
