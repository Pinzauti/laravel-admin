<aside id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">

        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">
                    <li class="nav-title"><span>General</span></li>
                    <!-- DASHBOARD -->
                    <li class="{{ isActiveroute('admin.dashboard') }}">
                        <a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span></a>
                    </li>

                    <!-- USERS -->
                    <li class="{{ isActiveroute('admin.users') }}">
                        <a href="{{ route('admin.users') }}"><i class="fa fa-users"></i> <span class="nav-label">Users</span></a>
                    </li>

                    <!-- SETTINGS -->
                    <li class="{{ isActiveroute('admin.settings') }}">
                        <a href="{{ route('admin.settings') }}"><i class="fa fa-cogs"></i> <span class="nav-label">Settings</span></a>
                    </li>
                </ul>
            </nav>
        </div>
        <script>
            // Maintain Scroll Position
            if (typeof localStorage !== 'undefined') {
                if (localStorage.getItem('sidebar-left-position') !== null) {
                    var initialPosition = localStorage.getItem('sidebar-left-position'),
                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                    sidebarLeft.scrollTop = initialPosition;
                }
            }
        </script>
    </div>
</aside>
