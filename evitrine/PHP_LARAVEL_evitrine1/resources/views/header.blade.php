<header class="section-header">
        <style>
        .card-footer {
            justify-content: center;
            align-items: center;
            padding: 0.9em;
        }
        .is-info {
            margin: 0.3em;
        }
        select, .is-info {
           margin: 0.3em;
        }
    </style>
    <section class="header-main">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="brand-wrap">
                        <a href="{{ url('/') }}">
                            <img class="logo" src="{{ asset('img/ballons_tl.png') }}" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <form action="#" class="search-wrap">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Chercher">
                            <div class="control">
                          <button class="button is-link">Chercher</button>
                        </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="widgets-wrap d-flex justify-content-end">
                        @guest
                            <div class="widget-header">
                                <a href="{{ route('login') }}" class="ml-3 icontext">
                                    <div class="control"><i class="fa fa-user"></i></div>
                                    <div class="button is-link"><span>Connexion</span></div>
                                </a>
                            </div>
                            <div  class="widget-header">
                                <a href="{{ route('register') }}" class="ml-3 icontext">
                                    <div class="control"><i class="fa fa-user"></i></div>
                                    <div class="button is-link"><span>S'inscrire</span></div>
                                </a>
                            </div>
                        @else
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->full_name }} <span class="caret"></span>
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
                            </ul>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('nav')
</header>