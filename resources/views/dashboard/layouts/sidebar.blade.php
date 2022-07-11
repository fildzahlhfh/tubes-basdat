<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                    <div class="nav">
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fa fa-cog"></i></div>
                                Settings
                            </a>
                            <a class="nav-link" href="/">
                                <div class="sb-nav-link-icon"><i class="fas fa-user fa-fw"></i></div>
                                Home
                            </a>
                            <a class="nav-link" href="/index">
                                <div class="sb-nav-link-icon"><i class="fa fa-dashboard"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="/admin/products">
                                <div class="sb-nav-link-icon"><i class="fas fa-store"></i></div>
                                Products
                            </a>
                            <a class="nav-link" href="/admin/suppliers">
                                <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                                Suppliers
                            </a>
                            <a class="nav-link">
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="sb-nav-link-icon bg-dark border-0"><i class="fa fa-sign-out"></i>Logout</button>
                            </form>
                            </a>
                        </div>
                    </div>
                </nav>