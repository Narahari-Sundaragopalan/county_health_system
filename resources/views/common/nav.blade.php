<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            {{--<a class="navbar-brand" href="{{ url('/') }}">Laravel</a>--}}
            <a class="navbar-brand" href="{{ url('/') }}">
                <div style="text-align: center;"><img src="/images/redcross.png"></div>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
        @if (Auth::check())
            <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}" style="color: whitesmoke">Home</a></li>
                    {{-- Menu for Users with Administration Role Only --}}
                    @role('admin')
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color: whitesmoke">
                            <i class="fa fa-btn fa-fw fa-cogs"></i>Administration<span class="caret"></span></a>
                        <ul class="dropdown-menu multi level" role="menu">
                            <li><a href="{{ url('/users') }}"><i class="fa fa-btn fa-fw fa-user"></i>Users</a></li>
                            <li><a href="{{ url('/roles') }}"><i class="fa fa-btn fa-fw fa-users"></i>Roles</a></li>
                            <li><a href="{{ url('/emergencies') }}"><i class="fa fa-btn fa-fw fa-medkit"></i>Emergencies</a></li>
                            <li><a href="{{ url('/patients') }}"><i class="fa fa-btn fa-fw fa-bed"></i>Patients</a></li>
                            <li><a href="{{ url('/importExport') }}"><i class="fa fa-btn fa-fw fa-file-text"></i>Reports</a></li>
                            <li><a href="{{ url('/generateBarChart') }}"><i class="fa fa-btn fa-fw fa-file-text"></i>Generate</a></li>
                            {{--<li class="divider"></li>--}}
                            {{--<li><a href="{{ url('/files') }}"><i class="fa fa-btn fa-fw fa-file"></i>Files</a></li>--}}
                        </ul>
                    </li>
                    @endrole

                    @role('nurse')
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color: whitesmoke">
                            <i class="fa fa-btn fa-fw fa-cogs"></i>Manage<span class="caret"></span></a>
                        <ul class="dropdown-menu multi level" role="menu">
                            <li><a href="{{ url('/emergencies') }}"><i class="fa fa-btn fa-fw fa-medkit"></i>Emergencies</a></li>
                            <li><a href="{{ url('/patients') }}"><i class="fa fa-btn fa-fw fa-bed"></i>Patients</a></li>
                            {{--<li class="divider"></li>--}}
                            {{--<li><a href="{{ url('/files') }}"><i class="fa fa-btn fa-fw fa-file"></i>Files</a></li>--}}
                        </ul>
                    </li>
                    @endrole

                    @role('coordinator')
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color: whitesmoke">
                            <i class="fa fa-btn fa-fw fa-cogs"></i>Manage<span class="caret"></span></a>
                        <ul class="dropdown-menu multi level" role="menu">
                            <li><a href="{{ url('/emergencies') }}"><i class="fa fa-btn fa-fw fa-medkit"></i>Emergencies</a></li>
                            <li><a href="{{ url('/patients') }}"><i class="fa fa-btn fa-fw fa-bed"></i>Patients</a></li>
                            {{--<li class="divider"></li>--}}
                            {{--<li><a href="{{ url('/files') }}"><i class="fa fa-btn fa-fw fa-file"></i>Files</a></li>--}}
                        </ul>
                    </li>
                    @endrole
                </ul>
        @endif

        <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    {{--<li><a href="{{ url('/login') }}"><i class="fa fa-btn fa-lg fa-fw fa-sign-in"></i>Login</a></li>--}}
                    <li><a href="{{ url('/login') }}">Login</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color: whitesmoke">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-fw fa-sign-out"></i>Logout</a></li>
                            <li><a href="{{ url('/password/changePassword') }}"><i class="fa fa-btn fa-fw fa-lock"></i>Change Password</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('/help') }}"><i class="fa fa-btn fa-fw fa-question-circle"></i>Help</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<style>

    .navbar-nav li:hover {
        background-color: darkgrey;
    }

    .dropdown a:hover {
        background-color: white;
    }

    .fa-user:hover {
        background-color: transparent;
    }
    .dropdown-menu {
        background-color: #e5e5e5;
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        display: none;
        float: left;
        min-width: 160px;
        padding: 5px 0;
        margin: 2px 0 0;
        font-size: 14px;
        text-align: left;
        list-style: none;
    }

    .navbar-static-top {
        background-color: #2e3436;
    }


</style>