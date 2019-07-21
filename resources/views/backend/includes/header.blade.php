{{--<header class="app-header navbar">--}}
{{--    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">--}}
{{--        <span class="navbar-toggler-icon"></span>--}}
{{--    </button>--}}
{{--    <a class="navbar-brand" href="#">--}}
{{--        <img class="navbar-brand-full" src="{{ asset('img/backend/brand/logo.svg') }}" width="89" height="25" alt="CoreUI Logo">--}}
{{--        <img class="navbar-brand-minimized" src="{{ asset('img/backend/brand/sygnet.svg') }}" width="30" height="30" alt="CoreUI Logo">--}}
{{--    </a>--}}
{{--    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">--}}
{{--        <span class="navbar-toggler-icon"></span>--}}
{{--    </button>--}}

{{--    <ul class="nav navbar-nav d-md-down-none">--}}
{{--        <li class="nav-item px-3">--}}
{{--            <a class="nav-link" href="{{ route('frontend.index') }}"><i class="fas fa-home"></i></a>--}}
{{--        </li>--}}

{{--        <li class="nav-item px-3">--}}
{{--            <a class="nav-link" href="{{ route('admin.dashboard') }}">@lang('navs.frontend.dashboard')</a>--}}
{{--        </li>--}}

{{--        @if(config('locale.status') && count(config('locale.languages')) > 1)--}}
{{--            <li class="nav-item px-3 dropdown">--}}
{{--                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">--}}
{{--                    <span class="d-md-down-none">@lang('menus.language-picker.language') ({{ strtoupper(app()->getLocale()) }})</span>--}}
{{--                </a>--}}

{{--                @include('includes.partials.lang')--}}
{{--            </li>--}}
{{--        @endif--}}
{{--    </ul>--}}

{{--    <ul class="nav navbar-nav ml-auto">--}}
{{--        <li class="nav-item d-md-down-none">--}}
{{--            <a class="nav-link" href="#">--}}
{{--                <i class="fas fa-bell"></i>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li class="nav-item d-md-down-none">--}}
{{--            <a class="nav-link" href="#">--}}
{{--                <i class="fas fa-list"></i>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li class="nav-item d-md-down-none">--}}
{{--            <a class="nav-link" href="#">--}}
{{--                <i class="fas fa-map-marker-alt"></i>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li class="nav-item dropdown">--}}
{{--          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">--}}
{{--            <img src="{{ $logged_in_user->picture }}" class="img-avatar" alt="{{ $logged_in_user->email }}">--}}
{{--            <span class="d-md-down-none">{{ $logged_in_user->full_name }}</span>--}}
{{--          </a>--}}
{{--          <div class="dropdown-menu dropdown-menu-right">--}}
{{--            <div class="dropdown-header text-center">--}}
{{--              <strong>Account</strong>--}}
{{--            </div>--}}
{{--            <a class="dropdown-item" href="{{ route('frontend.auth.logout') }}">--}}
{{--                <i class="fas fa-lock"></i> @lang('navs.general.logout')--}}
{{--            </a>--}}
{{--          </div>--}}
{{--        </li>--}}
{{--    </ul>--}}

{{--    <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">--}}
{{--        <span class="navbar-toggler-icon"></span>--}}
{{--    </button>--}}
{{--    <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">--}}
{{--        <span class="navbar-toggler-icon"></span>--}}
{{--    </button>--}}
{{--</header>--}}
<header id="header" class="header">

    <div class="header-menu">

        <div class="col-sm-7">
            <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
            <div class="header-left">
                <button class="search-trigger"><i class="fa fa-search"></i></button>
                <div class="form-inline">
                    <form class="search-form">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                        <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                    </form>
                </div>

                <div class="dropdown for-notification">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bell"></i>
                        <span class="count bg-danger">5</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="notification">
                        <p class="red">You have 3 Notification</p>
                        <a class="dropdown-item media bg-flat-color-1" href="#">
                            <i class="fa fa-check"></i>
                            <p>Server #1 overloaded.</p>
                        </a>
                        <a class="dropdown-item media bg-flat-color-4" href="#">
                            <i class="fa fa-info"></i>
                            <p>Server #2 overloaded.</p>
                        </a>
                        <a class="dropdown-item media bg-flat-color-5" href="#">
                            <i class="fa fa-warning"></i>
                            <p>Server #3 overloaded.</p>
                        </a>
                    </div>
                </div>

                <div class="dropdown for-message">
                    <button class="btn btn-secondary dropdown-toggle" type="button"
                            id="message"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ti-email"></i>
                        <span class="count bg-primary">9</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="message">
                        <p class="red">You have 4 Mails</p>
                        <a class="dropdown-item media bg-flat-color-1" href="#">
                            <span class="photo media-left"><img alt="avatar" src="{{ asset('img/backend/avatar/1.jpg') }}"></span>
                            <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                        </a>
                        <a class="dropdown-item media bg-flat-color-4" href="#">
                            <span class="photo media-left"><img alt="avatar" src="{{ asset('img/backend/avatar/2.jpg') }}"></span>
                            <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                        </a>
                        <a class="dropdown-item media bg-flat-color-5" href="#">
                            <span class="photo media-left"><img alt="avatar" src="{{ asset('img/backend/avatar/3.jpg') }}"></span>
                            <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                        </a>
                        <a class="dropdown-item media bg-flat-color-3" href="#">
                            <span class="photo media-left"><img alt="avatar" src="{{ asset('img/backend/avatar/4.jpg') }}"></span>
                            <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-5">
            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="{{asset('img/backend/admin.jpg')}}" alt="User Avatar">
                </a>

                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                    <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                    <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                    <a class="nav-link" href="{{ route('frontend.auth.logout') }}"><i class="fa fa-power-off"></i> @lang('navs.general.logout')</a>

                </div>
            </div>

            <div class="language-select dropdown" id="language-select">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                    <i class="flag-icon flag-icon-us"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="language">
                    <div class="dropdown-item">
                        <span class="flag-icon flag-icon-fr"></span>
                    </div>
                    <div class="dropdown-item">
                        <i class="flag-icon flag-icon-es"></i>
                    </div>
                    <div class="dropdown-item">
                        <i class="flag-icon flag-icon-us"></i>
                    </div>
                    <div class="dropdown-item">
                        <i class="flag-icon flag-icon-it"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>

</header><!-- /header -->
