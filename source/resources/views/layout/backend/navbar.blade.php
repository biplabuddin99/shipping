<div class="topbar-menu">
    <div class="container-fluid">
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <li class="has-submenu">
                    <a href="{{route(Session::get('identity').'.dashboard')}}"><i class="mdi mdi-view-dashboard"></i>Dashboard</a>
                </li>
                <li class="has-submenu">
                    <a href="{{route(Session::get('identity').'.company.index')}}"><i class="mdi mdi-factory"></i>Company setting</a>
                </li>
                <li class="has-submenu">
                    <a href="{{route(Session::get('identity').'.headerLogo.index')}}"><i class="mdi mdi-factory"></i>headerLogo setting</a>
                </li>


                {{--<li class="has-submenu">
                    <a href="#">
                        <i class="mdi mdi-settings"></i>Setting <div class="arrow-down"></div></a>
                    <ul class="submenu">
                        <li class="has-submenu">
                            <a href="#">Home Page <div class="arrow-down"></div></a>
                            <ul class="submenu">
                                <li><a href="{{route(Session::get('identity').'.headerview.index')}}">Header</a></li>

                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#">Footer<div class="arrow-down"></div></a>
                            <ul class="submenu">
                                <li>
                                    <a href="{{route(Session::get('identity').'.homefootcol1.index')}}">Footer 1st column</a>
                                </li>
                                <li>
                                    <a href="{{route(Session::get('identity').'.homefootcol4.index')}}">Footer 4th column</a>
                                </li>
                                <li>
                                    <a href="{{route(Session::get('identity').'.homefootsocial.index')}}">Footer Social</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </li>--}}
            </ul>
            <!-- End navigation menu -->
            <div class="clearfix"></div>
        </div><!-- end #navigation -->
    </div><!-- end container -->
</div><!-- end navbar-custom -->
</header>
<!-- End Navigation Bar-->
