<ul class="sidebar-menu">
    <li class="menu-header">Dashboard</li>
    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown">
        <i class="fas fa-fire"></i>
        <span>Dashboard</span>
        </a>

      <ul class="dropdown-menu">
        <li>
            <a class="nav-link" href="/">
             General Dashboard
            </a>
        </li>
        
      </ul>
    </li>

    <li class="nav-item dropdown {{ request()->is('post') ? 'active' : '' }}">
      <a href="#" class="nav-link has-dropdown">
        <i class="fas fa-cube"></i>
        <span>Post</span>
      </a>

      <ul class="dropdown-menu">
        <li>
            <a class="nav-link {{ request()->routeIs('post.index') ? 'active' : '' }}" href="/post">
             Post List
            </a>
        </li>
        <li>
          <a class="nav-link {{ request()->routeIs('post.create') ? 'active' : '' }}" href="/">
           Add Post
          </a>
      </li>
      </ul>
    </li>
</ul>