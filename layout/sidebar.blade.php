<div class="leftside-menu">
    <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
        <i class="uil-check-circle"></i>
    </div>

    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <div class="leftbar-user">
            <a href="#" class="logo logo-light">
                <img src="{{ asset('asset/logo_dark.svg')  }}" height="70" width="70">
            </a>

            <a href="#" class="logo logo-dark">
                <img src="{{ asset('asset/logo_light.svg')  }}" height="70" width="70">
            </a>

            <span class="leftbar-user-name mt-2">
                Session Name
            </span>
        </div>

        <ul class="side-nav">
                <li class="side-nav-title">
                    Navigation
                </li>

                <li class="side-nav-item">
                    <a href="#" class="side-nav-link">
                        <i class="uil-graph-bar"></i>
                        <span>
                        Dashboards
                    </span>
                    </a>
                </li>

                <li class="side-nav-title">
                    Components
                </li>

                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarColections" aria-expanded="false"
                       aria-controls="sidebarColections"
                       class="side-nav-link">
                        <i class="uil-layer-group"></i>
                        <span>
                        Colections
                    </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarColections">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="#">
                                    <i class="ri-building-4-line font-17"></i>
                                    Citys
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ri-building-line font-17"></i>
                                    Districts
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ri-community-line font-17"></i>
                                    Wards
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarAccounts" aria-expanded="false"
                       aria-controls="sidebarAccounts"
                       class="side-nav-link">
                        <i class="uil-user-circle"></i>
                        <span>
                        Accounts
                    </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarAccounts">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="#">
                                    <i class="ri-admin-line font-17"></i>
                                    Admins
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ri-team-line font-17"></i>
                                    Customers
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a href="#" class="side-nav-link">
                        <i class="ri-store-3-line"></i>
                        <span>
                        Suppliers
                    </span>
                    </a>
                </li>
                <li class="side-nav-item">
                    <a href="#" class="side-nav-link">
                        <i class="uil-label-alt"></i>
                        <span>
                        Brands
                    </span>
                    </a>
                </li>
                <li class="side-nav-item">
                    <a href="#" class="side-nav-link">
                        <i class="uil-apps"></i>
                        <span>
                        Categorys
                    </span>
                    </a>
                </li>
            <li class="side-nav-item">
                <a href="#" class="side-nav-link">
                    <i class="uil-cube"></i>
                    <span>
                        Products
                    </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="#" class="side-nav-link">
                    <i class="uil-truck"></i>
                    <span>
                        Shipments
                    </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="#" class="side-nav-link">
                    <i class="uil-bill"></i>
                    <span>
                        Bills
                    </span>
                </a>
            </li>
        </ul>
    </div>
</div>
