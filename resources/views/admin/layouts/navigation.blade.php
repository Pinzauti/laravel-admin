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

                    <!-- THEME MANAGEMENT -->
                    <li class="{{ isActiveroute('admin.theme-management') }}">
                        <a href="{{ route('admin.dashboard') }}"><i class="fa fa-eyedropper"></i> <span class="nav-label">Theme Management</span></a>
                    </li>

                    <!-- DOMAIN MANAGEMENT -->
                    <li class="{{ isActiveroute('admin.domain-management') }}">
                        <a href="{{ route('admin.users') }}"><i class="fa fa-key"></i> <span class="nav-label">Domain Management</span></a>
                    </li>

                    <!-- ************************************************ -->

                    <li class="nav-title"><span>Content Management</span></li>
                    <!-- ARTICLES -->
                    <li class="{{ isActiveroute('admin.articles') }}">
                        <a href="{{ route('admin.users') }}"><i class="fa fa-newspaper-o"></i> <span class="nav-label">Articles</span></a>
                    </li>

                    <!-- EVENTS -->
                    <li class="{{ isActiveroute('admin.events') }}">
                        <a href="{{ route('admin.users') }}"><i class="fa fa-calendar-check-o"></i> <span class="nav-label">Events</span></a>
                    </li>

                    <!-- PAGES -->
                    <li class="{{ isActiveroute('admin.pages') }}">
                        <a href="{{ route('admin.settings') }}"><i class="fa fa-pagelines"></i> <span class="nav-label">Pages</span></a>
                    </li>

                    <!-- DOWNLOADS -->
                    <li class="{{ isActiveroute('admin.downloads') }}">
                        <a href="{{ route('admin.dashboard') }}"><i class="fa fa-download"></i> <span class="nav-label">Downloads</span></a>
                    </li>

                    <!-- SPONSORS -->
                    <li class="{{ isActiveroute('admin.sponsors') }}">
                        <a href="{{ route('admin.users') }}"><i class="fa fa-handshake-o"></i> <span class="nav-label">Sponsors</span></a>
                    </li>

                    <!-- ADVERTISEMENTS -->
                    <li class="{{ isActiveroute('admin.advertisements') }}">
                        <a href="{{ route('admin.settings') }}"><i class="fa fa-bullhorn"></i> <span class="nav-label">Advertisements</span></a>
                    </li>

                    <!-- ************************************************ -->

                    <li class="nav-title"><span>Team Management</span></li>
                    <!-- SQUADS -->
                    <li class="{{ isActiveroute('admin.squads') }}">
                        <a href="{{ route('admin.dashboard') }}"><i class="fa fa-gamepad"></i> <span class="nav-label">Squads</span></a>
                    </li>

                    <!-- MATCHES -->
                    <li class="{{ isActiveroute('admin.matches') }}">
                        <a href="{{ route('admin.users') }}"><i class="fa fa-shield"></i> <span class="nav-label">Matches</span></a>
                    </li>

                    <!-- ************************************************ -->

                    <li class="nav-title"><span>Media Management</span></li>
                    <!-- FORUMS -->
                    <li class="{{ isActiveroute('admin.forums') }}">
                        <a href="{{ route('admin.dashboard') }}"><i class="fa fa-telegram"></i> <span class="nav-label">Forums</span></a>
                    </li>

                    <!-- COMMENTS -->
                    <li class="{{ isActiveroute('admin.comments') }}">
                        <a href="{{ route('admin.users') }}"><i class="fa fa-comment"></i> <span class="nav-label">Comments</span></a>
                    </li>

                    <!-- GALLERIES -->
                    <li class="{{ isActiveroute('admin.galleries') }}">
                        <a href="{{ route('admin.settings') }}"><i class="fa fa-picture-o"></i> <span class="nav-label">Galleries</span></a>
                    </li>

                    <!-- STREAMS -->
                    <li class="{{ isActiveroute('admin.streams') }}">
                        <a href="{{ route('admin.dashboard') }}"><i class="fa fa-television"></i> <span class="nav-label">Streams</span></a>
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
