<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="{{route('backend.biodata.index')}}" class="nav-link">Biodata Santri</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('backend.kegiatan.index')}}" class="nav-link">Kegiatan Santri</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('create.sms')}}" class="nav-link active text-muted">{{__('SMS')}}</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('create.email')}}" class="nav-link active text-muted">{{__('Email')}}</a>
                        </li>

                        @auth()
                            @can('view_users')
                                <li class="nav-item {{ Request::is('users*') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('users.index') }}">
                                        Users  
                                    </a>
                                </li>
                            @endcan
                            @can('view_posts')
                                <li class="nav-item {{ Request::is('posts*') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('posts.index') }}">
                                        Posts
                                    </a>
                                </li>
                            @endcan
                        @endauth
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            @can('view_roles')
                                <li class="nav-item {{ Request::is('roles*') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('roles.index') }}">
                                        Roles
                                    </a>
                                </li>
                            @endcan
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ auth()->user()->name }}
                                    <span class="badge badge-warning"></span>
                                    <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>