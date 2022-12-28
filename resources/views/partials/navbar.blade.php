<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
      <a class="navbar-brand" href="#">Site APP</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <?php $active = isset($active)? $active: ''; // netralize $active ?>
            <a class="nav-link  {{ ($active === 'home')? 'active': '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{ Request::is('about')? 'active':'' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            {{-- <a class="nav-link  {{ ($active === 'posts')? 'active': '' }}" href="/posts">Blog</a> --}}
            <a class="nav-link  {{ Request::is('posts')? 'active':'' }}" href="/posts">Blog</a>
          </li>
          
          <li class="nav-item">
            {{-- <a class="nav-link  {{ ($active === 'categories')? 'active': '' }}" href="/categories">Categories</a> --}}
            <a class="nav-link  {{ Request::is('categories')? 'active':'' }}" href="/categories">Categories</a>
          </li>
          
          
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Payment
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item {{ ($title === 'Entry Payment')? 'active': '' }}" href="/payment-entry">Entry Payment</a></li>
              <li><a class="dropdown-item {{ ($title === 'List Payment')? 'active': '' }}" href="/payment-list">List Payment</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Master
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Users</a></li>
              <li><a class="dropdown-item" href="#">Goods</a></li>
            </ul>
          </li> -->

        </ul>

        <ul class="navbar-nav ms-auto">
          @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome back, {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item">
                      <i class="bi bi-box-arrow-right"></i> Logout
                    </button>
                  </form>
                </li>
              </ul>
            </li>
          @else
            {{-- belum login, tampilkan ini --}}
            <li class="nav-item">
              <a href="/login" class="nav-link {{ ($active === 'login')? 'active': '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            </li>
            
          @endauth
        </ul>


        {{-- <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}
      </div>
    </div>
  </nav>