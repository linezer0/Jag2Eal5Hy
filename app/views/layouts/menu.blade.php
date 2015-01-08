<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="ƒtainer">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">WeCannes</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                @if(! Auth::check())
                    <li @if(Request::path() == '/') class="active" @endif>{{ link_to('/', 'Home') }}</li>
                    <li @if(Request::path() === 'users/create') class="active" @endif>{{ link_to('/users/create', 'Register') }}</li>
                    <li @if(Request::path() === 'login') class="active" @endif>{{ link_to('/login', 'Login') }}</li>
                @else
                    <li @if(Request::path() == '/admin') class="active" @endif>{{ link_to('profile', 'Home') }}</li>
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            Projections <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li> {{link_to('/', 'Nouvelle projection')}}</li>
                            <li> {{link_to('/', 'Toutes les projections')}}</li>
                        </ul>
                    </li>
                    <li>{{ link_to('/logout', 'Logout') }}</li>
                @endif
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Your profile</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>