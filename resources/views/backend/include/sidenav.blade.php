<div class="side-nav vertical-menu nav-menu-light scrollable">
    <div class="nav-logo">
        <div class="w-100 logo">
            <img class="img-fluid" src="{{ asset('assets/images/logo/logo.png') }}" style="max-height: 70px;"
                alt="logo">
        </div>
        <div class="mobile-close">
            <i class="icon-arrow-left feather"></i>
        </div>
    </div>
    <ul class="nav-menu">
        <li class="nav-menu-item @if (request()->is('app/dashboard')) router-link-active @endif ">
            <a href="index-2.html">
                <i class="feather icon-home"></i>
                <span class="nav-menu-item-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-group-title">Settings</li>
        
        <li class="nav-submenu">
            <a class="nav-submenu-title">
                <i class="feather icon-slash"></i>
                <span>User Management</span>
                <i class="nav-submenu-arrow"></i>
            </a>
            <ul class="nav-menu menu-collapse">
                <li class="nav-menu-item">
                    <a href="error.html">Users</a>
                </li>
                <li class="nav-menu-item">
                    <a href="error-v2.html">Roles</a>
                </li>
            </ul>
        </li>

        <li class="nav-menu-item">
            <a href="v-mail.html">
                <i class="feather icon-mail"></i>
                <span class="nav-menu-item-title">Mail Configuration</span>
            </a>
        </li>
    </ul>
</div>
