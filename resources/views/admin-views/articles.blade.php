<h1 class="h1 header">
    Je suis la page article
</h1>

<div class="ui pointing secondary menu">
    <a class="item active" data-tab="first"><i class="blue file text icon"></i> Créer un nouvel article</a>
    <a class="item" data-tab="second"><i class="orange configure icon"></i> Gérer les articles</a>
    <a class="item" data-tab="third"><i class="grey help icon"></i> Autre onglet</a>
</div>

<div class="ui tab active" data-tab="first">
    <section class="ui grid">
        <form class="ui twelve wide column form">
            <div class="field">
                <label>Titre</label>
                <input id="article-title" type="text" name="title" placeholder="Titre">
            </div>
            <div class="field">
                <label>Contenu de l'article</label>
                <textarea id="article-content" name="content" id="content">Tapez votre texte ici...</textarea>
            </div>
        </form>
        <form class="ui four wide column form">
            <div class="field">
                <label>Choisir une image</label>
                <img class="ui fluid image" src="{{url('img/background-cms.jpg')}}">
                <button class="ui bottom attached fluid primary button">Choisir image</button>
            </div>
            <div class="field">
                <label>Actions</label>
                <div id="btn-save-article" class="ui animated green button" tabindex="0">
                    <div class="visible content">Sauvegarder</div>
                    <div class="hidden content">
                        <i class="cloud upload icon"></i>
                    </div>
                </div>
            </div>
        </form>
    </section>

</div>

<div class="ui tab" data-tab="second">
    <div class="ui divided items">
        @foreach($posts as $post)
            <div class="item">
                <div class="image">
                    <img src="{{ url('img/background-cms.jpg') }}">
                </div>
                <div class="content">
                    <a class="header">{{ $post->title }}</a>
                    <div class="meta">
                        <span class="date">{{ $post->created_at }}</span>
                        <div class="ui label">Catégorie 1</div>
                        <div class="ui label"><i class="globe icon"></i> Catégorie 2</div>
                    </div>
                    <div class="description">
                        <p>{!! $post->content !!}</p>
                    </div>
                    <div class="extra">
                        <div class="ui tiny buttons">
                            <a href="#" class="ui button"><i class="edit icon"></i> Éditer</a>
                            <a href="#" class="ui button">Voir <i class="right chevron icon"></i></a>
                        </div>
                        <div class="ui right floated red tiny button">
                            Supprimer
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<div class="ui tab" data-tab="third">
    Autre onglet
</div>