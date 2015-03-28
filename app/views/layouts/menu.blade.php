<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="ƒtainer">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>


            <a class="navbar-brand" href="{{ route('home') }}">WeCannes</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                @if(! Auth::check())
                    <li @if(Request::path() == 'accessrequests/create') class="active" @endif>{{ link_to_route('accessrequests.create', 'Demande d\'accès') }}</li>
                    <li @if(Request::path() === 'login') class="active" @endif>{{ link_to('/login', 'Login') }}</li>
                @elseif(Auth::user()->hasProfil('administrator'))
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            Gestion des utilisateurs <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li> {{link_to_route('accessrequests.index', 'Liste des demandes d\'accès')}}</li>
                            <li> {{link_to_route('participants.index', 'Liste des participants')}}</li>
                            <li> {{link_to_route('participants.create', 'Ajouter un nouvel participant')}}</li>
                        </ul>
                    </li>
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            Hébergement <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li> {{link_to_route('hebergements.create', 'Ajouter un hébergement')}}</li>
                            <li> {{link_to_route('chambres.create', 'Ajouter une chambre')}}</li>
                            <li> {{link_to_route('hebergements.index', 'Liste des hébergements')}}</li>
                            <li> {{link_to_route('chambres.index', 'Liste des chambres')}}</li>
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
                @elseif(Auth::user()->hasProfil('participant'))
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            Hébergement <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li> {{link_to_route('participants.reservations.create', 'Réserver un hébergement', Auth::user()->participant->id)}}</li>
                            <li> {{link_to_route('participants.reservations.index', 'Liste des réservations', Auth::user()->participant->id)}}</li>
                        </ul>
                    </li>
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            Projections <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li> {{link_to_route('participants.reservationProjections.create', 'Réserver des places', Auth::user()->participant->id)}}</li>
                            <li> {{link_to_route('participants.reservationProjections.index', 'Toutes mes réservations', Auth::user()->participant->id)}}</li>
                        </ul>
                    </li>
                    <li>{{ link_to('/logout', 'Logout') }}</li>
                @endif
            </ul>
            <a href="{{ route('home') }}" class="pull-right"><img src="http://cocorico.com/wp-content/uploads/2013/05/palme-d-or-Cannes_festival.jpg" style="height:51px"></a>

        </div><!--/.nav-collapse -->

    </div>
</nav>
