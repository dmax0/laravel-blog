@extends('layouts.gentelella')

@section('body')

    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="{{ url('admin/index/index') }}" class="site_title"><i class="fa fa-paw"></i> <span>laravel-bjyblog</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="{{ auth()->guard('socialite')->check() ? auth()->guard('socialite')->user()->avatar : asset('images/default/avatar.jpg') }}" class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>{{ translate('Admin Welcome') }}</span>
                            <h2>{{ auth()->guard('socialite')->check() ? auth()->guard('socialite')->user()->name : auth()->guard('admin')->user()->name }}</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li>
                                    <a><i class="fa fa-book"></i> {{ translate('Article') }} <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ url('admin/article/index') }}">{{ translate('List') }}</a></li>
                                        <li><a href="{{ url('admin/article/replaceView') }}">{{ translate('Batch Replace') }}</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a><i class="fa fa-th"></i> {{ translate('Category & Nav') }} <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ url('admin/category/index') }}">{{ translate('Category') }}</a></li>
                                        <li><a href="{{ url('admin/nav/index') }}">{{ translate('Nav') }}</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a><i class="fa fa-tags"></i> {{ translate('Tag') }} <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ url('admin/tag/index') }}">{{ translate('List') }}</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a><i class="fa fa-comments"></i> {{ translate('Comment') }} <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ url('admin/comment/index') }}">{{ translate('List') }}</a></li>
                                        <li><a href="{{ url('admin/comment/replaceView') }}">{{ translate('Batch Replace') }}</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a><i class="fa fa-users"></i> {{ translate('User') }} <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ url('admin/user/index') }}">{{ translate('Administrator') }}</a></li>
                                        <li><a href="{{ url('admin/socialiteUser/index') }}">{{ translate('Socialite User') }}</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a><i class="fa fa-link"></i> {{ translate('Link') }} <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ url('admin/friend/index') }}">{{ translate('Link') }}</a></li>
                                        <li><a href="{{ url('admin/site/index') }}">{{ translate('Recommend Blog') }}</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a><i class="fa fa-commenting"></i> {{ translate('Note') }} <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ url('admin/note/index') }}">{{ translate('List') }}</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a><i class="fa fa-cogs"></i> {{ translate('Setting') }} <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ url('admin/config/email') }}">{{ translate('Email') }}</a></li>
                                        <li><a href="{{ url('admin/socialiteClient/index') }}">{{ translate('Socialite') }}</a></li>
                                        <li><a href="{{ url('admin/config/commentAudit') }}">{{ translate('Comment Audit') }}</a></li>
                                        <li><a href="{{ url('admin/openSource/index') }}">{{ translate('Open Source') }}</a></li>
                                        @if(config('app.locale') === 'zh-CN')
                                            <li><a href="{{ url('admin/config/qqQun') }}">QQ群</a></li>
                                        @endif
                                        <li><a href="{{ url('admin/config/backup') }}">{{ translate('Backup') }}</a></li>
                                        <li><a href="{{ url('admin/config/upload') }}">{{ translate('Upload') }}</a></li>
                                        <li><a href="{{ url('admin/config/seo') }}">{{ translate('SEO') }}</a></li>
                                        <li><a href="{{ url('admin/config/socialShare') }}">{{ translate('Social Share') }}</a></li>
                                        <li><a href="{{ url('admin/config/socialLinks') }}">{{ translate('Social Links') }}</a></li>
                                        <li><a href="{{ url('admin/config/search') }}">{{ translate('Search') }}</a></li>
                                        <li><a href="{{ url('admin/config/licenses') }}">{{ translate('Licenses') }}</a></li>
                                        <li><a href="{{ url('admin/config/edit') }}">{{ translate('Other Setting') }}</a></li>
                                        <li><a href="{{ url('admin/config/clear') }}">{{ translate('Clear Cache') }}</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a href="{{ url('admin/config/edit') }}" data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a href="{{ url('admin/login/logout') }}" title="Logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>
            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    {{ auth()->guard('socialite')->check() ? auth()->guard('socialite')->user()->name : auth()->guard('admin')->user()->name }}
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="{{ url('admin/login/logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out </a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>@yield('nav') <small>@yield('description')</small></h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search for..." name="wd" value="{{ request()->input('wd') }}">
                                        <span class="input-group-btn">
                                      <button class="btn btn-default" type="button">Go!</button>
                                    </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

@endsection
