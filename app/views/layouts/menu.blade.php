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
                    <li @if(Request::path() == 'accessrequests/create') class="active" @endif>{{ link_to_route('accessrequests.create', 'Demande d\'accès') }}</li>
                    <li @if(Request::path() === 'login') class="active" @endif>{{ link_to('/login', 'Login') }}</li>
                @else
                    <li @if(Request::path() == '/admin') class="active" @endif>{{ link_to('profile', 'Home') }}</li>
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            Gestion des utilisateurs <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li> {{link_to_route('accessrequests.index', 'Liste des demandes d\'accès')}}</li>
                            <li> {{link_to_route('users.index', 'Liste des utilisateurs')}}</li>
                            <li> {{link_to_route('users.create', 'Ajouter un nouvel utilisateur')}}</li>
                        </ul>
                    </li>
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            Hébergement <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li> {{link_to_route('projections.create', 'Ajouter un hébergement')}}</li>
                            <li> {{link_to_route('projections.index', 'Nouvelle réservation')}}</li>
                            <li> {{link_to_route('projections.create', 'Liste des réservations')}}</li>
                        </ul>
                    </li>
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            Projections <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li> {{link_to_route('projections.create', 'Nouvelle projection')}}</li>
                            <li> {{link_to_route('projections.index', 'Toutes les projections')}}</li>
                        </ul>
                    </li>
                    <li>{{ link_to('/logout', 'Logout') }}</li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>