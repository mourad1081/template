<main id="admin-page" class="ui grid">
    <div id="sidebar" class="ui two wide column vertical inverted sticky menu">
        <a href="https://github.com/mourad1081/template" class="ui fluid image background">
            <img src="{{ url('img/background-cms.jpg') }}">
            <h3 class="h3 header"><img src="{{ asset('img/icon.png') }}" alt="Icon Akh CMS"> Akh CMS v0.1</h3>
        </a>
        <div class="sidebar-menu">
            <a href="{{ url('admin/articles') }}" class="item"><i class="home icon"></i> Articles</a>
            <a href="{{ url('admin/users') }}" class="item"><i class="users icon"></i> Utilisateurs</a>
            <a href="{{ url('admin/stats') }}" class="item"><i class="area chart icon"></i> Statistiques</a>
            <a href="{{ url('admin/medias') }}" class="item"><i class="film icon"></i> Médias</a>
            <a href="{{ url('admin/settings') }}" class="item"><i class="settings icon"></i> Paramètres</a>
            <a href="{{ url('logout') }}" class="item"><i class="power icon"></i> Se déconnecter</a>
        </div>
    </div>
    <div class="ui fourteen wide column">
        <div class="ui basic segment">
            {!! $view !!}
        </div>
    </div>
</main>