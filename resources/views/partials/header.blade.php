<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #AB7C82">
        <div class="container-fluid">
          <span class="navbar-brand"><img src="images/brand.png" width="100" height="40"></span>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item ms-3">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item ms-3">
                <a class="nav-link" href="/profile">Profile</a>
              </li>
              <li class="nav-item ms-3 dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Categories
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Haircare</a></li>
                  <li><a class="dropdown-item" href="#">Skincare</a></li>
                  <li><a class="dropdown-item" href="#">Bodycare</a></li>
                  <li><a class="dropdown-item" href="#">Make up</a></li>
                </ul>
              </li>
              @auth
              <li class="nav-item">
                <a class="nav-link" href="/index">Admin</a>
              </li>
              @endauth
            </ul>
          </div>
        </div>
</nav>