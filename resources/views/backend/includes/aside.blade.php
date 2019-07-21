<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./"><img src="{{ asset('img/backend/logo.png') }}" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="{{ asset('img/backend/logo.png') }}" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{active_class(Active::checkUriPattern('admin/dashboard'))}}">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="menu-icon fa fa-dashboard"></i>
                        @lang('menus.backend.sidebar.dashboard')
                    </a>
                </li>
                <h3 class="menu-title">System Setup</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Components</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Buttons</a></li>
                        <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li>
                        <li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>
                        <li><i class="fa fa-share-square-o"></i><a href="ui-social-buttons.html">Social Buttons</a></li>
                        <li><i class="fa fa-id-card-o"></i><a href="ui-cards.html">Cards</a></li>
                        <li><i class="fa fa-exclamation-triangle"></i><a href="ui-alerts.html">Alerts</a></li>
                        <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Progress Bars</a></li>
                        <li><i class="fa fa-fire"></i><a href="ui-modals.html">Modals</a></li>
                        <li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li>
                        <li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li>
                        <li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li>
                    </ul>
                </li>


                @if ($logged_in_user->isAdmin())
                    <li class="menu-item-has-children dropdown {{
                    active_class(Active::checkUriPattern('admin/auth*'))}}">
                        <a class="dropdown-toggle {{
                        active_class(Active::checkUriPattern('admin/auth*'))
                    }}" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-table"></i>
                            @lang('menus.backend.access.title')
                        </a>
                        <ul class="sub-menu children dropdown-menu">
                            <li class="{{active_class(Active::checkUriPattern('admin/auth/user*'))}}">
                                <i class="fa fa-users"></i>
                                <a href="{{ route('admin.auth.user.index') }}">@lang('labels.backend.access.users.management')</a>
                            </li>
                            <li class="{{active_class(Active::checkUriPattern('admin/auth/role*'))}}">
                                <i class="fa fa-bolt"></i>
                                <a href="{{ route('admin.auth.role.index') }}">@lang('labels.backend.access.roles.management')</a>
                            </li>
                        </ul>

                    <li class="menu-item-has-children dropdown {{active_class(Active::checkUriPattern('admin/log-viewer*'))}}">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa fa-list"></i> @lang('menus.backend.log-viewer.main')
                        </a>

                        <ul class="sub-menu children dropdown-menu">
                            <li class="{{active_class(Active::checkUriPattern('admin/log-viewer'))}}">
                                <i class="fa fa-table"></i><a  href="{{ route('log-viewer::dashboard') }}">
                                    @lang('menus.backend.log-viewer.dashboard')</a>
                            </li>
                            <li class="{{active_class(Active::checkUriPattern('admin/log-viewer/logs*'))}}">
                                <i class="fa fa-table"></i><a href="{{ route('log-viewer::logs.list') }}">
                                    @lang('menus.backend.log-viewer.logs')</a>
                            </li>
                        </ul>
                    </li>
                </li>

                @endif

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>
                    </ul>
                </li>


                <h3 class="menu-title">Icons</h3><!-- /.menu-title -->

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
                        <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
                    </ul>
                </li>
                <li>
                    <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Chart JS</a></li>
                        <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Flot Chart</a></li>
                        <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Peity Chart</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.html">Google Maps</a></li>
                        <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Vector Maps</a></li>
                    </ul>
                </li>
                <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                        <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->
