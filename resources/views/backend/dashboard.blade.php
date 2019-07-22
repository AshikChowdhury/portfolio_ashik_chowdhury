@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
{{--    <div class="row">--}}
{{--        <div class="col">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">--}}
{{--                    <strong>@lang('strings.backend.dashboard.welcome') {{ $logged_in_user->name }}!</strong>--}}
{{--                </div><!--card-header-->--}}
{{--                <div class="card-body">--}}
{{--                    {!! __('strings.backend.welcome') !!}--}}
{{--                </div><!--card-body-->--}}
{{--            </div><!--card-->--}}
{{--        </div><!--col-->--}}
{{--    </div><!--row-->--}}
    <div class="breadcrumbs">
        <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>



    <div class="col-sm-12">
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
            <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>


    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-1">
            <div class="card-body pb-0">
                <div class="dropdown float-right">
                    <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton1" data-toggle="dropdown">
                        <i class="fa fa-cog"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <div class="dropdown-menu-content">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <h4 class="mb-0">
                    <span class="count">10468</span>
                </h4>
                <p class="text-light">Members online</p>

                <div class="chart-wrapper px-0" style="height:70px;" height="70">
                    <canvas id="widgetChart1"></canvas>
                </div>

            </div>

        </div>
    </div>
    <!--/.col-->

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-2">
            <div class="card-body pb-0">
                <div class="dropdown float-right">
                    <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton2" data-toggle="dropdown">
                        <i class="fa fa-cog"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                        <div class="dropdown-menu-content">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <h4 class="mb-0">
                    <span class="count">10468</span>
                </h4>
                <p class="text-light">Members online</p>

                <div class="chart-wrapper px-0" style="height:70px;" height="70">
                    <canvas id="widgetChart2"></canvas>
                </div>

            </div>
        </div>
    </div>
    <!--/.col-->

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-3">
            <div class="card-body pb-0">
                <div class="dropdown float-right">
                    <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton3" data-toggle="dropdown">
                        <i class="fa fa-cog"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                        <div class="dropdown-menu-content">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <h4 class="mb-0">
                    <span class="count">10468</span>
                </h4>
                <p class="text-light">Members online</p>

            </div>

            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                <canvas id="widgetChart3"></canvas>
            </div>
        </div>
    </div>
    <!--/.col-->

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-4">
            <div class="card-body pb-0">
                <div class="dropdown float-right">
                    <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton4" data-toggle="dropdown">
                        <i class="fa fa-cog"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                        <div class="dropdown-menu-content">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <h4 class="mb-0">
                    <span class="count">10468</span>
                </h4>
                <p class="text-light">Members online</p>

                <div class="chart-wrapper px-3" style="height:70px;" height="70">
                    <canvas id="widgetChart4"></canvas>
                </div>

            </div>
        </div>
    </div>
    <!--/.col-->

    <div class="col-lg-3 col-md-6">
        <div class="social-box facebook">
            <i class="fa fa-facebook"></i>
            <ul>
                <li>
                    <span class="count">40</span> k
                    <span>friends</span>
                </li>
                <li>
                    <span class="count">450</span>
                    <span>feeds</span>
                </li>
            </ul>
        </div>
        <!--/social-box-->
    </div>
    <!--/.col-->


    <div class="col-lg-3 col-md-6">
        <div class="social-box twitter">
            <i class="fa fa-twitter"></i>
            <ul>
                <li>
                    <span class="count">30</span> k
                    <span>friends</span>
                </li>
                <li>
                    <span class="count">450</span>
                    <span>tweets</span>
                </li>
            </ul>
        </div>
        <!--/social-box-->
    </div>
    <!--/.col-->


    <div class="col-lg-3 col-md-6">
        <div class="social-box linkedin">
            <i class="fa fa-linkedin"></i>
            <ul>
                <li>
                    <span class="count">40</span> +
                    <span>contacts</span>
                </li>
                <li>
                    <span class="count">250</span>
                    <span>feeds</span>
                </li>
            </ul>
        </div>
        <!--/social-box-->
    </div>
    <!--/.col-->


    <div class="col-lg-3 col-md-6">
        <div class="social-box google-plus">
            <i class="fa fa-google-plus"></i>
            <ul>
                <li>
                    <span class="count">94</span> k
                    <span>followers</span>
                </li>
                <li>
                    <span class="count">92</span>
                    <span>circles</span>
                </li>
            </ul>
        </div>
        <!--/social-box-->
    </div>
    <!--/.col-->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <h4 class="card-title mb-0">Traffic</h4>
                        <div class="small text-muted">October 2017</div>
                    </div>
                    <!--/.col-->
                    <div class="col-sm-8 hidden-sm-down">
                        <button type="button" class="btn btn-primary float-right bg-flat-color-1"><i class="fa fa-cloud-download"></i></button>
                        <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mr-3" data-toggle="buttons" aria-label="First group">
                                <label class="btn btn-outline-secondary">
                                    <input type="radio" name="options" id="option1"> Day
                                </label>
                                <label class="btn btn-outline-secondary active">
                                    <input type="radio" name="options" id="option2" checked=""> Month
                                </label>
                                <label class="btn btn-outline-secondary">
                                    <input type="radio" name="options" id="option3"> Year
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--/.col-->


                </div>
                <!--/.row-->
                <div class="chart-wrapper mt-4">
                    <canvas id="trafficChart" style="height:200px;" height="200"></canvas>
                </div>

            </div>
            <div class="card-footer">
                <ul>
                    <li>
                        <div class="text-muted">Visits</div>
                        <strong>29.703 Users (40%)</strong>
                        <div class="progress progress-xs mt-2" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </li>
                    <li class="hidden-sm-down">
                        <div class="text-muted">Unique</div>
                        <strong>24.093 Users (20%)</strong>
                        <div class="progress progress-xs mt-2" style="height: 5px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </li>
                    <li>
                        <div class="text-muted">Pageviews</div>
                        <strong>78.706 Views (60%)</strong>
                        <div class="progress progress-xs mt-2" style="height: 5px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </li>
                    <li class="hidden-sm-down">
                        <div class="text-muted">New Users</div>
                        <strong>22.123 Users (80%)</strong>
                        <div class="progress progress-xs mt-2" style="height: 5px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </li>
                    <li class="hidden-sm-down">
                        <div class="text-muted">Bounce Rate</div>
                        <strong>40.15%</strong>
                        <div class="progress progress-xs mt-2" style="height: 5px;">
                            <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6">
        <section class="card">
            <div class="twt-feed blue-bg">
                <div class="corner-ribon black-ribon">
                    <i class="fa fa-twitter"></i>
                </div>
                <div class="fa fa-twitter wtt-mark"></div>

                <div class="media">
                    <a href="#">
                        <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="{{ asset('img/backend/admin.jpg') }}">
                    </a>
                    <div class="media-body">
                        <h2 class="text-white display-6">Jim Doe</h2>
                        <p class="text-light">Project Manager</p>
                    </div>
                </div>
            </div>
            <div class="weather-category twt-category">
                <ul>
                    <li class="active">
                        <h5>750</h5>
                        Tweets
                    </li>
                    <li>
                        <h5>865</h5>
                        Following
                    </li>
                    <li>
                        <h5>3645</h5>
                        Followers
                    </li>
                </ul>
            </div>
            <div class="twt-write col-sm-12">
                <textarea placeholder="Write your Tweet and Enter" rows="1" class="form-control t-text-area"></textarea>
            </div>
            <footer class="twt-footer">
                <a href="#"><i class="fa fa-camera"></i></a>
                <a href="#"><i class="fa fa-map-marker"></i></a>
                New Castle, UK
                <span class="pull-right">
                            32
                        </span>
            </footer>
        </section>
    </div>


    <div class="col-xl-3 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">Total Profit</div>
                        <div class="stat-digit">1,012</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-3 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">New Customer</div>
                        <div class="stat-digit">961</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">Active Projects</div>
                        <div class="stat-digit">770</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Salary</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>$170,750</td>
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>$86,000</td>
                                </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>$433,060</td>
                                </tr>
                                <tr>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td>Brielle Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>$372,000</td>
                                </tr>
                                <tr>
                                    <td>Herrod Chandler</td>
                                    <td>Sales Assistant</td>
                                    <td>San Francisco</td>
                                    <td>$137,500</td>
                                </tr>
                                <tr>
                                    <td>Rhona Davidson</td>
                                    <td>Integration Specialist</td>
                                    <td>Tokyo</td>
                                    <td>$327,900</td>
                                </tr>
                                <tr>
                                    <td>Colleen Hurst</td>
                                    <td>Javascript Developer</td>
                                    <td>San Francisco</td>
                                    <td>$205,500</td>
                                </tr>
                                <tr>
                                    <td>Sonya Frost</td>
                                    <td>Software Engineer</td>
                                    <td>Edinburgh</td>
                                    <td>$103,600</td>
                                </tr>
                                <tr>
                                    <td>Jena Gaines</td>
                                    <td>Office Manager</td>
                                    <td>London</td>
                                    <td>$90,560</td>
                                </tr>
                                <tr>
                                    <td>Quinn Flynn</td>
                                    <td>Support Lead</td>
                                    <td>Edinburgh</td>
                                    <td>$342,000</td>
                                </tr>
                                <tr>
                                    <td>Charde Marshall</td>
                                    <td>Regional Director</td>
                                    <td>San Francisco</td>
                                    <td>$470,600</td>
                                </tr>
                                <tr>
                                    <td>Haley Kennedy</td>
                                    <td>Senior Marketing Designer</td>
                                    <td>London</td>
                                    <td>$313,500</td>
                                </tr>
                                <tr>
                                    <td>Tatyana Fitzpatrick</td>
                                    <td>Regional Director</td>
                                    <td>London</td>
                                    <td>$385,750</td>
                                </tr>
                                <tr>
                                    <td>Michael Silva</td>
                                    <td>Marketing Designer</td>
                                    <td>London</td>
                                    <td>$198,500</td>
                                </tr>
                                <tr>
                                    <td>Paul Byrd</td>
                                    <td>Chief Financial Officer (CFO)</td>
                                    <td>New York</td>
                                    <td>$725,000</td>
                                </tr>
                                <tr>
                                    <td>Gloria Little</td>
                                    <td>Systems Administrator</td>
                                    <td>New York</td>
                                    <td>$237,500</td>
                                </tr>
                                <tr>
                                    <td>Bradley Greer</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>$132,000</td>
                                </tr>
                                <tr>
                                    <td>Dai Rios</td>
                                    <td>Personnel Lead</td>
                                    <td>Edinburgh</td>
                                    <td>$217,500</td>
                                </tr>
                                <tr>
                                    <td>Jenette Caldwell</td>
                                    <td>Development Lead</td>
                                    <td>New York</td>
                                    <td>$345,000</td>
                                </tr>
                                <tr>
                                    <td>Yuri Berry</td>
                                    <td>Chief Marketing Officer (CMO)</td>
                                    <td>New York</td>
                                    <td>$675,000</td>
                                </tr>
                                <tr>
                                    <td>Caesar Vance</td>
                                    <td>Pre-Sales Support</td>
                                    <td>New York</td>
                                    <td>$106,450</td>
                                </tr>
                                <tr>
                                    <td>Doris Wilder</td>
                                    <td>Sales Assistant</td>
                                    <td>Sidney</td>
                                    <td>$85,600</td>
                                </tr>
                                <tr>
                                    <td>Angelica Ramos</td>
                                    <td>Chief Executive Officer (CEO)</td>
                                    <td>London</td>
                                    <td>$1,200,000</td>
                                </tr>
                                <tr>
                                    <td>Gavin Joyce</td>
                                    <td>Developer</td>
                                    <td>Edinburgh</td>
                                    <td>$92,575</td>
                                </tr>
                                <tr>
                                    <td>Jennifer Chang</td>
                                    <td>Regional Director</td>
                                    <td>Singapore</td>
                                    <td>$357,650</td>
                                </tr>
                                <tr>
                                    <td>Brenden Wagner</td>
                                    <td>Software Engineer</td>
                                    <td>San Francisco</td>
                                    <td>$206,850</td>
                                </tr>
                                <tr>
                                    <td>Fiona Green</td>
                                    <td>Chief Operating Officer (COO)</td>
                                    <td>San Francisco</td>
                                    <td>$850,000</td>
                                </tr>
                                <tr>
                                    <td>Shou Itou</td>
                                    <td>Regional Marketing</td>
                                    <td>Tokyo</td>
                                    <td>$163,000</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->



@endsection
